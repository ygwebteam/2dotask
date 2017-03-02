<?php
include('/includes/config.php');
$data = json_decode(file_get_contents("php://input"));
$usrname = mysqli_real_escape_string($con,$data->text);
$query = "INSERT INTO pre_defined (admin_id,text) VALUES (17, '$usrname')";
mysqli_query($con, $query);
echo true;
?>