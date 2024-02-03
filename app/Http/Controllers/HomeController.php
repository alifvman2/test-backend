<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

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

    public function soal_2()
    {

        $array = [9, 3, 7, 8, 2, 6, 1, 4, 10, 2, 2, 3];

        // Jumlah elemen dalam array
        $length = count($array);

        // Implementasi pengurutan menggunakan Bubble Sort
        for ($i = 0; $i < $length - 1; $i++) {
            for ($j = 0; $j < $length - $i - 1; $j++) {
                // Jika elemen saat ini lebih besar dari elemen berikutnya, tukar
                if ($array[$j] > $array[$j + 1]) {
                    $temp = $array[$j];
                    $array[$j] = $array[$j + 1];
                    $array[$j + 1] = $temp;
                }
            }
        }

        return view('hasil_2')->with([
            'data'  => $array,
        ]);

    }

    public function soal_3()
    {

        return view('soal_3');

    }

    public function jawab_1(Request $request)
    {

        $inputString = $request->soal; // Ganti 'input_string' sesuai dengan nama input yang digunakan di form

        // Panggil fungsi untuk menghasilkan output
        $outputString = $this->generateOutput($inputString);

        // Tampilkan output atau lakukan sesuai kebutuhan aplikasi Anda

        return view('hasil_1')->with([
            'data' =>  $outputString,
        ]);

    }

    private function generateOutput($inputString)
    {

        $hasil = '';
        $charArray = str_split($inputString);

        // Menghapus karakter yang duplikat
        $uniqueChars = array_unique($charArray);
        
        // Menggabungkan array karakter unik kembali menjadi string
        $outputString = implode('', $uniqueChars);

        $arrayPerKarakter = str_split($outputString);

        $charCounts = count_chars($inputString, 1);

        // Menampilkan hasil
        foreach ($arrayPerKarakter as $char) {
            $count = isset($charCounts[ord($char)]) ? $charCounts[ord($char)] : 0;
            if ($count == 1) {
                $count = "";
            };
            $hasil .= "$char"."$count";
        }

        return $hasil;

    }

    public function jawab_3(Request $request)
    {

        $carbonDate = Carbon::parse($request->tanggal);

        $dayOfWeek = $carbonDate->format('l');

        $hasil = $request->barang * $request->qty;

        $discon = '';

        if ($request->barang == 99900) {
            if ($request->qty >= 50) {
                $discon = '5%';
                $disc = $hasil * 5 / 100;
                $total = $hasil - $disc;
                if ($dayOfWeek == 'Monday' || 'Thursday') {
                    $discon = '5% + 10%';
                    $daydisc = $total * 10 / 100;;
                    $total = $total - $daydisc;
                }
            }else{
                $total = $hasil;
            }
        }else{
            if ($request->qty >= 100) {
                $disc = $hasil * 10 / 100;
                $total = $hasil - $disc;
                $discon = '10%';
                if ($dayOfWeek == 'Friday') {
                    $discon = '10% + 5%';
                    $daydisc = $total * 5 / 100;;
                    $total = $total - $daydisc;
                }
            }else{
                $total = $hasil;
            }
        }

        return view('hasil_3')->with([
            'data'  => $total,
            'harga' => $request->barang,
            'hari'  => $dayOfWeek,
            'total' => $hasil,
            'qty'   => $request->qty,
            'discon'=> $discon,
        ]);

    }

}
