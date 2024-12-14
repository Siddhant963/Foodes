<?php 
include './model/db.php';
if (isset($_GET['id'])) {
     $dish_id = $_GET['id'];
     // echo $dish_id ;
      }

     $sql = "SELECT * FROM Dishes WHERE DishID = $dish_id";
     $result = mysqli_query($conn, $sql);
     $row = mysqli_fetch_assoc($result);
     $dish_name = $row['Name'];
     $dish_price = $row['Price'];
     $username =  $_SESSION['username'];

     $sql2 = "INSERT INTO Orders ( DishName, Price, UserName) VALUES ('$dish_name', $dish_price, '$username')";
     if ($conn->query($sql2) === TRUE) {
          // echo "order successfull.";
      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }

?>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<body>
<div>
     <h1>Order Summary</h1>
     <p> hii <?php echo $username ?> Your order has been placed successfully.</p>
     <p>Dish Name: <?php echo $dish_name;?></p>
     <p>Price: <?php echo $dish_price;?></p>
     <a href="vegmenu2.php" class="btn">Back to menu</a>
     <a href='review.php' class="btn">Give the review</a>
</div>
</div>
</body>
</html>