<?php include 'includes/header.php'; ?>
<?php include 'includes/sidebar.php'; ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
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
                            <?php
                            if (isset($_SESSION['taxi_added_message'])) {
                            ?>
                                <div class="alert alert-info alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <?php echo $_SESSION['taxi_added_message'] ?>
                                </div>
                            <?php
                                $_SESSION['taxi_added_message'] = '';
                            }
                            ?>
                            <div class="bs-stepper">
                                <div class="bs-stepper-content" style=" padding: 10px">
                                    <?php
                                    include("../db/connection.php");
                                    if (isset($_GET['id'])) {
                                        $id = $_GET['id'];
                                    }

                                    $sql = "SELECT id,name,nid_no,mobile,age,address FROM drivers where id=$id";
                                    $r = $conn->query($sql);
                                    while ($row = mysqli_fetch_array($r)) {
                                        $name = $row['name'];
                                        $nid = $row['nid_no'];
                                        $mobile = $row['mobile'];
                                        $age = $row['age'];
                                        $address = $row['address'];
                                    ?>
                                        <form method="POST" action="process_edit_driver.php">
                                            <div id=" logins-part" class="content" role="tabpanel" aria-labelledby="logins-part-trigger">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Driver Name</label>
                                                    <input type="text" name="name" value="<?php echo $name ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter Name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Driver NID Number</label>
                                                    <input type="number" name="nid" value="<?php echo $nid ?>" class="form-control" id="exampleInputPassword1" placeholder="Driver NID Number">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Mobile Number</label>
                                                    <input type="number" name="mobile" value="<?php echo $mobile ?>" class="form-control" id="exampleInputPassword1" placeholder="Enter Mobile Number">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Driver Age</label>
                                                    <input type="number" name="age" value="<?php echo $age ?>" class="form-control" id="exampleInputPassword1" placeholder="Driver Age">
                                                </div>
                                                <input type="hidden" name="id" value="<?php echo $id ?>">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Address</label>
                                                    <input type="text" name="address" value="<?php echo $address ?>" class="form-control" id="exampleInputPassword1" placeholder="Enter Address">
                                                </div>
                                                <button class="btn btn-success float-right" name="update_driver" value="update_driver" type="submit">Update Driver</button>
                                            </div>
                                        </form>
                                    <?php

                                    }
                                    ?>

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