@extends('layouts.merge.site')
@section('titulo', 'Portal Oficial da CNE - Regulamentos')
@section('content')

    <!-- ====== Banner Start ====== -->
    <section class="ud-page-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ud-banner-content">
                        <h1>Regulamentos</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Banner End ====== -->

    <!-- ====== estruture Start ====== -->
    <section class="ud-blog-details">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-5">
                    @foreach ($regulamenets as $item)


                        <p class="text-dark">

                            <a href="/storage/{{ $item->file }}" target="_blank" class="text-dark">
                                <i class="lni lni-arrow-right"></i>
                                <u> {{ $item->title }}</u>
                            </a><br>

                        </p>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!-- ====== estruture End ====== -->


@endsection
