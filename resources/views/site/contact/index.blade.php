@extends('layouts.merge.site')
@section('titulo', 'Portal Oficial da CNE - Legislação')
@section('content')

    <!-- ====== Banner Start ====== -->
    <section class="ud-page-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ud-banner-content">
                        <h1> Contactos</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Banner End ====== -->

    <!-- ====== legislation Start ====== -->
    <section class="ud-blog-details ">
        <div class="container mb-5 rounded  shadow-sm border p-3">
            <div class="row ">
                <div class="col-sm p-2">
                    <h3>Conctate-nos</h3>
                    <p> <i class="lni lni-map-marker lni-500px"></i> Endereço {{ $configuration->adress }}</p>
                    <p> <i class="lni lni-phone"></i> Telefone:{{ $configuration->telefone }}</p>
                    <p> <i class="lni lni-envelope"></i> E-mail :{{ $configuration->email }}</p>
                    <p>Segue-nos nas redes sociais:</p>

                    <ul class="list-unstyled mt-2 mb-2 ">
                        <li style="margin-right:10px;" class="d-inline text-dark">
                            <a href="{{ $configuration->facebook }}" target="_blank">
                                <i class="lni lni-facebook-filled"></i> Facebook
                            </a>
                        </li>
                        <li style="margin-right:10px;" class="d-inline text-dark">
                            <a href="{{ $configuration->twitter }}" target="_blank">
                                <i class="lni lni-twitter-filled"></i> Twitter
                            </a>
                        </li>
                        <li class="d-inline text-dark">
                            <a href="{{ $configuration->instagram }}" target="_blank">
                                <i class="lni lni-instagram-filled"></i> Instagram
                            </a>
                        </li>
                    </ul>


                </div>

                <div class="col-sm">
                    <h3><Em>Endereço das CPFs</Em></h3>
                    <p class="text-muted">Para votar no estrangeiro</p>
                    <ul class="list-unstyled mt-2 mb-2 ">

                    </ul>
                </div>
            </div>

        </div>
    </section>
    <!-- ====== legislation End ====== -->


@endsection
