<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('index');

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
    public function update(Request $request, $id)
    {
        //
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

    public function soal_1()
    {

        return view('soal_1');

    }

    public function soal_3()
    {

        return view('soal_3');

    }

    public function jawab_1(Request $request)
    {

        $alfa = array($request->soal);



        return substr_count("", $request->soal);

        dd($alfa);

        return view('jawab_1');

    }

    public function jawab_3(Request $request)
    {

        // $hari = Carbon($request->tanggal);
        $hasil = $request->barang * $request->qty;

        if ($request->barang == 99900) {
            if ($request->qty >= 50) {
                $disc = $hasil * 5 / 100;
                $total = $hasil - $disc;
            }else{
                $total = $hasil;
            }
        }else{
            if ($request->qty >= 100) {
                $disc = $hasil * 10 / 100;
                $total = $hasil - $disc;
            }else{
                $total = $hasil;
            }
        }

        return $total;

    }

}
