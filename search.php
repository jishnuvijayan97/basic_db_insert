<html><head><title>Database of all students</title></head>
<body>

<center>
<h1>Database of Students</h1>
<a href="index.php">Add students </a>
<?php

$servername = "localhost";
$username = "b160741cs";
$password = "b160741cs";


$conn = new mysqli($servername, $username, $password);

$sql = "SELECT Rollno, Name,Email, CGPA FROM db_b160741cs.user";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table><tr><th>Roll No</th><th>Name</th><th>College</th><th>Email</th> </tr>";
   
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["Rollno"]."</td><td>".$row["Name"]." ".$row["Email"]."</td><td>".$row["CGPA"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();

?>
</center>

</body>
</html>
