<?php include 'include/header.php'; ?>
<!-- Page Header Start -->
<div class="container-fluid page-header">
    <h1 class="display-3 text-uppercase text-white mb-3">Taxi Listing</h1>
    <div class="d-inline-flex text-white">
        <h6 class="text-uppercase m-0"><a class="text-white" href="">Home</a></h6>
        <h6 class="text-body m-0 px-3">/</h6>
        <h6 class="text-uppercase text-body m-0">Taxi Listing</h6>
    </div>
</div>
<!-- Page Header Start -->
<!-- Rent A Car Start -->
<div class="container-fluid py-5">
    <div class="container">
        <h1 class="display-4 text-uppercase text-center mb-5">Find Your Taxi</h1>
        <div class="row">
            <?php
            $sl = 1;
            include("db/connection.php");
            $sql = "select * from taxies LIMIT 12";
            $r = $conn->query($sql);
            while ($row = mysqli_fetch_array($r)) {
                $taxi_code = $row['taxi_code'];
                $reg_no = $row['reg_no'];
                $id = $row['id'];
            ?>
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="rent-item mb-4">
                        <img class="img-fluid mb-4" src="public/User/img/car-rent-1.png" alt="">
                        <h4 class="text-uppercase mb-4">Taxi No - <?php echo $sl++; ?></h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span>Code : <?php echo $taxi_code; ?></span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span>AUTO</span>
                            </div>
                        </div>
                        <a class="btn btn-primary px-3" href="booking.php?id=<?php echo $id ?>">Book Now</a>
                    </div>
                </div>
            <?php

            }
            ?>
        </div>
    </div>
</div>
<!-- Rent A Car End -->
<?php include 'include/footer.php'; ?>