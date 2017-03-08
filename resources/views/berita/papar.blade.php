@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading">
        <h2>    Buletin Berita</h2>
    </div>
    <div class="panel-body">
        <div class="row">
                <div class="col-md-12">

                <div class="table-responsive">
                    <div class = "col-md-9">
                    <?php $i = 0 ?>
                    @forelse($beritas as $berita)
                        <div class="col-md-4" id="catalog">
                            <h4><strong>{{ $berita->tajuk }}</strong></h4>
                            <!-- <a><img src="{{ asset('beritas/'.$berita->product_image) }} " class="img-responsive"></a> {{--asset tu access folder public--}} -->
                            <br>
                            <p> Published at {{ $berita->created_at }}</p>
                            <p> Lokasi: {{ $berita->lokasi }}</p>

                            <br>
                            <a href="{{ url('papar', $berita->id) }}" class="btn btn-primary">Perincian Berita</a>
                            <br><br>
                        </div>
                    <?php $i++ ?>
                    @empty
                    @endforelse
                    <div style="clear: both;"></div>

                    </div>
                    {{ $beritas -> links() }}
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/warning.js') }}"></script>
@endsection
