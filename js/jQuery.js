$(document).ready(function (){ 
  $(".sacar").css({
    "backgroundColor": "red",
    "color": "#fff",
  });
});

$(".buttons").click(function (){ 
  $(this).css({
    "backgroundColor": "green",
    "borderColor": "lightgreen",
  });
});  

$(".sacar").click(function (){ 
  alert('¿Seguro que quiere sacar este producto?');
  
  const deleteItemArray = () => {
    let allItems = JSON.parse(localStorage.getItem("todo"));
    let arr = JSON.parse(localStorage.getItem("compras"));
    console.log($(this).val());
    arr.splice($(this).val(), 1);
    localStorage.removeItem("compras");
    localStorage.setItem("compras", JSON.stringify(arr));
  }
  
  deleteItemArray();
  location.reload();
})