@extends('layouts.merge.site')
@section('titulo', 'Portal Oficial da CNE - Mandato')
@section('content')

    <!-- ====== Banner Start ====== -->
    <section class="ud-page-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ud-banner-content">
                        <h1>Mandato</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Banner End ====== -->

    <!-- ====== mandate  Start ====== -->
    @foreach ($mandates as $item)


        <section class="ud-blog-details">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-5">
                        <h2 class="ud-blog-details-title">
                            {{ $item->title }}

                        </h2>

                        <p class="text-dark">
                            {{ $item->information }}


                        </p>

                    </div>
                </div>
            </div>
        </section>

    @endforeach
    <!-- ====== mandate  End ====== -->

@endsection
