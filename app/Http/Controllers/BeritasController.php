<?php

namespace App\Http\Controllers;

use App\Berita;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BeritasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beritas = Berita::with('user')->paginate(5);
        return view('berita.index', compact('beritas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('berita.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate ($request, ['tajuk' => 'required']);
        $this->validate ($request, ['huraian' => 'required']);
        $this->validate ($request, ['lokasi' => 'required']);
        $this->validate ($request, ['kumpulan_sasaran' => 'required']);

        $berita = new Berita;
        $berita->tajuk = $request->tajuk;
        $berita->huraian = $request->huraian;
        //$new->gambar = $request->gambar;
        $berita->lokasi = $request->lokasi;
        $berita->kumpulan_sasaran = $request->kumpulan_sasaran;
        $berita->user_id = Auth::user()->id;
        $berita->save();

        return redirect()->action('BeritasController@store')->withMessage('News has been successfully added');

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
        $berita = Berita::findOrFail($id);
        return view('berita.edit', compact('berita'));
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
        $this->validate ($request, ['tajuk' => 'required']);
        $this->validate ($request, ['huraian' => 'required']);
        $this->validate ($request, ['lokasi' => 'required']);
        $this->validate ($request, ['kumpulan_sasaran' => 'required']);

        $berita = Berita::findOrFail($id);
        $berita->tajuk = $request->tajuk;
        $berita->huraian = $request->huraian;
        //$berita->gambar = $request->gambar;
        $berita->lokasi = $request->lokasi;
        $berita->kumpulan_sasaran = $request->kumpulan_sasaran;
        $berita->save();

        return redirect()->action('BeritasController@index')->withMessage('News has been successfully updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);
        $berita->delete();
        return back()->withError('News has been successfully deleted');

    }
}
