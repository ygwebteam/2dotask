<?php

// Including database connections
include('/includes/config.php');
// mysqli query to fetch all data from database
$query = "SELECT * from client";
$result = mysqli_query($con, $query);
$arr = array();
if (mysqli_num_rows($result) != 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $row['projects'] = getprojectsbyClient($row['id']);
        $arr[] = $row;
    }
}

function getprojectsbyClient($id) {
global $con;
    $data = [];
    $query = "SELECT * from project where client_id = '$id'";
    $result = mysqli_query($con, $query);
    $arr = array();
    if (mysqli_num_rows($result) != 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            //print_r($row);
            //exit();
            array_push($data, $row);
            
        }
        
    }
    return $data;
}


// Return json array containing data from the databasecon
echo $json_info = json_encode($arr);
?>