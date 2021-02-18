const showCartProducts = () => {
  let products = JSON.parse(localStorage.getItem("total"));
  console.log(products);

  document.querySelector('#cart-products').innerHTML = `
    ${products.map((product, index) => `
      <tr class='item'>
        <th scope="row">${index+1}</th>
        <td>Fender Stratocaster</td>
        <td>${product}</td>
        <td><button class='sacar' value='${index}'>Sacar del carrito</button></td>
      </tr>
      `
    )}
    ` 
}

showCartProducts();

export { showCartProducts };