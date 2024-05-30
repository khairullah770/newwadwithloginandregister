<?php
session_start();

include("connect.php"); // Include your database connection file

if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query to check if user exists in the database
    $query = "SELECT * FROM signup WHERE email = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) == 1) 
    {
        // User exists, set session
        $_SESSION['username'] = $username;

        // Close the database connection
        mysqli_close($conn);

        // Redirect to dashboard or home page after closing the database connection
        header("Location: index.php"); // Change this to your dashboard page
        exit();
    } else {
        // Invalid credentials, show error message
        echo "<script>alert('Login Failed');</script>";
    }
}
?>
