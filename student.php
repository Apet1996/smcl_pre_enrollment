<?php
include 'connection.php';
$studentID = $_GET['studentID'];
$sql= "SELECT `studentID`, `lastname`, `firstname`, `midname`, `course`, `yearlevel` FROM `student_tbl` WHERE studentID=studentID";
$stm->bind_param("studentID", $studentID);
$stm->execute();
$stmt->bind_result($studentID, $lastname, $firstname, $midname, $course, $yearlevel);
if ($stmt->fetch()) {

    echo "studentID: " . $studentID . "<br>";
    echo "lastname: " . $lastname . "<br>";
    echo "firstname: " . $firstname . "<br>";
    echo "midname: " . $midname . "<br>";
    echo "course: " . $course . "<br>";
    echo "yearlevel: " . $yearlevel . "<br>";
} else {
    echo "No data found";
}
$stm->close();
$ok->close();
$nimal= mysqli_query($ok ,$sql);
 ?>