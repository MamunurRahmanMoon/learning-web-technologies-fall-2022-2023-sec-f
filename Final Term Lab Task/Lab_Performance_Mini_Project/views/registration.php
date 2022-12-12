<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registartion Page</title>
</head>
<body>
    <div>
        <form method="POST" action="../controllers/regCheck.php" name="signupForm" onsubmit="return validateForm();">
        <fieldset>
            <legend>Registartion</legend>
            <table>
                <tr>
                    <td> User type:
                        <select name="userType">
                            <option selected disabled value="select">--Select--</option>
                            <option value="Admin">Admin</option>
                            <option value="User">User</option>
                        </select>
                        <div style="font-size: 14px; margin-left: 100px; color: blue;" id="userType"><span class="displayError"></span></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        Id :<input type="text" name="id" value=""/>
                        <div style="font-size: 14px; margin-left: 100px; color: blue;" id="id"><span class="displayError"></span></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        Password :<input type="password" name="password" value=""/>
                        <div style="font-size: 14px; margin-left: 100px; color: blue;" id="password"><span class="displayError"></span></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        Confirm Password:<input type="password" name="confirmPassword" value=""/>
                        <div style="font-size: 14px; margin-left: 100px; color: blue;" id="confirmPassword"><span class="displayError"></span></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        Name :<input type="text" name="name" value=""/>
                        <div style="font-size: 14px; margin-left: 100px; color: blue;" id="name"><span class="displayError"></span></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        Email :<input type="email" name="email" value=""/>
                        <div style="font-size: 14px; margin-left: 100px; color: blue;" id="email"><span class="displayError"></span></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input class="submitButton" type="submit" name="btn" value="Submit"/>
                    </td>
                </tr>
            </table>
        </fieldset>
        </form>
    </div>

    <script src="../JS/regCheck.js"></script>
</body>
</html>