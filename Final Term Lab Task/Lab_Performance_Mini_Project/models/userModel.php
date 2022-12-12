<?php
    require_once('db.php');
    function userSignup($Id, $password, $name, $email){
        $con = getConnection();

        // Working one
        $sql = "INSERT INTO `users` (`ID`, `userId`, `password`, `name`, `email`) VALUES (NULL, '$Id', '$password', '$name', '$email')";

        $result = mysqli_query($con, $sql);
        
        if($result){
            return true;
        }
        else{
            return false;
        }
    }
?>