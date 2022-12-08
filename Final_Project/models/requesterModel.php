<?php
    require_once('db.php');
    function requesterSignup($fullname, $username, $password, $district, $city, $phone, $email){
        $con = getConnection();
        // $sql = "INSERT INTO `donors` (`ID`,`fullname`,`username`,`password`,`district`,`city`,`phone`,`email`) VALUES(NULL, {$user['fullname']}, {$user['username']}, {$user['password']}, {$user['district']}, {$user['city']}, {$user['phone']}, {$user['email']})";

        // Working one
        $sql = "INSERT INTO `requesters` (`ID`, `fullname`, `username`, `password`, `district`, `city`, `phone`, `email`) VALUES (NULL, '$fullname', '$username', '$password', '$district', '$city', '$phone', '$email')";

        $result = mysqli_query($con, $sql);

        if($result){
            return true;
        }
        else{
            return false;
        }
    }

    function login($user){
        $con = getConnection();
        $sql = "SELECT * FROM `requesters` where username='{$user['username']}' and password='{$user['password']}'";

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