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
                                <th>Sl. No.</th>
                                <th>Pessenger Name</th>
                                <th>Mobile</th>
                                <th>Pickup</th>
                                <th>Drop </th>
                                <th>Booking Date & Time</th>
                                <th>Request</th>
                                <th colspan="2">Action</th>

                            </tr>
                        </thead>
                        <?php
                        $sl = 1;
                        include("../db/connection.php");
                        $sql = "select id,first_name,is_accepted,last_name,mobile,pickup,drop_point,booking_date,booking_time,request from bookings";
                        $r = $conn->query($sql);
                        while ($row = mysqli_fetch_array($r)) {
                            $first_name = $row['first_name'];
                            $last_name = $row['last_name'];
                            $mobile = $row['mobile'];
                            $pickup = $row['pickup'];
                            $drop_point = $row['drop_point'];
                            $booking_date = $row['booking_date'];
                            $booking_time = $row['booking_time'];
                            $request = $row['request'];
                            $accept = $row['is_accepted'];
                            $id = $row['id'];



                        ?>





                            <tbody>
                                <tr>
                                    <td><?php echo $sl++; ?></td>
                                    <td><?php echo $first_name . '.' . $last_name; ?></td>
                                    <td><?php echo $mobile; ?></td>
                                    <td><?php echo $pickup; ?></td>
                                    <td><?php echo $drop_point; ?></td>
                                    <td><?php echo $booking_date . '<br>' . $booking_time; ?></td>
                                    <td><?php echo $request; ?></td>
                                    <?php if ($accept == 1) { ?>
                                        <td><a class="btn btn-info" href="confirm_booking.php?id=<?php echo $id ?>">Assign Taxi</a></td>
                                    <?php
                                    } else { ?>

                                        <td><a class="btn btn-info" href="confirm_booking.php?id=<?php echo $id ?>">Confirm Booking</a></td>
                                    <?php } ?>

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