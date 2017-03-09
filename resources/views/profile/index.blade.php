@extends('layouts.app')
@section('content')

@if ($user->profile)
    <h1>{{ $user->username }} <small>{{ $user->profile->full_name }}</small></h1>
    <div class="jawatan">
        <p>
            {{ $user->profile->jawatan }}
        </p>
    </div>
    <div class="jabatan">
        <p>
            {{ $user->profile->jabatan }}
        </p>
    </div>

    @if ($user->isCurrent())
        <!-- {{ link_to_route('profile.edit', 'Edit Your Profile', $user->username) }} -->
        <!-- <h5><a href="{{ url('acara', $event->id) }}"><strong>{{ $event->tajuk }} </strong></a></h5> -->
        <a href="{{ action('ProfilesController@edit', $user->profile->id) }}" class="btn btn-primary">Edit details</a>
    @endif
@else
    <p>No profile yet.</p>
@endif

    <!-- <div class="container">
            <div class="col-lg-4">
                 <div class="panel panel-default">
                        <div class="panel-heading">
                              <p class="text-center">
                                    {{ $user->username }}'s Profile.
                              </p>
                        </div>

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                        <!-- @forelse($profiles as $profile) -->
                                        <!-- <tr>
                                            <td >{{ $user->profile->full_name}}</td>
                                            <td >{{ $user->profile->telephone_no}}</td>
                                            <td >{{ $user->profile->jawatan}}</td>
                                            <td >{{ $user->profile->jabatan}}</td> -->

                                          <!-- <p class="text-center">
                                                <!-- @if(Auth::id() == $user->id) -->
                                                <!-- @if( $profile->user_id == Auth::user()->id)
                                                      <a href="{{ action('ProfilesController@edit', $profile->id) }}" class="btn btn-info">Edit Profile</a>
                                                @endif -->
                                          <!-- </p> -->
                                        <!-- @endforelse -->
                                <!-- </div>
                            </div>
                        </div>
                    </div>
            </div>
    </div> -->

    <!-- <script src="{{ asset('js/warning.js') }}"></script> -->
@stop
