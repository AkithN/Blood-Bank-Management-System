<?php
$hostname = "localhost";
$username = "root";
$password = "";
$db = "blood_ms";
$con= new mysqli($hostname,$username,$password,$db);
// Check connection
if ($con->connect_error) {
die("Database Connection failed: " . $con->connect_error);
}

if ($con->connect_error) {
    die("Database Connection failed: " . $con->connect_error);
    }
    if(isset($_POST["submit"])){

        $donor_id = $_POST['donor_id'];
        $dname = $_POST['dname'];
        $dob = $_POST['dob'];
        $email = $_POST['email'];
        $weight = $_POST['weight'];
        $gender = $_POST['gender'];
        $phone_no = $_POST['phone_no'];
        $city = $_POST['city'];
        $address = $_POST['address'];

        $password = $_POST['password'];
        

    $sql= "INSERT INTO donor_detail VALUES('$donor_id','$dname','$dob','$email','$weight','$gender','$phone_no','$city','$address',DEFAULT,DEFAULT,'$password')";
    if($con->query($sql))
    {
    echo "<script>alert('Record inserted ')</script>";
    }
    else {
    echo "<script>alert('Record insert failed ')</script>";
    }
    $con->close();
    }
    ?>
        