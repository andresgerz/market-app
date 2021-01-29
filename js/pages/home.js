import { Footer } from '../components/Footer.js';
import { MainHome } from '../components/MainHome.js';
import { Header } from '../components/Header.js';

let header = new Header();
header = header.render();

let mainHome = new MainHome();
mainHome = mainHome.render();

let footer = new Footer();
footer = footer.render();


let app = document.getElementById('app');

app.innerHTML = `
                 ${header}
                 ${mainHome}
                 ${footer}
                `;