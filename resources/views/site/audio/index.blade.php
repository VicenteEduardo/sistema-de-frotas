@extends('layouts.merge.site')
@section('titulo', 'Portal Oficial da CNE - Galeria')
@section('content')

    <!-- ====== Banner Start ====== -->
    <section class="ud-page-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ud-banner-content">
                        <h1>Áudios</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Banner End ====== -->

    <!-- ====== gallery Start ====== -->
    <section class="ud-blog-grids">
        <div class="container">
            <div class="row">

                @foreach ($audios as $item)


                    <div class="col-lg-4 col-md-6">
                        <div class="ud-blog-image">



                            <div class="ud-single-blog">
                                <div class="ud-blog-content">
                                    <span
                                        class="ud-blog-date">{{ date('M d, Y', strtotime($item->created_at)) }}</span><br>
                                    <audio controls="controls">
                                        <source src="/storage/{{ $item->audio }}" type="audio/mp3" />
                                        seu navegador não suporta HTML5
                                    </audio>
                                    <h3 class="ud-blog-title">

                                        <a href="{{ url("/galeria/$item->id") }}">{{ $item->title }}
                                        </a>
                                    </h3>
                                </div>

                            </div>

                            </a>
                        </div>

                    </div>
                @endforeach

            </div>
            <!--

                                                                                                -->
        </div>
    </section>
    <!-- ====== gallery End ====== -->
@endsection
