@extends('base.base')

@section('content')



<div class="panel-header panel-header-sm">
</div>
<div class="content">
  <div class="row">
    <div class="col-md-12">
        <div class="col-md-12 ml-auto mr-auto">
            <div class="card card-upgrade">
              <div class="card-header">

       
      
      <div class="row g-3 mb-4 align-items-center justify-content-between">
        <div class="col-auto">
          <br>
              <h1 class="app-page-title mb-0">PEDIDOS </h1> 
              <p> <big> x </big> Pedidos em aberto</p> 
        </div>


        <div class="col-auto">
           <div class="page-utilities">
            <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
              <div class="col-auto">
                <form class="table-search-form row gx-1 align-items-center">
                          <div class="col-auto">
                              <input type="text" id="search" name="search" class="form-control search-orders" placeholder="Procurar">
                          </div>
                          <div class="col-auto">
                              <button type="submit" class="btn app-btn-secondary">Procurar</button>
                          </div>
                      </form>
                      
              </div><!--//col-->
              <div class="col-auto">						    
                <a class="btn app-btn-secondary" href="{{asset('/produto/export')}}">
                <big><i class="now-ui-icons arrows-1_cloud-download-93"></i>  </big>




              </a>
              <a href="{{asset('/pedidos/create')}}"  button type="submit" class="btn bg-primary text-light"> 

                Nova venda </button> </a>
              </div>
              <div class="col-auto">						    
                @if ($search)
                <a href="{{asset('/produtos')}}">
                  <button class="btn">Limpar pesquisa</button> </a>
                  @else
            
                  @endif
                  
              </div>
            </div><!--//row-->
          </div><!--//table-utilities-->
        </div><!--//col-auto-->
      </div><!--//row-->

    
    <div class="card-body">
      @if ($message = Session::get('success'))

      <div class="toast-container" style="position: absolute; top: 60px; right: 60px;">
        <div class="toast bg-success text-white fade show">
            <div class="toast-header bg-success text-white">
                <strong class="me-auto"><i class="bi-globe"></i>Sucesso!</strong>
                <small>{{date("h:i a")}}</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast"></button>
            </div>
            <div class="toast-body">
              {{$message}}
            </div>
        </div>
    </div>
    
      @elseif ($message = Session::get('edit'))
   
      <div class="toast-container" style="position: absolute; top: 60px; right: 60px;">
        <div class="toast bg-warning text-white fade show">
            <div class="toast-header bg-warning text-white">
                <strong class="me-auto"><i class="bi-globe"></i>Sucesso!</strong>
                <small>{{date("h:i a")}}</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast"></button>
            </div>
            <div class="toast-body">
              {{$message}}
            </div>
        </div>
    </div>

    
      @elseif ($message = Session::get('delete'))
      <div class="toast-container" style="position: absolute; top: 60px; right: 60px;"  data-delay="500">
        <div class="toast bg-danger text-white fade show"  data-delay="500">
            <div class="toast-header bg-danger text-white" data-delay="500">
                <strong class="me-auto"><i class="bi-globe"></i>Sucesso!</strong>
                <small>{{date("h:i a")}}</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast"></button>
            </div>
            <div class="toast-body">
              {{$message}}
            </div>
        </div>
    </div>
      </div>
    
      @endif
    </div>

    <div class="container">
      <div class="row">
  
  <div class="card">

    <div class="card-body">
    <div class="table-responsive">
    <table class="table table-shopping">
    <thead class="">
    <tr>
      <th class="text-center">Código</th>
      <th><strong> Data  </th>
      <th><strong> Cliente  </th>
      <th><strong> Itens  </th>
      <th class="text-right"> Valor</th>
      <th> Status</th>
      <th> Tipo</th>
      <th> Obs</th>
    </tr>
  
  </thead>
    @foreach($pedidos as $pedidos_clientes)

    <tbody>
    <tr>
      <td>
      <div class="">
        #{{$pedidos_clientes->id}} </a>

      </div>
    </td>

    <td>
      <a href="{{ route('produtos.edit',$pedidos_clientes->id) }}">{{$pedidos_clientes->data}} </a>
    <br>
      <small>{{"Categoria: " .$pedidos_clientes->Categoria_Produto ?? 'Categoria não informada'}} 
    <br>
    </td>
    
    <td>
      {{$pedidos_clientes->empresa_cliente->Nome_fantasia ?? 'Sem registros' }}
    </td>
 <td>
  <a href="" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Itens
  </button>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
    {{$pedidos_clientes->empresa_cliente->Nome_Produto ?? ' Não encontrado'}}

  
  </div>
</div>
 </td>
    <td class="td-number">
     
        @if ($pedidos_clientes->Preco_Produto == '')
      <span class="badge text-danger">  <small> Valor não lançado </span>
   @elseif  ($pedidos_clientes->Preco_Produto != '')
      <span class="badge text-success"> {{"R$ " . number_format($pedidos_clientes->Preco_Produto, 2, ",", ".")  }} </span> 

   @endif
    </td>
   
       <!-- Butão de deletar -->

       <td class="td-number">
        <button type="button" class="btn btn-link" data-toggle="modal" data-target="#exampleModal{{ $pedidos_clientes->id }}" data-id="{{ $pedidos_clientes->id }}">
       <big> <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M5.82907 7.48718H18.6325V20.1197C18.6325 21.2242 17.7371 22.1197 16.6325 22.1197H7.82907C6.7245 22.1197 5.82907 21.2242 5.82907 20.1197V7.48718Z" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> <path d="M4 4.74353L20.4615 4.74353" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> <path d="M14.9134 2H9.54816L8.57266 4.74359H15.8889L14.9134 2Z" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> <line x1="12.3163" y1="11.2307" x2="12.3163" y2="18.376" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> <line x1="9.57266" y1="11.2307" x2="9.57266" y2="18.376" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> <line x1="15.0598" y1="11.2307" x2="15.0598" y2="18.376" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> </svg>
        </button>
        
        <!-- Modal -->
        <div class="modal fade" id="exampleModal{{ $pedidos_clientes->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> Você tem certeza que deseja deletar ?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <img src="{{asset('/images/produtos/')}}/{{$pedidos_clientes->image}}" width="100px" > </a> <br>
              <b> ID do Produto: </b> <big> {{ $pedidos_clientes->id }} </big> <br> 
              <b> Nome do Produto: </b> <big> {{$pedidos_clientes->Nome_Produto ?? 'Sem registros'  }} </big> <br> 

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        
                {!! Form::open(['method' => 'DELETE','route' => ['produtos.destroy', $pedidos_clientes->id],'style'=>'display:inline']) !!}

                {!! Form::submit('Deletar', ['class' => 'btn btn-danger']) !!}

                {!! Form::close() !!}
              </div>
            </div>
          </div>
        </div>
                                   {{-- <a class="btn btn-warning" href="{{ route('recibos.edit',$recibos->id) }}">Editar</a>  --}}
                                                   
                                 
         </td>

         

    </tr>

    @endforeach

    </tbody>
    </table>
    </div>
    </div>
    </div>

    {{-- https://demos.creative-tim.com/now-ui-dashboard-pro/examples/components/grid.html --}}
  
                </div><!--//table-responsive-->
              </div><!--//app-card-body-->	
              
              
            </div><!--//app-card-->
          </div><!--//tab-pane-->
        </div><!--//tab-content-->
        
        
      </div><!--//container-fluid-->
    </div><!--//app-content-->
    
    
    
  </div><!--//app-wrapper-->    		
  
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js">  <script>
    $(function () {
    $('[data-toggle="popover"]').popover()
  })
    </script>

<script>
$(function () {
  $('.example-popover').popover({
    container: 'body'
  })
})
</script>


@endsection