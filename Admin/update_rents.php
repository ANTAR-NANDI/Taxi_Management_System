<?php

include("../db/connection.php");
if (isset($_POST['update_assign'])) {

    $update_id = $_POST['id'];
    $taxi_id = $_POST['taxi_id'];
    $driver_id = $_POST['driver_id'];
    $date = date("Y-m-d");
    $sql = "UPDATE rents set taxi_id='$taxi_id',driver_id='$driver_id',assign_date='$date' where id=$update_id";
    // echo "$sql";
    // exit();
    $result = $conn->query($sql);
    if ($sql) {
        header("Location:rents.php");
    }
}
