<?php
    session_start();
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    

    if($username == "" || $password == "" || $email == "" || $name == "" || $confirmPassword = ""){
        header('location: signupPage.php?err=null');
    }else{
        $user = ['username'=> $username, 'password'=>$password, 'email'=>$email, 'confirmPassword'=> $password];
        $_SESSION['user'] = $user;
        header('location: loginPage.php');
    }

?>                