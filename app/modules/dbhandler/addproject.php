<?php
include('/includes/config.php');
$data = json_decode(file_get_contents("php://input"));
$projectname = mysqli_real_escape_string($con,$data->bname);
$client_id = mysqli_real_escape_string($con,$data->bname);
$query = "INSERT INTO client (admin_id,client_name) VALUES (17, '$projectname')";
mysqli_query($con, $query);
echo true;
?>