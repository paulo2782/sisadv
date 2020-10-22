@include('layout/layout')
<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <img src="{{ asset('logo.png') }}" class="img-fluid img-thumbnail img-responsive" alt="Responsive image" style="border:none;">
            </div>

            <ul class="list-unstyled components">
                <p>SISADV</p>
                <li>
                    <a href="{{route('home')}}">Home</a>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Clientes</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="{{route('cadCliente')}}">Cadastro</a>
                        </li>
                        <li>
                            <a href="{{route('conCliente')}}">Consulta</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#pageSubmenuParteAdversa" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Parte Adversa</a>
                    <ul class="collapse list-unstyled" id="pageSubmenuParteAdversa">
                       <li>
                            <a href="{{route('cadParteAdversa')}}">Cadastro</a>
                        </li>
                        <li>
                            <a href="{{route('conParteAdversa')}}">Consulta</a>
                        </li>
                    </ul>
                </li>
                
                <li>
                    <a href="#pageSubmenuProcessos" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Processos</a>
                    <ul class="collapse list-unstyled" id="pageSubmenuProcessos">
                       <li>
                            <a href="{{route('abrirProcesso')}}">Cadastro</a>
                        </li>
                        <li>
                            <a href="{{route('processosAbertos',$rota='processos')}}">Consulta</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#pageSubmenuRamos" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Ramos</a>
                    <ul class="collapse list-unstyled" id="pageSubmenuRamos">
                       <li>
                            <a href="{{route('cadRamoDireito')}}">Cadastro</a>
                        </li>
                    </ul>

<!--                 <li>
                    <a href="#pageSubmenuHonorarios" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Honorários</a>
                    <ul class="collapse list-unstyled" id="pageSubmenuHonorarios">
                       <li>
                            <a href="{{ route('cadHonorario') }}">Serviços</a>
                        </li>
                    </ul>

                </li>
 --><!--                 <li>
                    <a href="#pageSubmenuRelatorios" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Relatórios</a>
                    <ul class="collapse list-unstyled" id="pageSubmenuRelatorios">
                       <li>
                            <a href="{{ route('relClientes') }}">Clientes</a>
                            <a href="#">Processos</a>
                            <a href="#">Parte Adversa</a>
                            <a href="#">Ramos</a>
                        </li>
                    </ul>
                </li>

 -->
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <!-- <a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a> -->
                </li>
                <li>
                    <!-- <a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a> -->
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Menu Lateral</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <!-- <a class="nav-link" href="#">Page</a> -->
                            </li>
                            <li class="nav-item">
                                <!-- <a class="nav-link" href="#">Page</a> -->
                            </li>
                            <li class="nav-item">
                                <!-- <a class="nav-link" href="#">Page</a> -->
                            </li>
                            <li class="nav-item">
                                <!-- <a class="nav-link" href="#">Page</a> -->
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

      
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>

</html>