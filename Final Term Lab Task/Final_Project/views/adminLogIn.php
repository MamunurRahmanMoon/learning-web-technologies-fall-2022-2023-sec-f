<?php
    //Error Handling Message
    if(isset($_GET['err'])){
        
        if($_GET['err'] == 'bad_request'){
            echo "Log in first\r\n";
        }
        if($_GET['err'] == 'emptyUsername'){
            echo '<p>Enter username</p>';
        }
        if($_GET['err'] == 'invalid'){
            echo '<p>Invalid username or code</p>';
        }
    }
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="../assets/styles/adminLogIn.css">
</head>
<body>
    <div class='adminLogIn'>
        <form name="adminForm" onsubmit="return validateForm();" action="../controllers/adminLogInCheck.php" method="POST">
            <fieldset>
                <legend>Admin Login</legend>
                <table>
                <tr>
                    <td>
                        Admin Username: <input type="text" name="admin_username">
                        <div style="font-size: 14px; margin-left: 120px; color: blue;" id="username"><p class="displayError"></p></div>
                    </td>
                    
                </tr>
                
                <tr>
                    <td>
                        Admin Code : <input type="password" name="admin_code" value=""/> 
                        <div style="font-size: 14px; margin-left: 120px; color: blue;" id="code"><p class="displayError"></p></div>
                    </td>
                </tr>
            
                <tr>
                    <td>
                    <input class='submitButton' type="submit" name='btn' value="Submit"/>
                    </td>
                </tr>
                </table>
            </fieldset>
        </form>
    </div>

    <script src="../assets/JS/adminLogIn.js"></script>
</body>
</html>