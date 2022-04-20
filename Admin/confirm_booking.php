<?php

include("../db/connection.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
    $sql = "UPDATE bookings set is_accepted=1 where id=$id";
   
    $result = $conn->query($sql);
    if ($sql) {
        header("Location:bookings.php");
    }
?>
