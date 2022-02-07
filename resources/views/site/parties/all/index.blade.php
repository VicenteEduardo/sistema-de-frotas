@extends('layouts.merge.site')
@section('titulo', 'Portal Oficial da CNE - Partidos')
@section('content')
    <!-- ====== Banner Start ====== -->
    <section class="ud-page-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ud-banner-content">
                        <h1>Partidos</h1>
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

                @foreach ($parties as $item)
                    <div class="col-lg-4 col-md-6">
                        <div class="ud-single-blog">
                            <div class="ud-blog-image">
                                <a href="{{ url("/partidos/$item->id") }}">
                                    <div class="card-img-top img-fluid rounded"
                                        style='background-image:url("/storage/{{ $item->image }}");background-position:center;background-size:cover;height:200px;'>
                                    </div>
                                </a>
                            </div>
                            <div class="ud-blog-content">
                                <span class="ud-blog-date">{{ date('M d, Y', strtotime($item->date)) }}</span>
                                <h3 class="ud-blog-title">
                                    <a href="{{ url("/partidos/$item->id") }}">{{ $item->parties }}
                                    </a>
                                </h3>

                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <h6>{{ $parties->links() }}</h6>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Blog End ====== -->


@endsection
