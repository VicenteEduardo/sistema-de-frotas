@extends('layouts.merge.site')
@section('titulo', 'Portal Oficial da CNE - Instrutivos')
@section('content')

    <!-- ====== Banner Start ====== -->
    <section class="ud-page-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ud-banner-content">
                        <h1>Instrutivos</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Banner End ====== -->

    <!-- ====== instructive Start ====== -->
    <section class="ud-blog-details">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-5">
                    <p class="text-dark">
                        @foreach ($instructional as $item)



                            <a href="/storage/{{ $item->file }}" target="_blank" class="text-dark my-1">
                                <i class="lni lni-arrow-right"></i>
                                <u><b>{{ $item->title }}</u>
                            </a><br>
                        @endforeach


                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== instructive End ====== -->


@endsection
