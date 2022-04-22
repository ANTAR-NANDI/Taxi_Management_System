 <?php
    include("../db/connection.php");
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "select * from users where email='$email' and password='$password'";
        // echo $sql;
        // exit();
        $r = $conn->query($sql);



        if ($r->num_rows > 0) {


            while ($row = $r->fetch_assoc()) {
                $email = $row['email'];
                $id = $row['id'];
            }
            $_SESSION['login_status'] = "logged in";
            $_SESSION['email'] = $email;
            $_SESSION['id'] = $id; //filter
            header("Location:../Admin/index.php");
        } else {
            echo "Wrong Password";
        }
    }






    ?>