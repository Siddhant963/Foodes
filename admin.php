<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Dish</title>
</head>
<body>
    <h1>Add a New Dish</h1>
    <form action="./Controller/add-dish.php" method="POST" enctype="multipart/form-data">
        <label for="name">Dish Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="description">Description:</label>
        <textarea id="description" name="description" rows="4" required></textarea><br><br>

        <label for="type">Type:</label>
        <select id="type" name="type" required>
            <option value="Veg">Veg</option>
            <option value="Non-Veg">Non-Veg</option>
        </select><br><br>

        <label for="price">Price:</label>
        <input type="number" id="price" name="price" step="0.01" required><br><br>

        <label for="image">Upload Image:</label>
        <input type="file" id="image" name="image" accept="image/*" required><br><br>

        <button type="submit">Add Dish</button>
    </form>
</body>
</html>
