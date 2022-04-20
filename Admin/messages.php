<?php include 'includes/header.php'; ?>
<?php include 'includes/sidebar.php'; ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">All Drivers</h1>
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
                                <th>Name</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Date</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <?php
                        include("../db/connection.php");
                        $sql = "select id,name,subject,msg,msg_date from contacts";
                        $r = $conn->query($sql);
                        while ($row = mysqli_fetch_array($r)) {
                            $name = $row['name'];
                            $subject = $row['subject'];
                            $msg = $row['msg'];
                            $msg_date = $row['msg_date'];
                            $id = $row['id'];
                        ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $name; ?></td>
                                    <td><?php echo $subject; ?></td>
                                    <td><?php echo $msg; ?></td>
                                    <td><?php echo $msg_date; ?></td>

                                    <td><a href="delete_message.php?id=<?php echo $id ?>">Delete</a></td>

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