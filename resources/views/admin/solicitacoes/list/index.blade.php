
@extends('layouts.merge.dashboard')
@section('titulo', 'Cadastrar Atribuições de viaturas')
@section('content')



    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Viaturas Disponiveis</h4>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">

                    <div class="row">



@foreach ($viaturas_desponivel as $item )


                        <div class="col-xl-4 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="product-img position-relative">
                                        <div class="avatar-sm product-ribbon">
                                            <span class="avatar-title rounded-circle bg-primary">
                                              {{ $item->quantidade }} KG
                                            </span>
                                        </div>

                                        <img src="/storage/{{ $item->imagem_viatura }}" alt="" class="img-fluid mx-auto d-block">
                                    </div>
                                    <div class="mt-4 text-center">
                                        <h5 class="mb-3 text-truncate"><a href="show/{{ $item->id }}" class="text-dark">{{ $item->modelo }}</a></h5>


                                        <h5 class="my-0">Matricula :{{ $item->matricula }}</h5>

                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="pagination pagination-rounded justify-content-center mt-3 mb-4 pb-1">
                                <li class="page-item disabled">
                                    <a href="javascript: void(0);" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                                </li>
                                <li class="page-item">
                                    <a href="javascript: void(0);" class="page-link">1</a>
                                </li>

                                <li class="page-item">
                                    <a href="javascript: void(0);" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->



@endsection
