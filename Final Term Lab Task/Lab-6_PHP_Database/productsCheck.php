<?php
    $name = $_POST['name'];
    $buyingPrice= $_POST['buyingPrice'];
    $sellingPrice = $_POST['sellingPrice'];
    $display = $_POST['display'];

    if($name == '' || $buyinPrice == '' || $sellingPrice == ''){
        header('location: products.php');
    }
    else{
        $con = mysqli_connect('localhost', 'root', '', 'product_db'); 

        
        if(isset($_POST['display'])){
            $display = 1;
        }
        else{
            $display = 0;
        }
            $sql = "insert into products values('', '{$name}', '{$buyingPrice}', '{$sellingPrice}', '{$display}')";
        // }
        // else{
            // $sql = "insert into products values('', '{$name}', '{$buyingPrice}', '{$sellingPrice}', '0')";
        // }
       

        $status = mysqli_query($con, $sql);

        if($status){
            header('location: products.php');
        }
        else{
            echo 'Database error occured';
        }
    }
?>