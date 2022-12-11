<?php

if(isset($_POST['upload_image_btn'])){
        
        session_start();
        $adminName = $_SESSION['adminUsername'];
        // print_r($_FILES);
    
        $src = $_FILES['upload_image']['tmp_name'];
        $img = explode('.',$_FILES['upload_image']['name']);
        $img = "png";
        $img_name = $adminName.'.'.$img;

        $des ="../assets/images/uploads/".$img_name;

        if(move_uploaded_file($src, $des)){
            require_once('../models/adminModel.php');
            updateUserImg($img_name,$adminName);
            header("location: ../views/adminDonor.php?err=success");
        }else{
            header("location: editUser.php?err=failed");
        }
    }

    if(isset($_POST['update_userProfile'])){

        session_start();
        $currentUserID = $_SESSION['currentAdminVolunteerID'];

        $fullname = $_POST['displayFullname'];
        $username = $_POST['displayUsername'];
        $password = $_POST['displayPassword'];
        $district = $_POST['displayDistrict'];
        $city = $_POST['displayCity'];
        $phone = $_POST['displayPhone'];
        $email = $_POST['displayEmail'];


        require_once('../models/volunteerModel.php');

        $status = updateVolunteerInfo($currentUserID, $fullname, $username, $password, $district, $city, $phone, $email);
        
        if($status){
            header("location: ../views/adminVolunteer.php?err=infoSuccess");
        }
        else{
            header("location: ../views/editAdminVolunteer.php?err=infoFailed");
        }
    }
       


?>