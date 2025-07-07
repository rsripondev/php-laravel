<?php

const USERNAME = 'admin';
const PASSWORD = '12345';

echo "Enter Username : ";
$Username = readline();

echo "Enter Password : ";
$Password = readline();

if(empty($Username) || empty($Password)){
    echo "Username Or Password is Blank";
}else{
    if($Username === USERNAME && $Password === PASSWORD){
        echo "Login Succesful ! User Login Deashbord";
    }else{
        echo "Invalid Username or Password";
    }
}