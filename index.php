<?php

$servername = "localhost";
$username = "b160741cs";
$password = "b160741cs";

// Create connection
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";



$msg="";
$errorName="";
$errorRoll="";



if(isset($_POST['form_submitted'])){
$msg="Successfully added";
$txt1=$_POST["student_rollno"];
$txt2=$_POST["student_name"];

$txt3=$_POST["student_email"];
$txt4=$_POST["student_cgpa"];

$sql1="INSERT INTO db_b160741cs.user VALUES('$txt1', '$txt2', '$txt3', '$txt4')";
$conn->query($sql1);
 


}
?>

<html>
<head><title>UIP</title></head>
<body>
<center><h1> Add students </h1><a href="search.php"> Search students</a> </center>
<center><?php echo $msg ?></center>
<form action="index.php" method="POST">
<br/><br/><center>
<table ><tr><td>
Name  </td><td><input type="text" name="student_name"/></td><td><?php echo $errorName ?> </td></tr>
<tr><td>
Roll no </td> <td> <input type="text" name="student_rollno"/> </td><td><?php echo $errorRoll ?></td></tr>
<tr><td>

E-mail id </td><td><input type="text" name="student_email"/> </td></tr><tr><td>
CGPA  </td><td> <input type="text" name="student_cgpa"/></td></tr><tr><td>
<input type="hidden" name="form_submitted" value="1"/>
<tr><td/><td>
<input type="submit" value="Submit"/></td></tr></table></center>

</form> 
</body>
</html>
