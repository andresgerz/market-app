import { Footer } from '../components/Footer.js';
import { MainContact } from '../components/MainContact.js';
import { Header } from '../components/Header.js';

let header = new Header();
header = header.render();

let mainContact = new MainContact();
mainContact = mainContact.render();

let footer = new Footer();
footer = footer.render();


let app = document.getElementById('app');

app.innerHTML = `
                 ${header}
                 ${mainContact}
                 ${footer}
                `;