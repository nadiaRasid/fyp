<?php

namespace App\Http\Controllers;

use App\Event;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::with('user')->paginate(10);
        return view('event.index', compact('events'));
    }

    public function papar()
    {
        $events = Event::with('user')->paginate(10);
        return view('event.papar', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('event.create');
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
        $this->validate ($request, ['tarikh' => 'required']);
        $this->validate ($request, ['masa' => 'required']);
        $this->validate ($request, ['lokasi' => 'required']);
        $this->validate ($request, ['tempoh' => 'required']);
        $this->validate ($request, ['kumpulan_sasaran' => 'required']);
        $this->validate ($request, ['max_peserta' => 'required']);
        // $this->validate ($request, ['penganjur' => 'required']);
        $this->validate ($request, ['telephone' => 'required']);

        $event = new Event;
        //$event->jenis_berita = $request->jenis_berita;
        $event->tajuk = $request->tajuk;
        $event->huraian = $request->huraian;
        $event->tarikh = $request->tarikh;
        $event->masa = $request->masa;
        //$event->gambar = $request->gambar;
        $event->lokasi = $request->lokasi;
        $event->tempoh = $request->tempoh;
        $event->kumpulan_sasaran = $request->kumpulan_sasaran;
        $event->max_peserta = $request->max_peserta;
        $event->telephone = $request->telephone;
        $event->user_id = Auth::user()->id;
        $event->save();

        return redirect()->action('EventsController@store')->withMessage('Event has been successfully added');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::findOrFail($id);
        return view('event.details', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::findOrFail($id);
        return view('event.edit', compact('event'));
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
        $this->validate ($request, ['tarikh' => 'required']);
        $this->validate ($request, ['masa' => 'required']);
        $this->validate ($request, ['lokasi' => 'required']);
        $this->validate ($request, ['tempoh' => 'required']);
        $this->validate ($request, ['kumpulan_sasaran' => 'required']);
        $this->validate ($request, ['max_peserta' => 'required']);
        $this->validate ($request, ['telephone' => 'required']);

        $event = Event::findOrFail($id);
        //$event->jenis_berita = $request->jenis_berita;
        $event->tajuk = $request->tajuk;
        $event->huraian = $request->huraian;
        $event->tarikh = $request->tarikh;
        $event->masa = $request->masa;
        //$event->gambar = $request->gambar;
        $event->lokasi = $request->lokasi;
        $event->tempoh = $request->tempoh;
        $event->kumpulan_sasaran = $request->kumpulan_sasaran;
        $event->max_peserta = $request->max_peserta;
        $event->telephone = $request->telephone;
        // $event->user_id = Auth::user()->id;
        $event->save();

        return redirect()->action('EventsController@index')->withMessage('Event has been successfully updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();
        return back()->withError('Event has been successfully deleted');
    }
}
