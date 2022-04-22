<?php
if (isset($_POST['submit'])) {
    $taxi_id = $_POST['taxi_id'];
    $driver_id = $_POST['driver_id'];
    $date = date("Y-m-d");
    include("../db/connection.php");
    $sql = "insert into rents  (taxi_id,driver_id,assign_date) values
    ('$taxi_id','$driver_id','$date')";
    $r = $conn->query($sql); //0
    // echo $sql;
    // exit();
    if ($r) {
        die("<script>location.href = 'https://localhost/Taxi-Management_System/Admin/rents.php'</script>");
    } else {
        // $_SESSION['taxi_added_message'] = "Taxi Successfully Added";
    }
}
