<?php
    session_start();
    if(!isset($_SESSION['donorStatus'])){
        header('location: login.php?err=bad_request');
    }
    if(isset($_SESSION['donorStatus'])){
    echo "You are logged in as ".$_SESSION['donorStatus'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donor</title>
</head>
<body>
    <form method="POST" action="donorCheck.php" enctype="">
    <div>
        <a href="home.php">Home</a>
    </div>
    <div  align="right">
        <table>
        <tr>
                <td>
                    <select name="donor_menu" id="">
                        <option selected value="Profile">Profile</option>
                        <option value="Setting">Setting</option>
                        <option value="view_request">View Request</option>
                    </select>
                </td>
            </tr>
        </table>
    </div>
    <center>
     <!-- Donation Part -->
     <div>
        <table>
            <tr>
                <h1>Donor Dashboard</h1>
            </tr>
        </table>
     </div>
     <div style= "width:250px">
        <fieldset>
            <legend><b>Total Donation Collected</b></legend>
            <table>
                <tr>
                   Taka: <input type="text"
                   <?php
                        $donationFile=file('../LogIn/donation.txt');
                        $total = 0;
                        foreach($donationFile as $line){
                            // echo (int)$line."\r\n";
                            $total = $total + (int)$line;
                        }
                        echo "value=".$total; 
                   ?>
                   >
                </tr>
            </table>
        </fieldset>
     </div>

        <br>

     <div style= "width:250px">
        
            <fieldset>
                <legend><b>Become a Donor</b></legend>
                <table>
                    <tr>
                        <td>
                            <input name="donation" value="10" max="10000" min="10" type="number" placeholder="Enter donation amount">
                            <br>
                            <br>
                            <input type="submit" name="donate_btn" value="Donate Now"></input>
                        </td>
                    </tr>
                </table>
            </fieldset>
        </div>
        <br>
    </center>
    </form>
    <center>
        <div>
            <?php
                    $donationFile = file('../LogIn/donation.txt');

                    $lastDonation = array_pop($donationFile);
                    echo "You have successully donated <b>".$lastDonation."Tk</b>"; 
                                    
            ?>
        </div>
    </center>
    <br>
    <br>
    <center>
    <div style= "width:250px">
            <a href="logout.php">Log-out </a>
    </div>
    </center>
    
</body>


</html>