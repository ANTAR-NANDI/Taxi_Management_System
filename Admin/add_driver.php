<?php include 'includes/header.php'; ?>
<?php include 'includes/sidebar.php'; ?>
<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $nid = $_POST['nid'];
    $mobile = $_POST['mobile'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    include("../db/connection.php");
    $sql = "insert into drivers  (name,nid_no,mobile,age,address) values
    ('$name','$nid','$mobile','$age','$address')";
    $r = $conn->query($sql); //0
    if ($r) {
        die("<script>location.href = 'https://localhost/Taxi-Management_System/Admin/all_drivers.php'</script>");
    } else {
        $_SESSION['driver_added_message'] = "Driver Add Failed";
    }
}
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 style="margin-left: 10px;">Add Driver</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Add Driver</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- /.row -->
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-default">
                        <div class="card-body p-4">
                            
                            <div class="bs-stepper">
                                <div class="bs-stepper-content" style=" padding: 10px">

                                    <!-- your steps content here -->
                                    <form method="POST" action="add_driver.php">
                                        <div id=" logins-part" class="content" role="tabpanel" aria-labelledby="logins-part-trigger">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Driver Name</label>
                                                <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Name">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Driver NID Number</label>
                                                <input type="number" name="nid" class="form-control" id="exampleInputPassword1" placeholder="Driver NID Number">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Mobile Number</label>
                                                <input type="number" name="mobile" class="form-control" id="exampleInputPassword1" placeholder="Enter Mobile Number">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Driver Age</label>
                                                <input type="number" name="age" class="form-control" id="exampleInputPassword1" placeholder="Driver Age">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Address</label>
                                                <input type="text" name="address" class="form-control" id="exampleInputPassword1" placeholder="Enter Address">
                                            </div>
                                            <button class="btn btn-success float-right" name="submit" value="submit" type="submit">Add Driver</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->


        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

<?php include 'includes/footer.php'; ?>