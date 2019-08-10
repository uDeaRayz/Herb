<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Cart;
use Cart;
use DB;
use App\Docter;
use Session;
use Auth;
use App\Herb;
use App\Product;
use App\Spa;
use App\Order;
use function Opis\Closure\serialize;
// use Illuminate\Support\Facades\Auth;

class cartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('payment');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if (!Auth::user()) {
            return redirect('login');
        } else {
            $product = Cart::getContent();
            $this->validate($request, [
                'cart' => 'nullable',
                'address' => 'required',
                'name' => 'required',
                'phone' => 'required',
                'payment_type' => 'required',
                'status' => 'nullable',
                'user_id' => 'nullable',
            ]);
            $order = new Order();
            $order->cart = serialize($product);
            $order->address = $request->input('address');
            $order->phone = $request->input('phone');
            $order->name = $request->input('name');
            $order->payment_id = $request['payment_type'];
            $order->status = 0;
            Auth::user()->orders()->save($order);
            Cart::clear();
            return view('thank');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'image' => 'required',
            // 'status' => 'required',
        ]);

        $path = $request->file('image')->store('public/image');
        $sub = str_replace("public", "storage", $path);

        DB::table('order')
            ->where('order.id', $request->post_id)
            ->update([
                'image' => $sub,
                'status' => 1,
            ]);

        // dd($request->post_id,$request->file('image'));

        $orders = Auth::user()->orders;
        $orders->transform(function ($order, $key) {
            $order->cart = unserialize($order->cart);
            return $order;
        });


        return view('order', ['orders' => $orders])->with('update', 'แจ้งชำระเงินสำเร็จ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getAddToCart(Request $request)
    {
        // if ($type === 'herb') {
        //     $product = DB::table('herbs')->select('id', 'name', 'price', 'image')
        //         ->where('herbs.id', '=', $id)->first();
        // } elseif ($type === 'docter') {
        //     $product = DB::table('docter')->select('id', 'name', 'price', 'image')
        //         ->where('docter.id', '=', $id)->first();
        // } elseif ($type === 'spa') {
        //     $product = DB::table('spa')->select('id', 'name', 'price', 'image')
        //         ->where('spa.id', '=', $id)->first();
        // }
        // $oldCart = Session::has('cart') ? $request->session()->get('cart') : null;
        // // dump("oldCart", $oldCart);
        // $cart = new Cart($oldCart);
        // // dump("cart", $cart);
        // $cart->add($product, $product->id);
        // // dump("cart add", $cart->add($product, $product->id));
        // $request->session()->put('cart', $cart);
        // // dump("cart req", $request->session()->put('cart', $cart));
        // // $herb = Herb::find($id);

        // dump($request->all());

        $type = $request->type;
        $itemId = $request->id;

        if ($type === 'herb') {
            // dd("jjj");
            $itemById = Herb::where('id', $itemId)->first();
            Cart::add([
                'id' => $itemId,
                'name' => $itemById->name,
                'price' => $itemById->price,
                'quantity' => $request->qry,
                'attributes' => array( // attributes field is optional
                    'image' => $itemById->image,
                    'date' => '',
                    'time' => '',
                    'typeBooking' => ''
                )
            ]);
        } elseif ($type === 'docter') {
            // dd("jj");
            $itemByIdDocter = Docter::where('id', $itemId)->first();
            Cart::add([
                'id' => $itemId,
                'name' => $itemByIdDocter->name,
                'price' => $itemByIdDocter->price,
                'quantity' => $request->qry,
                'attributes' => array( // attributes field is optional
                    'image' => $itemByIdDocter->image,
                    'date' => $request->date,
                    'time' => $request->time,
                    'typeBooking' => $request->typeBook
                )
            ]);
        } elseif ($type === 'spa') {
            // dd("j");
            $itemBySpaId = Spa::where('id', $itemId)->first();
            Cart::add([
                'id' => $itemId,
                'name' => $itemBySpaId->name,
                'price' => $itemBySpaId->price,
                'quantity' => $request->qry,
                'attributes' => array( // attributes field is optional
                    'image' => $itemBySpaId->image,
                    'date' => $request->date,
                    'time' => $request->time,
                    'typeBooking' => $request->typeBook
                )
            ]);
        } elseif ($type === 'product') {
            // dd("j");
            $itemByProductId = Product::where('id', $itemId)->first();
            Cart::add([
                'id' => $itemId,
                'name' => $itemByProductId->name,
                'price' => $itemByProductId->price,
                'quantity' => $request->qry,
                'attributes' => array( // attributes field is optional
                    'image' => $itemByProductId->image,
                    'date' => $request->date,
                    'time' => $request->time,
                    'typeBooking' => $request->typeBook
                )
            ]);
        }

        return redirect('/cart-show');
    }

    public function cartShow()
    {
        $product = Cart::getContent();
        // dd($product);
        // foreach ($product as $item) {
        //     $item->id; // the Id of the item
        //     $item->name; // the name
        //     $item->price; // the single price without conditions applied
        //     $item->quantity; // the quantity
        //     $item->attributes; // the attributes
        //     dump($item->attributes['image']);
        // }
        // foreach($product as $condition)
        // {
        // foreach($condition->attributesas as $item)
        // {

        //     dd($item); // the attributes of the condition, returns an empty [] if no attributes added
        // }

        // dd($product["attributes"]["items"]["image"]); // the attributes of the condition, returns an empty [] if no attributes added
        // }



        return view('payment', ['product' => $product]);
    }
    public function getCart()
    {
        if (!Session::has('cart')) {
            return view('payment');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        // dd($cart->items);
        return view('payment', ['herb' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function getProfileOrder()
    {
        $orders = Auth::user()->orders;
        $orders->transform(function ($order, $key) {
            $order->cart = unserialize($order->cart);
            return $order;
        });
        // dd($orders);
        return view('order', ['orders' => $orders]);
    }

    public function deleteItem($id)
    {
        // dd($rowId);
        $product = session::forget('cart', $id);
        // Cart::remove($id);
        Cart::remove($id);
        return redirect()->back()->with('msg', "ลบรายสำเร็จ!");
    }
    public function deleteCart()
    {
        // // dd($rowId);
        // $product = session::forget('cart', $id);
        // // Cart::remove($id);
        Cart::clear();
        return redirect()->back()->with('msg', "ลบรายสำเร็จ!");
    }
}
