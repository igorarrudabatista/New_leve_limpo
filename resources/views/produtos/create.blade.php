@extends('base.base')
@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<link rel="stylesheet" href="{{asset('/css/upload-style.css')}}">


<div class="panel-header panel-header-sm">
</div>
<div class="content">
  <div class="row">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
            <div class="text-center mb-5">
                <div class="image">
                    <img src="https://www.cursospm3.com.br/wp-content/uploads/2022/04/product-designer-o-que-faz-a-pessoa-de-design-de-produto.png" alt="...">
                </div>
                <br>
                <h3>PRODUTOS</h3>
                  
                <p>Cadastre os produtos da sua loja aqui.</p>
            </div>        </div>

            {!! Form::open(['route' => 'produtos.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

        <div class="card-body">
          <form>
            <div class="row">
              <div class="col-md-5 pr-1">
                <div class="form-group">
                  <label>Nome do Produto</label>
                  {!! Form::text('Nome_Produto', null, ['placeholder' => 'Nome do produto', 'class' => 'form-control']) !!}
                </div>
              </div>
              <div class="col-md-3 px-1">
                <div class="form-group">
                  <label>Categoria</label>
                  {!! Form::text('Categoria_Produto', null, ['placeholder' => 'Categoria do Produto', 'class' => 'form-control']) !!}
                </div>
              </div>
              <div class="col-md-4 pl-1">
                <div class="form-group">
                  <label for="exampleInputEmail1">Preço</label>
                  {!! Form::text('Preco_Produto', null, ['placeholder' => 'R$', 'class' => 'form-control']) !!}
                </div>

              </div>
            </div>
            <div class="row">
              <div class="col-md-2 pr-1">
                <div class="form-group">
                  <label>Quantidade em Estoque</label>
                  {!! Form::number('Quantidade_Produto', null, array('class' => 'form-control')) !!}
                </div>
              </div>
              <div class="col-md-2 pl-1">
                <div class="form-group">
                  <label>Em Estoque?</label>

                  
                  <select name="Estoque_Produto" id="Estoque_Produto"
                  class="form-control">
                  <option value=""> Selecione </option>
                  <option value="Não"> Não </option>
                  <option value="Sim"> Sim </option>
              </select>                </div>
              </div>

              <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox input</label>
              </div>
              
              <div class="col-md-2 pl-1">
                <div class="form-group">
                  <label>Disponível no Site?</label>

                  
                  <select id="Status_Produto" name="Status_Produto"
                  class="form-control">
                  <option value=""> Selecione </option>
                  <option value="0"> Desativado </option>
                  <option value="1"> Ativo </option>
              </select>
              </div> </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Descrição do Produto</label>
                  <textarea rows="4" cols="80" id="Descricao" class="form-control" value="Escreva a descrição do produto aqui."> </textarea>
                </div>
              </div>
            </div>
            <button type="submit"
            class="btn btn-primary me-1 mb-1 text-light">Salvar
        </button>
        </div>
      </div>
    </div>
   
   
    <div class="col-md-4">
      <div class="card card-user">
        <div class="image">
          <img src="https://www.cursospm3.com.br/wp-content/uploads/2022/04/product-designer-o-que-faz-a-pessoa-de-design-de-produto.png" alt="...">
        </div>
        <div class="card-body">
          <div class="author">
            <a>
              <img class="avatar border-gray" src="{{ asset('/images/cart.png') }}" alt="...">
            </a>
     
          </div>
          <p class="description text-center">
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
              </div> 
          </p> 


       
</div>
</form>

                                                @endsection
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
<script> src= "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

<script>
    $(function () {
  $('[data-toggle="popover"]').popover()
}) </script>