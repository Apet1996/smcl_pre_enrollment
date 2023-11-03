<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Student_Enrollment</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="#">
                        <h2>SMCL</h2>
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                                <a href="home.php">
                                <i class="fas fa-bar"></i>Home</a>
                        </li>
                        <li>
                            <a href="enroll.php">
                                <i class="fas fa-check-square"></i>Enroll</a>
                        </li>
                                                <li>
                            <a href="subject.php">
                                <i class="fas fa-table"></i>Subject</a>
                        </li>

                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                        <a class="logo" href="#">
                        <h2>SMCL</h2>
                        </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                                <a href="home.php">
                                <i class="fas fa-chart-bar"></i>Home</a>
                        </li>
                         <li class="active">
                            <a href="enroll.php">
                                <i class="far fa-check-square"></i>Enroll</a>
                        </li>
                        <li>
                            <a href="subject.php">
                                <i class="fas fa-table"></i>Subject</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <ul>
                                  <li><a class="nav-link scrollto active" href="#">   </a></li>
                                  </ul>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span class="quantity">1</span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p>You have 2 news message</p>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                                </div>
                                                <div class="content">
                                                    <h6>Michelle Moreno</h6>
                                                    <p>Have sent a photo</p>
                                                    <span class="time">3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Diane Myers" />
                                                </div>
                                                <div class="content">
                                                    <h6>Diane Myers</h6>
                                                    <p>You are now connected on message</p>
                                                    <span class="time">Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="mess__footer">
                                                <a href="#">View all messages</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Your account has been blocked</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">john doe</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">john doe</a>
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="#">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div align="center">
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="card">
                        <div class="row">
                            <div class="col-lg-15">                     
           <img src="logo.png" width="10%" height="20%">
          <h2 align="center"><b>Registration Form</b></h2>
          <h5 align="center">Higher Education Department</h5>
          <h6 align="center">SY:2023-2024</h6>
        <section class="inner-page">
      <div class="container">
        <div class="row justify-content-center">
        <div class="col-md-10">

            <div class="icon d-flex align-items-center justify-content-center">
        <div class="col-md-12" data-aos="fade-up" data-aos-delay="300">
            <form action="" method="post">
         <div>
            <br>
            <br>
            <br>
<br>
          <h3 align="center"><b>Basic Information</b></h3>
        </div>
        <br>
              <br>
              <div class="row">
                <div class="form-group col-sm-4 mb3 mb-sm-0">
                          <label for="class">Last Name</label>
                <input type="text" class="form-control form-control-user" name="lname" required>
                </div>
                 <div class="form-group col-sm-4">
                          <label for="class">First Name</label>
                <input type="text" class="form-control" name="fname" required>
                </div>
                 <div class="form-group col-sm-2">
                           <label for="class">MI</label>
        <select name="class" class="form-control" id="class" required="">
          <option>Select</option>
          <option value="1st">A</option>
          <option value="2nd">B</option>
          <option value="3rd">C</option>
          <option value="4th">D</option>
          <option value="1st">E</option>
          <option value="2nd">F</option>
          <option value="3rd">G</option>
          <option value="4th">H</option>
          <option value="1st">I</option>
          <option value="2nd">J</option>
          <option value="3rd">K</option>
          <option value="4th">L</option>
          <option value="1st">L</option>
          <option value="2nd">M</option>
          <option value="3rd">N</option>
          <option value="4th">O</option>
          <option value="1st">P</option>
          <option value="2nd">Q</option>
          <option value="3rd">R</option>
          <option value="4th">S</option>
          <option value="1st">T</option>
          <option value="2nd">U</option>
          <option value="3rd">V</option>
          <option value="4th">W</option>
          <option value="1st">X</option>
          <option value="2nd">Y</option>
          <option value="3rd">Z</option>
        </select>
                </div> 
                <div class="form-group col-sm-2">
                          <label for="class">Suffex</label>
        <select name="class" class="form-control" id="class" required="">
          <option>Select</option>
          <option value="1st">Sr.</option>
          <option value="2nd">Jr.</option>
          <option value="3rd">I</option>
          <option value="4th">11</option>
          <option value="1st">III</option>
          <option value="2nd">IV</option>
        </select>
                </div>
              </div>
              <br>
              <div class="row">
              <div class="form-group col-sm-3 mb3 mb-sm-0">
                        <label for="class">Gender</label>
        <select name="class" class="form-control" id="class" required="">
          <option>Select</option>
          <option value="1st">Male</option>
          <option value="2nd">Female</option>
        </select>
              </div>
              <div class="form-group col-sm-3">
                        <label for="class">Status</label>
        <select name="class" class="form-control" id="class" required="">
          <option>Select</option>
          <option value="2nd">Single</option>
          <option value="3rd">In Relationship</option>
          <option value="4th">Married</option>
        </select>
              </div>
              <div class="form-group col-sm-3">
                        <label for="class">Citizenship</label>
                <input type="text" class="form-control" name="ship" required>
              </div>
              <div class="form-group col-sm-3">
                 <label for="class">Religion</label>
        <select name="class" class="form-control" id="class" required="">
          <option>Select</option>
          <option value="1st">Roman Catholic</option>
          <option value="2nd">Islam</option>
          <option value="3rd">Iglesia ni Cristo</option>
          <option value="4th">Philippine Independent Church</option>
          <option value="4th">Seventh-day Adventis</option>
          <option value="4th">Bible Baptist Church</option>
          <option value="4th">United Church of Christ in the Philippines</option>
          <option value="4th">Jehovah's Witnesses</option>
        </select>
              </div>
            </div>
            <br>
              <div class="row">
              <div class="form-group col-sm-3 mb3 mb-sm-0">
                 <label for="class">Date of Birth</label>
                <input type="date" class="form-control" name="bday" required>
              </div>
              <div class="form-group col-sm-4">
                 <label for="class">Place of Birth</label>
                <input type="text" class="form-control" name="pbirth" required>
              </div>
              <div class="form-group col-sm-5">
                 <label for="class">Address</label>
                <input type="text" class="form-control" name="address" required>
              </div>
            </div>
            <br>
              <div class="row">
              <div class="form-group col-sm-2 mb3 mb-sm-0">
                 <label for="class">Course</label>
                 <select name="class" class="form-control" id="class" required="">
          <option>Select</option>
          <option value="1st">BSIT</option>
          <option value="2nd">BSEB</option>
          <option value="3rd">BEED</option>
          <option value="4th">BSBA</option>
        </select>
      </div>
                       <div class="form-group col-sm-2">
                 <label for="class">Year</label>
                <select name="class" class="form-control" id="class" required="">
          <option>Select</option>
          <option value="1st">I</option>
          <option value="2nd">II</option>
          <option value="3rd">III</option>
          <option value="4th">IV</option>
        </select>
              </div>
              <div class="form-group col-sm-4">
                 <label for="class">Major</label>
                <input type="text" class="form-control" name="majorr" required>
              </div>
              <div class="form-group col-sm-4">
                 <label for="class">Mobile No.</label>
                <input type="text" class="form-control" name="mobile" required>
              </div>
          </div>
          <br>
<div class="row">
              <div class="form-group col-sm-4 mb3 mb-sm-0">
                 <label for="class">Email Add.</label>
                <input type="text" class="form-control" name="email" placeholder="Optional" required>
              </div>
            </div>
<br>
<br>
<br>
      <div>
          <h3 align="center"><b>School Name</b></h3>
          
        </div>
        <br>
              <div class="row">
                    <div class="form-group col-sm-9 mb3 mb-sm-0">
                <label for="class">Intermediate School Completed</label>
                <input type="text" class="form-control" name=" intermediate" required>
              </div>
              <div class="form-group col-sm-3">
                <label for="class">School Year</label>
                <input type="text" class="form-control" name="syear1" placeholder="0000-0000" required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="form-group col-sm-9 mb3 mb-sm-0">
              <label for="class">High School Completed</label>

                <input type="text" class="form-control" name=" highschool" required>
              </div>
              <div class="form-group col-sm-3">
                <label for="class">School Year</label>
                <input type="text" class="form-control" name="syear2" placeholder="0000-0000" required>
              </div>
            </div>
            <br>
            <div class="row">
            <div class="form-group col-sm-9 mb3 mb-sm-0">
              <label for="class">Last School Completed</label>
                <input type="text" class="form-control" name="last" required>
              </div>
               <div class="form-group col-sm-3">
                <label for="class">School Year</label>
                <input type="text" class="form-control" name="syear3" placeholder="0000-0000" required>
            </div>
          </div>
          <br>
                        <div class="row">
              <div class="form-group col-sm-4 mb3 mb-sm-0">
                 <label for="class">Gardian Name</label>
                <input type="text" class="form-control" name="gname" required>
              </div>
               <div class="form-group col-sm-3">
                 <label for="class">Mobile Number</label>
                <input type="text" class="form-control" name="gnumber" required>
              </div>
               <div class="form-group col-sm-5">
                 <label for="class">Gardian Address</label>
                <input type="text" class="form-control" name="gaddress" required>
              </div>
            </div>
          <br>
          <br>
            </form>
          </div>
</div>
</div>
      </div>
      <br>
      <br>
      <div class="container">
        <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="icon d-flex align-items-center justify-content-center">
        <div class="col-md-7" data-aos="fade-up" data-aos-delay="300">
          <form action="" method="post">
              <div align="center">
                  <div  class="form-group col-lg-5 col-md-5">
                <input type="submit" name="Submit" value="Submit(✔)" class="form-control btn btn-primary rounded submit px-20">
                  </div>
              </div>
          </form>
          </div>
        </div>
        </div>
        </div>
        </div>
</section>

    <br>
    <br>
    <br>
    <br>

                       </div>
                    </div>
                </div>
            </div>
        </div>

    <header>
         <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Saint Mary's College of Labason. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
    </header>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
