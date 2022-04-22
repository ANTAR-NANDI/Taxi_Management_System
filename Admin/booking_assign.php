<?php include 'includes/header.php'; ?>
<?php include 'includes/sidebar.php'; ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 style="margin-left: 10px;">Assign Taxi</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Assign Driver</li>
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
                                    <form method="POST" action="booking_assign_process.php">
                                        <div id=" logins-part" class="content" role="tabpanel" aria-labelledby="logins-part-trigger">
                                            <div class="form-group">
                                                <select class="form-control" id="taxi_id" name="taxi_id">
                                                    <?php
                                                    include("../db/connection.php");
                                                    $sql = "select id,taxi_code from taxies where engage = 0";
                                                    $r = $conn->query($sql);
                                                    while ($row = mysqli_fetch_array($r)) {
                                                        $taxi_code = $row['taxi_code'];

                                                        $id = $row['id'];
                                                    ?>
                                                        <option value="<?php echo $taxi_code ?>"><?php echo $taxi_code ?></option>
                                                    <?php
                                                    }
                                                    ?>

                                                </select>
                                                <?php
                                                if (isset($_GET['id'])) {
                                                ?>
                                                    <input type="hidden" name="booking_id" class="form-control" value="<?php echo $_GET['id'] ?>">
                                                <?php
                                                }
                                                ?>
                                            </div>

                                            <button class="btn btn-success float-right" name="submit" value="submit" type="submit">Assign Taxi</button>
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