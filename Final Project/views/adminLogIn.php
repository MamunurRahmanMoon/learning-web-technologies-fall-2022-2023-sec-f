<?php
    //Error Handling Message
    // if(isset($_GET['err'])){
        
    //     if($_GET['err'] == 'bad_request'){
    //         echo "Log in first\r\n";
    //     }
    // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
</head>
<body>
    <form method="post" action="adminLogInCheck.php">
        <fieldset>
            <legend>Admin Login</legend>
            <table>
            <tr>
                <td>
                    Admin Username: <input type="text" name="admin_username" value="">
                </td>
            </tr>
            <tr>
                <td>
                    Admin Code : <input type="password" name="admin_code" value=""/> 
                </td>
            </tr>
           
             <tr>
                <td>
                <input type="submit" name="btn" value="Submit"/>
                </td>
             </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>