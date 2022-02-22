<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">Menu</li>

                <li>
                    <a href="{{ route('admin.home') }}" class="waves-effect">
                        <i class="bx bx-home-circle"></i><span class="badge rounded-pill bg-info float-end"></span>
                        <span key="t-dashboards">Dashboards</span>
                    </a>

                </li>



@if(Auth::user()->level=="Administrador")
<li>
    <a href="javascript: void(0);" class="has-arrow waves-effect">
        <i class="bx bx-store"></i>
        <span key="t-ecommerce">Viaturas</span>
    </a>
    <ul class="sub-menu" aria-expanded="false">
        <li><a href="{{ route('admin.viaturas.index') }}" key="t-light-sidebar">Listar Viaturas</a></li>
        <li><a href="{{ route('admin.viaturas.create') }}" key="t-light-sidebar">Cadastrar Viaturas</a></li>
    </ul>
</li>

<li>
    <a href="javascript: void(0);" class="has-arrow waves-effect">
        <i class="bx bx-store"></i>
        <span key="t-ecommerce">Atribuir Viaturas</span>
    </a>
    <ul class="sub-menu" aria-expanded="false">
        <li><a href="{{ route('admin.atribuicoes.index') }}" key="t-light-sidebar">Listar Atribuições </a></li>
        <li><a href="{{ route('admin.atribuicoes.create') }}" key="t-light-sidebar">Cadastrar Atribuição</a></li>
    </ul>
</li>

<li>
    <a href="javascript: void(0);" class="has-arrow waves-effect">
        <i class="bx bx-store"></i>
        <span key="t-ecommerce">Gastos de Combustivel</span>
    </a>
    <ul class="sub-menu" aria-expanded="false">
        <li><a href="{{ route('admin.gastosCombustivel.index') }}" key="t-light-sidebar">Listar Gastos</a></li>
        <li><a href="{{ route('admin.gastosCombustivel.create') }}" key="t-light-sidebar">Cadastrar Gastos</a></li>
    </ul>
</li>

<li>
    <a href="javascript: void(0);" class="has-arrow waves-effect">
        <i class="bx bx-store"></i>
        <span key="t-ecommerce">Multas de Viaturas</span>
    </a>
    <ul class="sub-menu" aria-expanded="false">
        <li><a href="{{ route('admin.MultaViaturas.index') }}" key="t-light-sidebar">Listar Gastos</a></li>
        <li><a href="{{ route('admin.MultaViaturas.create') }}" key="t-light-sidebar">Cadastrar Multas</a></li>
    </ul>
</li>

@endif
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-store"></i>
                        <span key="t-ecommerce">Solicitaçoes</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.solicitacoes.listar') }}" key="t-light-sidebar">

                            @if ( Auth::user()->level=="Administrador")
                            Listar Solicitações
                            @else
Minhas Solicitações
                            @endif
                 </a></li>
                        <li><a href="{{ route('admin.solicitacoes.create') }}" key="t-light-sidebar">
                                                    Cadastrar Solicitações </a></li>
                    </ul>
                </li>

                @if(Auth::user()->level=="Administrador")
                <li>

                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-store"></i>
                        <span key="t-ecommerce">Usuários</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.user.index') }}" key="t-light-sidebar">Listar usuários</a></li>
                        <li><a href="{{ route('admin.user.create') }}" key="t-light-sidebar">Cadastrar usuários</a></li>
                    </ul>
                </li>
                @endif


            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>

