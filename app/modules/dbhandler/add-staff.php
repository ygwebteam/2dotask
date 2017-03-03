<?php

include('/includes/config.php');
$data = json_decode(file_get_contents("php://input"));
echo '<pre>';
print_r($data);
echo '</pre>';
foreach ($data as $val):

    $fname = mysqli_real_escape_string($con, $val->fname);
    $lname = mysqli_real_escape_string($con, $val->lname);
    $dob = mysqli_real_escape_string($con, $val->dob);
    $gender = mysqli_real_escape_string($con, $val->gender);
    $mobile = mysqli_real_escape_string($con, $val->mobile);
    $address = mysqli_real_escape_string($con, $val->address);
    $dobj = mysqli_real_escape_string($con, $val->dobj);
    $design = mysqli_real_escape_string($con, $val->designation);
    $empid = mysqli_real_escape_string($con, $val->eid);
    $user = mysqli_real_escape_string($con, $val->uname);
    $pass = mysqli_real_escape_string($con, $val->pass);
    $query = "INSERT INTO staff (admin_id,fname,lname, username, password, address, mobile, desig, gender, empid, dob, doj, non_staff, period, active) VALUES (17, '$fname','$lname','$user','$pass','$address','$mobile','$design','$gender','$empid','$dob','$dobj','0','0','0')";

    mysqli_query($con, $query);
endforeach;
echo true;
?>