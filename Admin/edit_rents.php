<?php include 'includes/header.php'; ?>
<?php include 'includes/sidebar.php'; ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Update Assign Taxi</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Update Assign Taxi</li>
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

                                    $sql = "SELECT id,taxi_id,driver_id from rents where id=$id";
                                        // echo "$sql";
                                        // exit();
                                    $r = $conn->query($sql);
                                    while ($row = mysqli_fetch_array($r)) {
                                        $taxi_id = $row['taxi_id'];
                                        $driver_id = $row['driver_id'];
                                        $rid = $row['id'];

                                    ?>
                                        <form method="POST" action="update_rents.php">
                                            <div id=" logins-part" class="content" role="tabpanel" aria-labelledby="logins-part-trigger">
                                                <label for="exampleInputEmail1">Taxi Code</label>
                                                <div class="form-group">
                                                    <select class="form-control" id="taxi_id" name="taxi_id">
                                                        <?php
                                                        include("../db/connection.php");
                                                        $sql = "select id,taxi_code from taxies";
                                                        $r = $conn->query($sql);
                                                        while ($row = mysqli_fetch_array($r)) {
                                                            $taxi_code = $row['taxi_code'];

                                                            $id = $row['id'];
                                                        ?>
                                                            <option value="<?php echo $id ?>"><?php echo $taxi_code ?></option>
                                                        <?php
                                                        }
                                                        ?>

                                                    </select>
                                                </div>
                                                <label for="exampleInputEmail1">Driver Name</label>
                                                <div class="form-group">
                                                    <select class="form-control" id="driver_id" name="driver_id">
                                                        <?php
                                                        //include("../db/connection.php");
                                                        $sq = "select id,name from drivers";
                                                        $drivers = $conn->query($sq);
                                                        while ($row = mysqli_fetch_array($drivers)) {
                                                            $name = $row['name'];
                                                            $did = $row['id'];
                                                        ?>
                                                            <option value="<?php echo $did ?>"><?php echo $name ?></option>
                                                        <?php
                                                        }
                                                        ?>

                                                    </select>
                                                </div>
                                                <input type="hidden" name="id" value="<?php echo $rid ?>">

                                                <button class="btn btn-success float-right" name="update_assign" value="submit" type="submit">Update Assign Taxi</button>
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