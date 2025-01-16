<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #0072CE; 
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: 'Roboto', sans-serif;
        }

        .login-card {
            background-color: #f4f4f4; 
            width: 350px;
            padding: 30px;
            border-radius: 15px; 
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .login-card h2 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;
        }

        .form-group {
            position: relative;
            margin-bottom: 20px;
        }

        .form-group input {
            border: none;
            border-bottom: 2px solid #ccc;
            width: 100%;
            padding: 10px 0;
            font-size: 14px;
            background-color: transparent;
            outline: none;
        }

        .form-group input:focus {
            border-bottom: 2px solid #007BFF;
        }

        .form-group label {
            position: absolute;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
            font-size: 14px;
            color: #aaa;
            pointer-events: none;
            transition: all 0.2s ease;
        }

        .form-group input:focus + label,
        .form-group input:not(:placeholder-shown) + label {
            top: 0;
            font-size: 12px;
            color: #007BFF;
        }

        .form-group .toggle-password {
            position: absolute;
            top: 50%;
            right: 0;
            transform: translateY(-50%);
            font-size: 16px;
            cursor: pointer;
            color: #666;
        }

        .forgot-password {
            font-size: 12px;
            color: #aaa;
            text-align: right;
            margin-top: -10px;
            margin-bottom: 20px; 
        }

        .forgot-password a {
            color: #007BFF;
            text-decoration: none;
        }

        .forgot-password a:hover {
            text-decoration: underline;
        }

        .login-button {
            width: 100%;
            padding: 12px;
            background-color: #007BFF;
            border: none;
            color: #fff;
            font-size: 16px;
            font-weight: bold;
            border-radius: 25px; 
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .login-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="login-card">
        <h2>Login</h2>
        <form>
            <div class="form-group">
                <input type="text" id="email" placeholder=" " required>
                <label for="email">Email Address</label>
            </div>
            <div class="form-group">
                <input type="password" id="password" placeholder=" " required>
                <label for="password">Password</label>
                <i class="fas fa-eye toggle-password" id="togglePassword"></i>
            </div>
            <div class="forgot-password">
                <a href="#">Forgot Password?</a>
            </div>
            <button type="submit" class="login-button">Login</button>
        </form>
    </div>

    <script>
        const togglePassword = document.getElementById('togglePassword');
        const passwordField = document.getElementById('password');

        togglePassword.addEventListener('click', function () {
            const type = passwordField.type === 'password' ? 'text' : 'password';
            passwordField.type = type;
            this.classList.toggle('fa-eye-slash'); // Toggles between eye and eye-slash icons
        });
    </script>
</body>
</html>
