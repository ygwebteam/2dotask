<?php
include('/includes/config.php');
$data = json_decode(file_get_contents("php://input"));
$id = mysqli_real_escape_string($con,$data->template_id);
$text = mysqli_real_escape_string($con,$data->updatetemplate);
$query = "update pre_defined set text = '".$text."' where id = '".$id."' ";
mysqli_query($con, $query);
echo true;
?>