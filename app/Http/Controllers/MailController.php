<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MailSend;
use App\user;
use App\pemilihandigital;

use auth;
use Illuminate\Support\Facades\Mail;



class MailController extends Controller
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
        return view('email.index',compact('role'));
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

    public function kirim ( Request $request){

        $validatedData=$request->validate([
            'isi'=>['min:2','max:100'],
        ]);

        $detail=[
            'isi'=>$request->isi
        ];

        Mail::to($request->email)->send(new MailSend($detail));

        echo "<script>
                alert('email telah dikirimkan');
             </script>"; 


        $status="belum ada";
         $tema="-";
         $judul="-";
         $dat=pemilihandigital::all();
         foreach($dat as $key){
            $status=$key->status;
            $tema=$key->tema;
            $judul=$key->judul;
         }

         $nik=Auth::user()->nik;
         $role=Auth::user()->role;
         if($role=="Admin"){
            return view('admin.index',compact('status'));
         }

         return view('user.index',compact('judul','tema','status','nik'));
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
