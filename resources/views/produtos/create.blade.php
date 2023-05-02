@extends('base.base')
@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">


<div class="panel-header panel-header-sm">
</div>
<div class="content">
  <div class="row">
    <div class="col-md-12">
        <div class="col-md-12 ml-auto mr-auto">
            <div class="card card-upgrade">
              <div class="card-header">

       
                <!--//row-->

                <section id="multiple-column-form">
                    <div class="row match-height">
                        <div class="col-12">

                                <br>
                                <div class="text-center mb-5">
                                    <img src="{{ asset('/images/cart.png') }}" height="88" class='mb-4'>
                                    <h3>PRODUTOS</h3>
                                    <p>Cadastre os produtos da sua loja aqui.</p>
                                </div>

                                <div class="row gy-4">
                                    <div class="col-12 col-lg-12">
                                        <div class="app-card app-card-account shadow-sm  flex-column align-items-start">
                                            <div class="app-card-header p-3 border-bottom-0">


                                                {!! Form::open(['route' => 'produtos.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}



                                                <div class="row">
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationDefault01"> <strong> Nome do Produto </strong>
                                                        </label>
                                                        {!! Form::text('Nome_Produto', null, ['placeholder' => 'Nome do produto', 'class' => 'form-control']) !!}

                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationDefault02"> <strong>
                                                                Categoria</strong></label>
                                                        <input type="text" class="form-control" id="Categoria_Produto"
                                                            name="Categoria_Produto">
                                                    </div>

                                                    <div class="col-md-2 mb-3">
                                                        <label for="validationDefaultUsername"> <strong> Preço</strong></label>

                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"
                                                                    id="inputGroupPrepend2">R$</span>
                                                            </div>
                                                            {!! Form::text('Preco_Produto', null, array('class' => 'form-control')) !!}

                                                        </div>
                                                        <button type="button" class="btn btn-danger" data-toggle="popover" title="utilize o ponto (.) em vez de vírgula para declarar o valor" data-content="utilize o ponto (.) em vez de vírgula para declara o valor">Clqiue para ler a Dica</button>
                                                    </div>
                                                </div>

                                                
                                                <div class="row">
                                                    <div class="col-md-3 mb-3">
                                                        <label for="validationDefault03"> <strong> Quantidade em estoque </strong>
                                                        </label>
                                                        <input type="text" class="form-control" id="Quantidade_Produto"
                                                            name="Quantidade_Produto">
                                                    </div>
                                                    <div class="col-md-3 mb-3">
                                                        <label for="validationDefault04"> <strong> Produto em Estoque?
                                                            </strong> </label>
                                                        <select name="Estoque_Produto" id="Estoque_Produto"
                                                            class="form-control">
                                                            <option value=""> Selecione </option>
                                                            <option value="Não"> Não </option>
                                                            <option value="Sim"> Sim </option>
                                                        </select>
                                                    </div>

                                                    <div class="col-md-3 mb-3">
                                                        <label for="Status_Produto"> <strong> Status </strong></label>
                                                        <select id="Status_Produto" name="Status_Produto"
                                                            class="form-control">
                                                            <option value=""> Selecione </option>
                                                            <option value="0"> Desativado </option>
                                                            <option value="1"> Ativo </option>
                                                        </select>
                                                    </div>
                                                </div>

                                                {{-- <div class="col-md-6 mb-4">
    
    <div class="upload">
      <input type="file" title="" id="image" name="image"  class="drop-here">
      <div class="text text-drop">Imagem</div>
      <div class="text text-upload">Enviando</div>
      <svg class="progress-wrapper" width="300" height="300">
        <circle class="progress" r="115" cx="150" cy="150"></circle>
      </svg>
      <svg class="check-wrapper" width="130" height="130">
        <polyline class="check" points="100.2,40.2 51.5,88.8 29.8,67.5 "/>
      </svg>
      <div class="shadow"></div>
    </div> --}}


                                                <br>

                                                <div class="form-group">
                                                    <div class="form-check">




                                                    </div>
                                                    <button type="submit"
                                                        class="btn btn-primary me-1 mb-1 text-light">Salvar produto</button>
                                                    </form>
                                                @endsection
                        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
                        <script> src= "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

<script>
    $(function () {
  $('[data-toggle="popover"]').popover()
}) </script>