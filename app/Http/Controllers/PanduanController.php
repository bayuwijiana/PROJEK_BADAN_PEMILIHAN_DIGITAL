<?php

namespace App\Http\Controllers;

use App\panduan;
use auth;
use Illuminate\Http\Request;

class PanduanController extends Controller
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
        $panduan=panduan::all();

        return view('panduan.index',compact('panduan','role'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('panduan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData=$request->validate([
            'judul'=>['min:2','max:20'],
            'visi'=>['min:5','max:100'],
        ]);

        panduan::create($request->all());
        return redirect('/panduan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\panduan  $panduan
     * @return \Illuminate\Http\Response
     */
    public function show(panduan $panduan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\panduan  $panduan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $panduan=panduan::find($id);
        return view('panduan.update', compact('panduan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\panduan  $panduan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        panduan::find($id)->update($request->all());
        return redirect('/panduan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\panduan  $panduan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        panduan::find($id)->delete();
        return redirect('/panduan');
    }
}
