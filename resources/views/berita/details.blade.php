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
                <hr>
                <h1>{{ $berita->tajuk }}</h1>
                <p> Published at {{ $berita->created_at }}</p>
                <p> Lokasi: {{ $berita->lokasi }}</p>
                <br>
                <p>  {{ $berita->huraian }}</p>
                <form action="{{ url('') }}" method="post">
                    <button type="submit" class="btn btn-primary">Back</button>
                    <input type="hidden" name="berita_id" value="{{ $berita->id }}">
                </form>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/warning.js') }}"></script>
@endsection
