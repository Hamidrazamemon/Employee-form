<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employedb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
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

    // Sanitize and validate the data (optional)
    // ...

    // Perform the insertion into the database
    for($i=0;$i<count($name);$i++){
        $sql = "INSERT INTO `emptb`(`name`, `father_name`, `email`, `grade`, `Department`, `nic_number`, `phone_number`, `salary`, `date_of_joining`, `address`) VALUES ('$name[$i]', '$father_name[$i]', '$email[$i]', '$grade[$i]', '$department[$i]', '$nic_no[$i]', '$phone_no[$i]', '$salary[$i]', '$date_of_joining[$i]', '$address[$i]')";
        
    }
   
        
    if ($conn->query($sql) === TRUE) {
        echo "success";
    } else {
        echo "failure";
    }
}

$conn->close();
?>
