<?php
include('connect.php');
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$number = $_POST['number'];

$query = "INSERT INTO user(Username, Email, Password, Contact_Number)
VALUES ('$username','$email','$password','$number')";
$x = mysqli_query($con, $query);
if (!$x) {
    echo "<script>alert('Sign Up unsuccessful!')</script>";
} else {
    echo "<script>alert('Sign Up successful!')</script>";
}
echo "<script>location.href='index.php'</script>";
