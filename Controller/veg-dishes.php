<?php 
include '../model/db.php';

$sql = "SELECT * FROM Dishes WHERE Type = 'Veg'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $dishes = [];

    // Fetch rows as associative array
    while ($row = $result->fetch_assoc()) {
        $dishes[] = [
            "DishID" => $row['DishID'],
            "Name" => $row['Name'],
            "Description" => $row['Description'],
            "Type" => $row['Type'],
            "Price" => $row['Price'],
            "ImageURL" => $row['ImageURL'],
        ];
    }

    // Send success response with dishes data
    http_response_code(200);
    echo json_encode([
        "status" => "success",
        "data" => $dishes
    ]);
} else {
    // No dishes found
    http_response_code(404);
    echo json_encode([
        "status" => "error",
        "message" => "No veg dishes found"
    ]);
}

?>