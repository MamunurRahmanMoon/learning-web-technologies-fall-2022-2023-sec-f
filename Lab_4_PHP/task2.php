<?php
     $currentPass = $_POST['currentPass'];
     $newPassword = $_POST['newPass'];
     $retype = $_POST['retypePass'];
  
     $currentPass !== $newPassword;

     if($currentPass= "" ||  $newPassword == "" || $retype == ""){
        echo "Fields are empty";
     }
     if($currentPass == $newPassword)
     {
        echo "New Password can not be your current password";
     }
     else if( $newPassword !== $retype){
        echo "Retped password didn't match with new password";
     }
?>