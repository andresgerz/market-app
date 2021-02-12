let products = JSON.parse(localStorage.getItem("total"));
console.log(products);
 
document.querySelector('#cart-products').innerHTML = `
  ${products.map((product, index) => `
    <tr>
      <th scope="row">${index+1}</th>
      <td>Fender Stratocaster</td>
      <td>${product}</td>
    </tr>
    `
  )}
  ` 