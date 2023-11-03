<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
  <title>SMCL_login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">



<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="images1/icons/logo.png"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor1/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts1/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor1/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="vendor1/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor1/select2/select2.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css1/util.css">
    <link rel="stylesheet" type="text/css" href="css1/main.css">
<!--===============================================================================================-->

</head>

<body class="animsition">
 
                  <div class="">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="logo.png" alt="SMCL">
                </div>
                        <div class="login-form">
                          



                             <form class="login100-form validate-form" action="" method="post">
             


                        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: Limbaga">
                        <input class="input100" type="text" name="Username" placeholder="Username" id="Username">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
                        <input class="input100" type="password" name="Password" placeholder="Password" id= "Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>
                    
                    <div class="container-login100-form-btn">
                        
                             <button class="login100-form-btn" type="submit" name="singin">Log In</button>
                 

                    </div>
                </form>

                            <?php 
                            session_start();
                            include('connection.php');
                            if (isset($_POST['singin'])) {
                                if ($stm = $ok -> prepare("SELECT * FROM `student_tbl` WHERE `lastname`=? AND `mobilenum`=?")) {
                                   $stm->bind_param('ss', $_POST['Username'], $_POST['Password']);
                                   $stm->execute();
                                   $stm->store_result();
                                   if ($stm->num_rows > 0) {
                                      
                                     header("location: home.php");
                                   }else{
                                    echo "string";
                                   }
                                }
                                
                            }
                            $ok->close();
                             ?>
                        </div>
</div>
</div>
  <!--===============================================================================================-->    
    <script src="vendor1/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor1/bootstrap/js/popper.js"></script>
    <script src="vendor1/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor1/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor1/tilt/tilt.jquery.min.js"></script>
    <script >
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
<!--===============================================================================================-->
    <script src="js1/main.js"></script>

</body>

</html>
<!-- end document-->