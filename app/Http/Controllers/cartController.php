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
        return view('order');
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
            $oldCart = Session::get('cart');
            $cart = new Cart($oldCart);
            $this->validate($request, [
                'cart' => 'nullable',
                'address' => 'required',
                'phone' => 'required',
                'payment_type' => 'required',
                'status' => 'nullable',
                'user_id' => 'nullable',
            ]);


            // foreach ($cart as $key => $value) {

            //         // $data = $value[$key]['qry'];
            //         dd($value[1]);

            // }
            // $user_id = Auth::user()->id;
            // Order::create([
            //     'cart' => serialize($cart),
            //     'address' => $request['address'],
            //     'phone' => $request['phone'],
            //     'payment_id' => $request['payment_type'],
            //     'status' => 0,
            //     'user_id' => Auth::user()->id,
            //     'totalPrice' => $cart->totalPrice,
            //     'totalOrder' => $cart->totalQty,
            // ]);
            $order = new Order();
            $order->cart = serialize($cart);
            $order->address = $request->input('address');
            $order->phone = $request->input('phone');
            $order->payment_id = $request['payment_type'];
            $order->status = 0;
            // $order->user_id = $user_id;
            Auth::user()->orders()->save($order);
            Session::forget('cart');
            return redirect('home')->with('add', 'การสั่งซื้อสำเร็จ');
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

        // dd($request->all());

            $type = $request->type;
            $itemId = $request->id;

            if ($type === 'herb') {
                $itemById = Herb::where('id',$itemId)->first();

            } elseif($type === 'docter') {
                // $itemByIdDocter = Docter::where('id',$itemId)->first();
                // Cart::add([
                //     'id'=>$itemId,
                //     'name'=>$itemByIdDocter->name,
                //     'price'=>$itemByIdDocter->price,
                //     'qry'=>$request->qry,
                //     'image'=>$itemById->image,
                //     'date'=>$request->date,
                //     'time'=>$request->time,
                //     'typeBooking'=>$request->typeBooking,
                // ]);
            } elseif($type === 'spa'){
                // $itemBySpaId = Spa::where('id',$itemId)->first();
                // Cart::add([
                //     'id'=>$itemId,
                //     'name'=>$itemBySpaId->name,
                //     'price'=>$itemBySpaId->price,
                //     'qry'=>$request->qry,
                //     'image'=>$itemBySpaId->image,
                //     'date'=>$request->date,
                //     'time'=>$request->time,
                //     'typeBooking'=>$request->typeBooking,
                // ]);
            }

            Cart::add([
                'id'=>$itemId,
                'name'=>$itemById->name,
                'price'=>$itemById->price,
                'qry'=>$request->qry,
                // 'image'=>$itemById->image,
            ]);


        // dd($request->session()->get('cart'));
        return redirect('/cart-show');
    }

    public function cartShow()
    {
        $product = Cart::content();

        return view('cart');
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
        return view('order', ['orders' => $orders]);
    }

    public function deleteItem($rowId)
    {
        // dd($rowId);
        $product = session::forget('cart', $rowId);
        // Cart::remove($id);
        // Cart::remove($rowId);
        return redirect()->back();
    }
}
