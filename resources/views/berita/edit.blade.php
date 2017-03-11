@extends('layouts.app')
@section('content')
<div class="panel panel-default">
  <div class="panel-heading">
    <h2>Kemaskini Berita</h2>
  </div>
  <div class="panel-body">
    <div class="row">
      <div class="col-md-10">
        <form class="form-horizontal" action="{{ action('BeritasController@update', $berita->id) }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}

            <div class="form-group{{ $errors->has('tajuk') ? ' has-error' : '' }}">
                <label for="tajuk" class="col-md-4 control-label">Tajuk Buletin </label>

                <div class="col-md-6">
                    <input id="tajuk" type="text" class="form-control" name="tajuk" value="{{ $berita->tajuk }}" required autofocus>

                    @if ($errors->has('tajuk'))
                        <span class="help-block">
                            <strong>{{ $errors->first('tajuk') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('huraian') ? ' has-error' : '' }}">
                <label for="huraian" class="col-md-4 control-label">Perincian Hebahan </label>

                <div class="col-md-6">
                    <textarea id="huraian" class="form-control" name="huraian" rows="6" maxlength="500" required autofocus>{{ $berita->huraian }}</textarea>

                    @if ($errors->has('huraian'))
                        <span class="help-block">
                            <strong>{{ $errors->first('huraian') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('lokasi') ? ' has-error' : '' }}">
                <label for="lokasi" class="col-md-4 control-label">Lokasi </label>

                <div class="col-md-6">
                    <input id="lokasi" type="text" class="form-control" name="lokasi" value="{{ $berita->lokasi }}" required autofocus>

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
                    <!-- <input id="kumpulan_sasaran" type="text" class="form-control" name="kumpulan_sasaran" value="{{ $berita->kumpulan_sasaran }}" required autofocus> -->

                    <select id="kumpulan_sasaran" type="text" class="form-control" name="kumpulan_sasaran" value="{{ $berita->kumpulan_sasaran }}" required autofocus>
                        <<option value="0" disabled selected>Pilih Kumpulan Sasaran</option>
                        <<option value="Pelajar UKM">Pelajar UKM</option>
                        <<option value="Staff UKM">Staff UKM</option>
                        <<option value="Warga UKM">Warga UKM</option>
                        <<option value="Warga Kolej Zaba">Warga Kolej Zaba</option>
                        <<option value="Warga FTSM">Warga FTSM</option>
                        <<option value="Warga KTSN">Warga KTSN</option>
                    </select>


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
