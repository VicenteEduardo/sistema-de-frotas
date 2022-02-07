@extends('layouts.merge.site')
@section('titulo', 'Portal Oficial da CNE - Estrutura orgânica cadastrar')
@section('content')

    <!-- ====== Banner Start ====== -->
    <section class="ud-page-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ud-banner-content">
                        <h1>Estrutura Orgânica</h1>
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
                <div class="col-md-12 text-center mb-5">

                    @foreach ($structures as $item)
                        @if ($item->file == '/site/images/estruture/index.jpg')
                            <img src="{{ $item->file }}" alt="">
                        @endif
                        <img src="/storage/{{ $item->file }}" alt="">
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!-- ====== estruture End ====== -->


@endsection
