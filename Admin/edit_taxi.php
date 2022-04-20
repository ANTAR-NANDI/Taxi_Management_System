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
                           
                            <div class="bs-stepper">
                                <div class="bs-stepper-content" style=" padding: 10px">
                                    <?php
                                    include("../db/connection.php");
                                    if (isset($_GET['id'])) {
                                        $id = $_GET['id'];
                                    }

                                    $sql = "SELECT id,taxi_code,reg_no,v_rent FROM taxies where id=$id";
                                    $r = $conn->query($sql);
                                    while ($row = mysqli_fetch_array($r)) {
                                        $reg_no = $row['reg_no'];
                                        $v_rent = $row['v_rent'];
                                    ?>
                                        <!-- your steps content here -->
                                        <form method="POST" action="process_edit_taxi.php">
                                            <div id=" logins-part" class="content" role="tabpanel" aria-labelledby="logins-part-trigger">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Registration Number</label>
                                                    <input type="text" value="<?php echo $reg_no ?>" name="reg_no" class="form-control" id="exampleInputEmail1" placeholder="Enter Vaccin e Registration Number">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Vehicle Rent</label>
                                                    <input type="number" value="<?php echo $v_rent ?>" name="v_rent" class="form-control" placeholder="Behicle Rent ">
                                                </div>
                                                <button class="btn btn-success float-right" name="update_taxi" value="submit" type="submit">Update Taxi</button>
                                                <input type="hidden" name="id" value="<?php echo $id ?>">

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