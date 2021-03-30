export class Header {
  constructor() {
   
  }
  
  

  render() {
    return(`
      <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand mr-5" href="#">Market App</a>
            <ul class="navbar-nav mr-auto mt-2 ml-5 mt-lg-0">
              <li class="nav-item active">
                <a class="nav-link" href="../../index.html">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../../pages/products.html">Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../../pages/contact.html" tabindex="-1" aria-disabled="true">Contact</a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
    `)
  }
}