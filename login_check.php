
<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD']=='POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    //$query = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
    //$result = mysqli_query($conn, $query);
    
    $sql = "SELECT * FROM user WHERE email = '".$email."' AND password = '".$password."' ";
    $result = $conn->query($sql);
    $row=mysqli_fetch_array($result);
    

    //if($result->num_rows>0){
      //  $row=$result->mysqli_fetch_assoc();
        //if(password_varify($password,$row['password'])){
        //if (mysqli_num_rows($result) > 0) {
       // $row = mysqli_fetch_assoc($result);
        //$_SESSION['email'] = $row['email'];
        //$_SESSION['role'] = $row['role'];

        if ($row["role"] == "farmer") {
          header("Location: Farmer_dashboard.php");
        } elseif ($row["role"] == "consumer") {
            header("Location: Consumer.php");
        }
        else{
        echo"no user";
        }

    }
//}
//}
?>