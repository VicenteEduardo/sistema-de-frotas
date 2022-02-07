@extends('layouts.merge.site')
@section('titulo', 'Portal Oficial da CNE - Eventos')
@section('content')

    <!-- Main Banner Starts -->
    <section class="main-banner text-center-xs">
        <!-- Nested Container Starts -->
        <div class="container text-lite-color">
            <h3 style="font-weight: bold;" class="text-medium">Todos Eventos</h3>
        </div>
        <!-- Nested Container Ends -->
    </section>
    <!-- Main Banner Ends -->

    <!-- Main Container Starts -->
    <div class="main-container container text-center-xs">
        <!-- Nested Row Starts -->
        <div class="row blog-post">

            @foreach ($event as $item)
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class=" animation text-center-xs">
                        <div class="post-slide8">
                            <div class="post-img">
                                <div class="card-img-top img-fluid rounded"
                                    style='background-image:url("/storage/{{ $item->path }}");background-position:center;background-size:cover;height:200px;'>
                                </div>

                                <div class="over-layer">
                                    <ul class="post-link">
                                        <li><a href="{{ url("/ao/evento/$item->id") }}" class="fa fa-search"></a></li>
                                    </ul>
                                </div>
                                <div class="post-date">
                                    <span class="date"> {{ date('d', strtotime($item->date)) }}</span>
                                    <span class="month"> {{ date('M', strtotime($item->date)) }}</span>
                                </div>
                            </div>
                            <div class="post-content">
                                <h3 class="post-title">
                                    <a href="{{ url("/ao/evento/$item->id") }}">{{ $item->title }}</a>
                                </h3>

                                <p class="post-description">
                                    {{ $item->subtitle }}
                                </p>
                                <a href="{{ url("/ao/evento/$item->id") }}" class="read-more">Ler mais</a>

                            </div>
                        </div>

                    </div>
                </div>


            @endforeach
            <div class="col-md-12">
                <h4 class="text-center"><b>{{ $event->links() }}</b></h4>
            </div>
        </div>

    </div>
@endsection
