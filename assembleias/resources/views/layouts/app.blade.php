<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">



    <title>{{ config('app.name', 'Assembleias') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- scripts JS -->
    <!-- select 2 -->
    
    <!-- End Select 2 -->
    <!-- select2 -->
    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="{{ asset('js/select2.min.js') }}"></script>
    <!-- select2 -->


</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/home') }}">
                        {{ config('app.name', 'Assembleias') }}
                    </a>

                    <!-- Branding Image -->
                    <!-- <a class="navbar-brand" href="{{ url('/assembleia') }}"> Distâncias</a> -->
                        <!-- <a class="navbar-brand" href="{{ url('/modal') }}/modal_distancia" data-toggle="modal" data-target="#modal_distancia" > Distâncias</a> -->

                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <ul class="nav navbar-nav ">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                           <!--//-->
                           
                        @else
                       
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                   Admin <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                          
                    <li><a href="{{ url('/assembleia') }}"> Assembleias</a></li>
                    <li><a href="{{ url('/municipio') }}"> Municípios</a></li>

                                    </li>
                                </ul>
                            </li>

                            <!-- Menu Usuários -->
                            <?php 
                            $usuario_logado = Auth::user()->email;
                            if ($usuario_logado == "7miguelsilva7@gmail.com") { ?>
                            
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                   Usuários <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                              <li>
                                <li ><a href="{{url('/user')}}"><i class="fa fa-users"></i> <span>Usuários</span></a></li>
						                    <li ><a href="{{url('/role')}}"><i class="fa fa-user-plus"></i> <span>Regras</span></a></li>
						                    <li ><a href="{{url('/permission')}}"><i class="fa fa-key"></i> <span>Permissões</span></a></li> 
                              </li>
                                </ul>
                            </li>
                            <?php } ?>

                        @endif
                    </ul>                    

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Registrar</a></li>
                        @else

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

            <!-- script Select2 -->
            <script>
            // $(document).ready(function() {
            $(window).load(function() {
                $('.js-example-basic-single').select2();
            });
            </script>
            <!-- script Select2 -->


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class = 'AjaxisModal'>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modal_distancia" tabindex="-1" role="dialog" aria-labelledby="modal_distancia">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="modal_distancia">Cidade de Origem</h4>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
          </div>
        </div>
      </div>
    </div>

        <!-- Compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.5/js/app.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.5/js/demo.js"></script>
		<script> var baseURL = "{{ URL::to('/') }}"</script>
		<script src = "{{URL::asset('js/AjaxisBootstrap.js') }}"></script>
		<script src = "{{URL::asset('js/scaffold-interface-js/customA.js') }}"></script>
