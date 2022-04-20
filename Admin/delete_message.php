
<?php

include("../db/connection.php");

if (isset($_GET['id']))
    $id = $_GET['id'];

$sql = "delete from contacts where id=$id";
// echo "$sql";
$result = $conn->query($sql);
if ($sql) {
    echo "<script>alert('updated')</script>";
    header("Location:messages.php");
}
?>