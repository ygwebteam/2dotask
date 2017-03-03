<?php

// Including database connections
include('/includes/config.php');
$cur_date = date('Y-m-d');
//echo $cur_date;
$id = 17;
$s = 2;
// mysqli query to fetch all data from database
$query = "select `t`.* ,`response`.*, `cl`.`client_name`,`pj`.`project_name` from `task` as `t` left join `client` as `cl` on `cl`.`id` = `t`.`client_id` left join `project` as `pj` on `pj`.`id` = `t`.`project_id` inner join `response` as `response` where `t`.`admin_id`= '" . $id . "' and `response`.`respond`=2 GROUP BY `response`.`task_id` ORDER BY `response`.`task_id` DESC limit 15";
$result = mysqli_query($con, $query);
$task = array();
if (mysqli_num_rows($result) != 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $row['staffs'] = getStaffs($row['staff_id']);
        $task[] = $row;
    }
}

function getStaffs($id) {
    global $con;
    $data = [];
    if (strlen($id) > 1) {
        $staffid = explode(',', $id);
        foreach ($staffid as $staff) {
            $query = "SELECT fname , lname from staff where id = '$staff'";
            $result = mysqli_query($con, $query);
            if (mysqli_num_rows($result) != 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    //print_r($row);
                    //exit();
                    array_push($data, $row);
                }
            }
        }
        return $data;
    }
    else{
        $query = "SELECT fname , lname from staff where id = '$id'";
            $result = mysqli_query($con, $query);
            if (mysqli_num_rows($result) != 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    //print_r($row);
                    //exit();
                    array_push($data, $row);
                }
            }
        }
        return $data;
    }


// Return json array containing data from the databasecon
echo $json_info = json_encode($task);
?>