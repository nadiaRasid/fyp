@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Profile</div>

                <div class="panel-body">
                    <form action="{{ action('ProfilesController@update', $profile->user_id) }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}
                        <div class="form-group{{ $errors->has('full_name') ? ' has-error' : '' }}">
                              <label class="col-md-2 control-label">Full Name</label>
                              <input type="text" name="full_name" value="{{ $info->full_name}}" class="form-control" required>
                        </div>
                        <div class="form-group">
                              <label for="telephone_no">Telephone Number</label>
                              <input type="text" name="telephone_no" value="{{ $info->telephone_no }}" class="form-control" required>
                        </div>
                        <div class="form-group">
                              <label for="jawatan">Jawatan</label>
                              <!-- <input type="text" name="jawatan" value="{{ $info->jawatan}}" class="form-control" required> -->
                              <select class="form-control" name="jawatan" value="{{ $info->jawatan}}" required>
                                  <option>Dekan</option>
                                  <option>Timbalan Dekan</option>
                                  <option>Pensyarah</option>
                                  <option>Felo</option>
                              </select>
                        </div>
                        <div class="form-group">
                              <label for="jabatan">Jabatan</label>
                              <input type="text" name="jabatan" value="{{ $info->jabatan}}" class="form-control" required>
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
