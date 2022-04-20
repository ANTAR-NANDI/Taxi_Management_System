<?php include 'includes/header.php'; ?>
<?php include 'includes/sidebar.php'; ?>
<?php
if (isset($_POST['submit'])) {

    //htmlspecialchars
    $reg_no = $_POST['reg_no'];
    $v_rent = $_POST['v_rent'];
    $taxi_code = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, 5);
    include("../db/connection.php");
    $sql = "insert into taxies  (taxi_code,reg_no,v_rent) values
    ('$taxi_code','$reg_no','$v_rent')";
    $r = $conn->query($sql); //0
    if ($r) {
        $_SESSION['taxi_added_message'] = "Taxi Successfully Added";
    } else {
        $_SESSION['taxi_added_message'] = "Taxi Successfully Added";
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
                    <h1 style="margin-left: 10px;">Add Taxi</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Add Taxi</li>
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
                                    <form method="POST" action="add_taxi.php">
                                        <div id=" logins-part" class="content" role="tabpanel" aria-labelledby="logins-part-trigger">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Taxi Registration Number</label>
                                                <input type="text" name="reg_no" class="form-control" id="exampleInputEmail1" placeholder="Enter Vehicle Registration Number">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Taxi Rent</label>
                                                <input type="number" name="v_rent" class="form-control" id="exampleInputPassword1" placeholder="Vehicle Rent ">
                                            </div>
                                            <button class="btn btn-success float-right" name="submit" value="submit" type="submit">Add Taxi</button>
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