@extends('base.base')
@section('content')
<div class="panel-header panel-header-lg">
    <canvas id="bigDashboardChart"></canvas>
  </div>
  <div class="content">
    <div class="row">

      <div class="col-lg-4 col-md-6">
        <div class="card card-chart">
          <div class="card-header">
            <h5 class="card-category">Produtos cadastrados</h5>
            <h4 class="card-title">Produtos</h4>
            <center> <h1 class=""> {{$produto}} </h1> </center>

            <div class="dropdown">
              <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                <i class="now-ui-icons loader_gear"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="{{ asset('/produtos/create') }}">Cadastrar Produto</a>
                <a class="dropdown-item" href="{{ asset('/produtos') }}">Ver lista</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="chart-area">
              <canvas id="lineChartExampleWithNumbersAndGrid"></canvas>
            </div>
          </div>
          <div class="card-footer">
            <div class="stats">
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="card card-chart">
          <div class="card-header">
            <h5 class="card-category">Contratos cadastrados</h5>
            <h4 class="card-title">Contratos</h4>
            <center> <h1 class=""> {{$contrato}} </h1> </center>

            <div class="dropdown">
              <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                <i class="now-ui-icons loader_gear"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="{{ asset('/contrato/create') }}">Cadastrar Contrato</a>
                <a class="dropdown-item" href="{{ asset('/contrato') }}">Ver lista</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="chart-area">
              <canvas id="lineChartExampleWithNumbersAndGrid"></canvas>
            </div>
          </div>
          <div class="card-footer">
            <div class="stats">
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="card card-chart">
          <div class="card-header">
            <h5 class="card-category">Recibos cadastrados</h5>
            <h4 class="card-title">Recibos</h4>
            <center> <h1 class=""> {{$recibo}} </h1> </center>

            <div class="dropdown">
              <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                <i class="now-ui-icons loader_gear"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="{{ asset('/recibos/create') }}">Cadastrar Recibo</a>
                <a class="dropdown-item" href="{{ asset('/recibos') }}">Ver lista</a>
                {{-- <a class="dropdown-item text-danger" href="#">Remove Data</a> --}}
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="chart-area">
              <canvas id="lineChartExampleWithNumbersAndGrid"></canvas>
            </div>
          </div>
          <div class="card-footer">
            <div class="stats">
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="card card-chart">
          <div class="card-header">
            <h5 class="card-category">Fornecedores cadastrados</h5>
            <h4 class="card-title">Fornecedores</h4>
            <center> <h1 class=""> {{$fornecedor}} </h1> </center>

            <div class="dropdown">
              <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                <i class="now-ui-icons loader_gear"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="{{ asset('/fornecedor/create') }}">Cadastrar Fornecedor</a>
                <a class="dropdown-item" href="{{ asset('/fornecedor') }}">Ver lista</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="chart-area">
              <canvas id="lineChartExampleWithNumbersAndGrid"></canvas>
            </div>
          </div>
          <div class="card-footer">
            <div class="stats">
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="card card-chart">
          <div class="card-header">
            <h5 class="card-category">Clientes cadastrados</h5>
            <h4 class="card-title">Clientes</h4>
            <center> <h1 class=""> {{$clientes}} </h1> </center>

            <div class="dropdown">
              <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                <i class="now-ui-icons loader_gear"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="{{ asset('/cliente/create') }}">Cadastrar Cliente</a>
                <a class="dropdown-item" href="{{ asset('/cliente') }}">Ver lista</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="chart-area">
              <canvas id="lineChartExampleWithNumbersAndGrid"></canvas>
            </div>
          </div>
          <div class="card-footer">
            <div class="stats">
            </div>
          </div>
        </div>
      </div>


    </div>
    <div class="row">
          <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h5 class="card-category">úiltimos recibos</h5>
            <h4 class="card-title">Recibos</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    Cliente
                  </th>
                  <th>
                    N° do Recibo
        
                </thead>
                @foreach ($recibos as $key => $item)
                    <tbody>
                        <tr>
                            <td>{{ $item->empresa_cliente->Nome_fantasia ?? 'Sem registros' }}</td>
                            <td class="stat-cell">{{ $item->id ?? '' }}</td>

                        </tr>
                @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
          <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h5 class="card-category">úiltimos contratos</h5>
            <h4 class="card-title"> Contratos</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    Cliente
                  </th>
                  <th>
                    N° do contrato
                  </th>
                 
                </thead>
                @foreach ($contratos as $key => $item)
                                            <tbody>
                                                <tr>
                                                    <td>{{ $item->empresa_cliente->Nome_fantasia ?? 'Sem registros' }}</td>

                                                    <td class="stat-cell">{{ $item->id ?? '' }}</td>


                                                </tr>
                                        @endforeach

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    @endsection
