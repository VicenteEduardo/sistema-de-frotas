@extends('layouts.merge.dashboard')
@section('titulo', 'Lista de Utilizadores')

@section('content')
    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title">
                Lista de Utilizadores
            </h2>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">
            <center><h3>Lista de Atribuições de Viaturas</h3></center>
               <table class="table table-striped table-vcenter mb-0">
                <thead class="thead-dark">
                    <tr class="text-center">
                        <th>#</th>
                        <th>Modelo</th>
                        <th>Matricula</th>
                        <th>Carga Suportada</th>
                        <th>Motorista</th>
                        <th>DATA DE CRIAÇÃO</th>

                        <th>ACÇÕES</th>
                    </tr>
                </thead>
                <tbody class="bg-white">

                    @foreach ($atribucoesViaturas as $item)
                        <tr class="text-center text-dark">
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->viaturas->modelo }} </td>
                            <td>{{ $item->viaturas->matricula }} </td>
                            <td>{{ $item->viaturas->quantidade }} </td>
                            <td>{{ $item->usuarios->name }} </td>
                            <td>{{ $item->created_at }} </td>



                            <td>
                                <a data-toggle="tooltip" title="Editar"  href="{{ url("admin/viaturas/edit/{$item->id}") }}">Editar   <i class="bx bx-edit-alt"></i></a>

                                <a data-toggle="tooltip" title="Eliminar" href="{{ url("admin/viaturas/delete/{$item->id}") }}"> Apagar  <i class="mdi mdi-delete"></i></a>

                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>


        </div>
    </div>



@endsection
