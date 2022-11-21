<?php
    require_once "../models/adminModel.php";
    $adminUsername = $_POST['admin_username'];
    $adminCode = $_POST['admin_code'];

    $adminFile = '../LogIn/admin.txt';
    if(isset($_POST['btn'])){
            if($adminUsername == "" || $adminCode == ""){
                header('location: ../views/amdinLogIn.php');
            }
            else{
                $user = ['username' => $adminUsername, 'password' => $adminCode];
                $status = login($user);

                if($status){
                    setcookie('status', 'true', time()+3600, '/');
                    header('location: ../views/admin.php')
                }
            }
        
            echo "Invalid username or code,Go Back & Reload the page again";
        }
        else{
            header('location: adminLogIn.php?err=empty');
        }
?>