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
            <center><h3>Lista de Multas</h3></center>

               <table class="table table-striped table-vcenter mb-0">
                <thead class="thead-dark">
                    <tr class="text-center">
                        <th>#</th>
                        <th>Modelo</th>
                        <th>Matricula</th>
                        <th>Valor da Multa</th>
                        <th>Motorista</th>
                        <th>DATA DE CRIAÇÃO</th>

                        <th>ACÇÕES</th>
                    </tr>
                </thead>
                <tbody class="bg-white">

                    @foreach ($multaviaturas as $item)
                        <tr class="text-center text-dark">
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->viaturas->modelo }} </td>
                            <td>{{ $item->viaturas->matricula }} </td>
                            <td> {!! number_format($item->valoMulta, 2, ',', '.') . ' ' . 'KZ' !!}  </td>
                            <td>{{ $item->usuarios->name }} </td>
                            <td>{{ $item->created_at }} </td>


                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-dark btn-sm dropdown-toggle" type="button"
                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="fa fa-clone fa-sm" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a href='{{ url("admin/user/show/{$item->id}") }}'
                                            class="dropdown-item">Detalhes</a>
                                        <a href='{{ url("admin/user/edit/{$item->id}") }}'
                                            class="dropdown-item">Editar</a>
                                        <a href='{{ url("admin/user/delete/{$item->id}") }}'
                                            class="dropdown-item">Eliminar</a>


                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>


        </div>
    </div>



@endsection
