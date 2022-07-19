<?php

namespace App\Http\Controllers;

use App\pemilihandigital;
use App\suarapemilihan;
use Illuminate\Http\Request;
use DB;
use App\user;
use App\kandidat;
use App\datapenduduk;


use auth;

class PemilihandigitalController extends Controller
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

        $hasil=0;
        $jum=0;
        $a=[0,0,0,0,0,0,0,0,0,0,0];
        $status="belum ada";
        $pemilihan=pemilihandigital::all();
        foreach($pemilihan as $dt){
            $status=$dt->status;
        }
        if($status=="sudah dihitung"){

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
            return view('pemilihan.create');



    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function mulai(){

        DB::table('pemilihandigitals')->update([
            'status'=>"sedang berlangsung"
        ]);
        return redirect("/pemilihan");
    }

    public function store(Request $req)
    {
            $validatedData=$req->validate([
            'judul'=>['min:8','max:30'],
            'tema'=>['min:5','max:30'],
        ]);

        $judul=$req->judul;
        $tema=$req->tema;
        $cek="belum ada data";
    return view('kandidat.create',compact('judul','tema','cek'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pemilihandigital  $pemilihandigital
     * @return \Illuminate\Http\Response
     */
    public function show(pemilihandigital $pemilihandigital)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pemilihandigital  $pemilihandigital
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $pemilihan=pemilihandigital::find($id);

        return view('pemilihan.update',compact('pemilihan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pemilihandigital  $pemilihandigital
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        pemilihandigital::find($id)->update($request->all());
        return redirect("/pemilihan");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pemilihandigital  $pemilihandigital
     * @return \Illuminate\Http\Response
     */
    public function destroy(pemilihandigital $pemilihandigital)
    {
        //
    }
}
