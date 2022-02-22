@extends('layouts.merge.dashboard')
@section('titulo', 'Cadastrar Multa da Viatura')
@section('content')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">

            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Cadastro  de Multa da Viatura </h4>
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>

                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    <form method="POST" action="{{ route('admin.MultaViaturas.store') }}" enctype="multipart/form-data">
                        @csrf
                        @include("forms._formMultaViatura.index")

                            <div>
                                <button class="btn btn-primary" type="submite">Cadastro </button>
                            </div>
                        </form>

                    </div>
                </div>

            </div>

        </div>


    </div>
</div>

@endsection
