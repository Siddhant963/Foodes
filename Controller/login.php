<?php 
include '../model/db.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     $username = $conn->real_escape_string($_POST['username']);
     $password = $conn->real_escape_string($_POST['password']);
 
     // Query to verify username and password
     $sql = "SELECT * FROM Users WHERE UserName = '$username' AND Password = '$password'";
     $result = $conn->query($sql);
 
     if ($result->num_rows > 0) {
         // Login successful
         $_SESSION['username'] = $username;
 
         if ($username === 'admin') {
             // Redirect to admin dashboard
             header("Location: ../admin.php");
         } else {
             // Redirect to user homepage
             header("Location: ../index.php");
         }
     } else {
         // Invalid credentials
         echo "Invalid username or password.";
     }
 }
 
?>