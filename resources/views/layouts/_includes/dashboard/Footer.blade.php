<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <script>document.write(new Date().getFullYear())</script> © Sistema de Gestão  de Frotas.
            </div>

    </div>
</footer>
</div>
<!-- end main content-->

</div>
<!-- END layout-wrapper -->

<!-- Right Sidebar -->
<div class="right-bar">
<div data-simplebar class="h-100">
<div class="rightbar-title d-flex align-items-center px-3 py-4">

    <h5 class="m-0 me-2">Settings</h5>

    <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
        <i class="mdi mdi-close noti-icon"></i>
    </a>
</div>

<!-- Settings -->
<hr class="mt-0" />
<h6 class="text-center mb-0">Choose Layouts</h6>

<div class="p-4">
    <div class="mb-2">
        <img src="/dashboard/images/layouts/layout-1.jpg" class="img-thumbnail" alt="layout images">
    </div>

    <div class="form-check form-switch mb-3">
        <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked>
        <label class="form-check-label" for="light-mode-switch">Light Mode</label>
    </div>

    <div class="mb-2">
        <img src="/dashboard/images/layouts/layout-2.jpg" class="img-thumbnail" alt="layout images">
    </div>
    <div class="form-check form-switch mb-3">
        <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch">
        <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
    </div>

    <div class="mb-2">
        <img src="/dashboard/images/layouts/layout-3.jpg" class="img-thumbnail" alt="layout images">
    </div>
    <div class="form-check form-switch mb-3">
        <input class="form-check-input theme-choice" type="checkbox" id="rtl-mode-switch">
        <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
    </div>

    <div class="mb-2">
        <img src="/dashboard/images/layouts/layout-4.jpg" class="img-thumbnail" alt="layout images">
    </div>
    <div class="form-check form-switch mb-5">
        <input class="form-check-input theme-choice" type="checkbox" id="dark-rtl-mode-switch">
        <label class="form-check-label" for="dark-rtl-mode-switch">Dark RTL Mode</label>
    </div>


</div>

</div> <!-- end slimscroll-menu-->
</div>
<!-- /Right-bar -->

<!-- Right bar overlay-->

<div class="rightbar-overlay"></div>


<script src="/dashboard/assets/libs/jquery/jquery.min.js"></script>
<script src="/dashboard/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/metismenu/metisMenu.min.js"></script>
<script src="/dashboard/assets/libs/simplebar/simplebar.min.js"></script>
<script src="/dashboard/assets/libs/node-waves/waves.min.js"></script>

<!-- apexcharts -->
<script src="/dashboard/assets/libs/apexcharts/apexcharts.min.js"></script>

<!-- dashboard init -->
<script src="/dashboard/assets/js/pages/dashboard.init.js"></script>

<!-- App js -->
<script src="/dashboard/assets/js/app.js"></script>
        @if (session('create'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Cadastrado com sucesso!',
                showConfirmButton: true
            })
        </script>

    @elseif(session('destroy'))
        <script>
            Swal.fire({
                icon: 'info',
                title: 'Eliminado com sucesso!',
                showConfirmButton: true
            })
        </script>

    @elseif(session('candidates'))
        <script>
            Swal.fire({
                icon: 'info',
                title: 'Este estudante não consta na lista de estudantes por favor cadastre primeiro!',
                showConfirmButton: true
            })
        </script>


    @elseif(session('edit'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Alterações foram salvas com sucesso!',
                showConfirmButton: true
            })
        </script>
    @elseif(session('create_image'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Imagens foram salvas com sucesso!',
                showConfirmButton: true
            })
        </script>

    @elseif(session('erro_students'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Este estudante já esta cadastrado nesta turma e curso!',
                showConfirmButton: true
            })
        </script>

    @elseif(session('romm_occupied'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Esta sala estará ocupada neste horário!',
                showConfirmButton: true
            })
        </script>

    @elseif(session('room_Satatus'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Existe uma sala com este nome!',
                showConfirmButton: true
            })
        </script>


    @elseif(session('existing_candidate'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Já existe um estudante com este Número de Identificação',
                showConfirmButton: true
            })
        </script>

    @elseif(session('NoAuth'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Não tem autorização para visualizar esta página!',
                showConfirmButton: false,
                timer: 2500
            })
        </script>

    @elseif(session('candidates_status'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Não foi encontrado Pagamento deste Estudante com o status pago !',
                showConfirmButton: false,
                timer: 4500
            })
        </script>
    @endif

    <script>
        function mens() {
            confirm('Tem certeza de que deseja excluir este arquivo');
        }
    </script>
<!-- App js -->
<script src="/dashboard/js/app.js"></script>
</body>


</html>
