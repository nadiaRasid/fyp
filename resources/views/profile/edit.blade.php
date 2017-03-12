@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="tabs-container">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#tab-1">Kemaskini Profil</a></li>
                </ul>
                <div class="tab-content">

                  <!-- Start of first tab -->
                    <div id="tab-1" class="tab-pane active">
                        <div class="panel-body">

                            <form class="form-horizontal" action="{{ action ('PenggunasController@update' , $pengguna->id) }}" method="POST" enctype="multipart/form-data">

                              {{ csrf_field() }}
                              {{ method_field('PATCH') }}

                                <div class="form-group"><label class="col-sm-2 control-label">Matrik No:</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" name="no_matrik" placeholder="" value="{{ old('no_matrik', $pengguna->user->no_matrik) }}"></input>
                                    </div>
                                </div>

                                <div class="form-group"><label class="col-sm-2 control-label">Username:</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" name="username" placeholder="Username" value="{{ old('username', $pengguna->user->username) }}"></input>
                                    </div>
                                </div>

                                 <div class="form-group"><label class="col-sm-2 control-label">Email:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="email" placeholder="" value="{{ old('email', $pengguna->user->email) }}"></input>
                                    </div>
                                </div>

                                <div class="form-group"><label class="col-sm-2 control-label">Nama Penuh:</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" name="nama" placeholder="Nama Penuh" value="{{ $pengguna->nama }}"></input>
                                    </div>
                                </div>

                                <div class="form-group"><label class="col-sm-2 control-label">Telefon:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="telefon" value="{{ $pengguna->telefon }}"></input>
                                    </div>
                                </div>

                                <div class="form-group"><label class="col-sm-2 control-label">Fakulti:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="fakulti" placeholder="Fakulti" value="{{ $pengguna->fakulti }}">
                                    </div>
                                </div>

                                <div class="form-group"><label class="col-sm-2 control-label">Persatuan:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="persatuan" placeholder="Persatuan" value="{{ $pengguna->persatuan }}">
                                    </div>
                                </div>

                                <div class="form-group"><label class="col-sm-2 control-label">Gambar Profil:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="gambar" placeholder="" value="{{ $pengguna->gambar }}"></div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-2 control-label"></label>
                                    <div class="col-md-4">
                                        <button type="submit" class="btn btn-primary">Hantar</button>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                    <!-- End of first tab -->

                  </div>
                </div>
              </div>
@endsection
