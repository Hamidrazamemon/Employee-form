
<?php

use function PHPSTORM_META\type;

header("Content-Type: application/json");
$conn = mysqli_connect("localhost", "root", "", "employedb") or die("sql connection failed");
if(isset($_POST['action']) && ($_POST['action']== 'delete') ){
    // print_r($_POST);die();
    $id = $_POST['id'];
    // $id = $_POST['deleteemployeeId']
    // $delete = true;
    $sql = "DELETE FROM emptb WHERE id = '$id'";
// print_r($sql);
    //use for MySQLi OOP
    if($conn->query($sql)){
        
        $return_data = 1;

    }
    
    else{
        
        $return_data = 0;

    }
}
print(json_encode($return_data, JSON_PRETTY_PRINT));
