@extends('base.base')
@section('content')



<div class="panel-header panel-header-sm">
</div>
<div class="content">
  <div class="row">
    <div class="col-md-12">
        <div class="col-md-6 ml-auto mr-auto">
            <div class="card card-upgrade">
              <div class="card-header">

       
                <!--//row-->

        
<div id="auth">       
           
<form action="{{asset('/API/CEP')}}" method="GET" enctype="multipart/form-data">

    <div class="container">
        <div class="row">
                    <div class="card-body">
                        <div class="text-center mb-5">
                            <img src="{{asset('/images/maps.png')}}" height="90" class='mb-4'>
                            <h3>Consulta de CEP</h3>
                            <p> Utilize o campo de CEP para localizar  </p>
                        </div>
                        <form action="index.html">
                            <div class="form-group">
                                {{-- <input type="email" id="first-name-column" class="form-control" name="fname-column"> --}}
                            </div>
    
                            <div class="form-group">
                                <label for="first-name-column">CEP</label>
                                <input type="text" id="search" class="form-control" name="search" data-mask="00000000" data-mask-selectonfocus="true"  placeholder="Digite o CEP aqui">
                                <a class="text-danger"><b>Obs.</b> Inserir o CEP sem pontos e traços.</a> 
                            </div>
    
                               {{--  <div class="form-group">
                                <label for="first-name-column">Data de Nascimento</label>
                               <input type="date" id="first-name-column" class="form-control" name="fname-column"> 
                            </div>--}}
    
                            <div class="clearfix">
                                <button class="btn btn-primary float-end">Pesquisar</button>
                            </div>
                                <br>
                            @if ($search)

                                <p><b> Cidade:  </b>   {{ $data->city }}</p> 
                                <p><b> Estado:</b>   {{ $data->state }}</p> 
                                <p><b> Bairro:</b> {{ $data->neighborhood }}</p> 
                                <p><b> Rua:</b>      {{ $data->street }}</p> 
                                <p><b> Serviço:</b>      {{ $data->service }}</p> 
                            
              


                            <button class="btn btn-warning float-end">Limpar pesquisa</button> </a>
                            @else
                         
                                      @endif
                                      
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
        </div>

   



@endsection