<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;
use App\user;
use App\kandidat;
use App\datapenduduk;
use auth;
use App\pemilihandigital;
use App\suarapemilihan;

class viewuser extends Controller
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

        return view('userpemilihan.index',compact('pemilihan','status','jum','a','role','jumpen','jumpel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $role=Auth::user()->role;

        $dt=pemilihandigital::all();
        $status="-";
        foreach($dt as $x){
            $status=$x->status;
        }
        $kandidat=kandidat::all();
        return view('userkandidat.index',compact('kandidat','status','role'));
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
}
