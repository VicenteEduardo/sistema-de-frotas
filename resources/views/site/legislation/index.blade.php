@extends('layouts.merge.site')
@section('titulo', 'Portal Oficial da CNE - Legislação')
@section('content')

    <!-- ====== Banner Start ====== -->
    <section class="ud-page-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ud-banner-content">
                        <h1>Legislação</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Banner End ====== -->

    <!-- ====== legislation Start ====== -->
    <section class="ud-blog-details">


        <div class="container">

            <div class="col-md-12 mb-5">
                <p class="text-dark">
                    @foreach ($Legislations as $item)



                        <h4 class="my-3">{{ $item->title }}</h4>
                        <a href="/storage/{{ $item->file }}" target="_blank" class="mb-5 text-dark">
                            <i class="lni lni-arrow-right"></i>
                            <u>{{ $item->legislation }}</u>
                        </a><br>
                    @endforeach




                </p>
            </div>

        </div>



    </section>
    <!-- ====== legislation End ====== -->


@endsection
