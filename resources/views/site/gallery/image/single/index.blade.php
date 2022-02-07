@extends('layouts.merge.site')
@section('titulo', 'Portal Oficial da CNE - Galeria')
@section('content')

    <!-- ====== Banner Start ====== -->
    <section class="ud-page-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ud-banner-content">
                        <h1>Galeria de Imagens</h1>
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

                @foreach ($gallery->images as $item)

                    <div class="col-lg-4 col-md-6">
                        <div class="ud-single-blog">
                            <div class="ud-blog-image">
                                <a href="/storage/{{ $item->path }}">
                                    <div class="card-img-top img-fluid rounded"
                                        style='background-image:url("/storage/{{ $item->path }}");background-position:center;background-size:cover;height:200px;'>
                                    </div>

                                </a>

                            </div>
                            <div class="ud-blog-content">
                                <span class="ud-blog-date">{{ date('M d, Y', strtotime($item->created_at)) }}</span>
                                <h3 class="ud-blog-title">
                                    <a href="/storage/{{ $item->cover }}">{{ $item->name }}
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </section>
    <!-- ====== gallery End ====== -->



@endsection
