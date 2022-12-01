<?php
    // if(isset($_SESSION['donorStatus']) || isset($_SESSION['requesterStatus']) || isset($_SESSION['volunteerStatus'])){
    //     header('location: adminLogIn.php');
       
    // }
    // if(isset($_SESSION['adminStatus'])){}
        
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="../assets/styles/adminPage.css">
    
</head>

<body>
    <a href="../views/home.php">Home</a>
    <form method="post" action="" enctype="adminCheck.php">
        <div class="main-container">
            <div class="menubar">

            </div>

            <div class="main-element">
                <div class="sidebar">
                    <a href="#" class="bar-element">
                        <b> Admins</b>
                    </a>
                    <a href="#" class="bar-element">
                        <b>Donors</b>
                    </a>
                    <a href="#" class="bar-element">
                        <b>Requesters</b>
                    </a>
                    <a href="#" class="bar-element">
                        <b>Volunteers</b>
                    </a>
                    <a href="#" class="bar-element">
                        <b>Requesters</b>
                    </a>
                </div>
                <div class="display-area">
                    <input type="text" id="searchAdmin">
                    <input type="button" value="Search" id="btn-search" onclick="ajax()">

                    <table>
                        <tr>
                            <td class="searchResult">
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </form>

    <script src="../assets/JS/adminOperation.js"></script>
</body>

<footer>
    <a href="logout.php">Log-out</a>
</footer>
</html>