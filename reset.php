<?php
if(isset($_POST['reset'])){


$hostname = "localhost";
$username = "root";
$password = "";
$databasename = "manmun";

$connect = mysqli_connect($hostname,$username,$password,$databasename);

$email = $_POST['email'];
$password = $_POST['password'];

$query =  "UPDATE `vendors` SET `password`='$password' WHERE email = '$email'";
$result = mysqli_query($connect, $query);

if($result){

    echo "data updated successfully";
}else{
    echo "data not updated";
}
mysqli_close($connect);

}

?>