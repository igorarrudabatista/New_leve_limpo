@extends('base.base')
@section('content')

<link href="{{ asset('/css/pedidos/pedidos.css') }}" rel="stylesheet" />


<div class="panel-header panel-header-sm">
</div>
<div class="content">
  <div class="row">
    <div class="col-md-12">
        <div class="col-md-12 ml-auto mr-auto">
            <div class="card card-upgrade">
              <div class="card-header">

       
              

  <!-- partial:index.partial.html -->
  {{-- <section class="card-body">
    <div class="shop__header">
      <p class="shop__text">
        <a class="button js-toggle-cart" href="#" title="View cart">
          Carrinho
        </a>
      </p>
    </div>
    <div class="shop__products">
      <div class="products"> --}}

        @foreach($produto as $produtos)
            
        <div class="products__item">
          
          <article class="product">
            <h1 class="product__title">{{$produtos->Nome_Produto}}</h1>
            <p class="product__text"> {{$produtos->Preco_Produto}} <br>
              <a class="button js-add-product" href="#" title="Add to cart">
               Comprar
              </a>
            </p>
          </article>
  
        </div>
        @endforeach


      </div>
    </div>
  </section>
  
  <aside class="cart js-cart">
    <div class="cart__header">
      <h1 class="cart__title">Carrinho</h1>
      <p class="cart__text">
        <a class="button button--light js-toggle-cart" href="#" title="Close cart">
         Fechar
        </a>
      </p>
    </div>
    <div class="cart__products js-cart-products">
      <p class="cart__empty js-cart-empty">
        Adicionar produtos
      </p>

      @foreach($produto as $produtos)
 
      <div class="cart__product js-cart-product-template">
        <article class="js-cart-product">
          <h1>{{$produtos->Nome_Produto}}</h1>
          <p>
            <a class="js-remove-product" href="#" title="Delete product">
            Remover          </a>
          </p>
        </article>
      </div>

      @endforeach
    </div>
    <div class="cart__footer">
      <p class="cart__text">
        <a class="button" href="#" title="Buy products">
Finalizar compra       </a>
      </p>
    </div>
  </aside>
  
  <div class="lightbox js-lightbox js-toggle-cart"></div>
  <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script><script  src="./script.js"></script>
  
  </body>
  </html>
  <script src="{{ asset('js/pedidos/script.js') }}"></script>


@endsection