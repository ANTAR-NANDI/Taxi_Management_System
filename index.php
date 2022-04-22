<?php include 'include/header.php'; ?>
<!-- About Start -->
<div class="container-fluid">
    <div class="container">
        <h1 class="display-4 text-uppercase text-center mb-5">Welcome To <span class="text-primary">Royal Taxi</span></h1>
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <img class="w-75 mb-4" src="public/User/img/about.png" alt="">
                <p>Taxi Rental System is leading outstation taxi provider
                    in Bnagladesh. We strive to make the taxi booking an easy and comfortable
                    experience through our online taxi booking service. Wherever you travel
                    in Bnagladesh.We assure you of clean taxi in good condition,
                    courteous drivers with good knowledge of the tourist places, very competitive prices,
                    transparent automatic billing and a very reliable service in totality. With Royal Taxi System,
                    you need not to wait for taxi and driver details till last hours. Instead you will get
                    the details within few minutes of booking your outstation taxi. </p>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-4 mb-2">
                <div class="d-flex align-items-center bg-light p-4 mb-4" style="height: 150px;">
                    <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary ml-n4 mr-4" style="width: 100px; height: 100px;">
                        <i class="fa fa-2x fa-headset text-secondary"></i>
                    </div>
                    <h4 class="text-uppercase m-0">24/7 Taxi Rental Support</h4>
                </div>
            </div>
            <div class="col-lg-4 mb-2">
                <div class="d-flex align-items-center bg-secondary p-4 mb-4" style="height: 150px;">
                    <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary ml-n4 mr-4" style="width: 100px; height: 100px;">
                        <i class="fa fa-2x fa-car text-secondary"></i>
                    </div>
                    <h4 class="text-light text-uppercase m-0">Taxi Reservation Anytime</h4>
                </div>
            </div>
            <div class="col-lg-4 mb-2">
                <div class="d-flex align-items-center bg-light p-4 mb-4" style="height: 150px;">
                    <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary ml-n4 mr-4" style="width: 100px; height: 100px;">
                        <i class="fa fa-2x fa-map-marker-alt text-secondary"></i>
                    </div>
                    <h4 class="text-uppercase m-0">Lots Of Pickup Locations</h4>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->
<!-- Rent A Car Start -->
<div class="container-fluid py-5">
    <div class="container">
        <h1 class="display-4 text-uppercase text-center mb-5">Find Your Taxi</h1>
        <div class="row">
            <?php
            $sl = 1;
            include("db/connection.php");
            $sql = "select * from taxies LIMIT 6";
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