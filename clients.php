<?php
$data = json_decode(file_get_contents("php://input"));

$con=new mysqli("localhost","2dotask","2dotask","2dotask");
$usrname = mysqli_real_escape_string($con,$data->bname);
echo $usrname;
exit();

?>