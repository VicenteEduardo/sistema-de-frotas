@extends('layouts.merge.dashboard')
@section('titulo', 'Cadastrar Atribuições de viaturas')
@section('content')


    <div class="page-content">
        <div class="container-fluid">


            <!-- end page title -->

            <form method="POST" action="{{ route('admin.cadastrar.store') }}" enctype="multipart/form-data">
                @csrf
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>

                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                <div class="checkout-tabs">
                    <div class="row">
                        <div class="col-xl-2 col-sm-3">
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">
                                <a class="nav-link active" id="v-pills-shipping-tab" data-bs-toggle="pill"
                                    href="#v-pills-shipping" role="tab" aria-controls="v-pills-shipping"
                                    aria-selected="true">
                                    <i class="bx bx-user mt-4 mb-4"></i>
                                    <usuário class="fw-bold mb-4">Usuário Info</p>
                                </a>
                                <a class="nav-link" id="v-pills-payment-tab" data-bs-toggle="pill"
                                    href="#v-pills-payment" role="tab" aria-controls="v-pills-payment"
                                    aria-selected="false">
                                    <i class="bx bx-money d-block check-nav-icon mt-4 mb-2"></i>
                                    <p class="fw-bold mb-4">Pagamento Info</p>
                                </a>
                                <a class="nav-link" id="v-pills-confir-tab" data-bs-toggle="pill"
                                    href="#v-pills-confir" role="tab" aria-controls="v-pills-confir" aria-selected="false">
                                    <i class="bx bx-badge-check d-block check-nav-icon mt-4 mb-2"></i>
                                    <p class="fw-bold mb-4">Confirmação </p>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-sm-9">
                            <div class="card">
                                <div class="card-body">
                                    <div class="tab-content" id="v-pills-tabContent">
                                        <div class="tab-pane fade show active" id="v-pills-shipping" role="tabpanel"
                                            aria-labelledby="v-pills-shipping-tab">
                                            <div>
                                                <h4 class="card-title">informações do usuário </h4>

                                                <div class="form-group row mb-4">
                                                    <label for="billing-name" class="col-md-2 col-form-label">Nome
                                                        Completo</label>
                                                    <div class="col-md-10">
                                                        <input disabled value="{{ Auth::user()->name }}" type="text"
                                                            class="form-control" id="billing-name"
                                                            placeholder="Enter your name">
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-4">
                                                    <label for="billing-email-address" class="col-md-2 col-form-label">Email
                                                    </label>
                                                    <div class="col-md-10">
                                                        <input disabled value="{{ Auth::user()->email }}" type="email"
                                                            class="form-control" id="billing-email-address"
                                                            placeholder="Enter your email">
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-4">
                                                    <label for="billing-phone"
                                                        class="col-md-2 col-form-label">Telefone</label>
                                                    <div class="col-md-10">
                                                        <input disabled value="{{ Auth::user()->telefone }}" type="text"
                                                            class="form-control" id="billing-phone">
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-4">
                                                    <label value="" for="billing-address"
                                                        class="col-md-2 col-form-label">Morada</label>
                                                    <div class="col-md-10">
                                                        <textarea disabled class="form-control" id="billing-address"
                                                            rows="3" placeholder="Enter full address">

                                                                    {{ Auth::user()->morada }}
                                                                </textarea>
                                                    </div>
                                                </div>




                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-payment" role="tabpanel"
                                            aria-labelledby="v-pills-payment-tab">
                                            <div>
                                                <h4 class="card-title">Informação do pagamento</h4>


                                                <h5 class="mt-5 mb-3 font-size-15">Formulário de Pagamento</h5>
                                                <div class="p-4 border">

                                                    <div class="form-group mb-0">
                                                        <label for="cardnumberInput">Informações do que vai carregar</label>
                                                        <textarea name="informacaoCarga" class="form-control" id="billing-address"
                                                            rows="3" placeholder="Enter full address">

                                                                </textarea>
                                                    </div>


                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="form-group mt-4 mb-0">
                                                                <label for="cardnameInput">Latitude </label>
                                                                <input name="latitude" type="text" class="form-control"
                                                                    id="cardnameInput">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group mt-4 mb-0">
                                                                <label for="expirydateInput">Longitude</label>
                                                                <input name="longitude" type="text" class="form-control"
                                                                    id="expirydateInput">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group mt-4 mb-0">
                                                                <label for="expirydateInput">Quantidade de Carga</label>
                                                                <input name="quantidadeCarga" type="text"
                                                                    class="form-control" id="expirydateInput">
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group mt-4 mb-0">
                                                                <label for="cardnameInput">Valor a Pagar </label>
                                                                <input name="valorPagar" type="text"
                                                                    class="form-control" id="cardnameInput">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <div class="form-group mt-4 mb-0">
                                                                <label for="expirydateInput">Anexo de Pagamento</label>
                                                                <input name="anexo" type="file" class="form-control"
                                                                    id="expirydateInput">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <div class="form-group mt-4 mb-0">
                                                                <label for="cvvcodeInput">Data de Entrega a</label>
                                                                <input name="EntregaData" type="date" class="form-control"
                                                                    id="cvvcodeInput" placeholder="Enter CVV Code">
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-confir" role="tabpanel"
                                            aria-labelledby="v-pills-confir-tab">
                                            <div class="card shadow-none border mb-0">
                                                <div class="card-body">
                                                    <h4 class="card-title mb-4">Informação da Viatura</h4>

                                                    <div class="table-responsive">
                                                        <table class="table align-middle mb-0 table-nowrap">
                                                            <thead class="table-light">
                                                                <tr>
                                                                    <th scope="col">Modelo</th>
                                                                    <th scope="col">Matricula</th>
                                                                    <th scope="col">Carga Suportada</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>

                                                                <tr>
                                                                    <th scope="row">{{ $viatura->modelo }}</th>
                                                                    <td>
                                                                        {{ $viatura->matricula }}
                                                                    </td>
                                                                    <td>{{ $viatura->quantidade }} KG</td>
                                                                </tr>
                                                                <input name="fk_viaturas" hidden
                                                                    value="{{ $viatura->id }}">

                                                            </tbody>
                                                        </table>

                                                        <div class="col-sm-6">
                                                            <div class="text-end">
                                                                <button type="submit" class="btn btn-success"> <i
                                                                        class="mdi mdi-truck-fast me-1"></i> Enviar
                                                                    Solicitação</button>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">

                                </div> <!-- end col -->
                            </div> <!-- end row -->
                        </div>
                    </div>
                </div>
                <!-- end row -->

        </div> <!-- container-fluid -->

        <!-- End Page-content -->
        </form>

    </div>

@endsection
