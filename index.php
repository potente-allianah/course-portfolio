<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar {
            font-weight: bold;
        }

        .card {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }

        .card:hover {
            transform: scale(1.05);
        }

        footer {
            background-color: #343a40;
            color: #fff;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .hero-section {
            background-color: #007bff;
            color: white;
            padding: 50px 20px;
            margin-bottom: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand" href="?page=home">Course Portfolio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="?page=home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="?page=labs">Lab Exercises</a></li>
                    <li class="nav-item"><a class="nav-link" href="?page=resources">Resources</a></li>
                    <li class="nav-item"><a class="nav-link" href="?page=instructor">Instructor</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <?php
      
        $page = $_GET['page'] ?? 'home';

        if ($page == 'home') {
           
            echo '
            <div class="hero-section">
                <h1 class="display-4">Welcome to the Course Portfolio</h1>
                <p class="lead">Explore the course objectives, resources, and labs!</p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">APPLICATIONS DEVT & EMERGING TECHNOLOGIES</h5>
                            <p class="card-text">Hands-on learning experiences through lab exercises.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">DESIGN THINKING (UI/UX)</h5>
                            <p class="card-text">Focuses on UI/UX design principles.</p>
                        </div>
                    </div>
                </div>
            </div>';
        } elseif ($page == 'labs') {
           
            $labs = ['Lab 1: Case Study', 'Lab 2: PHP Arrays', 'Lab 3: Tuition Fee Calculator'];
            echo '<h2>Lab Exercises</h2><div class="row">';
            foreach ($labs as $lab) {
                echo '
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">' . $lab . '</h5>
                            <a href="#" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>';
            }
            echo '</div>';
        } elseif ($page == 'resources') {
           
            echo '
            <h2>Resources</h2>
            <div class="row">
                <div class="col-md-6">
                    <h5>Textbooks</h5>
                    <ul class="list-group">
                        <li class="list-group-item">Introduction to Programming</li>
                        <li class="list-group-item">Web Development Essentials</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h5>External Links</h5>
                    <ul class="list-group">
                        <li class="list-group-item"><a href="#">W3Schools</a></li>
                        <li class="list-group-item"><a href="#">MDN Web Docs</a></li>
                    </ul>
                </div>
            </div>';
        } elseif ($page == 'instructor') {
            
            echo '
            <h2>Instructor Information</h2>
            <div class="d-flex align-items-center mb-3">
                <img src="profile.jpg" alt="Instructor Photo" class="rounded-circle me-3" style="width: 100px;">
                <div>
                    <h5>Anette Daligcoon</h5>
                    <p>Office Hours: Monday & Wednesday, 2 PM - 4 PM</p>
                    <p>Email: <a href="mailto:anettedaligcon@example.com">anettedaligcon@example.com</a></p>
                </div>
            </div>';
        } else {
        
            echo '<h2>Page Not Found</h2><p>The page you are looking for does not exist.</p>';
        }
        ?>
    </div>

    <footer class="text-center py-3">
        <p>© 2024 Course Portfolio. All Rights Reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
