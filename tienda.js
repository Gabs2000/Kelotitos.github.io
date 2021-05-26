const addToShoppingCartButtons = document.querySelectorAll('.addToCart');

addToShoppingCartButtons.forEach(addToCartButton => {
	addToCartButton.addEventListener('click', addToCartClicked);
});

const comprarButton = document.querySelector('.comprarButton');
comprarButton.addEventListener('click', comprarButtonClicked);

const shoppingCartItemsContainer = document.querySelector('.shoppingCartItemsContainer');

function addToCartClicked(event){
	const button = event.target;
	const card = button.closest('.card');
	
	const cardTitle = card.querySelector('.card-title').textContent;
	const cardPrice = card.querySelector('.card-text').textContent;
	const cardImg = card.querySelector('.card-image').src;
	
	addItemToShoppingCart(cardTitle, cardPrice, cardImg);
}

function addItemToShoppingCart(cardTitle, cardPrice, cardImg){
	
	const elementsTitle = shoppingCartItemsContainer.getElementsByClassName('shoppingCartItemTitle');
	
	for(let i=0;i<elementsTitle.length;i++){
		if(elementsTitle[i].innerText === cardTitle){
			let elementQuantity = elementsTitle[i].parentElement.parentElement.parentElement.querySelector('.shoppingCartItemQuantity');
			elementQuantity.value++;
			updateShoppingCartTotal();
			return;
		}
	}
	
	
	const shoppingCartRow = document.createElement('div');
	
	const shoppingCartContent = `
	<div class="row shoppingCartItem">
                    <div class="col-6">
                        <div class="shopping-cart-item d-flex align-items-center h-100 border-bottom pb-2 pt-3">
                            <img src=${cardImg}  width="50" height="37" class="shopping-cart-image shoppingCartItemImg"><br>
					        <p class="shopping-cart-item-title shoppingCartItemTitle text-truncate ml-3 mb-0">${cardTitle}</p>
                        </div>
						
                    </div>
                    <div class="col-2">
                        <div class="shopping-cart-price d-flex align-items-center h-100 border-bottom pb-2 pt-3">
                            <p class="item-price mb-0 shoppingCartItemPrice">${cardPrice}</p>
                        </div>
                    </div>
                    <div class="col-4">
                        <div
                            class="shopping-cart-quantity d-flex justify-content-between align-items-center h-100 border-bottom pb-2 pt-3">
                            <input style="width:100px;" class="shopping-cart-quantity-input shoppingCartItemQuantity" type="number"
                                value="1">
                            <button style="margin-left:20px;" class="btn btn-danger buttonDelete" type="button">X</button>
                        </div>
                    </div>
                </div>
	`;
	shoppingCartRow.innerHTML = shoppingCartContent;
	shoppingCartItemsContainer.append(shoppingCartRow);
	
	shoppingCartRow.querySelector('.buttonDelete').addEventListener('click', removeShoppingCartItem);
	shoppingCartRow.querySelector('.shoppingCartItemQuantity').addEventListener('change', quantityChanged);
	updateShoppingCartTotal();
}

function updateShoppingCartTotal(){
	let total = 0;
	const shoppingCartTotal = document.querySelector('.shoppingCartTotal');
	
const shoppingCartItems = document.querySelectorAll('.shoppingCartItem');

shoppingCartItems.forEach(shoppingCartItem => {
	const shoppingCartItemPriceElement = shoppingCartItem.querySelector('.shoppingCartItemPrice');
	
	const shoppingCartItemPrice = Number(shoppingCartItemPriceElement.textContent.replace('$',''));
	
	const shoppingCartItemQuantityElement = shoppingCartItem.querySelector('.shoppingCartItemQuantity');
	
	const shoppingCartItemQuantity = Number(shoppingCartItemQuantityElement.value);
	
	total = total + shoppingCartItemPrice * shoppingCartItemQuantity;
	
	});
	
	shoppingCartTotal.innerHTML = `$${total.toFixed(2)}`;
}


function removeShoppingCartItem(event){
	const buttonClicked = event.target;
	
	buttonClicked.closest('.shoppingCartItem').remove();
	updateShoppingCartTotal();
	
	}
	
	
function quantityChanged(event){
	const input = event.target;
	
	if(input.value <=0){
		input.value = 1;
	}
	
	updateShoppingCartTotal();
	}
	
	
	
function comprarButtonClicked(){ //Al dar en boton comprar guardar en base de datos
	//shoppingCartItemsContainer.innerHTML = '';
	//updateShoppingCartTotal();
	
	
}