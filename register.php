
<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD']=='POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password =$_POST['password'];
    $role = $_POST['role'];

    $query = "INSERT INTO user(username,email,password, role) VALUES ('$username', '$email', '$password', '$role')";
    mysqli_query($conn,$query);
    header('Location: login.php');
  }
  //$password = password_hash ($_POST['password'], PASSWORD_BCRYPT);

?>


