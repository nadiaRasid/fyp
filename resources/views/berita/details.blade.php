@extends('layouts.app')
@section('content')

<div class="panel panel-default">
    <div class="panel-heading">
        <h2>Perincian Berita</h2>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-4">
                <br><br>
            </div>
            <div class="col-md-8">

                <h1>{{ $berita->tajuk }}</h1>
                <p> Published at {{ $berita->created_at }}</p>
                <p> Lokasi: {{ $berita->lokasi }}</p>
                <br>
                <p> {{ $berita->huraian }}</p>

                    <div class="col-sm-offset-4 col-sm-12">
                        <a href="{{ url('papar') }}" class="btn btn-primary">Kembali</a>
                    </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/warning.js') }}"></script>
@endsection
