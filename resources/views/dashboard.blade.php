<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            background-color: #F4F4F4;
        }

        .sidebar {
            width: 70px;
            background-color: #004A98;
            color: white;
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            padding: 15px 10px;
            transition: width 0.3s ease;
            overflow: hidden;
        }

        .sidebar:hover {
            width: 250px;
        }

        .sidebar h2 {
            color: white;
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 20px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
            border-bottom: 1px solid rgba(255, 255, 255, 0.3);
            padding-bottom: 10px;
        }

        .sidebar h3 {
            opacity: 0;
            transform: translateX(-20px);
            transition: opacity 0.3s ease, transform 0.3s ease;
        }

        .sidebar:hover h3 {
            opacity: 1;
            transform: translateX(0);
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sidebar ul li {
            margin: 20px 0;
        }

        .sidebar ul li a {
            text-decoration: none;
            color: white;
            font-size: 16px;
            font-weight: 500;
            padding: 10px 15px;
            border-radius: 5px;
            display: flex;
            align-items: center;
            transition: background-color 0.3s ease;
            position: relative;
        }

        .sidebar ul li a i {
            font-size: 20px;
            margin-right: 10px;
            position: absolute;
            left: 15px;
            transition: margin-right 0.3s ease;
        }

        .sidebar ul li a span {
            opacity: 0;
            margin-left: 40px;
            transition: opacity 0.3s ease;
            white-space: nowrap;
        }

        .sidebar:hover ul li a span {
            opacity: 1;
        }

        .sidebar ul li a:hover {
            background-color: #5A9FD4;
        }

        .sidebar ul li a.active {
            background-color: #5A9FD4;
            border-left: 4px solid #FFFFFF;
        }

        .sign-out {
            text-align: center;
            position: absolute;
            left: 10px;
            right: 10px;
            bottom: 30px;
            background-color: #5A9FD4;
            padding: 10px 15px;
            border-radius: 5px;
            color: white;
            text-decoration: none;
            font-size: 16px;
            font-weight: 500;
            transition: background-color 0.3s ease, transform 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .sign-out i {
            font-size: 18px;
        }

        .sidebar:hover .sign-out {
            display: flex;
        }

        .sign-out:hover {
            background-color: #004A98;
            transform: translateY(-2px);
        }

        .content {
            margin-left: 70px;
            padding: 20px 30px;
            transition: margin-left 0.3s ease;
        }

        .sidebar:hover ~ .content {
            margin-left: 250px;
        }

        .header {
            background-color: #004A98;
            color: white;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .header h1 {
            margin: 0;
            font-size: 22px;
            font-weight: 700;
        }

        .header img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border: 2px solid white;
        }

        h2 {
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 20px;
            color: #4D4D4D;
        }

        .card {
            background-color: #FFFFFF;
            padding: 20px 25px;
            margin-bottom: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }

        .card h3 {
            margin: 0 0 10px;
            font-size: 18px;
            color: #4D4D4D;
        }

        .card p {
            margin: 10px 0 15px;
            font-size: 14px;
            color: #666;
        }

        .card button {
            background-color: #004A98;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 14px;
            font-weight: 500;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .card button:hover {
            background-color: #5A9FD4;
        }

        .progress-bar {
            background-color: #F4F4F4;
            border-radius: 5px;
            height: 10px;
            margin: 10px 0;
            overflow: hidden;
        }

        .progress {
            background-color: #ED262A;
            height: 100%;
            transition: width 0.3s ease;
        }

        @media (max-height: 600px) {
            .sign-out {
                bottom: 10px;
            }
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 50px;
            }

            .sidebar:hover {
                width: 200px;
            }

            .content {
                margin-left: 50px;
            }

            .sidebar:hover ~ .content {
                margin-left: 200px;
            }

            .card {
                margin: 10px 0;
            }
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>ADMIN PORTAL</h2>
        <h3>Hi, Maria Luiza</h3>
        <ul>
            <li><a href="dashboard" class="active"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a></li>
            <li><a href="#"><i class="fas fa-qrcode"></i> <span>QR Reader Gates</span></a></li>
            <li><a href="event"><i class="fas fa-calendar-alt"></i> <span>Events</span></a></li>
            <li><a href="#"><i class="fas fa-users"></i> <span>Participants</span></a></li>
            <li><a href="#"><i class="fas fa-book"></i> <span>Narrative</span></a></li>
            <li><a href="#"><i class="fas fa-certificate"></i> <span>Certificates</span></a></li>
        </ul>
        <a href="#" class="sign-out"><i class="fas fa-sign-out-alt"></i> Sign Out</a>
    </div>

    <div class="content">
        <div class="header">
            <h1>DOST-STII Event Registration Management System</h1>
            <img src="image/bgdost.jpg" alt="User">
        </div>

        <h2>Dashboard</h2>

        <div class="card">
            <h3>DOST-STII Library Hybrid Seminar</h3>
            <div class="progress-bar">
                <div class="progress" style="width: 62.5%;"></div>
            </div>
            <p>500 out of 800 participants</p>
            <button><i class="fas fa-users"></i> View Participants</button>
        </div>

        <div class="card">
            <h3>DOST-STII Library Hybrid Seminar</h3>
            <div class="progress-bar">
                <div class="progress" style="width: 66.89%;"></div>
            </div>
            <p>301 out of 450 participants</p>
            <button><i class="fas fa-users"></i> View Participants</button>
        </div>
    </div>
</body>
</html>
