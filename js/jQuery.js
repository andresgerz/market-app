$(document).ready(function (){ 
  $(".sacar").css({
    "backgroundColor": "red",
    "color": "#fff",
  });

  let products = JSON.parse(localStorage.getItem("compras"));
  let todo = JSON.parse(localStorage.getItem("todo"));
  let acum = 0;

  products.forEach(element => {
    acum += todo[element].price;
  });

  $(".total-compras").text(`Total: $ ${acum}`);
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


$(".comprar").click(function (){ 
  let products = JSON.parse(localStorage.getItem("compras"));

  $.ajax({
    url: '../backend/actions/product-form.php',
    type: 'post',
    headers: {
      'content-type': 'application/json',    
    },
    data: {products},
    success: function (data) {
      console.log(data);  
    },
    error: function(xhr, status, error){
      var errorMessage = xhr.status + ': ' + xhr.statusText
      alert('Error - ' + errorMessage);
    }
  });
})


/* 
// AJAX
$('#login').submit(e => {
  console.log(e);
  e.preventDefault();

  const name = $('#number_convert_id').val();
  console.log(name);

  $.post("https://market-app.lndo.site/backend/actions/login.php", {postData: name}, (response) => {
    
    $('#form-convert').trigger('reset');
  });
});  */