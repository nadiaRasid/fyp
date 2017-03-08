@extends('layouts.app')
@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        <h2>Cipta Berita</h2>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-10">
                <form class="form-horizontal" action="{{ action('BeritasController@store') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <!-- <div class="form-group{{ $errors->has('jenis_berita') ? ' has-error' : '' }}">
                        <label for="jenis_berita" class="col-md-4 control-label">Jenis Berita</label>

                        <div class="col-md-6">
                            <input id="jenis_berita" type="integer" class="form-control" name="jenis_berita" value="{{ old('jenis_berita') }}" required autofocus>

                            @if ($errors->has('jenis_berita'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('jenis_berita') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div> -->

                    <div class="form-group{{ $errors->has('tajuk') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">Tajuk Berita</label>

                        <div class="col-md-6">
                            <input id="tajuk" type="text" class="form-control" name="tajuk" value="{{ old('tajuk') }}" placeholder="Masukkan Tajuk Berita" required autofocus>

                            @if ($errors->has('tajuk'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('tajuk') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('huraian') ? ' has-error' : '' }}">
                        <label for="huraian" class="col-md-4 control-label">Huraian Berita</label>

                        <div class="col-md-6">
                            <textarea id="huraian" type="text" class="form-control" name="huraian" value="{{ old('huraian') }}" rows="6" maxlength="500" placeholder="Masukkan Huraian Berita" required autofocus></textarea>
                            <p class="text-muted">Maxmimum character is 500</p>
                            @if ($errors->has('huraian'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('huraian') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('lokasi') ? ' has-error' : '' }}">
                        <label for="lokasi" class="col-md-4 control-label">Lokasi Berita</label>

                        <div class="col-md-6">
                            <input id="lokasi" type="text" class="form-control" name="lokasi" value="{{ old('lokasi') }}" placeholder="Masukkan Lokasi Berita" required autofocus>

                            <!-- <select  id="lokasi" name="lokasi" class="form-control" value="{{ old('lokasi') }}">
                                <option>Pilih Lokasi Acara</option>
                                <option>FTSM</option>
                                <option>Kolej ZABA</option>
                                <option>Masjid UKM</option>
                                <option>Pusanika</option>
                                <option>Kolej KKM</option>
                                <option>Kolej KIY</option>
                            </select> -->

                            @if ($errors->has('lokasi'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('lokasi') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('kumpulan_sasaran') ? ' has-error' : '' }}">
                        <label for="kumpulan_sasaran" class="col-md-4 control-label">Kumpulan Sasaran </label>

                        <div class="col-md-6">
                            <input id="kumpulan_sasaran" type="text" class="form-control" name="kumpulan_sasaran" value="{{ old('kumpulan_sasaran') }}" placeholder="Masukkan Kumpulan Sasaran" required autofocus>

                            @if ($errors->has('kumpulan_sasaran'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('kumpulan_sasaran') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <a href="{{ action('BeritasController@index') }}" class="btn btn-default">Batal</a>
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
