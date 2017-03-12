<?php

namespace App\Http\Controllers;

use App\Pengguna;
use App\User;
use Auth;
use Illuminate\Http\Request;

class PenggunasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penggunas = Pengguna::where('user_id',Auth::user()->id)->get();
        return view ('profile.profile', compact('penggunas'));
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
        $pengguna = Pengguna::findOrFail($id);
        return view('profile.edit', compact('pengguna'));
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
        // dd(User::first());
        $user = User::findOrFail($id);
        $pengguna = Pengguna::where('user_id', $id)->first();

          $user->no_matrik = $request->no_matrik;
          $user->username = $request->username;
          $user->email = $request->email;


          $pengguna->nama = $request->nama;
          $pengguna->telefon = $request->telefon;
          $pengguna->fakulti = $request->fakulti;
          $pengguna->persatuan = $request->persatuan;
          $pengguna->gambar = $request->gambar;

          $user->save();
          $pengguna->save();
                  
        return redirect()->action('PenggunasController@index')->withMessage('Profil anda telah berjaya dikemaskini!');

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
