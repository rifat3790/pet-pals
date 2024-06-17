<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Virtual Pet Accessories Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="store.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../Navbar/navbar.css">
</head>

<body>
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
        <h2 class="text-center mb-5">Welcome to our Virtual Pet Accessories Store!</h2>
        <div class="row">
            <div class="col-lg-3 mb-4">
                <div class="card">
                    <img src="https://m.media-amazon.com/images/I/61oHqFE3jAL._AC_UF1000,1000_QL80_.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Pet Food</h5>
                        <p class="card-text">$10</p>
                        <a href="#" class="btn btn-primary btn-sm">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
