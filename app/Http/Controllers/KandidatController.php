<?php

namespace App\Http\Controllers;

use App\kandidat;
use App\pemilihandigital;
use Illuminate\Http\Request;
use DB;
use auth;

class KandidatController extends Controller
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

        $dt=pemilihandigital::all();
        $status="-";
        foreach($dt as $x){
            $status=$x->status;
        }
        $kandidat=kandidat::all();
        return view('kandidat.index',compact('kandidat','status','role'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $dt=pemilihandigital::all();
        foreach($dt as $x){
            $judul=$x->judul;
            $tema=$x->tema;
            $status=$x->status;
        }
        $cek="sudah ada data";

    return view('kandidat.create',compact('judul','tema','cek'));
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
            'visi'=>['min:5','max:50'],
            'misi'=>['min:10','max:100'],
        ]);


        kandidat::create($req->all());

        if($req->cek=="belum ada data"){
            
            pemilihandigital::create([
                'judul'=>$req->judul,
                'tema'=>$req->tema,
                'status'=>"belum dimulai"
            ]);
        }

        return redirect()->route('kandidat.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\kandidat  $kandidat
     * @return \Illuminate\Http\Response
     */
    public function show(kandidat $kandidat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\kandidat  $kandidat
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


        $dt=pemilihandigital::all();
        $data=kandidat::find($id);
        foreach($dt as $x){
            $judul=$x->judul;
            $tema=$x->tema;
            $status=$x->status;
        }
        $cek="sudah ada data";
    return view('kandidat.update',compact('judul','tema','cek','data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\kandidat  $kandidat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData=$request->validate([
            'nama'=>['min:2','max:20'],
            'visi'=>['min:5','max:50'],
            'misi'=>['min:10','max:100'],
        ]);

        kandidat::find($id)->update($request->all());
        return redirect('/kandidat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\kandidat  $kandidat
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        kandidat::find($id)->delete();
        return redirect('/kandidat');
    }
}
