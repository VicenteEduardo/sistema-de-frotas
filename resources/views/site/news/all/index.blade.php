@extends('layouts.merge.site')
@section('titulo', 'Portal Oficial da CNE - Notícias')
@section('content')
    <!-- ====== Banner Start ====== -->
    <section class="ud-page-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ud-banner-content">
                        <h1>Notícias</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Banner End ====== -->

    <!-- ====== Blog Start ====== -->
    <section class="ud-blog-grids">
        <div class="container">
            <div class="row">

                @foreach ($news as $item)
                    <div class="col-lg-4 col-md-6">
                        <div class="ud-single-blog">
                            <div class="ud-blog-image">
                                <a href="{{ url("/noticia/$item->id") }}">
                                    <div class="card-img-top img-fluid rounded"
                                        style='background-image:url("/storage/{{ $item->path }}");background-position:center;background-size:cover;height:200px;'>
                                    </div>
                                </a>
                            </div>
                            <div class="ud-blog-content">
                                <span class="ud-blog-date">{{ date('M d, Y', strtotime($item->date)) }}</span>
                                <h3 class="ud-blog-title">
                                    <a href="{{ url("/noticia/$item->id") }}">{{ $item->title }}
                                    </a>
                                </h3>
                                <p class="ud-blog-desc">
                                    {{ $item->subtitle }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <h6>{{ $news->links() }}</h6>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Blog End ====== -->


@endsection
