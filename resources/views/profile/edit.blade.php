@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Profile</div>

                <div class="panel-body">
                    <form lass="form-horizontal" action="{{ action('ProfilesController@update', $profile->user_id) }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}

                        <div class="form-group{{ $errors->has('full_name') ? ' has-error' : '' }}">
                                <label for="full_name" class="col-md-2 control-label">Full Name</label>

                                <div class="col-md-6">
                                    <input type="text" name="full_name" value="{{ $profile->full_name}}" class="form-control" required>

                                    @if ($errors->has('full_name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('full_name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                        </div>

                        <div class="form-group">
                                <label for="telephone_no" class="col-md-2 control-label">Telephone Number</label>

                                <div class="col-md-6">
                                    <input type="text" name="telephone_no" value="{{ $profile->telephone_no }}" class="form-control" required>

                                    @if ($errors->has('telephone_no'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('telephone_no') }}</strong>
                                        </span>
                                    @endif
                                </div>
                        </div>

                        <div class="form-group">
                                <label for="jawatan" class="col-md-2 control-label">Jawatan</label>
                                <!-- <input type="text" name="jawatan" value="{{ $info->jawatan}}" class="form-control" required> -->

                                <div class="col-md-6">
                                    <select class="form-control" name="jawatan" value="{{ $profile->jawatan}}" required>
                                        <option>Dekan</option>
                                        <option>Timbalan Dekan</option>
                                        <option>Pensyarah</option>
                                        <option>Felo</option>
                                    </select>

                                    @if ($errors->has('jawatan'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('jawatan') }}</strong>
                                        </span>
                                    @endif
                                </div>
                        </div>

                        <div class="form-group">
                                <label for="jabatan" class="col-md-2 control-label">Jabatan</label>

                                <div class="col-md-6">
                                    <input type="text" name="jabatan" value="{{ $profile->jabatan}}" class="form-control" required>

                                    @if ($errors->has('jabatan'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('jabatan') }}</strong>
                                        </span>
                                    @endif
                                </div>
                        </div>

                        <div class="form-group">
                              <div class="col-sm-offset-2 col-sm-10">
                                  <a href="{{ action('ProfilesController@index') }}" class="btn btn-default">Cancel</a>
                                    <button class="btn btn-primary" type="submit">
                                          Save your information
                                    </button>
                              </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
