<?php

if (isset($_POST['submit'])) {
    include("../db/connection.php");
    //htmlspecialchars
    $taxi_id = $_POST['taxi_id'];
    $booking_id = $_POST['booking_id'];
    $sql = "UPDATE bookings set taxi_id='$taxi_id'where id=$booking_id";
    $sql_2 = "UPDATE taxies set engage=1 where taxi_id=$taxi_id";
    $result = $conn->query($sql);
    $result2 = $conn->query($sql2);
    // echo $sql;
    // exit();
    if ($result && $result2) {
        die("<script>location.href = 'https://localhost/Taxi-Management_System/Admin/bookings.php'</script>");
    }
}
