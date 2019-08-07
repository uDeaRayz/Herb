<?php

namespace App\Http\Controllers;

use App\docter;
use DB;
use Illuminate\Http\Request;

class docterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $docter = DB::table('docter')
            ->orderBy('docter.id', 'asc')
            ->paginate(12);
        return view('docter', compact('docter'));
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
     * @param  \App\docter  $docter
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $docter = DB::table('docter')
            ->where('docter.id', $id)->first();
        $img = DB::table('docter')
            ->select('image')
            ->where('docter.id', $id)->first();
            if ($img !== "") {
                foreach ($img as $fileString) {
                    $docterImgArray = explode('|', $fileString);
                }
            }
        return view('detail-docter', compact('docter','docterImgArray'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\docter  $docter
     * @return \Illuminate\Http\Response
     */
    public function edit(docter $docter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\docter  $docter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, docter $docter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\docter  $docter
     * @return \Illuminate\Http\Response
     */
    public function destroy(docter $docter)
    {
        //
    }

    public function search($type, $name)
    {
        if ($type === 'province') {
            if ($name === 'all') {
                $docter = DB::table('docter')->paginate(12);
            } else {
                $docter = DB::table('docter')
                ->where('docter.province', 'like','%'.$name.'%')->paginate(12);
            }
        } else if ($type === 'disease') {
            if ($name === 'all') {
                $docter = DB::table('docter')->paginate(12);
            } else {
                $docter = DB::table('docter')
                ->where('docter.disease', 'like','%'.$name.'%')->paginate(12);
            }
        }
        return view('docter', compact('docter'));
    }
}
