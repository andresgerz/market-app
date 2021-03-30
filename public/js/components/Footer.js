export class Footer {
  
  constructor(){

  }

  render() {
    return(`
      <footer class="bg-primary text-white d-flex justify-content-center align-items-center">
        <p><strong>Copyright 2021 - Market App</strong></p>
      </footer>

      <style>
        footer {
          width: 100%;
          height: 100px;
        }
      </style>
      `);
  }
}

