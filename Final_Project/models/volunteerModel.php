<?php
    require_once('db.php');
    function volunteerSignup($fullname, $username, $password, $district, $city, $phone, $email){
        $con = getConnection();

        $sql = "INSERT INTO `volunteers` (`ID`, `fullname`, `username`, `password`, `district`, `city`, `phone`, `email`) VALUES (NULL, '$fullname', '$username', '$password', '$district', '$city', '$phone', '$email')";

        $result = mysqli_query($con, $sql);
        
        if($result){
            return true;
        }
        else{
            return false;
        }
    }

    function volunteerLogin($user){
        $con = getConnection();
        $sql = "SELECT * FROM `volunteers` where username='{$user['username']}' and password='{$user['password']}'";

        $result = mysqli_query($con
        , $sql);
        $count  = mysqli_num_rows($result);

        if($count > 0){
            return true;
        }
        else{
            return false;
        }
    }
?>