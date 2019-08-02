<?php
require('connect.php');

if( !login() ){
echo "
  <script>
  alert('Please Login Before Buying Something In Our Website ');
  window.location.replace('register.php');
  </script>
";

}


$user_email =$_SESSION['user_id'];







?>