
<?php 
header("Content-Type: application/json");
$conn = mysqli_connect("localhost", "root", "" , "employedb") or die("Connection Failed");


// print_r($_POST);die();
if($_POST['action']=='edit')  {
    $Employee_id = $_POST["id"];
    $sql = "Select * from emptb WHERE id = '$Employee_id'";
    $result = mysqli_query($conn, $sql);
   
    

    
       $row = mysqli_fetch_assoc($result); 
            $return=$row;
        

            
}

elseif($_POST['action']=='update'){
    // print_r($_POST);die();
    $Employee_id = $_POST['id'];
    $name = $_POST['name'];
    $father_name = $_POST['father_name'];
    $email = $_POST['email'];
    $grade = $_POST['grade'];
    $department = $_POST['department'];
    $nic_no = $_POST['nic_number'];
    $phone_no = $_POST['phone_number'];
    $salary = $_POST['salary'];
    $doj = $_POST['date_of_joining'];
    $address = $_POST['address'];
$sql = "UPDATE emptb SET `name` = '$name', `father_name` = '$father_name', `email` = '$email', `grade` = '$grade', `Department` = '$department', `nic_number` = '$nic_no', `phone_number` = '$phone_no', `salary` = '$salary', `date_of_joining` = '$doj', `address` = '$address' WHERE `id` = '$Employee_id';";
// $sql = "INSERT INTO `emptb`(`name`, `father_name`, `email`, `grade`, `Department`, `nic_number`, `phone_number`, `salary`, `date_of_joining`, `address`) VALUES ('$name', '$father_name', '$email', '$grade', '$department', '$nic_no', '$phone_no', '$salary', '$doj', '$address' WHERE 'id' = '$Employee_id' )";print_r($sql);

$result = mysqli_query($conn, $sql); 
            $return=1;
}
print(json_encode($return, JSON_PRETTY_PRINT));

?>
