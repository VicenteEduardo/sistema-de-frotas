@extends('layouts.merge.site')
@section('titulo', 'Portal Oficial da CNE - Directivas')
@section('content')

    <!-- ====== Banner Start ====== -->
    <section class="ud-page-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ud-banner-content">
                        <h1>Directivas</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Banner End ====== -->

    <!-- ====== directive Start ====== -->
    <section class="ud-blog-details">
        <div class="container">

            <div class="col-md-12 mb-5">
                <p class="text-dark">
                    @foreach ($directives as $item)
                        <h4 class="my-3">{{ $item->title }}</h4>

                        <a href="/storage/{{ $item->file }}" target="_blank" class="my-1 text-dark">
                            <i class="lni lni-arrow-right"></i>
                            <u>{{ $item->subtitle }}
                            </u>
                        </a><br>

                    @endforeach
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <h6>{{ $directives->links() }}</h6>
                    </div>
                </div>




                </p>

            </div>

        </div>
    </section>
    <!-- ====== directive End ====== -->


@endsection
