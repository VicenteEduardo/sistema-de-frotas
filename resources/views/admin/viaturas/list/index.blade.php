@extends('layouts.merge.dashboard')
@section('titulo', 'Lista de Viaturas')

@section('content')
    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title">

            </h2>
        </div>
    </div>
    <br><br>
    <div class="card shadow mb-4">
        <div class="card-body">
            <center><h3>Lista de Viaturas </h3></center>
               <table class="table table-striped table-vcenter mb-0">
                <thead class="thead-dark">
                    <tr class="text-center">

                        <th>Modelo</th>
                        <th>Matricula</th>
                        <th>Carga Suportada</th>
                        <th>DATA DE CRIAÇÃO</th>

                        <th>ACÇÕES</th>
                    </tr>
                </thead>
                <tbody class="bg-white">

                    @foreach ($viaturas as $item)
                        <tr class="text-center text-dark">

                            <td>{{ $item->modelo }} </td>
                            <td>{{ $item->matricula }} </td>
                            <td>{{ $item->quantidade }} </td>
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
