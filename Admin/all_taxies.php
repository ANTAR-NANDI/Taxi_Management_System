<?php include 'includes/header.php'; ?>
<?php include 'includes/sidebar.php'; ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 style="margin-left: 10px;">All Taxies</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">All Taxies</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead style="background-color: #e6e6e6">
                            <tr>
                                <th>ID</th>
                                <th>Taxi-Code</th>
                                <th>Registration Number</th>
                                <th>Vehicle Rent</th>
                                <th colspan="2">Action</th>

                            </tr>
                        </thead>
                        <?php
                        $sl = 1;
                        include("../db/connection.php");
                        $sql = "select id,taxi_code,reg_no,v_rent from taxies";
                        $r = $conn->query($sql);
                        while ($row = mysqli_fetch_array($r)) {
                            $taxi_code = $row['taxi_code'];
                            $reg_no = $row['reg_no'];
                            $v_rent = $row['v_rent'];
                            $id = $row['id'];
                        ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $sl++; ?></td>
                                    <td><?php echo $taxi_code; ?></td>
                                    <td><?php echo $reg_no; ?></td>
                                    <td><?php echo $v_rent; ?></td>
                                    <td><a style="margin-left: 10px" class="btn btn-info" href="edit_taxi.php?id=<?php echo $id ?>">Edit</a>
                                    <a class="btn btn-danger" href="delete_taxi.php?id=<?php echo $id ?>">Delete</a></td>

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