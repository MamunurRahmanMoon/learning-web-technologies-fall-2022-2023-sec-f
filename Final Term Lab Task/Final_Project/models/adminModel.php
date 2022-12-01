<?php
require_once('db.php');

    function login($user){
        $con = getConnection();
        $sql = "select * from admins where username='{$user['username']}' and password='{$user['password']}'";

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
    function displayUSer(){
        $con = getConnection();
        $sql = "select * from admins";
        $result = mysqli_query($con
        , $sql);
        $count  = mysqli_num_rows($result);
        if($count > 0){
            while ($data = mysqli_fetch_assoc($result)){
                if($data['username'] == 1){
                    echo "  
                    <tr>
                        <td>{$data['ID']}</td>
                        <td>{$data['username']}</td>
                    </tr>
                    ";
                }
            }
        }
                echo "</table>
                </br>";
        else{
            return false;
        }

    }


    function insertUser(){
        
    }
?>