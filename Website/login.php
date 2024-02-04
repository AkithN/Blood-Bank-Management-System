<?php
include_once("db-config.php");

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if a user exists with the given username & password
    $result = mysqli_query($mysqli, "SELECT email, password, status FROM donor_detail WHERE email='$email' AND password='$password'");

    // Check if the query returned a row
    if ($row = mysqli_fetch_assoc($result)) {
        $status = $row['status'];

        // Check if the status is '1'
        if ($status == '1') {
            // Redirect to the desired page
            header("location: home.html");
        } else {
            echo "You should pass health checkup before login.<br><br>";
        }
    } else {
        echo "User email or password does not match.<br><br>";
    }
}

?>