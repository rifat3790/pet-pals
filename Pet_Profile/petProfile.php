<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Pet Profile - PetPals Community</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="petProfile.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../Navbar/navbar.css">
</head>

<body>

    <?php include 'navbar.php'; ?>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="../Navbar/navbar.php">PetPals Community</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="../Adoption/adoption.php">Adoption Center</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../Pet_Profile/petProfile.php">Pet Profiles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../Training/training.php">Training Challenges</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../Resources/resource.php">Resources</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../Store/store.php">Store</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- end navbar -->
    <div class="container mt-5">
        <h2 class="text-center">Create Pet Profiles</h2>
        <form>
            <div class="form-group">
                <label for="pet-name">Pet Name</label>
                <input type="text" class="form-control" id="pet-name" placeholder="Enter pet name">
            </div>
            <div class="form-group">
                <label for="pet-breed">Breed</label>
                <input type="text" class="form-control" id="pet-breed" placeholder="Enter breed">
            </div>
            <div class="form-group">
                <label for="pet-age">Age</label>
                <input type="number" class="form-control" id="pet-age" placeholder="Enter age">
            </div>
            <div class="form-group">
                <label for="pet-photo">Photo</label>
                <input type="file" class="form-control-file" id="pet-photo">
            </div>
            <button type="submit" class="btn btn-primary">Create Profile</button>
        </form>
    </div>
</body>

</html>
