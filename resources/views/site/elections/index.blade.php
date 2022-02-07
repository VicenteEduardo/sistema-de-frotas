@extends('layouts.merge.site')
@section('titulo', 'Portal Oficial da CNE - Legislação')
@section('content')

    <!-- ====== Banner Start ====== -->
    <section class="ud-page-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ud-banner-content">
                        <h1>Eleições->{{ $election->electionDate }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Banner End ====== -->

    <!-- ====== legislation Start ====== -->
    <section class="ud-blog-details">
        <div class="container">

            <center><img  src="/storage/{{ $election->image }}"></center>
            <br><br>

        </div>
    </section>
    <!-- ====== legislation End ====== -->


@endsection
