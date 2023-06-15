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
        <div class="card-image-wrapper">
        <img src="{{asset('/images/produtos/')}}/{{$Produto->image}}" alt="Hotel">
      </div>
      <div class="card-info">
        <div class='img-container'>
      </div>
          <div class="card-text big cardText-js">
             <h3> {{$Produto->Nome_Produto ?? 'Não encontrado' }}</h3>
          </div>

          <div class="card-text small">
            <span  class="card-price">{{$Produto->Preco_Produto ?? 'Não encontrado' }}</span>
          </div>
          
        </div>
    </div>
    
    @endforeach 

  </div>

  <div class="app-main-right cards-area" id = 'cart-container' data-spy="affix" data-offset-top="10">
    
    <div class="app-main-right-header">
      <span>Carrinho <span class="badge badge-primary" id='cartItems'></span> </span>
      <a href="#">+ Cliente</a>
    </div>

    <div>
      
      <div class="card-info">
        <div class="cart" id = 'cart'>
          Você não possui itens no Carrinho.
      </div>
    
  
      </div>
      </div>
       
      <div class="card-info">
        <div id = 'prices'>
        </div>
    </div>




  </div>
</section>
</div>
<!-- Button to Open the Modal -->


<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class = 'row'>
        	<div class = 'col-xs-12' id = 'cartContentsModal'> </div>
        </div>
        <div class = 'row'>
        	<div class = 'col-xs-12' id = 'cartForm'> 
        	<!-- FORM -->
        		<form>
        			<div class="form-group">
        				<label for="formName">Nome</label>
    					<input type="text" class="form-control" id="formName" placeholder="Your name" required>
        			</div>

        			<div class="form-group">
        				<label for="formAddress">E-mail</label>
    					<input type="email" class="form-control" id="formAddress" placeholder="Your address" required>
        			</div>

        		</form>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id='submit'>Finalizar pedido</button>

      </div>

    </div>
  </div>
</div>

<!-- Modal -->

{{-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Finalizando o seu pedido</h4>
      </div>
      <div class="modal-body">
        <div class = 'row'>
        	<div class = 'col-xs-12' id = 'cartContentsModal'> </div>
        </div>
        <div class = 'row'>
        	<div class = 'col-xs-12' id = 'cartForm'> 
        	<!-- FORM -->
        		<form>
        			<div class="form-group">
        				<label for="formName">Nome</label>
    					<input type="text" class="form-control" id="formName" placeholder="Your name" required>
        			</div>

        			<div class="form-group">
        				<label for="formAddress">E-mail</label>
    					<input type="email" class="form-control" id="formAddress" placeholder="Your address" required>
        			</div>

        		</form>

        	</div>
        </div>
      </div>
      <div class="modal-footer centered">
        <button type="button" class="btn btn-default" data-dismiss="modal">FEchar</button>
        <button type="button" class="btn btn-primary" id='submit'>Finalizar pedido</button>
      </div>
    </div>
  </div>
</div> --}} 
{{--
 <div id="myModal" class="shadow">
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
      <span>Pedidos</span>
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
  
    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
  </button>
</div>    
@endforeach
</div> --}}


        	<!-- FIM MODAL -->

      <!-- Latest compiled and minified CSS -->
    
<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>      
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>      
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
     

<script>
var itemsInCart = 0;
var subTotal = 0;
const tax = 0;	// 0.1 = 10%
var totalPrice = 0;


window.onload = function() {
  $('card-image-wrapper').addClass('card-image-wrapper');
  
	$('.img-container').append('<button class="btn btn-success btn-add-cart"><span class="glyphicon glyphicon-shopping-cart"></span> Comprar </button>');

$('.btn-add-cart').click( (e) => { 
		//animation
		$(e.target);
		// find out which item is clicked
		// if 'span' with cart symbol is clicked, then navigate one level up to the button
		let eventTarget;
		if ($(e.target).is('span')) eventTarget = $(e.target).parent();
			else eventTarget = $(e.target);
      let itemName = eventTarget.parent().parent().find('h3')[0].textContent ;
      let itemPrice = eventTarget.parent().parent().find('span')[1].textContent ;
    //  let itemPic = eventTarget.parent().parent().find('b')[2].textContent ;
		addToCart(itemName, itemPrice, itemPrice);
	});

	$('#submit').click( () => {
		formSubmitted();
	});

	setRandomPrices();
}

function setRandomPrices() {
	// just for fun
	let items = document.querySelectorAll('.item');
	for (let item of items) {
		$(item).find('p')[1].textContent = '$' + (Math.floor(Math.random() * (199 - 0)) + 0) + '.' + (Math.floor(Math.random() * (99 - 10)) + 10);
	}
}

function addToCart(name, price, pic) {
	let priceNumber = parseFloat(price.slice(1));
	if (itemsInCart === 0) $('#cart').text("");
	let newDiv = $('<div class="cart-item"></div>');
	newDiv.append('<div class="card-text big cardText-js">' + name + '</div>' + '<a class="card-text small"> <span class="card-price text-success"> R$'+ price );
	newDiv.append(' <button class="badge badge-danger" onclick="deleteItem(this)"><i class="now-ui-icons ui-1_simple-remove"></i></button>');
	newDiv.append('<hr>');
	newDiv.attr('name', name);
	newDiv.attr('price', priceNumber);
	newDiv.attr('pic', pic);
	$('#cart').append(newDiv);
	newDiv;
	itemsInCart++;
	$('#cartItems').text(itemsInCart);
	subTotal += priceNumber;
	updatePrice();
}

function deleteItem(e) {
	let price = $(e.parentElement).attr('price');
	subTotal -= price;
	$(e.parentElement);
	$(e.parentElement).remove();
	itemsInCart--;
	$('#cartItems').text(itemsInCart);
	updatePrice();
	cartLonelyText();
}

function cartLonelyText() {
	if (itemsInCart === 0) 
		$('#cart').append('Você não possui itens no carrinho.');
}

function updatePrice() {
	$('#prices').empty();
	if (itemsInCart === 0) return;
	let newDiv = $('<div></div>');
	newDiv.append('<strong >Subtotal: <strong class="text-success"> R$  ' + subTotal.toFixed(2) + '<br>');
	newDiv.append('<strong>Taxa: <strong class="text-success">' + tax * 100 + '%<br>');
	newDiv.append('<i class="now-ui-icons business_money-coins"></i> <strong> Total a pagar: <strong class="text-danger"> R$ ' + (subTotal + (subTotal * tax)).toFixed(2) + '</strong>');

	newDiv.append('<button class="btn btn-info btn-block" onclick="openModal()">Finalizar Compra</button>');

	$('#prices').append(newDiv);
	newDiv;
}


function cartToString() {
	let itemsString = "<small><p><strong>Seu pedido:</strong><br>";
	let cartItems = document.querySelectorAll('.cart-item');
	for (let item of cartItems) {
		itemsString = itemsString + item.getAttribute('name') + " .. $" + item.getAttribute('price') + "<br>";
		};
	itemsString += '</p><p>Subtotal: R$' + subTotal.toFixed(2) + '<br>';
	itemsString += 'Taxa: ' + tax * 100 + '%<br>'
	itemsString += 'Total a pagar: <mark><strong>R$' + (subTotal + (subTotal * tax)).toFixed(2) + '</strong></mark></p></small>';
	return itemsString;
}

function openModal() {
	$('#cartContentsModal').html(cartToString());
	$('#myModal').modal('show');
}


function formSubmitted() {
	if (!checkEmptyFields()) {		// if the fields arent empty
		sweetAlert("Obrigado!", "O seu pedido foi enviado com sucesso!", "success");
	} else { return; }
	// clear cart and do other cleaning if order is OK
	$('#myModal').modal('hide');
	totalPrice = 0; subTotal = 0; itemsInCart = 0;
	$('#cart').empty();
	$('#prices').empty();
	$('#cartItems').text(itemsInCart);
	cartLonelyText();
}

function checkEmptyFields() {
	let somethingEmpty = false;
  
	if ( !$.trim( $('#formName').val() ).length) { 
		$('#formName');
		somethingEmpty = true;
	}

	if ( !$.trim( $('#formAddress').val() ).length) { 
		$('#formAddress');
		somethingEmpty = true;
	}

	return somethingEmpty;
}

$.fn.extend({
//		https://github.com/daneden/animate.css
    animateCss: function (animationName) {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        this.addClass('animated ' + animationName).one(animationEnd, function() {
            $(this).removeClass('animated ' + animationName);
        });
        return this;
    }
});
</script>

 
@endsection

