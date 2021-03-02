import { ACCESS_TOKEN_ENV } from '../../env.js';

let carritoDeCompras = localStorage.getItem("compras") === null ? [] : JSON.parse(localStorage.getItem("compras"));

let todo = localStorage.getItem("todo") === null ? [] : JSON.parse(localStorage.getItem("todo"));

let app = document.querySelector('#products-wrapper');


const getCounter = () => {
  let counter = 0;
  if (localStorage.getItem("compras") != null) {
    counter = JSON.parse(localStorage.getItem("compras")).length;
  } 
  document.querySelector('.counter').textContent = counter;
}  

getCounter();

const addToCart = (e) => {
  console.log(e);
  carritoDeCompras.push(e.target.value);  
  localStorage.setItem("compras", JSON.stringify(carritoDeCompras));
  
  getCounter();  
}

const render = (arr) => {

  app.innerHTML = `
    <section>
      <div class='container'>
        <h1 class='text-center p-5'>Nuestros Productos</h1>
        <div class='container d-flex flex-wrap justify-content-center  products-wrapper'>
        ${arr.map((product, index) => `
          <div class='product item'>
            <img class='img-fluid' src='${product.thumbnail}' width='100' alt='No Image' />
            <div class='info'>
              <h6>${product.title} ${product.model}</h6>
              <p>$ ${product.price}</p>
              <button class='btn btn-primary buttons' value='${index}' onclick='addToCart();'>Add to cart</button> 
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
    
  }


if (localStorage.getItem("todo") === null) {
  $.ajax({
    url: 'https://api.mercadolibre.com/sites/MLA/search?category=MLA1182',
    type: 'get',
    headers: {
      'content-type': 'application/json',   
      'Authorization': `Bearer ${ACCESS_TOKEN_ENV}`
    },
    success: function (data) {
        
      console.log('AJAX jquery');  
      data.results.forEach(item =>  {
        todo.push(item);
        localStorage.setItem("todo", JSON.stringify(todo));  
      })
      render(data.results);
    },
    error: function(xhr, status, error){
      var errorMessage = xhr.status + ': ' + xhr.statusText
      alert('Error - ' + errorMessage);
    }
  });
} else {
  render(todo);
  console.log('else');  

}

/* console.log("add prod: " + addProduct);
addProduct.addEventListener('click', addToCart); */