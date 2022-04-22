<?php

include("../db/connection.php");
if (isset($_POST['update_driver'])) {

    $update_id = $_POST['id'];
    $name = $_POST['name'];
    $nid = $_POST['nid'];
    $mobile = $_POST['mobile'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $sql = "UPDATE drivers set name='$name',nid_no='$nid',mobile='$mobile',age='$age',address='$address' where id=$update_id";
    // echo "$sql";
    $result = $conn->query($sql);
    if ($sql) {
        header("Location:all_drivers.php");
    }
}
?>
