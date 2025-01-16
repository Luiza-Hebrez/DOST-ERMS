<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            margin: 0;
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f0f0f0; /* Neutral light background */
            font-family: 'Roboto', sans-serif;
        }

        .container {
            display: flex;
            width: 90vw; 
            max-width: 1920px; 
            height: 90vh; 
            max-height: 1080px;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }

        /* Left Section */
        .left-section {
            flex: 2.1;
            position: relative;
            background: url('/image/createaccbg.jpg') no-repeat center center;
            background-size: 150%;
            background-position: top center; /* Moves the focus of the image upwards */
        }

        .left-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #0072CE;
            opacity: 0.3;
        }

        /* Right Section */
        .right-section {
            flex: 1.5;
            background-color: #FFFFFF;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .form-container {
            width: 380px;
            padding: 30px;
        }

        .form-container h2 {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 25px;
            text-align: left;
        }

        .form-container label {
            font-size: 14px;
            margin-bottom: 5px;
            display: block;
            color: #333;
        }

        .form-container input {
            border: 1px solid #DADADA;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 15px;
            width: 100%;
            font-size: 14px;
        }

        .form-container .btn-primary {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            font-weight: bold;
            background-color: #007BFF;
            border: none;
            border-radius: 5px;
            color: #fff;
        }

        .form-container .btn-primary:hover {
            background-color: #0056b3;
        }

        .form-footer {
            margin-top: 20px;
            text-align: center;
            font-size: 14px;
        }

        .form-footer a {
            color: #007BFF;
            text-decoration: none;
        }

        .form-footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Left Section -->
        <div class="left-section"></div>

        <!-- Right Section -->
        <div class="right-section">
            <div class="form-container">
                <h2>Create Account</h2>
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter your full name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Create a password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Sign Up</button>
                </form>
                <div class="form-footer">
                    Already have an account? <a href="#">Sign in.</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
