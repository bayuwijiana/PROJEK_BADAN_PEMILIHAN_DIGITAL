<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kandidat;
use App\suarapemilihan;
use App\pemilihandigital;
use App\user;
use Illuminate\Support\Facades\Auth;
use DB;


class pencoblosan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $role = Auth::user()->role;
        $stat = Auth::user()->status;


        $kandidat = kandidat::all();


        return view('pencoblosan.index', compact('kandidat', 'stat', 'role'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $jum = 0;
        $x = kandidat::all();
        foreach ($x as $key) {
            $jum = $jum + 1;
        }
        $pemilihan = pemilihandigital::all();

        $hasil = suarapemilihan::all();
        $a = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0];



        foreach ($hasil as $key) {

            for ($i = 1; $i <= $jum; $i++) {

                if ($key->no == $i) {
                    $a[$i]++;
                }
            }
        }



        return view('grafik.index', compact('pemilihan', 'jum', 'a'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nik = Auth::user()->nik;

        DB::table('users')->where('nik', $nik)->update([
            'status' => "sudah memilih",
        ]);

        suarapemilihan::create($request->all());


        return redirect()->route('pencoblosan.index');
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
}
