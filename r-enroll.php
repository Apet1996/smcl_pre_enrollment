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
    <title>Enrollment</title>

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
      <link href="popup.css" rel="stylesheet">

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
                                <a href="r-home.php">
                                <i class="fas fa-bar"></i>Home</a>
                        </li>
                        <li>
                            <a href="r-enroll.php">
                                <i class="fas fa-check-square"></i>Enroll</a>
                        </li>
                                                <li>
                            <a href="r-subject.php">
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
                                <a href="r-home.php">
                                <i class="fas fa-chart-bar"></i>Home</a>
                        </li>
                         <li class="active">
                            <a href="r-enroll.php">
                                <i class="far fa-check-square"></i>Enroll</a>
                        </li>
                        <li>
                            <a href="r-subject-1sem.php">
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
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">Registrar</a>
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
                                                        <a href="#">Registrar</a>
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
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                                              
                        <div align="right">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search Student who request to enroll..." />
                        </div>
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Student Id</th>
                                                <th>Last Name</th>
                                                <th>Firstname</th>
                                                <th>MI</th>
                                                <th>Course</th>
                                                <th>Year</th>
                                                <th>View Subject</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Limbaga</td>
                                                <td>Earl Christian</td>
                                                <td>C</td>
                                                <td>BSIT</td>
                                                <td>BSIT</td>
                                                <td>4</th>
                                                    <td>
                                                    <div class="table-data-feature">
                                                        <button class="item" data-toggle="tooltip" data-placement="left" title="View"  onclick="openPopup()">
                                                            <i class="fa  fa-eye"></i>        
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                        <br>
                          <div class="container-fluid">
                            <br>
                                    <div class="popup" id="popup">
                                        <div class="lg-6" style="overflow: scroll; width: 1000px; height: 300px;">
                                            <div class="user-data m-b-60">
                                        <div class="table-responsive table--no-card m-b-30">

                                         <table class="table table-borderless table-striped table-earning">
                                            <div align="center">
                                        <thead>
                                            <tr>
                                                <th>Subject Code</th>
                                                <th>Title Description</th>
                                                <th>Unit</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>buang</td>
                                                <td>algo</td>
                                                <td>3</td>
                                            </tr>
                                                    <tr>
                                                <td>buang</td>
                                                <td>algo</td>
                                                <td>3</td>
                                            </tr>
                                             <tr>
                                                <td>buang</td>
                                                <td>algo</td>
                                                <td>3</td>
                                            </tr>
                                             <tr>
                                                <td>buang</td>
                                                <td>algo</td>
                                                <td>3</td>
                                            </tr>
                                                    <tr>
                                                <td>buang</td>
                                                <td>algo</td>
                                                <td>3</td>
                                            </tr>
                                             
                                                </tbody>
                                            </div>
                                        </table>
                                        </div>
                        
                                        </div>
                                    </div>
                    <div class="row">
                            <div class="form-group col-sm-5">
                         <input type="submit" name="ok" value="Approve" class="form-control btn btn-primary rounded submit px-10" onclick="closePopup()">
                            </div>
                         <div class="form-group col-sm-5">
                         <input type="submit" name="deny" value="Deny" class="form-control btn btn-primary rounded submit px-10" onclick="closePopup()">
                            </div>
                        </div>
                   </div>
                    </div>
                                </div>
                           
                    </div>
                </div>
            </div>


                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2023 to <?php echo date('Y') ?> Saint Mary's College of Labason. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


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
<script>
  let popup = document.getElementById("popup");

function openPopup() {
  popup.classList.add("open-popup");
}

function closePopup() {
  popup.classList.remove("open-popup");
}
</script>
</body>

</html>
<!-- end document-->