
<?php


    $Employeeid = $_POST['id'];
    $name = $_POST['name'];
    $father_name = $_POST['father_name'];
    $email = $_POST['email'];
    $grade = $_POST['grade'];
    $department = $_POST['department'];
    $nic_no = $_POST['cnic'];
    $phone_no = $_POST['phone'];
    $salary = $_POST['salary'];
    $date_of_joining = $_POST['date_of_joining'];
    $address = $_POST['address'];

$conn = mysqli_connect("localhost", "root", "", "employedb") or die("sql connection failed");

// Correct the DELETE query syntax
$sql = "UPDATE emptb SET `name` = '$name', `father_name` = '$father_name', `email` = {$email}, `grade` = {$grade}, `Department` = {$Department}, `nic_number` = {$nic_number}, `phone_number` = {$phone_number}, `salary` = {$salary}, `date_of_joining` = {$doj}, `address` = {$address} WHERE `emptb`.`id` = {$Employeeid};";

if (mysqli_query($conn, $sql)) {
    echo 1; // Send '1' back as a response to indicate success
} else {
    echo 0; // Send '0' back as a response to indicate failure
}
?>


