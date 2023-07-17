<!DOCTYPE html>
<html>
<head>
<title>Insert Page page</title>
</head>
<body>
<center>
<?php

// servername => localhost
// username => root
// password => empty
// database name => staff
$conn = mysqli_connect("localhost", "root", "", "manmun");

if($conn === false){
die("ERROR: Could not connect. ". mysqli_connect_error());
}

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$mobile = $_REQUEST['mobile'];
 
$password = $_REQUEST['password'];
 

$sql = "INSERT INTO vendors VALUES ('$name','$email','$mobile','$password')";
if(mysqli_query($conn, $sql)){
    echo header('location:welcome.html');
//echo "<h3>data stored in a database successfully.</h3>";
echo nl2br("\nName=$name"."\nEmail=$email"."\nMobile=$mobile"."\nPassword=$password");
}
else{
echo "ERROR: Hush! Sorry $sql. ". mysqli_error($conn);
}

mysqli_close($conn);
?>
</center>
</body>
</html>