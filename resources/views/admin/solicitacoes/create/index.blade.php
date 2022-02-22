@extends('layouts.merge.dashboard')
@section('titulo', 'Cadastrar Atribuições de viaturas')
@section('content')

<div class="page-content">
    <div class="container-fluid">



        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Solicitaçao de Viaturas </h4>
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>

                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    <form method="POST" action="{{ route('admin.solicitacoes.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-12">
                            <div class="mb-6">
                                <label for="gastos" class="form-label">Quantos KG deseja carregar?</label>
                   <input type="number" class="form-control" id="gastos"
                required name="quantidade_KG" placeholder="digite a quantidade de KG deseja carregar">

                            </div>
                        </div><br>
                        <center>  <button class="btn btn-primary" type="submite">Solicitar</button></center>

                            </div>
                        </form>

                    </div>
                </div>

            </div>

        </div>


    </div>
</div>
@if(session('indesponivelS'))
<script>
    Swal.fire({
        icon: 'error',
        title: 'Nao foi encontrado viaturas disponiveis para suportar esta quantidade de KG!',
        showConfirmButton: true
    })
</script>

@endif
@endsection
