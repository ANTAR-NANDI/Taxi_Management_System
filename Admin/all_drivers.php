<?php include 'includes/header.php'; ?>
<?php include 'includes/sidebar.php'; ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 style="margin-left: 10px;">All Drivers</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">All Drivers</li>
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
                                <th>Sl.</th>
                                <th>Name</th>
                                <th>Mobile</th>
                                <th>Age</th>
                                <th>Address</th>
                                <th>Nid</th>
                                <th colspan="2">Action</th>

                            </tr>
                        </thead>
                        <?php
                        $sl = 1;
                        include("../db/connection.php");
                        $sql = "select id,name,nid_no,mobile,age,address from drivers";
                        $r = $conn->query($sql);
                        while ($row = mysqli_fetch_array($r)) {
                            $name = $row['name'];
                            $nid_no = $row['nid_no'];
                            $mobile = $row['mobile'];
                            $age = $row['age'];
                            $address = $row['address'];
                            $id = $row['id'];



                        ?>





                            <tbody>
                                <tr>
                                    <td><?php echo $sl++; ?></td>
                                    <td><?php echo $name; ?></td>
                                    <td><?php echo $mobile; ?></td>
                                    <td><?php echo $age; ?></td>
                                    <td><?php echo $address; ?></td>
                                    <td><?php echo $nid_no; ?></td>
                                    <td><a class="btn btn-info" href="edit_driver.php?id=<?php echo $id ?>">Edit</a></td>
                                    <td><a class="btn btn-danger" href="delete_driver.php?id=<?php echo $id ?>">Delete</a></td>

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