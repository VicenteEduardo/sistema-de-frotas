@extends('layouts.merge.site')
@section('titulo', 'Portal Oficial da CNE - impressos')
@section('content')

    <!-- ====== Banner Start ====== -->
    <section class="ud-page-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ud-banner-content">
                        <h1>Publicações</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Banner End ====== -->

    <!-- ====== gallery Start ====== -->
    <section class="ud-blog-grids">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-5">
                    @foreach ($preinteds as $item)


                        <p class="text-dark">

                            <a href="/storage/{{ $item->cover}}" target="_blank" class="text-dark">
                                <i class="lni lni-arrow-right"></i>
                                <u> {{ $item->name }}</u>
                            </a><br>

                        </p>
                    @endforeach

                </div>
            </div>
        </div>




            <div class="row justify-content-center">
                <div class="col-md-4">
                    <h6>{{ $preinteds->links() }}</h6>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== gallery End ====== -->



@endsection
