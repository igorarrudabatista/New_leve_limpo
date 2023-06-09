
@extends('base.base2')

@section('content')


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
            <a class="btn btn-success text-light btn-book text-right" href="https://wa.me/+55{{$recibos->empresa_cliente->Telefone ?? 'Telefone'}}">
              <svg style="color: white" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16"> <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" fill="white"></path> </svg>
               Comprar </a>
          </div>
        </div>
        </a>
    </div>
    
    @endforeach 

  </div>

  <div class="app-main-right cards-area">
    
    <div class="app-main-right-header">
      <span>Produtos</span>
      <a href="#">Veja mais</a>
    </div>
    @foreach($ultimos_produtos as $ultimos )
    <div class="card-wrapper main-card">
      <a class="card cardItemjs"  onclick="openModal()">
        <div class="card-image-wrapper">
        <img src="{{asset('/images/produtos/')}}/{{$ultimos->image}}">
      </div>
        <div class="card-info">
          <div class="card-text big cardText-js">{{$ultimos->name ?? 'Não encontrado' }}</div>
          <div class="card-text small">{{$ultimos->name ?? 'Não encontrado' }}</div>
          <div class="card-text small">
            <span  class="card-price"> {{$ultimos->preco ?? 'R$ 1.000' }}</span>
          </div>
        </div>
      </a>
    </div>
    @endforeach 


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
@endsection