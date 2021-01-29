import { products } from '../database.js'; 

export class MainHome {
  constructor() {

  }
 


  render() {
    return(`
      <main>
        <section>
          <div class='container'>
            <h1 class='text-center p-5'>Nuestros Productos</h1>
            <div class='container d-flex flex-wrap justify-content-center  products-wrapper'>
            ${products.map(product => `<div>
            
            <img class='img-fluid' src='../../images/300x300.png' />
            <div class='info'>
              <h4>${product.brand} ${product.model}</h4>
              <p>$ ${product.cost}</p>
            </div>
            </div>`
              )}</div>
          </div>
        </section>
      </main>

      <style>
        main {
          background-color: #0af;
        }

        .info {
          background-color: #eee;
        }
      </style>
    `);
  }
}