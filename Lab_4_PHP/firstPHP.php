<?php 
    $username = $_POST['username'];
    $password = $_POST['pass'];
    $astric = '*';
    $hashtag = '#';
    $percentage = '%';

    if($username == "" || $password == "" || strlen($username)< 2 || strlen($password)<8) {
        echo "Invalid username/password"; 
    }

    else if( strpos($password,'*' ) || strpos($password,$hashtag == false ) || strpos($password,$percentage == false )){

        echo "Password must contain at leasst one special character";
    }
   
    else if($username == $password){
        echo "<h1>Welcome Home </h1>";
    }
    else{
        echo "Try again";
    }

?>