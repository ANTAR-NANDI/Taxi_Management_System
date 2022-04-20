<?php

include("../db/connection.php");
if (isset($_POST['update_taxi'])) {

    $update_id = $_POST['id'];

    $reg_no = $_POST['reg_no'];
    $v_rent = $_POST['v_rent'];
    $sql = "UPDATE taxies set reg_no='$reg_no',v_rent='$v_rent' where id=$update_id";
    echo "$sql";
    $result = $conn->query($sql);
    if ($sql) {
        header("Location:all_taxies.php");
    }
}
