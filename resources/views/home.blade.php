<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>

        .nav-link {
            margin-right: 20px; /* Add space between nav items */
        }

        /* Optional: Remove margin from the last nav item */
        .nav-item:last-child .nav-link {
            margin-right: 0; /* Remove margin from the last item */
        }


        .hero-section {
            position: relative;
            height: 100vh; /* Ensures the section spans full screen height */
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
        }

        .hero-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover; /* Ensures the image covers the entire area without distortion */
            z-index: 1; /* Places the image behind the text content */
        }



        .hero-content {
            position: relative;
            z-index: 3; /* Places the content above the image and overlay */
            background-color: rgba(0, 114, 206, 0.5); /* 50% transparent #0072ce */
            padding: 60px; /* Padding for content */
            border-radius: 10px; /* Optional: rounded corners */
            max-width: 800px; /* Optional: limit the width of the box */
            margin: auto; /* Center the box horizontally */
        }

        .hero-content h1 {
            margin-bottom: 20px; /* Space between h1 and p */
        }


        h6 {
            margin-bottom: 20px; /* Space between h1 and p */
        }

        h2 {
            margin-bottom: 20px; /* Space between h1 and p */
        }

        .hero-content p {
            margin-bottom: 20px; /* Space between p and button */
        }

        .register-button {
            background-color:rgb(255, 255, 255);
            color: #0072ce;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            text-decoration: none;
        }

        .register-button:hover {
            background-color:rgb(120, 179, 242);
            color: white;
        }
    </style>
</head>
<body>
    <!-- Responsive navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container px-5">
            <a class="navbar-brand" href="#!">
                <img src="image/dostLogo.png" alt="Logo" style="height: 40px; width: auto;">
                <img src="image/dostLogo2.png" alt="Logo" style="height: 40px; width: auto;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">Event</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Hero Section -->
    <main class="hero-section">
        <!-- Corrected the image source path -->
        <img src="image/bgdost.jpg" alt="Background" class="hero-image">
        <div class="overlay"></div>
        <div class="hero-content">
            <h1>DOST Event Registration Management System</h1>
            <p>Transforming How Events Are Managed and Experienced.<br>
               From registration to engagement, we create efficient solutions for all.</p>
            <a href="#" class="register-button">Register Now</a>
        </div>
    </main>

    <!-- Page Content -->
    <div class="container px-4 px-lg-5">
        <!-- Heading Row -->
        <div class="row gx-4 gx-lg-5 align-items-center my-5">
            <div class="col-lg-7">
                <img class="img-fluid rounded mb-4 mb-lg-0" src="image/dostseminar.jpg" alt="..." />
            </div>
            <div class="col-lg-5">
                <h1 class="font-weight-light">DOST-STII and ASLP Library Seminar</h1>
                <h6 class="font-weight-light" >Febraury 9 | DOST Main Building</h6>
                <p>A librarian beginner guide that helps to improve your skills and develop your manegerial capacity. Let's learn while having fun with our prepared activities for anyone.</p>
                <a class="btn btn-primary" href="#!">Join Now!</a>
            </div>
        </div>
        <!-- Call to Action -->
        <div class="card text-white bg-secondary my-5 py-4 text-center">
            <div class="card-body"><p class="text-white m-0">This call to action card is a great place to showcase some important information or display a clever tagline!</p></div>
        </div>
        <!-- Content Row -->
        <div class="row gx-4 gx-lg-5">
            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title">Card One</h2>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
                    </div>
                    <div class="card-footer"><a class="btn btn-primary btn-sm" href="#!">More Info</a></div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title">Card Two</h2>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod tenetur ex natus at dolorem enim! Nesciunt pariatur voluptatem sunt quam eaque, vel, non in id dolore voluptates quos eligendi labore.</p>
                    </div>
                    <div class="card-footer"><a class="btn btn-primary btn-sm" href="#!">More Info</a></div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title">Card Three</h2>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
                    </div>
                    <div class="card-footer"><a class="btn btn-primary btn-sm" href="#!">More Info</a></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container px-4 px-lg-5"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p></div>
    </footer>
    <!-- Bootstrap core JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS -->
    <script src="js/scripts.js"></script>
</body>
</html>