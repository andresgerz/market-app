
const showCartProducts = () => {
  let products = JSON.parse(localStorage.getItem("compras"));
  let todo = JSON.parse(localStorage.getItem("todo"));
  console.log(todo);
  console.log(products);

  document.querySelector('#cart-products').innerHTML = `
    ${products.map((product, index) => `
      <tr class='item'>
        <th scope="row">${index+1}</th>
        <td>${todo[product].title}</td>
        <td>$ ${todo[product].price}</td>
        <td><button class='sacar' value='${index}';'>Sacar del carrito</button></td>
      </tr>
      `)}
    ` 
}

showCartProducts();

export { showCartProducts };