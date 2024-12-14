<?php
include './model/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
     $user_Name = $_SESSION['username']; // Assuming user_id is stored in session
     $review = $_POST['review'];

     $sql = "INSERT INTO Reviews (UserName,  review) VALUES ('$user_Name' , '$review')";
     $result = mysqli_query($conn, $sql);

     if ($result) {
          echo "Review submitted successfully";
     } else {
          echo "Error: ". $sql. "<br>". mysqli_error($conn);
     }

   header('location: ./vegmenu2.php');

  
     
}
?>