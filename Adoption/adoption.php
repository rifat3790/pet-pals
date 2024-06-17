<?php
include '../Navbar/navbar.php';
include '../config.php';

// Fetch all challenges
$sql = "SELECT * FROM training_challenges";
$result = $conn->query($sql);

// Handle deletion of a challenge
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "DELETE FROM training_challenges WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Challenge deleted successfully";
    } else {
        echo "Error: " . $conn->error;
    }
    // Refresh the page after deletion
    header("Location: adoption.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adoption Center - PetPals Community</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="adoption.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../Navbar/navbar.css">
</head>

<body>

  
    <!-- end navbar -->
    <div class="container mt-5 pt-5">
        <h2 class="text-center mb-4 text-white">Available Training Challenges</h2>
        <div class="row">
            <?php while ($row = $result->fetch_assoc()): ?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card w-96 bg-base-100 shadow-xl">
                        <figure>
                            <img src="../Training/uploads/<?= $row['image'] ?>" alt="<?= $row['title'] ?>"
                                class="img-fluid">
                        </figure>
                        <div class="card-body">
                            <h2 class="card-title text-white"><?= $row['title'] ?></h2>
                            <p ><?= $row['description'] ?></p>
                            <p>Price: $<?= $row['price'] ?></p>
                            <div class="card-actions justify-end">
                                <a href="../update.php?id=<?= $row['id'] ?>" class="btn btn-primary">Update</a>
                                <a href="adoption.php?delete=<?= $row['id'] ?>" class="btn btn-danger"
                                    onclick="return confirm('Are you sure you want to delete this challenge?')">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>