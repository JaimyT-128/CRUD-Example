<?php
include "db_connect.php";
if(isset($_POST["submit"])){
    $firstname = $_POST["fname"];
    $lastname = $_POST["lname"];
    $email = $_POST["email"];
    $membership_type = $_POST["memtype"];

    $sql = "INSERT INTO memberships(id, firstname, lastname, email, membership_type) VALUES ('', '$firstname', '$lastname', '$email', '$membership_type')";
    $result = mysqli_query($conn, $sql);
    echo "<meta http-equiv='refresh' content='0;url=index.php'>";
}


?>