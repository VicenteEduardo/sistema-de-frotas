@extends('layouts.merge.site')
@section('titulo', 'Portal Oficial da CNE - Definições')
@section('content')

    <!-- ====== Banner Start ====== -->
    <section class="ud-page-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ud-banner-content">
                        <h1>Definição da CNE</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Banner End ====== -->

    <!-- ====== definition Details Start ====== -->
    @foreach ($defintions as $item)


        <section class="ud-blog-details">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-5">
                        <h2 class="ud-blog-details-title">
                            {{ $item->title }}</h2>

                        <p class="text-dark">

                            <b>{{ $item->definicon }}
                                <br>

                        </p>

                    </div>
                </div>
            </div>
        </section>
    @endforeach

    <!-- ====== definition Details End ====== -->


@endsection
