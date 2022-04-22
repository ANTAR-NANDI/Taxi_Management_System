<?php include 'includes/header.php'; ?>
<?php include 'includes/sidebar.php'; ?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-5">

                </div>
                <div class="col-sm-2">
                    <h1 class="m-0"><span class="badge badge-info">All Taxies</span></h1>

                </div><!-- /.col -->
                <div class="col-sm-5">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">All Taxies</li>
                    </ol>
                </div><!-- /.col -->
            </div>
            <hr>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="example">
                        <thead style="background-color: #e6e6e6">
                            <tr>
                                <th>ID</th>
                                <th>Taxi-Code</th>
                                <th>Driver Name</th>
                                <th>Mobile</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <?php
                        $sl = 1;
                        include("../db/connection.php");
                        $sql = "select taxies.taxi_code,rents.id as rent_id,rents.taxi_id,rents.driver_id,drivers.name as driver_name, drivers.mobile as mobile from rents
                        ,drivers,taxies WHERE rents.driver_id=drivers.id and rents.taxi_id=taxies.id GROUP BY rents.taxi_id;";
                        $r = $conn->query($sql);
                        // echo $sql;
                        // exit();

                        while ($row = mysqli_fetch_array($r)) {
                            $taxi_id = $row['taxi_code'];
                            $mobile = $row['mobile'];
                            $driver_name = $row['driver_name'];
                            $id = $row['rent_id'];
                        ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $sl++; ?></td>
                                    <td><?php echo $taxi_id; ?></td>
                                    <td><?php echo $driver_name; ?></td>
                                    <td><?php echo $mobile; ?></td>


                                    <td><a style="margin-left: 10px" class="btn btn-info" href="edit_rents.php?id=<?php echo $id ?>">Edit</a>
                                        
                                    </td>

                                </tr>

                            </tbody>
                        <?php

                        }
                        ?>
                    </table>
                </div>

            </div>

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>


<?php include 'includes/footer.php'; ?>