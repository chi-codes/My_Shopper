$(document).ready(function(e) {
  $('#checkout').click(function (e) {
    document.location.href = "checkout.php";
  })
});	

$(document).ready(function() {
  $('#you').click(function (e) {
    document.location.href = "register.php";
  })
});

$("#ok").click(function(e){
  alert('Login Succesful')
})

$("#ok").click(function(e){
  e.preventDefault();
  document.location.href = "cart.php";
})

$("#yes").click(function(e){
  alert('Registered Succesfully')
})

$("#yes").click(function(e){
  e.preventDefault();
  document.location.href = "cart.php";
})
$("#succ").click(function(e){
  alert('Login Succesful')
})