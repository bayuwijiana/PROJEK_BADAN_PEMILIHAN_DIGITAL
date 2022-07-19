<?php

namespace App\Http\Controllers;

use App\datapenduduk;
use App\pemilihandigital;
use App\user;
use Illuminate\Http\Request;
use DB;
use auth;


class DatapendudukController extends Controller
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


        $penduduk=datapenduduk::all();
        $stat="belum ada";
        $dat=pemilihandigital::all();
        foreach($dat as $key){
            $stat=$key->status;
        }

        return view('penduduk.index', compact('penduduk','stat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        $des=['Mekar Sari','Sudagaran','Dawuhan','Kejawar','Wiradai'.'Karang Pucung'];
        $kec=['Banyumas','Sokaraja','Kalibagor','Patikraja','Kebasen','Baturaden'];
        return view('penduduk.create',compact('des','kec'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
       $validatedData=$req->validate([
            'nama'=>['min:2','max:20'],
            'nik'=>['min:16','max:16','unique:datapenduduks'],
        ]);
        $dat=$req->kec.",".$req->des.",Rt".$req->rt."/Rw".$req->rw;


        datapenduduk::create([
            'nik'=>$req->nik,
            'nama'=>$req->nama,
            'alamat'=>$dat,
            'jenis_kelamin'=>$req->jenis_kelamin,
            'status'=>$req->status
        ]);
        return redirect('/penduduk');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\datapenduduk  $datapenduduk
     * @return \Illuminate\Http\Response
     */
    public function show(datapenduduk $datapenduduk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\datapenduduk  $datapenduduk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


        $data=datapenduduk::find($id);
        $des=['Mekar Sari','Sudagaran','Dawuhan','Kejawar','Wiradai'.'Karang Pucung'];
        $kec=['Banyumas','Sokaraja','Kalibagor','Patikraja','Kebasen','Baturaden'];

        return view('penduduk.update', compact('data','des','kec'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\datapenduduk  $datapenduduk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req,$id)
    {
         $validatedData=$req->validate([
            'nama'=>['min:2','max:20'],
            'nik'=>['min:16','max:16'],
        ]);
        $dat=$req->kec.",".$req->des.",Rt".$req->rt."/Rw".$req->rw;

        datapenduduk::find($id)->update($req->all());

        return redirect('/penduduk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\datapenduduk  $datapenduduk
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $dat=datapenduduk::find($id);
        $nik="0";
        foreach($dat as $key){
            $nik=$dat->nik;
        }
        user::where('nik',$nik)->delete();
        $dat->delete();

        return redirect('/penduduk');
    }
}
