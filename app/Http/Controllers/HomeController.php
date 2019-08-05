<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Docter;
use App\Herb;
use App\Spa;

class HomeController extends Controller
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
        $docter = Docter::all();
        $herb = Herb::all();
        $spa = Spa::all();
//         dd($docter);
//         var_dump($docter);
// die();
        return view('welcome',compact('docter','herb','spa'));

    }
}
