<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\datapenduduk;
use App\pemilihandigital;
use App\User;
use App\Mail\vermail;
use Illuminate\Support\Facades\Mail;
use DB;

class regis extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo "<script>
                alert('verivikasi salah');
            </script>";
        return view('auth.register');
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

    public function store(Request $req)
    {

        $validatedDate = $req->validate([
            'nik' => ['required', 'string', 'min:16', 'max:16', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:5', 'confirmed'],
        ]);

        $nik = $req->nik;
        if ($this->cek($nik) == 1) {
            return view('auth.register');
        } else {
            $this->up($nik);
            $this->crt($req, $nik);

            $status = "belum ada";
            $tema = "-";
            $judul = "-";
            $dat = pemilihandigital::all();
            foreach ($dat as $key) {
                $status = $key->status;
                $tema = $key->tema;
                $judul = $key->judul;
            }

            return view('user.index', compact('judul', 'tema', 'status', 'nik'));

            // $ran=rand (1000,9999);
            // $kode=$ran;
            // $email=$req->email;
            // $password=$req->password;

            // $detail=[
            // 'email'=>$req->email,
            // 'kode'=>$ran,
            // 'nik'=>$nik,
            // ];


            // Mail::to($req->email)->send(new vermail($detail));

            // echo "<script>
            //         alert('kode verivikasi telah dikirimkan');
            //     </script>";

        }
        // return view('verivikasi.index',compact('kode','nik','email','password'));
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

    public function update(Request $req, $nik)
    {
        $k1 = $req->kode_ver;
        $k2 = $req->kode_input;

        $nik = $nik;


        if ($k1 == $k2) {

            $this->up($nik);
            $this->crt($req, $nik);

            $status = "belum ada";
            $tema = "-";
            $judul = "-";
            $dat = pemilihandigital::all();
            foreach ($dat as $key) {
                $status = $key->status;
                $tema = $key->tema;
                $judul = $key->judul;
            }

            return view('user.index', compact('judul', 'tema', 'status', 'nik'));
        } else {

            return redirect()->route('regist.index');
        }
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

    public function cek($nik)
    {
        $cek = DB::table('datapenduduks')->where('nik', $nik)->get();
        $z = "x";

        foreach ($cek as $c) {
            $z = $c->nama;
        }

        if ($z === "x") {
            echo "<script>
                        alert('bukan warga banyumas');
                    </script>";
            return 1;
        }

        return 0;
    }

    public function up($nik)
    {
        DB::table('datapenduduks')->where('nik', $nik)->update([
            'status' => "sudah mendaftar"
        ]);
    }

    public function crt($req, $nik)
    {

        $pas = password_hash($req->password, PASSWORD_DEFAULT);

        User::create([
            'nik' => $nik,
            'email' => $req->email,
            'password' => $pas,
            'role' => "User",
            'status' => "belum memilih"
        ]);
    }
}
