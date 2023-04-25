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
              <h1 class="app-page-title mb-0">PERFIL</h1>
        <a href="{{asset('/roles/create')}}"  button type="submit" class="btn bg-primary text-light ">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
              </svg> Criar Perfil do Sistema</button> </a>

        </div>
        <div class="col-auto">
           <div class="page-utilities">
            <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
              <div class="col-auto">
                <form class="table-search-form row gx-1 align-items-center" action="{{asset('/recibos')}}" method="GET">
        
         

                     
                      </form>
                      
              </div><!--//col-->

              <div class="col-auto">
                
             
              </div>
              <div class="col-auto">						    
              
                  
              </div>
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
                    <th class="cell">ID</th>
                    <th class="cell">Nome do Perfil</th>
                    <th class="cell">Ações</th>

                  </tr>
                </thead>
                @foreach ($roles as $key => $role)
                
                <tbody>
                  <tr>
                    <td class="cell">{{$role->id}}</td>
                    <td class="cell" >{{ $role->name }}</td>
                    <td class="cell">
                    <a class="btn btn-warning text-light" href="{{ route('roles.edit',$role->id) }}">Editar</a>
                    {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
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
@endsection