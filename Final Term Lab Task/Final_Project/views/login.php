<?php 

    if(isset($_GET['err'])){
            
        if($_GET['err'] == 'empty'){
            echo "Enter all the credentials\r\n";
        }
    }

    if(isset($_GET['err'])){
        if($_GET['err'] == 'null'){
            echo "Invalid username/password";
        }

        if($_GET['err'] == 'invalid'){
            echo "Username/password not found ...";
        }

        if($_GET['err'] == 'bad_request'){
            echo "Please login first ...";
        }
        if($_GET['err'] == 'empty'){
            echo "Enter your Username, Password & Designation";
        }
        if($_GET['err'] == 'no_file'){
            echo "Signup first";
        }
    }
?>

<html>
<head>
    <title>Login</title>
</head>
<body>
        <form name="loginForm" onsubmit="return validateForm();" action="../controllers/loginCheck.php" method="POST">
        <fieldset>
        <legend><b>Log-in</b></legend>
        <table>
            <tr>
                <td> Log-in as:
                    <select name="role">
                        <option selected disabled value="select">--Select--</option>
                        <option value="Donor">Donor</option>
                        <option value="Requester">Requester</option>
                        <option value="Volunteer">Volunteer</option>
                    </select>
                    <div style="font-size: 14px; margin-left: 120px; color: blue;" id="role"><p class="displayError"></p></div>
                </td>
            </tr>
            <tr>
                <td>
                    Username: <input type="text" name="username" value="">
                    <div style="font-size: 14px; margin-left: 120px; color: blue;" id="username"><p class="displayError"></p></div>
                </td>
            </tr>
            <tr>
                <td>
                    Password : <input type="password" name="password" value=""/> 
                    <div style="font-size: 14px; margin-left: 120px; color: blue;" id="password"><p class="displayError"></p></div>
                </td>
            </tr>
           
             <tr>
                <td>
                <input type="submit" name="btn" value="Submit"/>
                </td>
             </tr>

             <tr>
                <td><br></td>
            </tr>
             <tr>
                <td>
                    Haven't registered yet? <a href="signup.php">Sign-up</a>
                </td>
                <td>
                <a href="adminLogIn.php">Log-in as Admin</a>
                </td>
             </tr>
        </table>
    </fieldset>
    </form>

    <script src="../assets/JS/loginCheck.js"></script>
</body>
</html>