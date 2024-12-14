<?php
include './model/db.php';

$sql = 'select * from reviews ';
$result = mysqli_query($conn, $sql);
if ($result->num_rows > 0) {
$reviews = [];



?>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <body>
          <?php while($row = mysqli_fetch_assoc($result)) { ?>
     <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $row['UserName'] ?></h5>
  
    <p class="card-text"><?php echo $row['Review'] ?></p>
  
  </div>
</div>
<?php } } else { echo "No reviews found"; }?>
     </body>
</html>