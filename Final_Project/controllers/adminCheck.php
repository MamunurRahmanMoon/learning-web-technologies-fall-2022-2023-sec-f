<?php 

    $adminSearchName = $_POST['adminSearchName'];
    sleep(2);
    if($adminSearchName != null){
        echo "Your name is: ".$adminSearchName;
    }else{
        echo "Null value..";
    }

?>