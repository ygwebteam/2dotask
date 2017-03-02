<?php
include('/includes/config.php');
$data = json_decode(file_get_contents("php://input"));
$projectname = mysqli_real_escape_string($con,$data->pname);
$desc = mysqli_real_escape_string($con,$data->desc);
$client_id = mysqli_real_escape_string($con,$data->client_id);
$query = "INSERT INTO project (admin_id, project_name, client_id, project_description) VALUES (17, '$projectname', '$client_id', '$desc')";
mysqli_query($con, $query);
echo true;
?>