@extends('layouts.app')
@section('content')
<div class="panel panel-default">
  <div class="panel-heading">
    <h2>Kemaskini Berita</h2>
  </div>
  <div class="panel-body">
    <div class="row">
      <div class="col-md-10">
        <form class="form-horizontal" action="{{ action('EventsController@update', $event->id) }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}

            <div class="form-group{{ $errors->has('tajuk') ? ' has-error' : '' }}">
                <label for="tajuk" class="col-md-4 control-label">Tajuk Acara</label>

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
                <label for="huraian" class="col-md-4 control-label">Huraian Acara</label>

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
                <label for="tarikh" class="col-md-4 control-label">Tarikh Diadakan</label>

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
                <label for="masa" class="col-md-4 control-label">Masa Berlangsung</label>

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
                <label for="lokasi" class="col-md-4 control-label">Lokasi Acara</label>

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
                <label for="tempoh" class="col-md-4 control-label">Tempoh Berlangsung</label>

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
                <label for="kumpulan_sasaran" class="col-md-4 control-label">Kumpulan Sasaran</label>

                <div class="col-md-6">
                    <input id="kumpulan_sasaran" type="text" class="form-control" name="kumpulan_sasaran" value="{{ $event->kumpulan_sasaran }}" required autofocus>

                    @if ($errors->has('kumpulan_sasaran'))
                        <span class="help-block">
                            <strong>{{ $errors->first('kumpulan_sasaran') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('max_peserta') ? ' has-error' : '' }}">
                <label for="max_peserta" class="col-md-4 control-label">Maximum Peserta</label>

                <div class="col-md-6">
                    <input id="max_peserta" type="integer" class="form-control" name="max_peserta" value="{{ $event->max_peserta }}" required autofocus>

                    @if ($errors->has('max_peserta'))
                        <span class="help-block">
                            <strong>{{ $errors->first('max_peserta') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('telephone') ? ' has-error' : '' }}">
                <label for="telephone" class="col-md-4 control-label">Nombor Telefon</label>

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
                <a href="{{ action('EventsController@index') }}" class="btn btn-default">Cancel</a>
                <button type="submit" class="btn btn-success">Save</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>
@endsection
