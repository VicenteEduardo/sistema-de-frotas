@extends('layouts.merge.site')
@section('titulo', 'Portal Oficial da CNE - Notícia')
@section('content')

    <!-- ====== Banner Start ====== -->
    <section class="ud-page-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ud-banner-content">
                        <h1>{{ $news->title }}</h1>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Banner End ====== -->

    <!-- ====== news Details Start ====== -->
    <section class="ud-blog-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ud-blog-details-image">
                        <img src="/storage/{{ $news->path }}" alt="{{ $news->title }}" />
                        <div class="ud-blog-overlay">
                            <div class="ud-blog-overlay-content">
                                <div class="ud-blog-author">
                                    <img src="/site/images/blog/author-01.png" alt="author" />
                                    <span>{{ $news->typewriter }}</span>
                                </div>

                                <div class="ud-blog-meta">
                                    <p class="date">
                                        <i class="lni lni-calendar"></i>
                                        <span>{{ date('d M Y', strtotime($news->date)) }}</span>
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="ud-blog-details-content">
                        <h2 class="ud-blog-details-title">
                            {{ $news->title }}
                        </h2>

                        <div class="ud-blog-quote">
                            <i class="lni lni-quotation"></i>
                            <p>
                                {{ $news->subtitle }}
                            </p>
                            <h6>{{ $news->typewriter }}”</h6>
                        </div>
                        <p class="ud-blog-details-para">
                            {!! html_entity_decode($news->body) !!}
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== news Details End ====== -->

    <!-- ====== news Start ====== -->
    <section class="ud-blog-grids ud-related-articles">
        <div class="container">
            <div class="row col-lg-12">
                <div class="ud-related-title">
                    <h2 class="ud-related-articles-title">Últimas Notícias</h2>
                </div>
            </div>
            <div class="row">

                @foreach ($lasted as $item)
                    <div class="col-lg-4 col-md-6">
                        <div class="ud-single-blog">
                            <div class="ud-blog-image">
                                <a href="{{ url("/ao/noticia/$item->id") }}">
                                    <img src="/storage/{{ $item->path }}" alt="{{ $item->title }}" />
                                </a>
                            </div>
                            <div class="ud-blog-content">
                                <span class="ud-blog-date">{{ date('d M, Y', strtotime($item->date)) }}</span>
                                <h3 class="ud-blog-title">
                                    <a href="{{ url("/ao/noticia/$item->id") }}">
                                        {{ $item->title }}
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
        </div>
    </section>
    <!-- ====== news End ====== -->



@endsection
