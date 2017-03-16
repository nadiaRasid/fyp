@extends('layouts.app')
@section('content')
<div class="panel panel-default">
  <div class="panel-heading">
    <h2>Kemaskini Program </h2>
  </div>
  <div class="panel-body">
    <div class="row">
      <div class="col-md-10">
        <form class="form-horizontal" action="{{ action('EventsController@update', $event->id) }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}

            <div class="form-group">
                <label class="col-md-4 control-label">Nombor Matrik: </label>

                <div class="col-md-6">
                    <td>{{Auth::user()->no_matrik}}</td>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">Nama: </label>

                <div class="col-md-6">
                    <td>{{Auth::user()->username}}</td>
                </div>
            </div>

            <div class="form-group{{ $errors->has('tajuk') ? ' has-error' : '' }}">
                <label for="tajuk" class="col-md-4 control-label">Tajuk Program </label>

                <div class="col-md-6">
                    <input id="tajuk" type="text" class="form-control" name="tajuk" value="{{ $event->tajuk }}" required autofocus>

                    @if ($errors->has('tajuk'))
                        <span class="help-block">
                            <strong>{{ $errors->first('tajuk') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('huraian') ? ' has-error' : '' }}">
                <label for="huraian" class="col-md-4 control-label">Perincian Program </label>

                <div class="col-md-6">
                    <textarea id="huraian" class="form-control" name="huraian" rows="6" maxlength="500" required autofocus>{{ $event->huraian }}</textarea>

                    @if ($errors->has('huraian'))
                        <span class="help-block">
                            <strong>{{ $errors->first('huraian') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('tarikh') ? ' has-error' : '' }}">
                <label for="tarikh" class="col-md-4 control-label">Tarikh Diadakan </label>

                <div class="col-md-6">
                    <input id="tarikh" type="date" class="form-control" name="tarikh" value="{{ $event->tarikh }}" required autofocus>

                    @if ($errors->has('tarikh'))
                        <span class="help-block">
                            <strong>{{ $errors->first('tarikh') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('masa') ? ' has-error' : '' }}">
                <label for="masa" class="col-md-4 control-label">Masa Berlangsung </label>

                <div class="col-md-6">
                    <input id="masa" type="time" class="form-control" name="masa" value="{{ $event->masa }}" required autofocus>

                    @if ($errors->has('masa'))
                        <span class="help-block">
                            <strong>{{ $errors->first('masa') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('lokasi') ? ' has-error' : '' }}">
                <label for="lokasi" class="col-md-4 control-label">Lokasi </label>

                <div class="col-md-6">
                    <input id="lokasi" type="text" class="form-control" name="lokasi" value="{{ $event->lokasi }}" required autofocus>

                    @if ($errors->has('lokasi'))
                        <span class="help-block">
                            <strong>{{ $errors->first('lokasi') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('tempoh') ? ' has-error' : '' }}">
                <label for="tempoh" class="col-md-4 control-label">Tempoh Berlangsung </label>

                <div class="col-md-6">
                    <input id="tempoh" type="text" class="form-control" name="tempoh" value="{{ $event->tempoh }}" required autofocus>

                    @if ($errors->has('tempoh'))
                        <span class="help-block">
                            <strong>{{ $errors->first('tempoh') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('kumpulan_sasaran') ? ' has-error' : '' }}">
                <label for="kumpulan_sasaran" class="col-md-4 control-label">Kumpulan Sasaran </label>

                <div class="col-md-6">
                    <!-- <input id="kumpulan_sasaran" type="text" class="form-control" name="kumpulan_sasaran" value="{{ $event->kumpulan_sasaran }}" required autofocus> -->

                    <select id="kumpulan_sasaran" type="text" class="form-control" name="kumpulan_sasaran" value="{{ $event->kumpulan_sasaran }}" required autofocus>
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

            <div class="form-group{{ $errors->has('max_peserta') ? ' has-error' : '' }}">
                <label for="max_peserta" class="col-md-4 control-label">Maximum Peserta </label>

                <div class="col-md-6">
                    <input id="max_peserta" type="integer" class="form-control" name="max_peserta" value="{{ $event->max_peserta }}" required autofocus>

                    @if ($errors->has('max_peserta'))
                        <span class="help-block">
                            <strong>{{ $errors->first('max_peserta') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('penganjur') ? ' has-error' : '' }}">
                <label for="penganjur" class="col-md-4 control-label">Penganjur </label>

                <div class="col-md-6">
                    <input id="penganjur" type="text" class="form-control" name="penganjur" value="{{ $event->penganjur }}" required autofocus>

                    @if ($errors->has('penganjur'))
                        <span class="help-block">
                            <strong>{{ $errors->first('penganjur') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('telephone') ? ' has-error' : '' }}">
                <label for="telephone" class="col-md-4 control-label">Nombor Telefon </label>

                <div class="col-md-6">
                    <input id="telephone" type="text" class="form-control" name="telephone" value="{{ $event->telephone }}" required autofocus>

                    @if ($errors->has('telephone'))
                        <span class="help-block">
                            <strong>{{ $errors->first('telephone') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <a href="{{ action('EventsController@index') }}" class="btn btn-default">Batal</a>
                <button type="submit" class="btn btn-success">Simpan</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>
@endsection
