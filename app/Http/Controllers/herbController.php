<?php

namespace App\Http\Controllers;

use App\herb;
use Illuminate\Http\Request;
use DB;

class herbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $herb = DB::table('herbs')
        ->orderBy('herbs.id', 'asc')
        ->paginate(12);

        return view('herb',compact('herb'));
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
     * @param  \App\herb  $herb
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $herb = DB::table('herbs')
        ->where('herbs.id', $id)->first();
        $img = DB::table('herbs')
            ->select('image')
            ->where('herbs.id', $id)->first();
            if ($img !== "") {
                foreach ($img as $fileString) {
                    $herbsImgArray = explode('|', $fileString);
                }
            }
        return view('detail-herb' ,compact('herb','herbsImgArray'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\herb  $herb
     * @return \Illuminate\Http\Response
     */
    public function edit(herb $herb)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\herb  $herb
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, herb $herb)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\herb  $herb
     * @return \Illuminate\Http\Response
     */
    public function destroy(herb $herb)
    {
        //
    }
}
