@include('modal.destroy-modal')
@extends('layouts.app')
@section('content')

<div class="panel panel-default">
  <div class="panel-heading">
    <h2>Your News<a href="{{ url('/berita/create') }}" class="btn btn-info pull-right" role="button">Create New News</a></h2>
  </div>

  <div class="panel-body">
    <div class="row">
      <div class="col-md-12">
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th width="45%">News Title</th>
                <th width="15%">Location</th>
                <th width="25%">Created At</th>
                <th width="15%">Action</th>
              </tr>
            </thead>
            <tbody pull-{right}>
              <?php $i = 0 ?>
              @forelse($beritas as $berita)
              <tr>
                <td >{{ $beritas->firstItem() + $i }}</td>
                <td> {{ $berita->tajuk }} </td>
                <td> {{ $berita->lokasi }} </td>
                <td>{{ $berita->created_at }}</td>
                <td>
                  @if( $berita->user_id == Auth::user()->id)
                  <a href="{{ action('BeritasController@edit', $berita->id) }}" class="btn btn-primary btn-sm">Edit</a>
                  <a href="{{ action('BeritasController@destroy', $berita->id) }}" class="btn btn-danger btn-sm" id="confirm-modal">Delete</a>
                  @endif
                </td>
              </tr>
              <?php $i++ ?>
              @empty
              <tr>
                <td colspan="6">Looks like there is no news available.</td>
              </tr>
              @endforelse
            </tbody>
          </table>
          {{ $beritas->links() }}
        </div>
      </div>
    </div>
  </div>
</div>
<script src="{{ asset('js/warning.js') }}"></script>
@endsection
