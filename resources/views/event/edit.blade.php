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
                <label for="tajuk" class="col-md-4 control-label">Tajuk </label>

                <div class="col-md-6">
                    <input id="tajuk" type="integer" class="form-control" name="tajuk" value="{{ old('tajuk') }}" required autofocus>

                    @if ($errors->has('tajuk'))
                        <span class="help-block">
                            <strong>{{ $errors->first('tajuk') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('huraian') ? ' has-error' : '' }}">
                <label for="huraian" class="col-md-4 control-label">Huraian </label>

                <div class="col-md-6">
                    <input id="huraian" type="text" class="form-control" name="huraian" value="{{ old('huraian') }}" required autofocus>

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
                    <input id="lokasi" type="text" class="form-control" name="lokasi" value="{{ old('lokasi') }}" required autofocus>

                    @if ($errors->has('lokasi'))
                        <span class="help-block">
                            <strong>{{ $errors->first('lokasi') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('masa') ? ' has-error' : '' }}">
                <label for="masa" class="col-md-4 control-label">Masa </label>

                <div class="col-md-6">
                    <input id="masa" type="time" class="form-control" name="masa" value="{{ old('masa') }}" required autofocus>

                    @if ($errors->has('masa'))
                        <span class="help-block">
                            <strong>{{ $errors->first('masa') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('tarikh') ? ' has-error' : '' }}">
                <label for="tarikh" class="col-md-4 control-label">Tarikh </label>

                <div class="col-md-6">
                    <input id="tarikh" type="time" class="form-control" name="tarikh" value="{{ old('tarikh') }}" required autofocus>

                    @if ($errors->has('tarikh'))
                        <span class="help-block">
                            <strong>{{ $errors->first('tarikh') }}</strong>
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
