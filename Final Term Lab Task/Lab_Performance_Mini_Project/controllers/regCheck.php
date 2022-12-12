<?php
    session_start();
    $userType = $_POST['userType'];
    $userId =  $_POST['id'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    if(isset($_POST['btn'])){
        if($userType != '' && $userId = '' && $password != '' && $name != '' & $email != ''){

            if($userType == 'Admin'){
                require_once('../models/adminModel.php');
                // echo $role;
                // $donor = ['fullname' => $fullname, 'username' => $username, 'password' => $password, 'district' => $district, 'city' => $city, 'phone' => $phone, 'email' => $email];
    
                $status = adminSignup($userId, $password, $name, $email);
       
                if($status){
                   session_start();
                   setcookie('adminStatus', 'true', time()+3600, '/');
                   header('location: ../views/login.php?err=infoSuccess');
                }
                else{
                   header('location: ../views/registration.php?err=infoFailed');
                }  
             }
            if($userType == 'User'){
                require_once('../models/userModel.php');
                // echo $role;
                // $donor = ['fullname' => $fullname, 'username' => $username, 'password' => $password, 'district' => $district, 'city' => $city, 'phone' => $phone, 'email' => $email];
    
                $status = userSignup($userId, $password, $name, $email);
       
                if($status){
                   session_start();
                   setcookie('userStatus', 'true', time()+3600, '/');
                   header('location: ../views/login.php?err=infoSuccess');
                }
                else{
                   header('location: ../views/registration.php?err=infoFailed');
                }  
             }
        }
    }
?>