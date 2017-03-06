@include('modal.destroy-modal')
@extends('layouts.app')
@section('content')

<div class="panel panel-default">
  <div class="panel-heading">
    <h2>Your Events<a href="{{ url('/event/create') }}" class="btn btn-info pull-right" role="button">Create New Event</a></h2>
  </div>

  <div class="panel-body">
    <div class="row">
      <div class="col-md-12">
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th width="65%">Content</th>
                <th width="15%">By</th>
                <th width="15%">Action</th>
              </tr>
            </thead>
            <tbody pull-{right}>
              <?php $i = 0 ?>
              @forelse($events as $event)
              <tr>
                <td >{{ $events->firstItem() + $i }}</td>
                <td>
                  <!-- <form method="POST" action="/event/{{ $event->id }}" style="display: inline-block;">
                    {{ csrf_field() }}
                    <button class="btn {{ Auth::check() && Auth::user()->alreadyliked($post) ? 'btn-success' : 'btn-default' }}" style="width: 3em">
                      {{ $post->likes->count() }}
                    </button>
                  </form> --> -->
                  &nbsp&nbsp{{ $event->tajuk }}
                  <small class="pull-right">
                    {{ $event->created_at->diffForHumans() }}
                  </small>
                </td>
                <td>{{ $event->user->username }}</td>
                <td>
                  @if( $event->user_id == Auth::user()->id)
                  <a href="{{ action('EventsController@edit', $event->id) }}" class="btn btn-primary btn-sm">Edit</a>
                  <a href="{{ action('EventsController@destroy', $event->id) }}" class="btn btn-danger btn-sm" id="confirm-modal">Delete</a>
                  @endif
                </td>
              </tr>
              <?php $i++ ?>
              @empty
              <tr>
                <td colspan="6">Looks like there is no event available.</td>
              </tr>
              @endforelse
            </tbody>
          </table>
          {{ $events->links() }}
        </div>
      </div>
    </div>
  </div>
</div>
<script src="{{ asset('js/warning.js') }}"></script>
@endsection
