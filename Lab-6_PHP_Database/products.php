<?php

   $con = mysqli_connect('localhost', 'root', '', 'product_db');

//    if($con){
//     echo "Success";
//    }
//    else{
//     echo "Failed";
//    }

    $sql = "select * from products";

    $result = mysqli_query($con, $sql);

    echo "  <table border='1'>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Buying Price</th>
                    <th>Selling Price</th>
                </tr>
        ";
    while($data = mysqli_fetch_assoc($result)){
        if($data['Display'] == 1){
            echo "  
                <tr>
                    <td>{$data['ID']}</td>
                    <td>{$data['Name']}</td>
                    <td>{$data['Buying Price']}</td>
                    <td>{$data['Selling Price']}</td>
                </tr>
                ";
        }
    }
    echo "</table>
            </br>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="productsCheck.php">
        <fieldset>
            <legend>Add Product</legend>
            <table>
                <tr>
                    <td>
                    Name
                    <input name="name" type="text">
                    </td>
                </tr>
                <tr>
                    <td>
                        Buying Price
                        <input name= "buyingPrice" type="text">
                    </td>
                    </td>
                </tr>
                <tr>
                    <td>
                        Selling Price
                        <input name = "sellingPrice" type="text">
                    </td>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="display" value="1" id="">Display
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Save">
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>