<?php include '../include/include.php';?>
<div class="container">
    <div class="card">
      <div class="card-header">
        <h3 class="text-center" style="color: navy"><marquee>Sign Up</marquee></h3>
      </div>
        <div class="card-body">
         
           <div class="row">
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title" style="color: blue">Donors Area</h5>
        <table style="border: 1px solid green">
          <tr>
            <td><a href="signup.php">Want To be a Donor?</a></td>
          </tr>
          <hr>
          <br>
           <td style="border: 1px solid green"><a href="signin.php">Log In</a></td>
             
          </tr>
           <td><a href="forgot.php">Forgot Password</a></td>  
          </tr>
        </table>
      </div>
    </div>
    

    <?php
     if(isset($_POST['submit']))
     {

//htmlspecialchars
    $name=$_POST['name'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $mobile=$_POST['mobile'];
  $gender=$_POST['gender'];
  $district=$_POST['district'];
  $age=$_POST['age'];
  $eligibility="No";
  $blood=$_POST['blood'];
     include("../Db/connection.php");     
   $sql="insert into signup  (Name,Email,Passsword,Blood,Gender,District,Age,Mobile,Eligibility,Image) values
    ('$name','$email','$password','$blood','$gender','$district',$age,$mobile,'$eligibility','antar3.jpg')";
   $r = $conn->query($sql);//0
  //echo "$r";
    if($r)
            {
             

               echo '<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Successfull!</h4>
 
  <hr>
  <h3 class="mb-0">You have Registered As a Donor</h3>
</div>';
             
        }

        
            else
            {
                echo '<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">UnSuccessfull!</h4>
</div>';
            }
     }



?>









  </div>
  <div class="col-sm-8">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title" style="color:purple">Sign Up</h5><hr>
            
                      <form method="POST"  action="signup.php">


                        <div class="form-group row">
                       <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-8">
                             <input type="text" name="name" class="form-control" id="validationDefault01" placeholder="First name" required>
                       </div>
                      </div>


                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-8">
                          <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
                        </div>
                      </div>


                       <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-8">
                          <input type="password" name="password" class="form-control" id="inputEmail3" placeholder="Email">
                        </div>
                      </div>

                 <div class="row mb-3">
                  
            <label for="staticEmail" class="col-md-2 col-form-label">Blood*</label>
             <div class="col-md-4">
                           
                 <div class="form-group">
                  
                            <select class="form-control" id="sel1" name="blood">

                               <option value="2"> B+ </option>
                                  <option value="1">A+</option>
                                  <option value="2">B+</option>
                                  <option value="3">AB+</option>
                                  <option value="5">AB-</option>
                                  <option value="6">A-</option>
                                  <option value="7">B-</option>
                                  <option value="4">O+</option>
                                  <option value="8">o-</option>
                            </select>
                  </div>

             </div>


              <label for="staticEmail" class="col-md-2 col-form-label">Gender</label>
             <div class="col-md-4">
                           
                 <div class="form-group">
                  
                            <select class="form-control" id="sel1" name="gender">
                                  <option>Male</option>
                                  <option>Female</option>
                                  <option>Other</option>
                            </select>
                  </div>

             </div>

                     
           </div>
       <div class="row mb-3">
            
             <label for="staticEmail" class="col-md-2 col-form-label">District</label>
             <div class="col-md-4">
                           
                 <div class="form-group">
                  
                            <select class="form-control" id="sel1" name="district">
                                   <option>Barguna</option>
                                  <option>Barisal</option>
                                  <option>Bhola</option>
                                  <option>Jhalokati</option>
                                  <option>Patuakhali</option>
                                  <option>Pirojpur</option>
                                  <option>Bandarban</option>
                                  <option>Brahmanbaria</option>
                                  <option>Chandpur</option>
                                  <option>Chittagong</option>
                                  <option>Comilla</option>
                                  <option>Cox's Bazar</option>
                                  <option>Feni</option>
                                  <option>Khagrachhari</option> 
                                  <option>Lakshmipur </option>
                                  <option>Noakhali</option>
                                  <option>Rangamati</option>
                                  <option>Dhaka</option>
                                  <option>Faridpur</option>
                                  <option>Gazipur</option>
                                  <option>Gopalganj</option>
                                  <option>Kishoreganj</option>
                                  <option>Madaripur</option>
                                  <option>Manikganj</option>
                                  <option>Munshiganj</option>
                                  <option>Narayanganj</option>
                                  <option>Narsingdi</option>
                                  <option>Rajbari</option>
                                  <option>Shariatpur</option>
                                  <option>Tangail</option>
                                  <option>Bagerhat</option>
                                  <option>Chuadanga</option>
                                  <option>Jessore</option> 
                                  <option>Jhenaidah</option>
                                  <option>Khulna</option>
                                  <option>Kushtia</option>
                                  <option>Magura</option>
                                  <option>Meherpur</option>
                                  <option>Narail</option>
                                  <option>Satkhira</option>
                                  <option>Jamalpur</option>
                                  <option>Mymensingh</option>
                                  <option>Netrokona</option>
                                  <option>Sherpur</option>
                                  <option>Bogra</option>
                                  <option>Joypurhat</option>
                                  <option>Naogaon</option>
                                  <option>Natore</option>
                                  <option>Chapainawabganj </option>
                                  <option>Pabna</option>
                                  <option>Rajshahi</option>
                                  <option>Sirajganj</option>
                                  <option>Dinajpur</option> 
                                  <option>Gaibandha</option>
                                  <option>Kurigram</option>
                                  <option>Lalmonirhat</option>
                                  <option>Nilphamari</option>
                                  <option>Panchagarh</option>
                                  <option>Rangpur</option>
                                  <option>Thakurgaon</option>
                                  <option>Habiganj</option>
                                  <option>Moulvibazar</option>
                                  <option>Sunamganj </option>
                                  <option>Sylhet</option>
                            </select>
                  </div>

             </div>

      
         
   </div>

 <div class="form-group row">
                          <label for="inputPassword3" class="col-sm-2 col-form-label">Age</label>
                          <div class="col-sm-4">
                            <input type="text" class="form-control" name="age" id="inputPassword3" placeholder="Age">
                          </div>
                        </div>



             

                     
                        <div class="form-group row">
                          <label for="inputPassword3" class="col-sm-2 col-form-label">mobile</label>
                          <div class="col-sm-8">
                            <input type="text" name="mobile" class="form-control" id="inputPassword3" placeholder="Password">
                          </div>
                        </div>

                        <div class="col-sm-6">
                           <button type="submit" value="submit" name="submit" class="btn btn-primary">Sign up</button>
                          </div>
                        
                       
                      </form>







                      
                       
                   
      </div>
    </div>
  </div>
</div> 
           
        </div>
    </div>
</div>




  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="container">
 <div class="card">
      <div class="card-body">
        <footer>
  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2019 Copyright:
    <a href="https://http://www.blooddonorsbd.com">bloododnorsbd.com</a>
  </div>
  <!-- Copyright -->

</footer>
</div>
</div>
  <!-- Copyright -->

</footer>
  </body>
</html>



