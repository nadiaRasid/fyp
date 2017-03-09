@extends('layouts.app')
@section('content')

<div class="panel panel-default">
    <div class="panel-heading">
        <h2>Perincian Acara</h2>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-4">
                <br><br>
            </div>
            <div class="col-md-8">

                <h1>{{ $event->tajuk }}</h1>
                <br>
                <p> Tarikh: {{ $event->tarikh }}</p>
                <p> Masa: {{ $event->masa }}</p>
                <p> Tempat: {{ $event->lokasi }}</p>
                <p> Tempoh berlangsung: {{ $event->tempoh }}</p>
                <p> Maximum peserta: {{ $event->max_peserta }} orang</p>
                <p> Sebarang pertanyaan boleh hubungi kami di talian {{ $event->telephone }}.</p>

                <br>
                <p> {{ $event->huraian }}</p>

                    <div class="col-sm-offset-4 col-sm-12">
                        <a href="{{ url('acara') }}" class="btn btn-primary">Kembali</a>
                    </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/warning.js') }}"></script>
@endsection
