<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<style>
    body{
        background-image:url("https://img.freepik.com/premium-photo/chicken-steak-wooden-board-realistic-3d-product-showcase-food-photography_111797-2068.jpg");
        background-size: contain;
    }
    .heading{
        font-size:60px;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        color:white;
        margin-top:50px;
        margin-left:100px;
    }
    .dish1{
        margin-top:100px;
        margin-left:50px;
        width:1250px;
        height:230px;
        border-bottom:rgb(210, 201, 201) 1px solid;
    }
    .text{
        margin-left:30px;
        margin-top:7px;
    }
    .im1{
        height:200px;
        width:250px;
        box-shadow:3px 3px 3px 3px rgb(210, 201, 201);
        border-radius:10px;
    }
    h1{
        font-family:'Times New Roman', Times, serif;
        color:white;
    }
    h4{
        color:white;
    }
    h6{
        color: aliceblue;
    }
    button{
     background-color:rgb(247, 241, 241);
     width:100px;
     margin-top:10px;
     margin-left:20px;
     font-weight:bold;
     border-radius:10px;
  }
  .btn{
    color:black;
    font-weight:bold;
    font-size:19;
  }
  .heading1{
        font-size:60px;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        color:white;
        margin-top:50px;
        margin-left:1300px;
    }
    .dish2{
        margin-top:100px;
        margin-left:1000px;
        width:1250px;
        height:230px;
        border-bottom:rgb(210, 201, 201) 2px solid;
    }
    .button2{
     color:black;
     background-color:rgb(247, 241, 241);
     width:120px;
     margin-top:30px;
     margin-bottom:30px;
     margin-left:50px;
     font-weight:bold;
     border-radius:10px;
     text-decoration:none;
  }
  .btn2{
    color:black;
    font-weight:bold;
    font-size:15;
  }
</style>
<body>
<?php 


include './model/db.php';

$sql = "SELECT * FROM Dishes WHERE Type = 'Non-Veg'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $dishes = [];
    ?>

    <div class="heading">Non-vegetarian Dishes</div>
    <?php  while ($row = $result->fetch_assoc()) { ?>
    <div class="dish1 d-flex flex-row">
        <div class="image-box">
            <img src=<?php echo $row['ImageURL'] ?> class="im1">
        </div>

        <div class="text">
            <h1><?php echo $row['Name'] ?></h1>
            <h4><?php echo $row['Price'] ?></h4>
            <h6><?php echo $row['Description'] ?></h6>
            <button>
                <a href=order.php?id=<?php echo $row['DishID']?>  class="btn">Order</a>
            </button>
        </div>
    </div>
    <?php 
    } 
}
        ?>
    
    <button class="button2">
        <a href="./second.php" class="btn2">Back</a>
    </button>
</body>
</html>