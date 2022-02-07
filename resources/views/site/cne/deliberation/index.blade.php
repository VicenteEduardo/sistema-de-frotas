@extends('layouts.merge.site')
@section('titulo', 'Portal Oficial da CNE - Deliberações')
@section('content')

    <!-- ====== Banner Start ====== -->
    <section class="ud-page-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ud-banner-content">
                        <h1>Deliberações</h1>
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
                    <p class="text-dark">

                        @foreach ($deleiberations as $item)
                            <a href="/storage/{{ $item->file }}" target="_blank" class="text-dark">
                                <i class="lni lni-arrow-right"></i>
                                <u>{{ $item->title }}</u>
                            </a><br>
                        @endforeach



                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== estruture End ====== -->


@endsection
