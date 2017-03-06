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
        $events = Event::with('user');
        return view('event.index', compact('events'));
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
        $this->validate($request, [
        //'jenis_berita' => 'required',
        'tajuk' => 'required',
        'huraian' => 'required',
        //'gambar' => 'required',
        'lokasi' => 'required',
        'masa' => 'required',
        'tarikh' => 'required',

        ]);

        $event = new Event;
        //$event->jenis_berita = $request->jenis_berita;
        $event->tajuk = $request->tajuk;
        $event->huraian = $request->huraian;
        //$event->gambar = $request->gambar;
        $event->lokasi = $request->lokasi;
        $event->masa = $request->masa;
        $event->tarikh = $request->tarikh;
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
        $this->validate($request, [
            //'jenis_berita' => 'required',
            'tajuk' => 'required',
            'huraian' => 'required',
            //'gambar' => 'required',
            'lokasi' => 'required',
            'masa' => 'required',
            'tarikh' => 'required',
        ]);

        $event = Event::findOrFail($id);
        //$event->jenis_berita = $request->jenis_berita;
        $event->tajuk = $request->tajuk;
        $event->huraian = $request->huraian;
        //$event->gambar = $request->gambar;
        $event->lokasi = $request->lokasi;
        $event->masa = $request->masa;
        $event->tarikh = $request->tarikh;
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
