<?php

    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $donorFile = '../LogIn/donors.txt';
    $requesterFile = '../LogIn/requesters.txt';
    $volunteerFile = '../LogIn/volunteers.txt';

    // New Logic

    if(isset($_POST['btn'])){
        if($username == "" || $password == "" || $role == ""){
            header('location: login.php?err=empty');
        }

        // Donor Verification
        else if($username != null && $password != null && $role == 'Donor'){
            $donorFile=fopen('../LogIn/donors.txt', 'r'); //r = read only
            while(!feof($donorFile)){
                $donor = fgets($donorFile);
                $donorContent = explode('|', $donor);

                if(trim($donorContent[0]) == $username && trim($donorContent[1]) == $password && trim($donorContent[3]) == $role){

                    // Session verification
                    $_SESSION['donorStatus'] = true;
                    $donorSession = $username;
                    $_SESSION['donorStatus'] = $donorSession;

                    setcookie('donorStatus', 'true', time()+3600, '/');
                    header('location: donor.php');
                }
            }
        }
        // Requester Verificaton
        else if($username != null && $password != null && $role == 'Requester'){

            $requesterFile=fopen('../LogIn/requesters.txt', 'r');
            while(!feof($requesterFile)){
                $requester = fgets($requesterFile);
                $requesterContent = explode('|', $requester);

                if(trim($requesterContent[0]) == $username && trim($requesterContent[1]) == $password && trim($requesterContent[3]) == $role){

                    // session verification
                    $_SESSION['requesterStatus'] = true;
                    $requesterSession = $username;
                    $_SESSION['requesterStatus'] = $requesterSession;

                    setcookie('requesterStatus', 'true', time()+3600, '/');
                    header('location: requester.php');
                }
            }
        }
        // Volunteer Verification
        else if($username != null && $password != null && $role == 'Volunteer'){

            $volunteerFile = '../LogIn/volunteers.txt';
            $volunteerFile=fopen('../LogIn/volunteers.txt', 'r');

            while(!feof($volunteerFile)){
                $volunteer = fgets($volunteerFile);
                $volunteerContent = explode('|', $volunteer);

                if(trim($volunteerContent[0]) == $username && trim($volunteerContent[1]) == $password && trim($volunteerContent[3]) == $role){
                    
                    // session verification
                    $_SESSION['volunteerStatus'] = true;
                    $volunteerSession = $username;
                    $_SESSION['volunteerStatus'] = $volunteerSession;
                    setcookie('volunteerStatus', 'true', time()+3600, '/');
                    header('location: volunteer.php');
                }
            }
        }
        // else if($username != trim($requesterContent[0]) || $username != trim($donorContent[0]) || $username != trim($volunteerContent[0]) && $password != trim($requesterContent[1]) ||$password != trim($donorContent[1]) || $password != trim($volunteerContent[1])){
        //     header('location: login.php?err=invalid');
        // }
        else{
            header('location: login.php?err=invalid');
        }
    }
    


    // OLD Logic

    // // Check if file exist or not--------
    // if (file_exists($file)) {

    //     if(isset($_POST['btn'])){

    //         if($username != null && $password != null){
    //             $file=fopen('../LogIn/users.txt', 'r');

    //             while(!feof($file)){
    
    //                 $user = fgets($file);
    //                 $userContent = explode('|', $user);
            
    //                     if(trim($userContent[0]) === $username && trim($userContent[1]) === $password && trim($userContent[3]) === $role){
    //                         $_SESSION['status'] = true;
    //                         header('location: donor.php');
    //                     }
    //                     else if(trim($userContent[0]) == $username && trim($userContent[1]) == $password && trim($userContent[3]) == $role){
    //                         $_SESSION['status'] = true;
    //                         header('location: requester.php');
    //                     }
    //                     else if(trim($userContent[0]) == $username && trim($userContent[1]) == $password && trim($userContent[3]) == $role){
    //                         $_SESSION['status'] = true;
    //                         header('location: volunteer.php');
    //                     }
    //                     else if(trim($userContent[0]) != $username && trim($userContent[1]) != $password && trim($userContent[3]) != $role){
    //                         $_SESSION['status'] = true;
    //                         header('location: login.php?err=invalid');
    //                     }
    //                 }
    //         } 
    //         else{
    //             header('location: login.php?err=empty');
    //         }

            
    //     }



    // Ancient Logic
        //     if($username == "" || $password == "" || $role == ""){
        //         header('location: login.php?err=empty');
        //     } 

        //     while(!feof($file)){
    
        //     $user = fgets($file);
        //     $userContent = explode('|', $user);
    
        //         if(trim($userContent[0]) == $username && trim($userContent[1]) == $password && trim($userContent[3]) == $role){
        //             $_SESSION['status'] = true;
        //             // echo trim($userContent[0]);
        //             // echo trim($userContent[1]);
        //             header('location: admin.php');
        //         }
    
        //         else if(trim($userContent[0]) == $username && trim($userContent[1]) == $password && trim($userContent[3]) == $role){
        //             $_SESSION['status'] = true;
        //             header('location: donor.php');
        //         }
        //         else if(trim($userContent[0]) == $username && trim($userContent[1]) == $password && trim($userContent[3]) == $role){
        //             $_SESSION['status'] = true;
        //             header('location: requester.php');
        //         }
        //         else if(trim($userContent[0]) == $username && trim($userContent[1]) == $password && trim($userContent[3]) == $role){
        //             $_SESSION['status'] = true;
        //             header('location: volunteer.php');
        //         }
        //         else if(trim($userContent[0]) != $username && trim($userContent[1]) != $password && trim($userContent[3]) != $role){
        //             $_SESSION['status'] = true;
        //             header('location: login.php?err=invalid');
        //         }
        //     }
        // }
    // } 
    // else {
    //     header('location: login.php?err=no_file');
        
    // }

    
?>