@extends('layouts.merge.site')
@section('titulo', 'Portal Oficial da CNE - Vídeos')
@section('content')

    <section class="ud-page-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ud-banner-content">
                        <h1>Vídeos </h1>
                    </div>
                </div>
            </div>
        </div>
    </section><br>
    <section class="main-banner text-center-xs">
        <!-- Nested Container Starts -->
        <div class="container text-lite-color">
            <h3 style="font-weight: bold;" class="text-medium">Galeria de Vídeos </h3>
        </div><br><br>
        <!-- Nested Container Ends -->
    </section>
    <div class="container gallery-container">
        <div class="tz-gallery">
            <div class="row">
                @foreach ($videos as $item)
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail" style="height: 250px;">
                            <a class="lightbox">
                                <iframe class="img-responsive img-center" width="auto" height="200"
                                    src="{{ $item->link }}" frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </a>

                            <div class="caption">
                                <p>{{ $item->title }} ({{ date('d.M.Y', strtotime($item->date)) }})</p>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="row justify-content-center">

                    <div class="col-md-4">
                        <br> <br>
                        <h6>{{ $videos->links() }}</h6>
                        <br> <br>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
