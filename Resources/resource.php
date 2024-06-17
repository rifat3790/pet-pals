<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Care Resources</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="resource.css"><link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" rel="stylesheet">
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
    <section id="health" class="py-5">
        <div class="container">
            <h2 class="text-center text-primary mb-4">Pet Health</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h3 class="card-title">Common Pet Health Issues</h3>
                            <p class="card-text">Learn about the most common health issues in pets and how to prevent them.</p>
                            <a href="#" class="btn btn-outline-primary">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h3 class="card-title">Vaccination Schedule</h3>
                            <p class="card-text">Ensure your pet stays healthy by following the recommended vaccination schedule.</p>
                            <a href="#" class="btn btn-outline-primary">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h3 class="card-title">First Aid Tips</h3>
                            <p class="card-text">Know what to do in case of an emergency with these first aid tips for pets.</p>
                            <a href="#" class="btn btn-outline-primary">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contribute" class="py-5">
        <div class="container">
            <h2 class="text-center text-primary mb-4">Contribute Your Content</h2>

            <div class="field">
                <form action="#" class="mx-auto" style="max-width: 600px;">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label">Content/Suggestion:</label>
                        <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                </form>
            </div>
        </div>
    </section>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
