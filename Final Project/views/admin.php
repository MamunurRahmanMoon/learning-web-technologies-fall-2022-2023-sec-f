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
</head>

<body>
<form method="post" action="" enctype="">
 
    <div>
    <fieldset>
        <legend><b>Search Users by name</b></legend>
        <table border=1>
             <tr>
                <td>
                <input type="submit" name="search_users" value="View"/>
                </td>
             </tr>
            
            <?php
              echo "* Under construction *";
             ?>
             <br>
        </table>
    </fieldset>
    </div>
    
    <br>
    <!-- View donors -->
    <div >
    <fieldset>
        <legend><b>View Donors</b></legend>
        <table border=1 >
             <tr>
                <td>
                <input type="submit" name="view_donor" value="View"/>
                </td>
             </tr>
            
            <?php
            // File locations
             $donorFile = '../LogIn/donors.txt';
         
             $donorFile = fopen('../LogIn/donors.txt', 'r');
              if(isset($_POST['view_donor']))
                while(!feof($donorFile)){
                    $user = fgets($donorFile);
                    $userContent = explode('|', $user);

                    $names = trim($userContent[0]);
                    @$UserPassword = trim($userContent[1]);
                    @$UserEmail = trim($userContent[2]);

                    @$userRole = trim( $userContent[3]);
                    if($userRole == 'Donor'){

                                echo "<b>Name: </b>".$names."|"."<b>Password: </b>".$UserPassword."|"."<b>Email: </b>".$UserEmail."</br>"; 
                    }
                    else{
                        // echo "  No match"."</br>";
                    }
                }
             ?>
             <br>
        </table>
    </fieldset>
    </div>

    <!-- View Requester -->
    <div >
    <fieldset>
        <legend><b>View Requesters</b></legend>
        <table border=1 >
             <tr>
                <td>
                <input type="submit" name="view_requester" value="View"/>
                </td>
             </tr>
            
            <?php
                $requesterFile = '../LogIn/requesters.txt';
                $requesterFile = fopen('../LogIn/requesters.txt', 'r');
                if(isset($_POST['view_requester']))
                while(!feof($requesterFile)){
                    $user = fgets($requesterFile);
                    $userContent = explode('|', $user);

                    $names = trim($userContent[0]);
                    @$UserPassword = trim($userContent[1]);
                    @$UserEmail = trim($userContent[2]);

                    @$userRole = trim( $userContent[3]);
                    if($userRole == 'Requester'){

                                echo "<b>Name: </b>".$names."|"."<b>Password: </b>".$UserPassword."|"."<b>Email: </b>".$UserEmail."</br>"; 
                    }
                    else{
                        // echo "  No match"."</br>";
                    }
                }
             ?>
             <br>
        </table>
    </fieldset>
    </div>

    <!-- View Volunteers -->
    <div >
    <fieldset>
        <legend><b>View Volunteers</b></legend>
        <table border=1 >
             <tr>
                <td>
                <input type="submit" name="view_volunteers" value="View"/>
                </td>
             </tr>
            
            <?php
                $volunteerFile = '../LogIn/volunteers.txt';
                $volunteerFile = fopen('../LogIn/volunteers.txt', 'r');
                if(isset($_POST['view_volunteers']))
                    while(!feof($volunteerFile)){
                        $user = fgets($volunteerFile);
                        $userContent = explode('|', $user);

                        $names = trim($userContent[0]);
                        @$UserPassword = trim($userContent[1]);
                        @$UserEmail = trim($userContent[2]);

                        @$userRole = trim( $userContent[3]);
                        if($userRole == 'Volunteer'){

                                    echo "<b>Name: </b>".$names."|"."<b>Password: </b>".$UserPassword."|"."<b>Email: </b>".$UserEmail."</br>"; 
                        }
                        else{
                            // echo "  No match"."</br>";
                        }
                    }
             ?>
             <br>
        </table>
    </fieldset>
    </div>
    
    <!-- View Requests -->
    <div >
    <fieldset>
        <legend><b>View Requests</b></legend>
        <table border=1 >
             <tr>
                <td>
                <input type="submit" name="view_requests" value="View"/>
                </td>
             </tr>
            
            <?php
                $requestsFile = file('../LogIn/uploads/documents/requests.txt');
                if(isset($_POST['view_requests'])){
                    foreach($requestsFile as $line){
                        echo $line."</br>";
                    }
                }
                    // while(!feof($requestsFile)){
                    //     $user = fgets($requestsFile);
                    //     $userContent = explode('|', $user);

                    //     $fullname = trim($userContent[0]);
                    //     @$username = trim($userContent[1]);
                    //     @$documentId = trim($userContent[2]);

                    //     @$requeestedAmount = trim( $userContent[3]);
                    //     echo "<b>Fullname: </b>".$fullname."|"."<b>Username: </b>".$username."|"."<b>Documnet ID: </b>".$documentId."|"."<b>Requested amount: </b>".$requeestedAmount."</br>"; 
                    // }
             ?>
             <br>
        </table>
    </fieldset>
    </div>

     <!-- Authorized documents
     <div >
    <fieldset>
        <legend><b>View Authorized Documents</b></legend>
        <table border=1 >
             <tr>
                <td>
                <input type="submit" name="view_authorized_documnet" value="View"/>
                </td>
             </tr>
            
            <?php
                // $documnetFile = '../LogIn/Authorization Docs/authorizationDoc.txt';
                // $documnetFile = fopen('../LogIn/Authorization Docs/authorizationDoc.txt', 'r');

                // if(isset($_POST['view_authorized_documnet']))
                //     while(!feof($documnetFile)){
                //         $documnet = fgets($documnetFile);
                //         $documnetContent = explode('|', $documnet);

                //         $docUsername = $_SESSION['documentUsername'];
                        
                //         $docSerialNo = $_SESSION['documentSerialNo'];

                //         $username = trim($documnetContent[0]);
                //         @$serialNo = trim($documnetContent[1]);
                        
                //         if($username == $docUsername && $serialNo == $docSerialNo){

                //                     echo "<b>Username: </b>".$username."|"."<b>Document serial no : </b>".$serialNo."|Authorized"."</br>"; 
                //         }
                //         else{
                //             // echo "  No match"."</br>";
                //         }
                //     }
             ?>
             <br>
        </table>
    </fieldset>
    </div> -->
    </form>
</body>

<footer>
    <a href="logout.php">Log-out </a>
</footer>
</html>