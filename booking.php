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
<!-- Page Header Start -->
<!-- Car Booking Start -->
<div class="container-fluid pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h2 class="mb-4">Personal Detail</h2>
                <div class="mb-5">
                    <div class="row">
                        <div class="col-6 form-group">
                            <input type="text" class="form-control p-4" placeholder="First Name" required="required">
                        </div>
                        <div class="col-6 form-group">
                            <input type="text" class="form-control p-4" placeholder="Last Name" required="required">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 form-group">
                            <input type="email" class="form-control p-4" placeholder="Your Email" required="required">
                        </div>
                        <div class="col-6 form-group">
                            <input type="text" class="form-control p-4" placeholder="Mobile Number" required="required">
                        </div>
                    </div>
                </div>
                <h2 class="mb-4">Booking Detail</h2>
                <div class="mb-5">
                    <div class="row">
                        <div class="col-6 form-group">
                            <select class="custom-select px-4" style="height: 50px;">
                                <option selected>Pickup Location</option>
                                <option value="1">Location 1</option>
                                <option value="2">Location 2</option>
                                <option value="3">Location 3</option>
                            </select>
                        </div>
                        <div class="col-6 form-group">
                            <select class="custom-select px-4" style="height: 50px;">
                                <option selected>Drop Location</option>
                                <option value="1">Location 1</option>
                                <option value="2">Location 2</option>
                                <option value="3">Location 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 form-group">
                            <div class="date" id="date2" data-target-input="nearest">
                                <input type="text" class="form-control p-4 datetimepicker-input" placeholder="Pickup Date" data-target="#date2" data-toggle="datetimepicker" />
                            </div>
                        </div>
                        <div class="col-6 form-group">
                            <div class="time" id="time2" data-target-input="nearest">
                                <input type="text" class="form-control p-4 datetimepicker-input" placeholder="Pickup Time" data-target="#time2" data-toggle="datetimepicker" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 form-group">
                            <select class="custom-select px-4" style="height: 50px;">
                                <option selected>Select Adult</option>
                                <option value="1">Adult 1</option>
                                <option value="2">Adult 2</option>
                                <option value="3">Adult 3</option>
                            </select>
                        </div>
                        <div class="col-6 form-group">
                            <select class="custom-select px-4" style="height: 50px;">
                                <option selected>Select Child</option>
                                <option value="1">Child 1</option>
                                <option value="2">Child 2</option>
                                <option value="3">Child 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control py-3 px-4" rows="3" placeholder="Special Request" required="required"></textarea>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="bg-secondary p-5 mb-5">
                    <h2 class="text-primary mb-4">Payment</h2>
                    <div class="form-group">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="payment" id="paypal">
                            <label class="custom-control-label" for="paypal">Paypal</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="payment" id="directcheck">
                            <label class="custom-control-label" for="directcheck">Direct Check</label>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="payment" id="banktransfer">
                            <label class="custom-control-label" for="banktransfer">Bank Transfer</label>
                        </div>
                    </div>
                    <button class="btn btn-block btn-primary py-3">Reserve Now</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Car Booking End -->
<?php include 'include/footer.php'; ?>