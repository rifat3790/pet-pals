<?php
include '../Navbar/navbar.php';
include '../config.php';

// Handle form submission for adding or updating a challenge
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    // Handle file upload
    $image = null;
    if(isset($_FILES['image']) && $_FILES['image']['error'] == 0){
        $image = $_FILES['image']['name'];
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($image);

        // Create uploads directory if it doesn't exist
        if (!file_exists($target_dir)) {
            mkdir($target_dir, 0777, true);
        }

        if (!move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            die("Error: Failed to upload file.");
        }
    }

    if ($_POST['action'] == 'create') {
        $sql = "INSERT INTO training_challenges (title, description, price, image) VALUES ('$title', '$description', '$price', '$image')";
        if ($conn->query($sql) === TRUE) {
            echo "New challenge created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } elseif ($_POST['action'] == 'update') {
        $id = $_POST['id'];
        $sql = "UPDATE training_challenges SET title='$title', description='$description', price='$price'";
        if ($image) {
            $sql .= ", image='$image'";
        }
        $sql .= " WHERE id=$id";
        
        if ($conn->query($sql) === TRUE) {
            echo "Challenge updated successfully";
        } else {
            echo "Error: " . $conn->error;
        }
    }
}

// Handle deletion of a challenge
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "DELETE FROM training_challenges WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Challenge deleted successfully";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Training Challenges - PetPals Community</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="training.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../Navbar/navbar.css">
</head>

<body>



<!-- end navbar -->
<div class="container mt-5 pt-5">
    <h2 class="text-center mb-4">Pet Training Challenges</h2>

    <!-- Add or Update challenge form -->
    <div class="mb-5">
        <form action="training.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="action" value="create">
            <input type="hidden" name="id" value="">
            <div class="mb-3">
                <label for="title" class="form-label">Challenge Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" id="price" name="price" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>
            <button type="submit" class="btn btn-primary">Add Challenge</button>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function editChallenge(id, title, description, price, image) {
        document.querySelector('input[name="action"]').value = 'update';
        document.querySelector('input[name="id"]').value = id;
        document.querySelector('input[name="title"]').value = title;
        document.querySelector('textarea[name="description"]').value = description;
        document.querySelector('input[name="price"]').value = price;
        if(image) {
            document.querySelector('input[name="image"]').removeAttribute('required');
        }
    }
</script>
</body>
</html>
