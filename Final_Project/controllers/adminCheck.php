<?php 
    $name = $_POST['adminSearchName'];
    $adminSearchName = $_POST['adminSearchName'];
    sleep(2);
    if($adminSearchName != null){
        require_once "../models/adminModel.php";
        $result = searchUserByName($name);
        $data = mysqli_fetch_assoc($result);
        echo "  <table border='1'>
                        <tr>
                            <th>ID</th>
                            <th>Admin Username</th>
                        </tr>";
        while($data = mysqli_fetch_assoc($result)){
            echo "  
                    <tr>
                        <td>{$data['ID']}</td>
                        <td>{$data['username']}</td>
                    </tr>
                    ";
        }
    }else{
        echo "Not found your entered data";
    }

?>