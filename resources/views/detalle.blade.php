@extends('layout')
@section('banner')
    <div class="banner_img">
        <img src="//image.tmdb.org/t/p/w1280{{ $array['backdrop_path'] }}" class="imagen img-banner">
    </div>
@endsection

@section('content')
    <div class="">
        <div class="info-detalle grid">
            <div class="info-hijo">
                <div class="caratula-peli">
                    <div class="peli-titulo">
                        <h5>{{ $array['title'] }}</h5>
                        <div class="info-extra">
                            <span class="tiempo">aqaaq</span>&nbsp;&nbsp;|&nbsp;&nbsp;
                            <span class="calificacion">{{ $array['vote_average'] }}%</span>
                        </div>
                    </div>
                    <div class="peli-imagen">
                        <img src="//image.tmdb.org/t/p/w1280{{ $array['poster_path'] }}" class="imagen">
                    </div>
                </div>
            </div>
            <div class="detalle-info">
            </div>
        </div>
    </div>
@endsection
