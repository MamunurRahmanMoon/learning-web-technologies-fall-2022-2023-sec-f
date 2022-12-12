<?php
    require_once('db.php');
    function adminSignup($Id, $password, $name, $email){
        $con = getConnection();

        // Working one
        $sql = "INSERT INTO `admins` (`ID`, `userId`, `password`, `name`, `email`) VALUES (NULL, '$Id', '$password', '$name', '$email')";

        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);
        
        if($count >){
            echo "Usrname already exist!";
        }
        else{
            return false;
        }
    }
?>