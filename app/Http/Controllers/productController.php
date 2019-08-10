<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Docter;
use App\Herb;
use App\Product;
use App\Spa;

class productController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $product = DB::table('product')
        ->orderBy('product.id', 'asc')
        ->paginate(12);

        return view('product',compact('product'));

    }

    public function show($id)
    {
        $product = DB::table('product')
        ->where('product.id', $id)->first();
           $detail =  explode(",",$product->detail);
        $img = DB::table('product')
            ->select('image')
            ->where('product.id', $id)->first();
            if ($img !== "") {
                foreach ($img as $fileString) {
                    $productImgArray = explode('|', $fileString);
                }
            }
        return view('detail-product' ,compact('product','detail','productImgArray'));
    }

    public function search($type, $name)
    {
        // dd($name);
        if ($type === 'type') {
            if ($name === 'all') {
                $product = DB::table('product')->paginate(12);
            } else {
                $product = DB::table('product')
                ->where('product.type', 'like','%'.$name.'%')->paginate(12);
            }
        }
        return view('product', compact('product'));
    }
}
