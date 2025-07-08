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

const USERNAME = 'Ripon';
const PASSWORD = '123456';

if(empty($USERNAME) || empty($PASSWORD)){
    echo "Username or Password is Blank";
}elseif($USERNAME = $PASSWORD){
    echo "Login No Problem";
}else{
    echo "Okay Brother no Problem";
}
