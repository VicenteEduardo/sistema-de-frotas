@extends('layouts.merge.site')
@section('titulo', 'Portal Oficial da CNE -Partidos')
@section('content')

    <!-- ====== Banner Start ====== -->
    <section class="ud-page-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ud-banner-content">
                        <h1>Partidos</h1>
                        <h1>{{ $parties->title }}</h1>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Banner End ====== -->

    <!-- ====== parties Details Start ====== -->
    <section class="ud-blog-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ud-blog-details-image">
                        <img src="/storage/{{ $parties->image }}" alt="{{ $parties->iamge }}" />
                        <div class="ud-blog-overlay">
                            <div class="ud-blog-overlay-content">
                                <div class="ud-blog-author">
                                    <img src="/site/images/blog/author-01.png" alt="author" />
                                    <span>{{ $parties->parties }}</span>
                                </div>

                                <div class="ud-blog-meta">
                                    <p class="date">
                                        <i class="lni lni-calendar"></i>
                                        <span>{{ date('d M Y', strtotime($parties->date)) }}</span>
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="ud-blog-details-content">
                        <center>
                            <h2 class="ud-blog-details-title">
                                {{ $parties->parties }}
                            </h2>
                        </center>



                        <p class="ud-blog-details-para">
                            {!! html_entity_decode($parties->body) !!}
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== parties Details End ====== -->

    <!-- ====== parties Start ====== -->

    <!-- ====== parties End ====== -->



@endsection
