<?php
include 'Navbar/navbar.php';
include 'config.php';

// Get the challenge ID from the URL
$id = $_GET['id'];

// Fetch the challenge details
$sql = "SELECT * FROM training_challenges WHERE id=$id";
$result = $conn->query($sql);
$challenge = $result->fetch_assoc();

// Handle update operation
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $image = $challenge['image']; // Default to the current image

    // Check if a new image is uploaded
    if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
        $image = basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'], "Training/uploads/$image");
    }

    // Update the challenge details in the database
    $sql = "UPDATE training_challenges SET title='$title', description='$description', price='$price', image='$image' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Challenge updated successfully";
        header("Location: Adoption/adoption.php");
        exit();
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
    <title>Update Training Challenge - PetPals Community</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="update.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../Navbar/navbar.css">
</head>

<body>

    <!-- end navbar -->
    <div class="container mt-5 pt-5">
        <h2 class="text-center mb-4">Update Training Challenge</h2>
        <div class="mb-5">
            <form action="update.php?id=<?= $id ?>" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="title" class="form-label">Challenge Title</label>
                    <input type="text" class="form-control" id="title" name="title"
                        value="<?= htmlspecialchars($challenge['title']) ?>" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3"
                        required><?= htmlspecialchars($challenge['description']) ?></textarea>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control" id="price" name="price"
                        value="<?= htmlspecialchars($challenge['price']) ?>" required>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" class="form-control" id="image" name="image">
                    <img src="../Training/uploads/<?= htmlspecialchars($challenge['image']) ?>"
                        alt="<?= htmlspecialchars($challenge['title']) ?>" class="img-fluid mt-3"
                        onerror="this.src='default-image.jpg';">
                </div>
                <button type="submit" class="btn btn-primary">Update Challenge</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>