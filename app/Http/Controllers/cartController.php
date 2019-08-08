<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
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
        return view('cart');
    }
    // public function index()
    // {
    //     return view('order');
    // }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {

    //     if(!Auth::user()) {
    //         return redirect('login');
    //     } else {
    //         $oldCart = Session::get('cart');
    //         $cart = new Cart($oldCart);
    //         $this->validate($request, [
    //             'cart' => 'nullable',
    //             'address' => 'required',
    //             'phone' => 'required',
    //             'payment_type' => 'required',
    //             'status' => 'nullable',
    //             'user_id' => 'nullable',
    //         ]);


    //     // foreach ($cart as $key => $value) {

    //     //         // $data = $value[$key]['qry'];
    //     //         dd($value[1]);

    //     // }
    //         // $user_id = Auth::user()->id;
    //         // Order::create([
    //         //     'cart' => serialize($cart),
    //         //     'address' => $request['address'],
    //         //     'phone' => $request['phone'],
    //         //     'payment_id' => $request['payment_type'],
    //         //     'status' => 0,
    //         //     'user_id' => Auth::user()->id,
    //         //     'totalPrice' => $cart->totalPrice,
    //         //     'totalOrder' => $cart->totalQty,
    //         // ]);
    //         $order = new Order();
    //         $order->cart = serialize($cart);
    //         $order->address = $request->input('address');
    //         $order->phone = $request->input('phone');
    //         $order->payment_id = $request['payment_type'];
    //         $order->status = 0;
    //         // $order->user_id = $user_id;
    //         Auth::user()->orders()->save($order);
    //         Session::forget('cart');
    //         return redirect('home')->with('add', 'การสั่งซื้อสำเร็จ');
    //     }
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show($id)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit($id)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request)
    // {
    //     $this->validate($request, [
    //         'image' => 'required',
    //         // 'status' => 'required',
    //     ]);

    //     $path = $request->file('image')->store('public/image');
    //         $sub = str_replace("public","storage" , $path);

    //     DB::table('order')
    //         ->where('order.id', $request->post_id)
    //         ->update([
    //             'image' => $sub,
    //             'status' => 1,
    //     ]);

    //     // dd($request->post_id,$request->file('image'));

    //     $orders = Auth::user()->orders;
    //     $orders->transform(function($order, $key){
    //         $order->cart = unserialize($order->cart);
    //         return $order;
    //     });


    //     return view('order', ['orders' => $orders])->with('update', 'แจ้งชำระเงินสำเร็จ');
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //     //
    // }

    // public function getAddToCart(Request $request, $id)
    // {
    //     // $herb = Herb::find($id);
    //     $herb = DB::table('herbs')->select('id','name', 'price','image')
    //     ->where('herbs.id','=', $id)->first();

    //     $oldCart = Session::has('cart') ? $request->session()->get('cart') : null;
    //     $cart = new Cart($oldCart);
    //     $cart->add($herb, $herb->id);

    //     $request->session()->put('cart', $cart);
    //     // dd($request->session()->get('cart'));
    //     return redirect()->route('herb');
    // }

    // public function getCart()
    // {
    //     if (!Session::has('cart')) {
    //         return view('payment');
    //     }
    //     $oldCart = Session::get('cart');
    //     $cart = new Cart($oldCart);
    //     // dd($cart->items);
    //     return view('payment', ['herb' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    // }

    // public function getProfileOrder() {
    //     $orders = Auth::user()->orders;
    //     $orders->transform(function($order, $key){
    //         $order->cart = unserialize($order->cart);
    //         return $order;
    //     });
    //     return view('order', ['orders' => $orders]);
    // }
}
