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
    let arr = JSON.parse(localStorage.getItem("total"));
    arr.splice($(this).val(), 1);
    localStorage.clear();
    localStorage.setItem("total", JSON.stringify(arr));
  }
  
  deleteItemArray();
  location.reload();
})