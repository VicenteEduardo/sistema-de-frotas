@extends('layouts.merge.site')
@section('titulo', 'Portal Oficial da CNE - Eventos')
@section('content')



    <!-- Main Banner Starts -->
    <section class="main-banner text-center-xs">
        <!-- Nested Container Starts -->
        <div class="container text-lite-color">
            <h3 style="font-weight: bold;" class="text-medium">
                <a href="{{ route('site.event') }}" style="color:#000;">Todos Eventos</a> >
                {{ $event->title }}
            </h3>
        </div>
        <!-- Nested Container Ends -->
    </section>
    <!-- Main Banner Ends -->

    <!-- Main Container Starts -->
    <div class="main-container container text-center-xs">
        <!-- Board Of Directors Starts -->

        <div class="col-md-8 col-xs-12">

            <div class="blog-post single text-center-xs">
                <!-- Blog Post Content Starts -->

                <div class="box-3">

                    <img src="/storage/{{ $event->path }}" alt="{{ $event->title }}" class="img-responsive img-center-xs">

                    <div class="inner">
                        <p class="date-meta text-grey-color text-uppercase">

                            <span class="label label-primary">
                                <i class="fa fa-calendar"></i>&nbsp; {{ date('d M Y', strtotime($event->date)) }}
                            </span>

                        </p>
                        <h5 class="sub-heading-1 tiny text-medium text-center-xs">
                            {{ $event->title }}
                        </h5>
                        <!-- Blog Post Content Starts -->
                        <div class="blog-post-content">
                            {{ $event->body }}
                        </div>
                        <!-- Blog Post Content Ends -->
                        <!-- Starts -->
                        <div class="clearfix">
                            <!-- Tags Starts -->
                            <ul class="list-unstyled list-inline blog-post-tags pull-left-lg pull-left-md animation">
                                <li>
                                    <h6>Fonte: </h6>
                                </li>
                                <li>
                                    {{ $event->typewriter }} | {{ date('d M Y', strtotime($event->date)) }}
                                </li>
                            </ul>
                            <!-- Tags Ends -->
                            <!-- Share Starts -->
                            <ul class="list-unstyled list-inline blog-post-share pull-right-lg pull-right-md animation">
                                <div class="fb-share-button" data-href="{{ url("/ao/evento/$event->id") }}"
                                    data-layout="button_count">
                                </div>
                            </ul>
                            <!-- Share Ends -->

                        </div>
                        <!-- Ends -->

                    </div>
                </div> <!-- Blog Post Content Ends -->
            </div>

            <!-- Advisor #4 Ends -->
        </div>
        <div class="col-sm-4 col-xs-12">
            <!-- Categories Starts -->
            <div class="sblock-1">
                <h5 class="sub-heading-2 text-center-xs">Eventos</h5>
                <ul class="list-unstyled list-links">

                    @foreach ($lasted as $item)
                        <li><a href="{{ url("/ao/evento/$item->id") }}">{{ $item->title }}</a></li>
                    @endforeach

                    <li><a href="{{ route('site.event') }}">Todas Eventos </a></li>
                </ul>
            </div>
            <!-- Our Advisor Ends -->
        </div>

    </div>

    <!-- Main Container Ends -->


@endsection
