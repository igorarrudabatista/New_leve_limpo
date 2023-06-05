@extends('base.base')
@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="{{asset('/css/site/site-style.css')}}">



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
             <a href="{{asset('/produtos/create')}}"  button type="submit" class="btn bg-primary text-light"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box2-fill" viewBox="0 0 16 16">
               <path d="M3.75 0a1 1 0 0 0-.8.4L.1 4.2a.5.5 0 0 0-.1.3V15a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V4.5a.5.5 0 0 0-.1-.3L13.05.4a1 1 0 0 0-.8-.4h-8.5ZM15 4.667V5H1v-.333L1.5 4h6V1h1v3h6l.5.667Z"/>
             </svg> Adicionar Produto </button> </a>
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


                <div class="app-container">


  
       
                <!--//row-->
<section class="app-main">
  <div class="app-main-left cards-area">

    @foreach($produtos as $Produto )

    <div class="card-wrapper main-card">
      <a class="card cardItemjs"  onclick="openModal()">
        <div class="card-image-wrapper">
        <img src="{{asset('/images/produtos/')}}/{{$Produto->image}}" alt="Hotel">
      </div>
        <div class="card-info">
          <div class="card-text big cardText-js">{{$Produto->Nome_Produto ?? 'Não encontrado' }}</div>
          <div class="card-text small">Categoria: {{$Produto->Categoria_Produto ?? '' }}</div>
          <div class="card-text small">          
            <span class="card-price"> {{$Produto->Preco_Produto ?? 'Não encontrado' }}</span>
            
          </div>
        </div>
        </a>
    </div>
    
    @endforeach 

  </div>

  <div class="app-main-right cards-area">
    
    <div class="app-main-right-header">
      <span>Carrinho</span>
      <a href="#">+ Cliente</a>
    </div>
    <div class="card-wrapper main-card">
        <div class="card-image-wrapper">
        <img src="{{asset('/images/produtos/cart.png')}}">
      </div>
        <div class="card-info">
          <div class="card-text big cardText-js">Nome do produto</div>
          <div class="card-text small">Nome 2</div>
          <div class="card-text small">
            <span  class="card-price">R$ 1.000</span>
          </div>
        </div>
      </a>
    </div>


  </div>
</section>
</div>

<div id="modal-window" class="shadow">
  <div class="main-modal">
    <div class="modal-left">
      <div class="modal-image-wrapper">
        @foreach($produtos as $Produto)
        <img src="{{asset('/images/produtos/')}}/{{$Produto->image}}" alt="Hotel">

    </div>
    <div class="modal-info-header">
      <div class="left-side">
        <h1 class="modalHeader-js"></h1>
        <p>{{$Produto->name ?? 'Não encontrado' }}</p>
      </div>
      <div class="right-side">
      <b> Preço: </b>
        <span class="amount"> {{$Produto->name ?? 'Preço ' }} </span>
      </div>
    </div>
    <div class="info-bar">
      <div class="info-wrapper">
        <div class="info-icon">
          <svg class="btn-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
        </div>
        <span>2 Bedrooms</span>
      </div>
      <div class="info-wrapper">
        <div class="info-icon">
          <svg class="btn-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-wind"><path d="M9.59 4.59A2 2 0 1 1 11 8H2m10.59 11.41A2 2 0 1 0 14 16H2m15.73-8.27A2.5 2.5 0 1 1 19.5 12H2"/></svg>
        </div>
        <span>2 Bathrooms</span>
      </div>
      <div class="info-wrapper">
        <div class="info-icon">
          <svg class="btn-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-square"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/></svg>
        </div>
        <span>1250 m2</span>
      </div>
      <div class="info-wrapper">
        <div class="info-icon">
          <svg class="btn-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shield"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
        </div>
        <span>Highly Secured</span>
      </div>
    </div>
    <div class="desc-wrapper">
      <div class="modal-info-header">
        <h1>Descrição</h1>
        <p>
          {{$Produto->Descricao ?? 'Não encontrado' }}
        </p>
      </div>
      
      
      <div class="desc-actions">
        <button class="btn-book">Botão</button>
        <div class="add-favourite">
          <input type="checkbox" id="favourite">
          <label for="favourite">
            <span class="favourite-icon">
              <svg class="btn-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>  
            </span>
            <span>Eu quero!</span>
          </label>
        </div>
      </div>
    </div>
  </div>

  <div class="modal-right">
    <div class="app-main-right-header">
      <span>+ Produtos</span>
      <a href="#">Ver todos</a>
    </div>
    
    <div class="card-wrapper">
      <div class="card">
        <div class="profile-info-wrapper">
          <div class="profile-img-wrapper">
            <img src="https://source.unsplash.com/featured/1200x900/?woman,cool" alt="Review">
          </div>
          <p> </p>
        </div>
        <p> </p>
      </div>
    </div>
    
    
    
  </div>
  
  <button class="btn btn-close" onclick="closeM()">
    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
  </button>
</div>    
</div>

@endforeach

<script> 
  let ini= document.querySelector('#modal-window');
  ini.classList.add("hideModal");
</script>

<!-- partial -->
  <script  src="./script.js"></script>
  <script src="{{asset('/js/site/script.js')}}"></script>

  <script> 
    let ini= document.querySelector('#modal-window');
    ini.classList.add("hideModal");
  </script>
@endsection

