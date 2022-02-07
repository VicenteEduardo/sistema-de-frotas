@extends('layouts.merge.site')
@section('titulo', 'Portal Oficial da CNE - Estrutura orgânica cadastrar')
@section('content')

    <!-- ====== Banner Start ====== -->
    <section class="ud-page-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ud-banner-content">
                        <h1>Presidente</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Banner End ====== -->

    <!-- ====== estruture Start ====== -->

    @foreach ($presidents as $item)


        <section class="ud-blog-details">
            <div class="container">
                <div class="row">
                    <center>
                        <h3>{{ $item->title }}</h3>
                    </center><br><br><br>
                    <img src="/storage/{{ $item->file }}" width="700" height="600">
                    <br><br><br>
                    <div class="col-md-12 text-center mb-5">
                        <br>
                        <br>
                        {{ $item->information }}

                    </div>
                </div>
            </div>
        </section>
    @endforeach
    <!-- ====== estruture End ====== -->


@endsection
