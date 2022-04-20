
<?php

include("../db/connection.php");

if (isset($_GET['id']))
    $id = $_GET['id'];



// echo "$request_id";

$sql = "delete from drivers where id=$id";
// echo "$sql";
$result = $conn->query($sql);
if ($sql) {
    echo "<script>alert('updated')</script>";
    header("Location:all_drivers.php");
}
?>