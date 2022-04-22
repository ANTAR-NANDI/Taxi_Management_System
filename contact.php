<?php include 'include/header.php';

if (isset($_POST['submit'])) {

    //htmlspecialchars
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $msg = $_POST['message'];
    $msg_date  = date('Y-m-d H:i:s');
    include("db/connection.php");
    $sql = "insert into contacts  (name,email,subject,msg,msg_date) values
    ('$name','$email','$subject','$msg','$msg_date')";
    $r = $conn->query($sql); //0
    if ($r) {
        $_SESSION['success_msg'] = "Thanks for Contacting Us !! ";
    } else {
        $_SESSION['error_msg'] = "Failed";
    }
}
?>
<!-- Page Header Start -->
<div class="container-fluid page-header">
    <h1 class="display-3 text-uppercase text-white mb-3">Contact</h1>
    <div class="d-inline-flex text-white">
        <h6 class="text-uppercase m-0"><a class="text-white" href="">Home</a></h6>
        <h6 class="text-body m-0 px-3">/</h6>
        <h6 class="text-uppercase text-body m-0">Contact</h6>
    </div>
</div>
<!-- Page Header Start -->



<!-- Contact Start -->
<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <h1 class="display-4 text-uppercase text-center mb-5">Contact Us</h1>
        <?php
        if (isset($_SESSION['success_msg']) && $_SESSION['success_msg'] != '') {
            echo '<div class="alert alert-info alert-dismissible fade show" role="alert">
                <strong>' . $_SESSION['success_msg'] . '</strong> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>';

        }
         if(isset($_SESSION['error_msg']) && $_SESSION['error_msg'] != ''){
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>' . $_SESSION['error_msg'] . '</strong> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>';
        }
        ?>
        <div class="row">
            <div class="col-lg-7 mb-2">
                <div class="contact-form bg-light mb-4" style="padding: 30px;">
                    <form method="POST" enctype="multipart/form-data" autocomplete="off" action="contact.php">
                        <div class="row">
                            <div class="col-6 form-group">
                                <input name="name" type="text" class="form-control p-4" placeholder="Your Name" required="required">
                            </div>
                            <div class="col-6 form-group">
                                <input name="email" type="email" class="form-control p-4" placeholder="Your Email" required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <input name="subject" type="text" class="form-control p-4" placeholder="Subject" required="required">
                        </div>
                        <div class="form-group">
                            <textarea name="message" class="form-control py-3 px-4" rows="5" placeholder="Message" required="required"></textarea>
                        </div>
                        <div>
                            <button value="submit" name="submit" class="btn btn-primary py-3 px-5" type="submit">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5 mb-2">
                <div class="bg-secondary d-flex flex-column justify-content-center px-5 mb-4" style="height: 435px;">
                    <div class="d-flex mb-3">
                        <i class="fa fa-2x fa-map-marker-alt text-primary flex-shrink-0 mr-3"></i>
                        <div class="mt-n1">
                            <h5 class="text-light">Head Office</h5>
                            <p>New Market, Dhaka, Bangladesh</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <i class="fa fa-2x fa-map-marker-alt text-primary flex-shrink-0 mr-3"></i>
                        <div class="mt-n1">
                            <h5 class="text-light">Branch Office</h5>
                            <p>New Market, Chittagong, Bangladesh</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <i class="fa fa-2x fa-envelope-open text-primary flex-shrink-0 mr-3"></i>
                        <div class="mt-n1">
                            <h5 class="text-light">Customer Service</h5>
                            <p>Karim@gmail.com</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <i class="fa fa-2x fa-envelope-open text-primary flex-shrink-0 mr-3"></i>
                        <div class="mt-n1">
                            <h5 class="text-light">Return & Refund</h5>
                            <p class="m-0">refund@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
<?php include 'include/footer.php'; ?>
<script>
    $(document).ready(function() {
        setInterval(function() {
            $('.toast').toast('show');
        }, refresh_time * 1000);

    });
</script>

<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>