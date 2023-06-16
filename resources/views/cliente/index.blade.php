@extends('base.base')

@section('content')

<div class="panel-header panel-header-sm">
</div>
<div class="content">
  <div class="row">
    <div class="col-md-12">
        <div class="col-md-12 ml-auto mr-auto">
            <div class="card card-upgrade">
              <div class="card-header text-center">

       
                <!--//row-->
      
      <div class="row g-3 mb-4 align-items-center justify-content-between">
        <div class="col-auto">
          <br>
          <h1 class="app-page-title mb-0">CLIENTES</h1>
          <p> <big>{{$clienteqtd}} </big> Clientes cadastrados</p>
        </div>


        <div class="col-auto">
           <div class="page-utilities">
            <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
              <div class="col-auto">
                <form class="table-search-form row gx-1 align-items-center">
                          <div class="col-auto">
                              <input type="text" id="search-orders" name="searchorders" class="form-control search-orders" placeholder="Procurar">
                          </div>
                          <div class="col-auto">
                              <button type="submit" class="btn app-btn-secondary">Procurar</button>
                          </div>
                      </form>
                      
              </div><!--//col-->

    
              <div class="col-auto">						    
                <a class="btn app-btn-secondary" href="{{asset('clientes/export')}}">
                  <big><i class="now-ui-icons arrows-1_cloud-download-93"></i>  </big>
              </a>
              <a href="{{asset('/cliente/create')}}"  button type="submit" class="btn bg-primary text-light">
                <big><i class="now-ui-icons users_single-02"></i>  </big>
                Novo Cliente </button> </a>
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
                <div class="card-body">
              <div class="table-responsive">
                  <table class="table app-table-hover mb-0 text-left">
                <thead>
                  <tr>
                    <th class="cell"></th>
                    <th class="cell">Nome</th>
                    <th class="cell">Celular/Whatsapp</th>
                    <th class="cell">Cidade/Estado</th>
                    <th class="cell"></th>

                  </tr>
                </thead>

                @foreach ($cliente as $key => $empresa_clientes)

                
                <tbody>
                  <tr>
                    <td class="cell"><big> <i class="now-ui-icons users_circle-08"></i> </big> </td>
                    
                    <td class="td-name"><span class="truncate"> <a href="{{ route('cliente.edit',$empresa_clientes->id) }}"> {{$empresa_clientes->Nome_fantasia}} </a>
                    </span></td>
                    <td class="cell"> <a class="btn btn-success text-light" target=_blank href="https://wa.me/+55{{$empresa_clientes->Telefone ?? ''}}">
                      <svg style="color: white" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16"> <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" fill="white"></path> </svg>
                      {{$empresa_clientes->Telefone}} </a> </td>
                    <td class="cell"><span>{{$empresa_clientes->Cidade}}</span> - <span>{{$empresa_clientes->Estado}}</span>
          

                     
   <!-- Botão de deletar -->

   <td>
    <button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModal{{ $empresa_clientes->id }}">
      <big> <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M5.82907 7.48718H18.6325V20.1197C18.6325 21.2242 17.7371 22.1197 16.6325 22.1197H7.82907C6.7245 22.1197 5.82907 21.2242 5.82907 20.1197V7.48718Z" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> <path d="M4 4.74353L20.4615 4.74353" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> <path d="M14.9134 2H9.54816L8.57266 4.74359H15.8889L14.9134 2Z" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> <line x1="12.3163" y1="11.2307" x2="12.3163" y2="18.376" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> <line x1="9.57266" y1="11.2307" x2="9.57266" y2="18.376" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> <line x1="15.0598" y1="11.2307" x2="15.0598" y2="18.376" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> </svg>
      </button>
    
    <!-- Modal -->
    <div class="modal fade" id="exampleModal{{ $empresa_clientes->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"> Você tem certeza que deseja deletar ?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <i class="now-ui-icons users_circle-08"></i> </big> 
            <b> ID de cliente: </b> <big> {{ $empresa_clientes->id }} </big> <br> 
          <b> Cliente: </b> <big> {{$empresa_clientes->Nome_fantasia ?? 'Sem registros'  }} </big> <br> 
    
          </div>
          <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
    
            {!! Form::open(['method' => 'DELETE','route' => ['cliente.destroy', $empresa_clientes->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Deletar', ['class' => 'btn btn-danger text-light']) !!}


          {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>                                              
                             
     </td>

                     

     </form>
  </td>
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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

<script> $('#myToast').on('show.bs.toast', function () {
  // do something…
})</script>
@endsection