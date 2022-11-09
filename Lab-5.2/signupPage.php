<?php 

    if(isset($_GET['err'])){
        if($_GET['err'] == 'null'){
            echo "invalid username/password";
        }

        if($_GET['err'] == 'invalid'){
            echo "username/password not found ...";
        }

        if($_GET['err'] == 'bad_request'){
            echo "please login first ...";
        }
    }
?>


<html>
<head>
    <title>Signup</title>
</head>
<body>

        <form method="post" action="regCheck.php" enctype="">
            <fieldset>
                <legend>Signup</legend>
                <table>
                    <tr>
                    Name: <input type="text" name="name" value=""/> <br>
                    </tr>

                    <tr>
                    Email: <input type="email" name="email" value=""/> <br>
                    </tr>
                    <tr>
                    Username: <input type="text" name="username" value=""/> <br>
                    </tr>

                    <tr>
                    Password: <input type="password" name="password" value=""/> <br>
                    </tr>

                    <tr>
                    Confirm Password: <input type="password" name="confirmPassword" value=""/> <br>  
                    </tr>

                    <tr>
                        <td>
                        <input type="submit" name="submit_btn" value="Submit"/>
                        </td>
                        <td>
                        <input type="reset" name="reset_btn" value="Reset"/>
                        </td>
                    </tr>
            </table>
               
            </fieldset>
        </form>
</body>
</html>