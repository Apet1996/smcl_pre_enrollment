
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Smcl_Pre-enrollment</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="popup.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: FlexStart
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="#" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span>Pre-enrollment</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#">   </a></li>
          <li><a class="nav-link scrollto" href="#">      </a></li>
          <li><a class="nav-link scrollto" href="#">      </a></li>
          <li><a class="nav-link scrollto" href="#">     </a></li>
          <li><a class="nav-link scrollto" href="#">    </a></li>
          <li><a href="#">    </a></li>
          <li><a class="nav-link scrollto" href="#">                 </a></li>
          <li><a class="getstarted scrollto" href="login.php">Log In</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <main id="main">
    <!-- ======= About Section ======= -->
  <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container-fluid">
                    <br>
        <br>
        <br>
        <div align="center">
          <form action="" method="post">

           <img src="logo.png" width="15%" height="15%">

          <h2 align="center"><b>Pre-registration Form</b></h2>
          <h5 align="center">Higher Education Department</h5>
          <h5 align="center">SY:2023-2024</h5>
        </div>
      </form>
        <br>
        <br>
      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
      <div class="container-fluid">
        <div class="row justify-content-center">
        <div class="col-md-9">
                    <br>
        <br>
        <br>
            <div class="icon d-flex align-items-center justify-content-center">
        <div class="col-md-12" data-aos="fade-up" data-aos-delay="300">
            <form action="" method="post">
        <div>                     
          <h3 align="center"><b>Personal Information</b></h3> 
        </div>
        <br>
        <br>
                <div class="row">
                <div class="form-group col-sm-4 mb3 mb-sm-0">
                          <label for="class">Last Name</label>
                <input type="text" class="form-control form-control-user" name="lastname">
                </div>
                 <div class="form-group col-sm-4">
                          <label for="class">First Name</label>
                <input type="text" class="form-control" name="firstname">
                </div>
                 <div class="form-group col-sm-2">
                          <label for="class">Middle Name</label>
                <input type="text" class="form-control" name="midname">
                </div>
                <div class="form-group col-sm-2">
                          <label for="class">Suffix</label>
        <select name="sufix" class="form-control" id="suffix" required="">

         <?php 
          include 'dropsuffix.php';
      while ($row = mysqli_fetch_array($nimal)) {
        # code...
    
    ?>

          <option value="<?php echo $row['sufID']?>"><?php echo $row['Suffix']?></option>
           <?php 
          }
          ?>
        </select>
      </div>
    </div>
    <br>

              <div class="row">
              <div class="form-group col-sm-3 mb3 mb-sm-0">
                        <label for="class">Gender</label>
        <select name="gender" class="form-control" id="gender" required="">

         <?php 
          include 'dropdown.php';
      while ($row = mysqli_fetch_array($nimal)) {
        # code...
    
    ?>

          <option value="<?php echo $row['genID']?>"><?php echo $row['gender']?></option>
           <?php 
          }
          ?>
        </select>
              </div>
              <div class="form-group col-sm-3">
                        <label for="class">Status</label>
        <select name="status" class="form-control" id="status" required="">

         <?php 
         include 'dropstatus.php';
      while ($row = mysqli_fetch_array($nimal)) {
        # code...
      
        ?>

          <option value="<?php echo $row['statusID']?>"><?php echo $row['status']?></option>
           <?php 
          }
          ?>
          </select>
              </div>

              <div class="form-group col-sm-3">
                        <label for="class">Citizenship</label>
                <input type="text" class="form-control" name="ship">
              </div>

              <div class="form-group col-sm-3">
                    <label for="class">Religion</label>
        <select name="religion" class="form-control" id="religion" required="">

         <?php 
         include 'dropreligion.php';
      while ($row = mysqli_fetch_array($nimal)) {
        # code...
      
         ?>

          <option value="<?php echo $row['religID']?>"><?php echo $row['religion']?></option>
           <?php 
          }
          ?>
          </select>
              </div>
            </div>
            <br>
               <div class="row">
              <div class="form-group col-sm-3 mb3 mb-sm-0">
                 <label for="class">Date of Birth</label>
                <input type="date" class="form-control" name="bday">
              </div>
              <div class="form-group col-sm-4">
                 <label for="class">Place of Birth</label>
                <input type="text" class="form-control" name="pbirth">
              </div>
              <div class="form-group col-sm-5">
                 <label for="class">Address</label>
                <input type="text" class="form-control" name="address">
              </div>
            </div>

            <br>
              <div class="row">
              <div class="form-group col-sm-5 mb3 mb-sm-0">
    <label for="class">Course</label>
        <select name="course" class="form-control" id="course" required="">

         <?php 
         include 'dropcourse.php';
      while ($row = mysqli_fetch_array($nimal)) {
        # code...
      
        ?>

          <option value="<?php echo $row['courseID']?>"><?php echo $row['course']?></option>
           <?php 
          }
          ?>
          </select>
      </div>
                       <div class="form-group col-sm-1">
                  <label for="class">Year Level</label>
        <select name="year" class="form-control" id="year" required="">

         <?php 
         include 'dropyear.php';
      while ($row = mysqli_fetch_array($nimal)) {
        # code...
      
        ?>

          <option value="<?php echo $row['yrlvlID']?>"><?php echo $row['yearlevel']?></option>
           <?php 
          }
          ?>
        </select>
              </div>
              <div class="form-group col-sm-3">
                 <label for="class">Major</label>
        <select name="major" class="form-control" id="major" required="">
                <?php 
         include 'dropmajor.php';
      while ($row = mysqli_fetch_array($nimal)) {
        # code...
      
        ?>

          <option value="<?php echo $row['majorID']?>"><?php echo $row['major']?></option>
           <?php 
          }
          ?>
        </select>
              </div>
              <div class="form-group col-sm-3">
                 <label for="class">Mobile No.</label>
                <input type="text" class="form-control" name="mobile">
              </div>
            </div>
            <br>
              <div class="row">
              <div class="form-group col-sm-6 mb3 mb-sm-0">
                 <label for="class">Email Add.</label>
                <input type="text" class="form-control" name="email" placeholder="Optional">
              </div>
            </div>            
            <br>
            <br>
             <br>
             <br>
            <br>
                  <div>                     
          <h3 align="center"><b>School Name</b></h3> 
        </div>
         <br>
            <br>
              <div class="row">
                    <div class="form-group col-sm-9 mb3 mb-sm-0">
                <label for="class">Intermediate School Completed</label>
<select name="inters" class="form-control" id="inters" required="">

         <?php 
         include 'dropschool.php';
      while ($row = mysqli_fetch_array($nimal)) {
        # code...
      
        ?>

          <option value="<?php echo $row['schoolID']?>"><?php echo $row['schoolname']?></option>
           <?php 
          }
          ?>
        </select>
              </div>
              <div class="form-group col-sm-3">
                <label for="class">School Year</label>
<select name="year1" class="form-control" id="year1" required="">

         <?php 
         include 'dropsyear.php';
      while ($row = mysqli_fetch_array($nimal)) {
        # code...
      
        ?>

          <option value="<?php echo $row['schoolyearID']?>"><?php echo $row['schoolyear']?></option>
           <?php 
          }
          ?>
        </select>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="form-group col-sm-9 mb3 mb-sm-0">
              <label for="class">High School Completed</label>
                <select name="highs" class="form-control" id="highs" required="">

         <?php 
         include 'dropschool.php';
      while ($row = mysqli_fetch_array($nimal)) {
        # code...
      
        ?>

          <option value="<?php echo $row['schoolID']?>"><?php echo $row['schoolname']?></option>
           <?php 
          }
          ?>
        </select>
              </div>
              <div class="form-group col-sm-3">
                <label for="class">School Year</label>
 <select name="year2" class="form-control" id="year2" required="">

         <?php 
         include 'dropsyear.php';
      while ($row = mysqli_fetch_array($nimal)) {
        # code...
      
        ?>

          <option value="<?php echo $row['schoolyearID']?>"><?php echo $row['schoolyear']?></option>
           <?php 
          }
          ?>
        </select>
              </div>
            </div>
            <br>
            <div class="row">
            <div class="form-group col-sm-9 mb3 mb-sm-0">
              <label for="class">Last School Completed</label>
                <select name="lasts" class="form-control" id="lasts" required="">

         <?php 
         include 'dropschool.php';
      while ($row = mysqli_fetch_array($nimal)) {
        # code...
      
        ?>

          <option value="<?php echo $row['schoolID']?>"><?php echo $row['schoolname']?></option>
           <?php 
          }
          ?>
        </select>
              </div>
               <div class="form-group col-sm-3">
                <label for="class">School Year</label>
<select name="year3" class="form-control" id="year3" required="">

         <?php 
         include 'dropsyear.php';
      while ($row = mysqli_fetch_array($nimal)) {
        # code...
      
        ?>

          <option value="<?php echo $row['schoolyearID']?>"><?php echo $row['schoolyear']?></option>
           <?php 
          }
          ?>
        </select>
            </div>
          </div>
           <br>
            <br>
             <br>
             <br>
            <br>
           <div align="center">
                    <h3><b>For Emergency Purposes</b></h3>
                    <h4>Parents/Guardian</h4>
                </div>
          <br>
          <br>
                        <div class="row">
              <div class="form-group col-sm-4 mb3 mb-sm-0">
                 <label for="class">Name</label>
                <input type="text" class="form-control" name="gname">
              </div>
               <div class="form-group col-sm-3">
                 <label for="class">Mobile Number</label>
                <input type="text" class="form-control" name="gnumber">
              </div>
               <div class="form-group col-sm-5">
                 <label for="class">Address</label>
                <input type="text" class="form-control" name="gaddress">
              </div>
            </div>
          <br>
          <br>
                    <br>
          <br>
           <div>
 <div class="container-fluid">
              <div align="center">
                  <div  class="form-group col-lg-4 col-md-5">
                <input type="submit" name="Submit" value="Submit(✔)" class="btn btn-primary">
                
                  </div>
              </div>
          </div>

          <?php
if (isset($_POST['Submit'])) {
  $lastname = $_POST['lastname'];
  $firstname = $_POST['firstname'];
  $midname = $_POST['midname'];
  $suffex = $_POST['suffex'];
  $gender = $_POST['gender'];
  $status = $_POST['status'];
  $ship = $_POST['ship'];
  $religion = $_POST['religion'];
  $bday = $_POST['bday'];
  $pbirth = $_POST['pbirth'];
  $address = $_POST['address'];
  $course = $_POST['course'];
  $year = $_POST['year'];
  $major = $_POST['major'];
  $mobile = $_POST['mobile'];
  $email = $_POST['email'];
  $inters = $_POST['inters'];
  $year1 = $_POST['year1'];
  $highs = $_POST['highs'];
  $year2 = $_POST['year2'];
  $lasts = $_POST['lasts'];
  $year3 = $_POST['year3'];
  $gname = $_POST['gname'];
  $gnumber = $_POST['gnumber'];
  $gaddress = $_POST['gaddress'];


  $sql="INSERT INTO `student_tbl`(`lastname`, `firstname`, `midname`, `suffex`, `gender`, `status`, `citizenship`, `religion`, `bdate`, `bplace`, `address`, `course`, `yearlevel`, `major`, `mobilenum`, `emailadd`, `intermediate`, `sy1`, `highschool`, `sy2`, `lastschool`, `sy3`, `guardianname`, `guardianadd`, `guardiannum`) VALUES ('$lastname','$firstname','$midname','$suffex','$gender','$status','$ship','$religion','$bday','$pbirth','$address','$course','$year','$major','$mobile','$email','$inters','$year1','$highs','$year2','$lasts','$year3', '$gname', '$gnumber', '$gaddress')";

   $mao= mysqli_query($ok, $sql);
   if ($mao) {
  echo'<script type="text/javascript">
window.location.href="success.php"
</script>';
exit();
   } else {
     echo"not save!!!";
   }
   
}
           ?>
  </div>


</form>
 </div>
   </div>
      </div>
    </div>
  </div>
</section>



<!-- echo '<script>alert("PLease pass the following requirments to the Registrar later \n \nEntering Freshmen \n*High School Report Card \n*PSA Birth Certificate \n*Certivicate of Good Moral Character \n*Marriage Certificate of Married Student \n*Deploma \n*3pcs.1x1 size ID Picture \n \nFor Transferees \n*Honorable Dismissal \n*PSA Birth Certificate \n*Certivicate of Good Moral Character \*nInformation Copy of TOR \n*Marriage Certificate of Married Student \n*3pcs.1x1 size ID Picture")</script>'; -->
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="container-fluid">
      <div class="copyright">
        &copy; Copyright 2023 to <?php echo date('Y') ?> <strong><span>Saint Mary's College of Labason</span></strong>.
        All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>