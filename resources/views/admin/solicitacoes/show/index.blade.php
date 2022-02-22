@extends('layouts.merge.dashboard')
@section('titulo', 'Detalhes da Viatura')
@section('content')
<div >

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Detalhe da Viatura</h4>


                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="product-detai-imgs">
                                        <div class="row">
                                            <div class="col-md-2 col-sm-3 col-4">
                                                <div class="nav flex-column nav-pills " id="v-pills-tab" role="tablist" aria-orientation="vertical">

                                                </div>
                                            </div>
                                            <div class="col-md-7 offset-md-1 col-sm-9 col-8">
                                                <div class="tab-content" id="v-pills-tabContent">
                                                    <div class="tab-pane fade show active" id="product-1" role="tabpanel" aria-labelledby="product-1-tab">
                                                        <div>
                                                            <img src="../storage/{{$viatura->imagem_viatura }}" alt="" class="img-fluid mx-auto d-block">
                                                        </div>
                                                    </div>


                                                </div>
                                                <div class="text-center">



                                                    <a href="{{ route('admin.solicitacoes.cadastrar', $viatura->id) }}" class="btn btn-success waves-effect  mt-2 waves-light">
                                                        <i class="bx bx-shopping-bag me-2"></i>Solicitar</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="mt-4 mt-xl-3">
                                        <a href="javascript: void(0);" class="text-primary">{{ $viatura->modelo }}</a>
                                        <h4 class="mt-1 mb-3">Matricula: {{ $viatura->matricula }}</h4>


                                        <p class="text-muted mb-4">(Carga  suporta {{ $viatura->quantidade }} KG )</p>



                                        <p class="text-muted mb-4">{{ $viatura->descricao }}</p>

                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                        </div>
                    </div>
                    <!-- end card -->
                </div>
            </div>
            <!-- end row -->

            <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

</div>
@endsection
