<?php
$con = mysqli_connect('localhost', 'root', 'Manan@2412');

if ($con) {
    echo "Connection successful";
} else {
    echo "Not connected";
}

mysqli_select_db($con, 'portfoliodata');

$username = $_POST['user'];
$email = $_POST['email'];
$mobile_no = $_POST['mobile'];
$socialmedia = $_POST['social'];
$comment = $_POST['comments'];  
$query = "INSERT INTO userinfo (username, email, mobile_no, socialmedia, comment) VALUES ('$username', '$email', '$mobile_no', '$socialmedia', '$comment')";

mysqli_query($con, $query);

header('location:index.php')
?>
