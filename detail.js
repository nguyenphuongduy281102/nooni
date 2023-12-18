// OPEN AND CLOSE CART
const cartOpen = document.querySelector('.cart-icon');
const cartModal = document.querySelector('.cart-modal');
const closeCart = document.querySelector('.close-cart');
const cart = document.querySelector('.cart-container');

function showCartModal() {
    cartModal.classList.add('open');
}

function closeCartModal() {
    cartModal.classList.remove('open');
}

cartOpen.addEventListener('click', showCartModal);
closeCart.addEventListener('click', closeCartModal);
cartModal.addEventListener('click', closeCartModal);
cart.addEventListener('click', function(event) {
    event.stopPropagation();
});


// OPEN AND CLOSE MENU
const menuOpen = document.querySelector('.menu-icon');
const menuModal = document.querySelector('.menu-modal');
const closeMenu = document.querySelector('.close-menu');
const menu = document.querySelector('.menu-container');

function showMenuModal() {
    menuModal.classList.add('open');
}

function closeMenuModal() {
    menuModal.classList.remove('open');
}

menuOpen.addEventListener('click', showMenuModal);
closeMenu.addEventListener('click', closeMenuModal);
menuModal.addEventListener('click', closeMenuModal);
menu.addEventListener('click', function(event) {
    event.stopPropagation();
});



// OPEN AND CLOSE SEARCH
const searchOpen = document.querySelector('.search-icon');
const searchModal = document.querySelector('.search-modal');
const closeSearch = document.querySelector('.close-search');
const search = document.querySelector('.search-container');

function showSearchModal() {
    searchModal.classList.add('open');
}

function closeSearchModal() {
    searchModal.classList.remove('open');
}

searchOpen.addEventListener('click', showSearchModal);
closeSearch.addEventListener('click', closeSearchModal);
searchModal.addEventListener('click', closeSearchModal);
search.addEventListener('click', function(event) {
    event.stopPropagation();
});




// Detail javascript
document.addEventListener('DOMContentLoaded', () => {
    const urlParams = new URLSearchParams(window.location.search);
    const productId = urlParams.get('id');
    const product = getProductById(productId);
  
    if (product) {
      document.getElementById('product-image').innerHTML = `<img src="${product.image}" alt="${product.name}">`;
      document.getElementById('product-name').textContent = product.name;
      document.getElementById('product-price').textContent = product.price;
      document.getElementById('price_old').textContent = product.price_old;
    }
  });
  
  // Hàm giả lập lấy thông tin sản phẩm dựa trên ID
  function getProductById(productId) {
    // Giả sử có một danh sách sản phẩm với thông tin
    const products = [
      { id: '1', name: 'Wood Outdoor Adirondack Chair', price: '$1,009', image:'./assets/img/products/chair/chair-3.jpg'},
      
      { id: '2', name: 'Solid Wood Bar Storage Cabinet', price: '$1,899', image:'./assets/img/products/cabinet/cabinet-1.jpg'},
      
      { id: '3', name: 'Solid Wood Bed With Fabric Headboard', price: '$3,707', image:'./assets/img/products/bed/bed-1.jpg'},
      
      { id: '4', name: 'Floor Lamp With Polyester Shade', price: '$399', image:'./assets/img/products/lamp/lamp3.jpg'},
      
      { id: '5', name: 'Garden Chair With Armrests', price: '$1,009', image:'./assets/img/products/chair/chair-4.jpg'},
      
      { id: '6', name: 'Led Steel Floor Lamp', price: '$299', price_old:'$429', image:'./assets/img/products/lamp/lamp-2.jpg'},
      
      { id: '7', name: 'Teak Garden Chair With Armrests', price: '$999', image:'./assets/img/products/chair/chair-5.jpg'},
      // Thêm các sản phẩm khác vào đây
    ];
  
    return products.find(product => product.id === productId);
  }


/* button scroll to top design */
let toTop = document.getElementById('toTop');
toTop.style.display = 'none';
window.addEventListener('scroll', () => {
    if(this.scrollY > 200){
        toTop.style.display = 'block';
    }else{
        toTop.style.display = 'none';
    }
})
toTop.onclick = function(){
    window.scrollTo({ top: 0, behavior: 'smooth' });
}