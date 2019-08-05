<?php

namespace App\Http\Controllers;

use App\spa;
use DB;
use Illuminate\Http\Request;

class spaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $spa = DB::table('spa')
        ->orderBy('spa.id', 'asc')
        ->paginate(15);
        return view('spa',compact('spa'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\spa  $spa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $spa = DB::table('spa')
        ->where('spa.id', $id)->first();
        return view('detail-spa' ,compact('spa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\spa  $spa
     * @return \Illuminate\Http\Response
     */
    public function edit(spa $spa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\spa  $spa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, spa $spa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\spa  $spa
     * @return \Illuminate\Http\Response
     */
    public function destroy(spa $spa)
    {
        //
    }

    public function search($type, $name)
    {
        if ($type === 'district') {
            if ($name === 'all') {
                $spa = DB::table('spa')->paginate(15);
            } else {
                $spa = DB::table('spa')
                ->where('spa.province', 'like','%'.$name.'%')->paginate(15);
            }
        } else if ($type === 'store') {
            if ($name === 'all') {
                $spa = DB::table('spa')->paginate(15);
            } else {
                $spa = DB::table('spa')
                ->where('spa.disease', 'like','%'.$name.'%')->paginate(15);
            }
        }
        return view('spa', compact('spa'));
    }
}
