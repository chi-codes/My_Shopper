<?php

session_start();
$username= "root";
$password ='';
$database ='my_shopper';
$host = 'localhost';
$connect = new PDO("mysql:host=$host;dbname=$database",$username , $password );


function login(){

if( isset($_SESSION['user_id'])  and  !empty($_SESSION['user_id'])  ){
return true;


}else{

    return false;
}

}



?>