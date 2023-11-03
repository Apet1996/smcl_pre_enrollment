<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	 <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
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
	<link rel="stylesheet" type="text/css" href="popup.css">
</head>
<body onload="openPopup()">
  <section>
	<form action="pre-enrollment.php">
	<div class="popup" id="popup">
    <div class="container-fluid">
      <br>
      <div>
               <img src="logo.png" width="8%" height="8%">
               <br>
               <br>
                  <div align="center">
                    <h3><b>✔Pre-enrollment Successfully Submitted</b></h3>
                  <br>
                  <br>
                  <br>
                  <h3>Please pass the following requirments to the Registrar later...</h3>
      </div>
                <br>
                <div align="center">
                   <div class="table-responsive table--no-card m-b-30" style="overflow: scroll; width: 100%; height: 429px;">
                            <table class="table table-borderless table-striped table-earning">
                                <thead>
                                    <tr>
                                        <th>Entering Freshmen</th>
                                        <th>Transferees</th>
                                        </tr>
                                </thead>
                                    <tbody>
                                        <tr>
                                            <td>High School Report Card</td>
                                            <td>Honorable Dismissal</td>
                                        </tr>
                                        <tr>
                                            <td>PSA Birth CertificateCertivicate of Good Moral Character</td>
                                            <td>PSA Birth Certificate</td>
                                        </tr>      
                                        <tr>
                                            <td>Marriage Certificate of Married Student</td>
                                            <td>Certivicate of Good Moral </td>
                                        </tr>
                                        <tr>
                                            <td>Deploma</td>
                                            <td>Character</td>
                                        </tr>
                                        <tr>
                                            <td>3pcs. 1x1 size ID Picture</td>
                                            <td>Information Copy of TOR</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Marriage Certificate of Married Student</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>3pcs. 1x1 size ID Picture</td>
                                        </tr>
                                    </tbody>
                            </table>
                        </div>
                      </div>
                      </div>

                  <br>
                  <br>
                  <div align="center">
                <input type="submit" name="OK" value="OK" class="btn btn-primary">
                </div>
                <div>

                </div>
                                  <br>
                  <br>
                </div>
                </form>
            </div>
      </div>                   
    </div>
    </form>
   </section>

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