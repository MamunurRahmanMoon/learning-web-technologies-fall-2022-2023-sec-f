<?php
    session_destroy();
    
    setcookie('adminStatus', 'true', time()-10, '/');
    
    header('location: ../views/adminLogIn.php');
 ?>