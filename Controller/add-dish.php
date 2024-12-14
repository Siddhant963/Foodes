<?php
include '../model/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     // Retrieve form data
     $name = $conn->real_escape_string($_POST['name']);
     $description = $conn->real_escape_string($_POST['description']);
     $type = $conn->real_escape_string($_POST['type']);
     $price = $conn->real_escape_string($_POST['price']);
 
     // Handle file upload
     $targetDir = "../assets/dishes-image";

     $imageName = basename($_FILES['image']['name']);
     $targetFilePath = $targetDir . $imageName;
     $link = "./assets/dishes-image" . $imageName;
 
     if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFilePath)) {
         // Save dish data in the database
         $imageURL = $link; // Save the file path as the URL in the database
         $sql = "INSERT INTO Dishes (Name, Description, Type, Price, ImageURL) 
                 VALUES ('$name', '$description', '$type', '$price', '$imageURL')";
 
         if ($conn->query($sql) === TRUE) {
             echo "Dish added successfully.";
         } else {
             echo "Error: " . $sql . "<br>" . $conn->error;
         }
     } else {
         echo "Error uploading image.";
     }
 }
 

?>