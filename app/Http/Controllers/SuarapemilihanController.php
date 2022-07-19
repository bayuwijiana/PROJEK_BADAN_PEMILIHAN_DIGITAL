<?php

namespace App\Http\Controllers;

use App\suarapemilihan;
use App\pemilihandigital;
use App\kandidat;
use App\user;
use App\datapenduduk;
use auth;


use DB;
use Illuminate\Http\Request;

class SuarapemilihanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth');
    }
    public function index()
    {
        $role=Auth::user()->role;
        $jum=0;
            $x = kandidat::all();
            foreach($x as $key ){
                $jum=$jum+1;
            }

            $hasil=suarapemilihan::all();
            $a=[0,0,0,0,0,0,0,0,0,0];

            foreach($hasil as $key ){

                for ($i = 1; $i <= $jum; $i++){

                    if ($key->no == $i){
                        $a[$i]++;
                    }
                }
            }

        DB::table('pemilihandigitals')->update([
            'status'=>"sudah dihitung"
        ]);

        $status="belum ada";
        $pemilihan=pemilihandigital::all();
        foreach($pemilihan as $dt){
            $status=$dt->status;
        }

        $jumpen=datapenduduk::all()->count();
        $jumpel=User::where('status',"sudah memilih")->count();



        return view('pemilihan.index',compact('pemilihan','status','jum','a','role','jumpen','jumpel'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        DB::table('suarapemilihans')->delete();
        DB::table('kandidats')->delete();
        DB::table('pemilihandigitals')->delete();
        DB::table('users')->where('role',"User")->delete();

        return redirect('/admin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function cetak()
    {
        $role=Auth::user()->role;
        $jum=0;
            $x = kandidat::all();
            foreach($x as $key ){
                $jum=$jum+1;
            }

            $hasil=suarapemilihan::all();
            $a=[0,0,0,0,0,0,0,0,0,0];

            foreach($hasil as $key ){

                for ($i = 1; $i <= $jum; $i++){

                    if ($key->no == $i){
                        $a[$i]++;
                    }
                }
            }

        DB::table('pemilihandigitals')->update([
            'status'=>"sudah dihitung"
        ]);

        $status="belum ada";
        $pemilihan=pemilihandigital::all();
        foreach($pemilihan as $dt){
            $status=$dt->status;
        }
        $jumpen=datapenduduk::all()->count();
        $jumpel=User::where('status',"sudah memilih")->count();



        return view('cetak.index',compact('pemilihan','status','jum','a','role','jumpen','jumpel'));

    }
    public function store()
    {
     //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\suarapemilihan  $suarapemilihan
     * @return \Illuminate\Http\Response
     */
    public function show(suarapemilihan $suarapemilihan)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\suarapemilihan  $suarapemilihan
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $req,$stat)
    {



        $stat=$req->stat;
        $cari=$req->cari;

        $penduduk = DB::table('datapenduduks')->where('nama','LIKE','%'.$cari.'%')
                      ->get();

        return view('penduduk.index', compact('penduduk','stat'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\suarapemilihan  $suarapemilihan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, suarapemilihan $suarapemilihan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\suarapemilihan  $suarapemilihan
     * @return \Illuminate\Http\Response
     */
    public function destroy(suarapemilihan $suarapemilihan)
    {
        //
    }
}
