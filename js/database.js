let products = [
  {
    id: 0,
    brand: "Stratocaster",
    category: "Guitarra",
    cost: 15000,
    imagen: "url",
    model:  "1960"
  },
  
] 


for (let i = 0 ; i < 42; i++) {
  let cost_generator = (Math.random() * 300000 + 15000).toFixed(2);

  products.push({
    id: i,
    brand: "Fender",
    category: "Guitarra",
    cost: cost_generator,
    imagen: "../images/300x300.png",
    model: `Stratocaster ${1961 + i}`
  })
}

console.log('Database:');
console.log(products);
export {products};