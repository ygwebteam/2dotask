<?php

// Including database connections
include('/includes/config.php');
$data = json_decode(file_get_contents("php://input"));
$id = mysqli_real_escape_string($con, $data->id);

$query = "SELECT * from project where id = $id";
$result = mysqli_query($con, $query);
$arr = array();
if (mysqli_num_rows($result) != 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $arr[] = $row;
    }
}
echo $json_info = json_encode($arr);
?>