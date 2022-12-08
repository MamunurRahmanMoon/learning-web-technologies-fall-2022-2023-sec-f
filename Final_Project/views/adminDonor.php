<?php
    session_start();
    $adminName = $_SESSION['adminUsername'];
    if(!isset($_COOKIE['adminStatus'])){
        header("location: adminLogIn.php?err=bad_request");
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="../assets/styles/adminPage.css">
    
</head>

<body>
    <form method="post" action="adminCheck.php">
        <div class="main-container">
            <div class="menubar">
                <div class="left-menu-element">
                    <a class="menu-button" href="../views/home.php">Home</a>
                </div>
                <div>
                    <a class="right-menu-element" href="adminProfile.php">
                    <?php
                        $adminName = $_SESSION['adminUsername'];

                        require_once('../models/adminModel.php');
                        $result = displayProfile($adminName);
                        $data = mysqli_fetch_assoc($result);
                    ?>
                        <div class="profile-thumbnail">
                            <img id="user-image" src="../assets/images/uploads/<?php
                                            if($data['image'] == null){
                                                echo "default.png";
                                            }else{
                                            echo "{$data['image']}";
                                            }
                                        ?>"  alt="">
                        </div>
                        
                        <h3>
                            <?php
                            echo"$adminName" ;
                            ?>
                        </h3>
                    </a>
                </div>
            </div>

            <div class="main-element">
                <div class="sidebar">
                    <a href="admin.php" class="bar-element">
                        <b> Admins</b>
                    </a>
                    <a href="adminDonor.php" class="bar-element">
                        <b>Donors</b>
                    </a>
                    <a href="adminRequester.php" class="bar-element">
                        <b>Requesters</b>
                    </a>
                    <a href="adminVolunteer.php" class="bar-element">
                        <b>Volunteers</b>
                    </a>
                    <a href="adminCampaign.php" class="bar-element">
                        <b>Campaigns</b>
                    </a>
                </div>

                <div class="display-area">
                    <div>
                        <input name="adminSearchName" type="text" id="searchAdmin">
                        <input type="button" value="Search" id="btn-search" onclick="ajax()">
                    </div>
                   
                    <div class="table">
                        <!-- Table start -->
                        <div>
                            <table class='table'>
                                <thead>
                                    <th>ID</th>
                                    <th>Fullname</th>
                                    <th>Username</th>
                                    <th>District</th>
                                    <th>City</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                <?php
                                    require_once('../models/donorModel.php');
                                    $result = displayDonor();
                                    while($data = mysqli_fetch_assoc($result)){
                                ?>
                                
                                    <tr>
                                        <td><?= $data['ID']?></td>
                                        <td><?= $data['fullname']?></td>
                                        <td><?= $data['username']?></td>
                                        <td><?= $data['district']?></td>
                                        <td><?= $data['city']?></td>
                                        <td><?= $data['phone']?></td>
                                        <td><?= $data['email']?></td>
                                    </tr>

                                    <?php 
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- Table End -->
                    </div>
                </div>
        </div>
    </form>

    <script src="../assets/JS/adminOperation.js"></script>
</body>

<footer>
<a href="../controllers/logout.php">Log-out</a>
</footer>
</html>