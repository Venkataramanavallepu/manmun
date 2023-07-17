<?php
$email = $_POST['email'];
$password = $_POST['password'];
 

//database connection
$con = new mysqli("localhost","root","","manmun");
if($con->connect_error) {
    die("failed to connect :" .$con->connect_error);

}
else{
   $stmt = $con->prepare("select * from vendors where email = ?");
   $stmt->bind_param("s",$email);
   $stmt->execute();
   $stmt_result = $stmt->get_result();
   if($stmt_result->num_rows>0) {
    $data = $stmt_result->fetch_assoc();
    if($data['password'] === $password){
        echo header('location:login.html');

        //echo "<h2>WELCOME TO MANMUN</h2>";
    }else{
        echo "<h2>Invalid email or password</h2>";
    }
   }
   else{
    echo "<h2>Invalid email or password</h2>";
   }

}


?>