@extends('base.base')
@section('content')

<div class="panel-header panel-header-sm">
</div>
<div class="content">
  <div class="row">
    <div class="col-md-12">
        <div class="col-md-12 ml-auto mr-auto">
            <div class="card card-upgrade">
              <div class="card-header ">

       
                <!--//row-->

<section id="multiple-column-form">
  <div class="row match-height">
      <div class="col-12">
    
<br>
              <div class="text-center mb-5">
                  <img src="{{asset('/images/User-logo.png')}}" height="140" class='mb-4'>
                  <h3>PERFIS DO SISTEMA</h3>
                  <p>Criar perfil acesso ao sistema <strong> </strong></p>
              </div>

              {!! Form::model($role, ['method' => 'PATCH','route' => ['roles.update', $role->id]]) !!}


                <div class="card-content">
                    <div class="card-body">
                        <form class="form">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                   
                                        <label for="first-name-column"><strong> Nome do Perfil </strong></label>
                                        {!! Form::text('name', null, array('placeholder' => 'Nome','class' => 'form-control')) !!}

                                        <!-- <input type="text" id="first-name-column" name="name" class="form-control" placeholder="Nome completo"> -->
                                   </div>

                                <div class="col-md-6 col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="email-id-column"><strong> Permissão </strong></label>
                                        <div class="position-relative">

                                            @foreach($permission as $value)
                                            <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
                                            {{ $value->name }}</label>
                                        <br/>
                                        @endforeach
                                                   
                                    </div>
                                </div>
                                </div>
                                </div>
                             
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Salvar</button>
                                </div>
                            </div>
                            {!! Form::close() !!}
                            
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

        </div>

</section>
@endsection