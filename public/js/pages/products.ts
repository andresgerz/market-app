import { Footer } from '../components/Footer.js';
import { MainProducts } from '../components/MainProducts.js';
import { Header } from '../components/Header.js';

let header = new Header();
header = header.render();

let mainProducts = new MainProducts();
mainProducts = mainProducts.render();

let footer = new Footer();
footer = footer.render();


let app = document.getElementById('app');

app.innerHTML = `
                 ${header}
                 ${mainProducts}
                 ${footer}
                `;