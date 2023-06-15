<!--

=========================================================
* Now UI Dashboard - v1.5.0
=========================================================

* Product Page: https://www.creative-tim.com/product/now-ui-dashboard
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Designed by www.invisionapp.com Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('/base2/img/apple-icon.png') }} ">
  <link rel="icon" type="image/png" href="{{ asset('/base2/img/favicon.png') }}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Leve Limpo
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="{{ asset('/base2/css/bootstrap.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('/base2/css/now-ui-dashboard.css?v=1.5.0') }}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{ asset('/base2/1demo/demo.css') }}" rel="stylesheet" />




  <!-- App CSS -->

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
      integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet" />



</head>
<body class="">
    <div class="wrapper ">
      <div class="sidebar" data-color="orange">
        <!--
          Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
      -->
        <div class="logo">
          <a href="http://www.creative-tim.com" class="simple-text logo-mini">
            
          </a>
          <a href="http://www.creative-tim.com" class="simple-text logo-normal">
           Leve Limpo
          </a>
        </div>
        <div class="sidebar-wrapper" id="sidebar-wrapper">
          
          <ul class="nav">

            <li class="{{ (request()->is('painel')) ? 'active' : '' }}">  
              <a href="{{ asset('/') }}">
                <i class="now-ui-icons design_app"></i>
                <p>Painel </p>
              </a>
            </li>
            {{-- <li class="{{ (request()->is('vender')) ? 'active' : '' }}">  
              <a href="{{ asset('/vender') }}">
                <i class="now-ui-icons design_app"></i>
                <p>VENDER </p>
              </a>
            </li> --}}
            
            <li class="{{ (request()->is('calendar/index')) ? 'active' : '' }}">  
              <a href="{{ asset('/calendar/index') }}">
                <i class="now-ui-icons ui-1_calendar-60 "></i>
                <p>Calendário</p>
              </a>
            </li>

            <li class="{{ (request()->is('minhaempresa')) ? 'active' : '' }}">  
              <a href="{{ asset('/minhaempresa') }}">
                <i class="now-ui-icons business_badge"></i>
                <p>Minha Empresa</p>
              </a>
            </li>

            {{-- <li class="{{ (request()->is('pedidos')) ? 'active' : '' }}">  
              <a href="{{ asset('/pedidos') }}">
                <i class="now-ui-icosns ">2</i>
                <p>PEDIDOS </p>
              </a>
            </li> --}}

            <li class="{{ (request()->is('cliente')) ? 'active' : '' }}">  

              <a href="{{ asset('/cliente') }}">
                <i class="now-ui-icons users_single-02"></i>
                <p>Cliente</p>
              </a>
            </li>

            <li class="{{ (request()->is('fornecedor')) ? 'active' : '' }}">  
              <a href="{{ asset('/fornecedor') }}">
                <i class="now-ui-icons business_briefcase-24"></i>
                <p>Fornecedor</p>
              </a>
            </li>

            <li class="{{ (request()->is('produtos')) ? 'active' : '' }}">  
              <a href="{{ asset('/produtos') }}">
                <i class="now-ui-icons shopping_bag-16"></i>
                <p>Produtos</p>
              </a>
            </li>

            <li class="{{ (request()->is('contrato')) ? 'active' : '' }}">  
              <a href="{{ asset('/contrato') }}">
                <i class="now-ui-icons education_paper "></i>
                <p>Contrato</p>
              </a>
            </li>

            <li class="{{ (request()->is('recibos')) ? 'active' : '' }}">  
              <a href="{{ asset('/recibos') }}">
                <i class="now-ui-icons files_single-copy-04"></i>
                <p>Recibos</p>
              </a>
            </li>
   
            <li class="{{ (request()->is('users')) ? 'active' : '' }}">  
              <a href="{{ asset('/users') }}">
                <i class="now-ui-icons users_circle-08"></i>
                <p>Usuários</p>
              </a>
            </li>

            <li class="{{ (request()->is('roles')) ? 'active' : '' }}">  
              <a href="{{ asset('/roles') }}">
                <i class="now-ui-icons education_agenda-bookmark "></i>
                <p>Perfis</p>
              </a>
            </li>
            <hr>
            <li class="dropdown dropright {{ (request()->is('API')) ? 'active' : '' }}">
              <a   id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="now-ui-icons education_agenda-bookmark "></i>

                Serviços </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu2">
                <a class="dropdown-item" href="{{ asset('/API/CNPJ') }}">Consulta de CNPJ</a>
                <a class="dropdown-item" href="{{ asset('/API/CEP') }}">Consulta de CEP</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ asset('/Objetos/teclado2') }}">Treine a sua Digitação</a>
                <a class="dropdown-item" href="{{ asset('/Objetos/piano') }}">Toque Piano</a>
              </div> 
            </li>
          </ul>
        </div>
      </div>
      <div class="main-panel" id="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
          <div class="container-fluid">
            <div class="navbar-wrapper">
              <div class="navbar-toggle">
                <button type="button" class="navbar-toggler">
                  <span class="navbar-toggler-bar bar1"></span>
                  <span class="navbar-toggler-bar bar2"></span>
                  <span class="navbar-toggler-bar bar3"></span>
                </button>
              </div>
              <a class="navbar-brand" href="#pablo">{{$titulo}}</a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-bar navbar-kebab"></span>
              <span class="navbar-toggler-bar navbar-kebab"></span>
              <span class="navbar-toggler-bar navbar-kebab"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">

              <ul class="navbar-nav">
                {{-- <li class="nav-item">
                  <a class="nav-link" href="/Site">
                    <i class="now-ui-icons media-2_sound-wave"></i>
                    <p>
                      <span class="d-lg-none d-md-block">Stats</span>
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/Site">
                    <i class="now-ui-icons media-2_sound-wave"></i>
                    <p>
                      <span class="d-lg-none d-md-block">Stats</span>
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/Site">
                    <i class="now-ui-icons media-2_sound-wave"></i>
                    <p>
                      <span class="d-lg-none d-md-block">Stats</span>
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/Site">
                    <i class="now-ui-icons media-2_sound-wave"></i>
                    <p>
                      <span class="d-lg-none d-md-block">Stats</span>
                    </p>
                  </a>
                </li> --}}
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="now-ui-icons users_single-02"></i>
                    <p>
                      <span class="d-lg-none d-md-block">Usuário</span>
                    </p>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{ asset('/logout') }}"> <i class="now-ui-icons sport_user-run "></i> 
                       Sair do sistema</a>
                  </div>
                </li>
 
              </ul>
            </div>
          </div>
        </nav>

    @yield('content')

    <footer class="footer">
        <div class=" container-fluid ">

         
        </div>
      </footer>

      
      
    <script src="{{ asset('base2/js/core/jquery.min.js') }} "></script>
    <script src="{{ asset('base2/js/core/popper.min.js') }} "></script>
    <script src="{{ asset('base2/assets/js/core/bootstrap.min.js') }} "></script>
    <script src="{{ asset('base2/js/plugins/perfect-scrollbar.jquery.min.js') }} "></script>
    <!--  Google Maps Plugin    -->
    <!-- Chart JS -->
    <script src="{{ asset('bas2/js/plugins/chartjs.min.js') }} "></script>
    <!--  Notifications Plugin    -->
    <script src="{{ asset('base2/js/plugins/bootstrap-notify.js') }} "></script>
    <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('base2/js/now-ui-dashboard.min.js?v=1.5.0js') }}" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{ asset('base2/demo/demo.js') }}"></script> 
    <script>
      $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();
  
      });
    </script>



<script src="{{asset('/js/calendar/jquery.min.js')}}"></script>
<script src="{{asset('/js/calendar/jquery-ui.min.js')}}"></script>
<script src="{{asset('/js/calendar/moment.min.js')}}"></script>
<script src="{{asset('/js/calendar/fullcalendar.min.js')}}"></script>

    {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script> --}}
    <!-- Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>

    <script src="{{ asset('base/popper.min.js') }}"></script>
    <script src="{{ asset('base/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- <script src="assets/plugins/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>   -->

    <!-- Charts JS -->
    <script src="{{ asset('base/chart.js/chart.min.js') }}"></script>
    <script src="{{ asset('js/base/index-charts.js') }}"></script>
    <!-- <script src="assets/plugins/chart.js/chart.min.js"></script>
    <script src="assets/js/index-charts.js"></script>  -->

    <!-- Page Specific JS -->
    <script src="{{ asset('js/base/app.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="{{ asset('/js/upload-script.js') }}"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.js"></script> --}}

    <script src="{{ asset('js/form-empresa-script.js') }}"></script>


    <script>
        $('#product').ddslick({
            width: "100%",

        });
    </script>

    <script>
        //Duplicar linha de Produto e Quantidade em Criar Orçamento

        $(document).ready(function() {
            let row_number = 1;
            $("#add_row").click(function(e) {
                e.preventDefault();
                let new_row_number = row_number - 1;
                $('#product' + row_number).html($('#product' + new_row_number).html()).find(
                    'td:first-child');
                $('#products_table').append('<tr id="product' + (row_number + 1) + '"></tr>');
                row_number++;
            });
            $("#delete_row").click(function(e) {
                e.preventDefault();
                if (row_number > 1) {
                    $("#product" + (row_number - 1)).html('');
                    row_number--;
                }
            });
        });
    </script>

    <script>
        // Script do capiroto que funciona só para o 1o item. Os demais itens não são modificados.
        function custom_template1(obj) {
            var data = $(obj.element).data();
            var text = $(obj.element).text();
            if (data && data['img_src']) {
                img_src = data['img_src'];
                template = $("<div><br><br><img src=\"" + img_src +
                    "\" style=\"background-color:#0000;width:100px;border-radius:8px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);\"/> <br><br>  <p style=\"font-weight:600;font-size:14px;text-align:left;\">" +
                    text + "</p> <br> </div>");
                return template;
            }
        }

        function custom_template2(obj) {
            var data = $(obj.element).data();
            var text = $(obj.element).text();
            if (data && data['img_src']) {
                img_src = data['img_src'];
                template = $("<img src=\"" + img_src +
                    "\" style=\"width:50px;display:block;float:left;border-radius:8px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);\"/><p style=\"font-weight:600;font-size:10px;text-align:center;\">" +
                    text + "</p> <br> </div>");
                return template;
            }
        }
        var options = {
            'templateSelection': custom_template1,
            'templateResult': custom_template2,
        }
        $('.id_select2_example').select2(options)({
            placeholder: "What???????", //placeholder

        });
    </script>




</body>

</html>
