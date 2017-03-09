@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading">
        <h2>Buletin UKM</h2>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive" >
                    <table class="table table-striped">

                    <tbody pull-{right}>
                    <?php $i = 0 ?>
                    @forelse($events as $event)
                    <tr>
                        <td>
                            <h5><a href="{{ url('acara', $event->id) }}"><strong>{{ $event->tajuk }} </strong></a></h5>
                            <p> Tarikh: {{ $event->tarikh }} <br> Masa: {{ $event->masa }}</p>
                            <p> Tempat: {{ $event->lokasi }}</p>

                        </td>
                    </tr>
                    <?php $i++ ?>
                    @empty
                    @endforelse
                    </tbody>
                    </table>
                    {{ $events -> links() }}
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/warning.js') }}"></script>
@endsection
