import { products } from '../database.js';

let carritoDeCompras = localStorage.getItem("total") === null ? [] : JSON.parse(localStorage.getItem("total"));
let app = document.querySelector('#products-wrapper');


const getCounter = () => {
  let counter = 0;
  if (localStorage.getItem("total") != null) {
    counter = JSON.parse(localStorage.getItem("total")).length;
  } 
  document.querySelector('.counter').textContent = counter;
}  

getCounter();

function addToCart(e) {
  carritoDeCompras.push(e.target.value);  
  localStorage.setItem("total", JSON.stringify(carritoDeCompras));
  
  getCounter();  
}


app.innerHTML = `
  <section>
    <div class='container'>
      <h1 class='text-center p-5'>Nuestros Productos</h1>
      <div class='container d-flex flex-wrap justify-content-center  products-wrapper'>
      ${products.map((product, index) => `
        <div class='product'>
          <img class='img-fluid' src='../../images/300x300.png' />
          <div class='info'>
            <h4>${product.brand} ${product.model}</h4>
            <p>$ ${product.cost}</p>
            <button class='btn btn-primary buttons' value='${product.cost}' onclick='addToCart();'>Add to cart</button> 
          </div>
        </div>`
        )}</div>
    </div>
  </section>
  `;



const buttons = [...document.querySelectorAll('.buttons')];

buttons.forEach(button => {
  let id = button.dataset.id;

  button.addEventListener('click', addToCart);
})

/* console.log("add prod: " + addProduct);
addProduct.addEventListener('click', addToCart); */