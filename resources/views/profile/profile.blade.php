@extends('layouts.app')

@section('content')
      <div class="container">
            <div class="col-lg-4">
                  <div class="panel panel-default">
                        <div class="panel-heading">
                              <p class="text-center">
                                    {{ $user->username }}'s Profile.
                              </p>
                        </div>

                        <div class="panel-body">

                                <td>{{ $user->profile->full_name}}</td>
                                <td >{{ $user->profile->telephone_no}}</td>
                                <td >{{ $user->profile->jawatan}}</td>
                                <td >{{ $user->profile->jabatan}}</td> -->

                              <p class="text-center">
                                    @if(Auth::id() == $user->id)
                                          <a href="{{ route('profile.edit') }}" class="btn btn-info">Edit Profile</a>
                                    @endif
                              </p>
                        </div>
                  </div>
            </div>
      </div>
@endsection
