<?php 
    session_start();
    if(!isset($_SESSION['status'])){
        header('location: login.php?err=bad_request');
    }

?>

<html lang="en">
<head>
    <title>Home</title>
</head>
<body>
        <h1>Welcome Home</h1>
        <a href="logoutPage.php" >logout </a>
</body>
</html>