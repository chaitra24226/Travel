<!DOCTYPE HTML>
<html>
<head>
<title>User Signup</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>

<body>

<?php 
$name=  $_POST['name'];
$pass=  $_POST['pass'];
$mail=  $_POST['email'];
include("database.php");

$rs=mysqli_query($conn,"select * from admin where A_email='$mail'");
if (mysqli_num_rows($rs)>0)
{
	echo "<br><br><br><div class=head1>Login Id Already Exists</div>";
	exit;
}
$query="INSERT INTO admin (A_name, A_pass, A_email) VALUES('$name','$pass','$mail')";
$rs=mysqli_query($conn,$query)or die("Could Not Perform the Query");
echo "<br><br><br><div class=head1>Your Login ID  $name Created Sucessfully</div>";
echo "<br><div class=head1>Please Login using your Login ID to take Quiz</div>";
echo "<br><div class=head1><a href=index.php>Login</a></div>";

$abc  = "SELECT * FROM ADMIN";
$result =mysqli_query($conn,$abc)or die("Could Not Perform the Query");

while($row  = $result->fetch_assoc()){

	echo $uname = $row['A_name'];
	echo  $upass = $row['A_pass'];
	echo $umail = $row['A_email'];

	echo "<br>"

}


?>

<?php
?>
</body>
</html>