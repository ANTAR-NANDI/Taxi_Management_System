<?php include 'includes/header.php'; ?>
<?php include 'includes/sidebar.php'; ?>
<?php
include("../db/connection.php");
$taxies = "SELECT COUNT(id) as b FROM taxies";
$bookings = "SELECT COUNT(id) as b FROM bookings";
$drivers = "SELECT COUNT(id) as b FROM drivers";
$messages = "SELECT COUNT(id) as b FROM contacts";
$taxies_list = $conn->query($taxies);
$bookings_list = $conn->query($bookings);
$drivers_list = $conn->query($drivers);
$messages_list = $conn->query($messages);
while ($row = mysqli_fetch_array($drivers_list)) {

    $driver = $row['b'];
}
while ($row = mysqli_fetch_array($taxies_list)) {

    $taxi = $row['b'];
}
while ($row = mysqli_fetch_array($messages_list)) {

    $message = $row['b'];
}
while ($row = mysqli_fetch_array($bookings_list)) {

    $booking = $row['b'];
}
?>
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
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3><?php echo $taxi ?></h3>

                            <p>Taxies</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="all_taxies.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3><?php echo $driver ?></h3>

                            <p>Drivers</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="all_drivers.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3><?php echo $booking ?></h3>

                            <p>Bookings</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="bookings.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3><?php echo $message ?></h3>

                            <p>Messages</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="messages.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

<?php include 'includes/footer.php'; ?>