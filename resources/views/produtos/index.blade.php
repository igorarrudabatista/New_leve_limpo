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
              <h1 class="app-page-title mb-0">PRODUTOS</h1> <br>

        <a href="{{asset('/produtos/create')}}"  button type="submit" class="btn bg-primary text-light"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box2-fill" viewBox="0 0 16 16">
          <path d="M3.75 0a1 1 0 0 0-.8.4L.1 4.2a.5.5 0 0 0-.1.3V15a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V4.5a.5.5 0 0 0-.1-.3L13.05.4a1 1 0 0 0-.8-.4h-8.5ZM15 4.667V5H1v-.333L1.5 4h6V1h1v3h6l.5.667Z"/>
        </svg> Adicionar Produto </button> </a>
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
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-download me-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
  <path fill-rule="evenodd" d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
</svg>
                  Download Excel
              </a>
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
      <div class="card-body">
    <div class="table-responsive">
        <table class="table app-table-hover mb-0 text-left">
              <thead>
                  <tr>
                    <th class="cell">Status</th> 
                    <th class="cell">Nome</th>
                    <th class="cell">Categoria</th>
                    <th class="cell">Em estoque?</th>
                    <th class="cell">Quantidade</th>
                    <th class="cell">Preço</th>
                    <th class="cell">Ações</th>
                    <th class="cell"></th>

                  </tr>
                </thead>
                @foreach($produto as $produtos )
                
                <tbody>
                  <tr>
              


                    <td class="cell">
                      @switch($produtos)
                          @case($produtos->Status_Produto == NULL)
                          <span class="badge bg-warning">Não informado</span>
                              @break
                          @case($produtos->Status_Produto == 1)
                          <span class="badge bg-success"><i class="now-ui-icons ui-1_check"></i>
 ATIVO </span>                                                     
                              @break
                          @case($produtos->Status_Produto == 0)
                          <span class="badge bg-danger"><i class="now-ui-icons ui-1_simple-remove"></i>  INATIVO </span>       
                      @endswitch                   
                    </td>





                    <td class="cell"> <b> {{$produtos->Nome_Produto}} </b></td>
                    <td class="cell"><i>{{$produtos->Categoria_Produto}} </i></td>


                    <td class="cell">
                      @switch($produtos)
                          @case($produtos->Estoque_Produto == NULL)
                          <span class="badge bg-warning">Não informado</span>
                              @break
                          @case($produtos->Estoque_Produto == 'Sim')
                          <span class="badge bg-success"><i class="now-ui-icons ui-1_check"></i>
 Em Estoque </span>                                                     
                              @break
                          @case($produtos->Estoque_Produto == 'Não')
                          <span class="badge bg-danger"><i class="now-ui-icons ui-1_simple-remove"></i>  Fora de Estoque </span>       
                      @endswitch                   
                        
                       

                    </td>
        
  






                    <td class="cell">
                    @if ($produtos->Quantidade_Produto == '')
                       <span class="badge bg-warning"> Quantidade não lançado </span>
                    @elseif  ($produtos->Preco_Produto !== '')
                           <big> <span class="badge bg-info"> {{$produtos->Quantidade_Produto }}</span> </big>
                    @endif
                    </td>
                    
                    <td class="cell" >
                    
                    @if ($produtos->Preco_Produto == '')
                       <span class="badge bg-danger"> Valor não lançado </span>
                    @elseif  ($produtos->Preco_Produto != '')
                    <big>   <span class="badge bg-success"> {{"R$ " . number_format($produtos->Preco_Produto, 2, ",", ".")  }} </span> </big>

                    @endif
                    </td>

                      <!-- Butão de deletar -->
                      <td>     
                        <a class="btn btn-warning" href="{{ route('produtos.edit',$produtos->id) }}">Editar</a>
                       
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal{{ $produtos->id }}" data-id="{{ $produtos->id }}">
                          <i class="now-ui-icons ui-1_simple-remove"></i>  Deletar
                        </button>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal{{ $produtos->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"> Você tem certeza que deseja deletar ?</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                              <b> ID do Produto: </b> <big> {{ $produtos->id }} </big> <br> 
                              <b> Produto: </b> <big> {{$produtos->Nome_Produto ?? 'Sem registros'  }} </big> <br> 
                        
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        
                                {!! Form::open(['method' => 'DELETE','route' => ['produtos.destroy', $produtos->id],'style'=>'display:inline']) !!}

                                {!! Form::submit('Deletar', ['class' => 'btn btn-danger']) !!}
        
                                {!! Form::close() !!}
                              </div>
                            </div>
                          </div>
                        </div>
                                                   {{-- <a class="btn btn-warning" href="{{ route('recibos.edit',$recibos->id) }}">Editar</a>  --}}
                                                                   
                                                 
                         </td>



              
                                 
                        

                  </form>
                  </tr>
              
                  
                  @endforeach
                </tbody>
              </table>
                </div><!--//table-responsive-->
            </div><!--//app-card-body-->	


        </div><!--//app-card-->
          </div><!--//tab-pane-->
    </div><!--//tab-content-->
    

    </div><!--//container-fluid-->
  </div><!--//app-content-->
  

  
</div><!--//app-wrapper-->    		




@endsection