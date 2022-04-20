<?php include 'include/header.php'; ?>
<!-- Page Header Start -->
<div class="container-fluid page-header">
    <h1 class="display-3 text-uppercase text-white mb-3">Car Booking</h1>
    <div class="d-inline-flex text-white">
        <h6 class="text-uppercase m-0"><a class="text-white" href="">Home</a></h6>
        <h6 class="text-body m-0 px-3">/</h6>
        <h6 class="text-uppercase text-body m-0">Car Booking</h6>
    </div>
</div>
<?php
if (isset($_POST['submit'])) {

    //htmlspecialchars
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $pickup = $_POST['pickup'];
    $drop_point = $_POST['drop'];
    $booking_date = $_POST['booking_date'];
    $booking_time = $_POST['booking_time'];
    $request = $_POST['request'];
    $myOriginalDate = str_replace('/', '-', $booking_date);
    $myNewDate = date("Y-m-d", strtotime($myOriginalDate));
    include("db/connection.php");
    $sql = "insert into bookings  (first_name,last_name,email,mobile,pickup,drop_point,booking_date,booking_time,request) values
    ('$first_name','$last_name','$mobile','$email','$pickup','$drop_point','$myNewDate','$booking_time','$request')";
    $r = $conn->query($sql); //0
    if ($r) {
        $_SESSION['booking_added_message'] = "Booking Successfully Added";
    } else {
        $_SESSION['booking_added_message'] = "Booking Add Failed";
    }
}
?>
<!-- Page Header Start -->
<!-- Car Booking Start -->
<div class="container-fluid pb-5">
    <div class="container">
        <form method="POST" action="booking.php">
            <div class="row">
                <?php
                if (isset($_SESSION['booking_added_message'])) {
                ?>
                    <div class="alert alert-info alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <?php echo $_SESSION['booking_added_message'] ?>
                    </div>
                <?php
                    $_SESSION['booking_added_message'] = '';
                }
                ?>
                <div class="col-lg-8">
                    <h2 class="mb-4">Personal Detail</h2>
                    <div class="mb-5">
                        <div class="row">
                            <div class="col-6 form-group">
                                <input type="text" name="fname" class="form-control p-4" placeholder="First Name" required="required">
                            </div>
                            <div class="col-6 form-group">
                                <input type="text" name="lname" class="form-control p-4" placeholder="Last Name" required="required">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 form-group">
                                <input type="email" name="email" class="form-control p-4" placeholder="Your Email" required="required">
                            </div>
                            <div class="col-6 form-group">
                                <input type="text" name="mobile" class="form-control p-4" placeholder="Mobile Number" required="required">
                            </div>
                        </div>
                    </div>
                    <h2 class="mb-4">Booking Detail</h2>
                    <div class="mb-5">
                        <div class="row">
                            <div class="col-6 form-group">
                                <div class="row">
                                    <div class="col-12 form-group">
                                        <input type="text" name="pickup" class="form-control p-4" placeholder="Pickup Point" required="required">
                                    </div>

                                </div>
                            </div>
                            <div class="col-6 form-group">
                                <div class="row">
                                    <div class="col-12 form-group">
                                        <input type="text" name="drop" class="form-control p-4" placeholder="Drop Point" required="required">
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 form-group">
                                <div class="date" id="date2" data-target-input="nearest">
                                    <input type="text" name="booking_date" class="form-control p-4 datetimepicker-input" placeholder="Pickup Date" data-target="#date2" data-toggle="datetimepicker" />
                                </div>
                            </div>
                            <div class="col-6 form-group">
                                <div class="time" id="time2" data-target-input="nearest">
                                    <input type="text" name="booking_time" class="form-control p-4 datetimepicker-input" placeholder="Pickup Time" data-target="#time2" data-toggle="datetimepicker" />
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <textarea name="request" class="form-control py-3 px-4" rows="3" placeholder="Special Request" required="required"></textarea>
                        </div>
                        <button type="submit" name="submit" class="btn btn-block btn-primary py-3">Reserve Now</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Car Booking End -->
<?php include 'include/footer.php'; ?>