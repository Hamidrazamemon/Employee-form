<?php 
header("Content-Type: application/json");
$conn = mysqli_connect("localhost", "root", "" , "employedb") or die("Connection Failed");


if($_POST['action']=='view'){
    $sql = "SELECT * FROM emptb";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        die("Sql Query Failed: " . mysqli_error($conn));
    }
    $output = "";
    $return=[];
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $return[]=$row;
        }
    } else {
        $return[]= "<h2>No records found</h2>";
    };
}
print(json_encode($return, JSON_PRETTY_PRINT));

?>
