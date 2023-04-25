@extends('base.base')

@section('content')

<div class="panel-header panel-header-sm">
</div>
<div class="content">
  <div class="row">
    <div class="col-md-12">
	    
  <div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
      
      <div class="row g-3 mb-4 align-items-center justify-content-between">
        <div class="col-auto">
          <br>
          <h1 class="app-page-title mb-0">CLIENTES</h1> <br>

        <a href="{{asset('/cliente/create')}}"  button type="submit" class="btn bg-primary text-light"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-vcard-fill" viewBox="0 0 16 16">
          <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm9 1.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4a.5.5 0 0 0-.5.5ZM9 8a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4A.5.5 0 0 0 9 8Zm1 2.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 0-1h-3a.5.5 0 0 0-.5.5Zm-1 2C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1 1 0 0 0 2 13h6.96c.026-.163.04-.33.04-.5ZM7 6a2 2 0 1 0-4 0 2 2 0 0 0 4 0Z"/>
        </svg> Adicionar Clientes</button> </a>

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
                
             
              </div>
              <div class="col-auto">						    
                <a class="btn app-btn-secondary" href="{{asset('clientes/export')}}">
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-download me-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
  <path fill-rule="evenodd" d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
</svg>
                  Download Excel
              </a>
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
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title"> Lista de Clientes</h4>
                </div>
                <div class="card-body">
              <div class="table-responsive">
                  <table class="table app-table-hover mb-0 text-left">
                <thead>
                  <tr>
                    <th class="cell">Id</th>
                    <th class="cell">Nome</th>
                    <th class="cell">Telefone</th>
                    <th class="cell">Local</th>
                    <th class="cell">Ações</th>
                    <th class="cell"></th>

                  </tr>
                </thead>
                @foreach($cliente as $empresa_clientes )
                
                <tbody>
                  <tr>
                    <td class="cell">{{$empresa_clientes->id}}</td>
                    <td class="cell"><span class="truncate">{{$empresa_clientes->Nome_fantasia}}</span></td>
                    <td class="cell">{{$empresa_clientes->Telefone}}</td>
                    <td class="cell"><span>{{$empresa_clientes->Cidade}}</span> - <span>{{$empresa_clientes->Estado}}</span>
          
                    <td class="cell">
                      <a class="btn btn-warning text-light" href="{{ route('cliente.edit',$empresa_clientes->id) }}">Editar</a>
                      {!! Form::open(['method' => 'DELETE','route' => ['cliente.destroy', $empresa_clientes->id],'style'=>'display:inline']) !!}
                      {!! Form::submit('Deletar', ['class' => 'btn btn-danger text-light']) !!}


                    {!! Form::close() !!}
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