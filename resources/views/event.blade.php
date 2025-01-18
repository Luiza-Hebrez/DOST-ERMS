<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
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

        .sidebar ul li a.active {
            background-color: #5A9FD4;
            border-left: 4px solid white;
            color: white;
        }

        .sidebar ul li a.active:hover {
            background-color: #4A8CC7;
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
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            transition: background-color 0.3s ease;
        }

        .sign-out:hover {
            background-color: #004A98;
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

        .container {
            max-width: 900px;
            margin: 20px auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .events-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #004A98;
            color: white;
            padding: 10px 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-size: 24px;
            font-weight: 700;
        }

        .events-header .button {
            display: flex;
            align-items: center;
            gap: 8px;
            background-color: #5A9FD4;
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 14px;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .events-header .button i {
            font-size: 16px;
        }

        .events-header .button:hover {
            background-color: #004A98;
        }

        .events-list {
            margin-bottom: 20px;
        }

        .events-list h2 {
            font-size: 22px;
            font-weight: 700;
            color: #004A98;
            margin-bottom: 15px;
        }

        .event {
            padding: 15px;
            background-color: #FFFFFF;
            margin-bottom: 15px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .event h3 {
            margin: 0;
            color: #4D4D4D;
        }

        .event p {
            margin: 5px 0;
            color: #666;
        }

        .button {
            background-color: #004A98;
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 14px;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .button i {
            font-size: 16px;
        }

        .button:hover {
            background-color: #5A9FD4;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>ADMIN PORTAL</h2>
        <h3>Hi, Maria Luiza</h3>
        <ul>
            <li><a href="dashboard"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a></li>
            <li><a href="#"><i class="fas fa-qrcode"></i> <span>QR Reader Gates</span></a></li>
            <li><a href="event" class="active"><i class="fas fa-calendar-alt"></i> <span>Events</span></a></li>
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

        <div class="container">
            <div class="events-header">
                <span>Events</span>
                <button class="button"><i class="fas fa-plus"></i> Create New Event</button>
            </div>

            <div class="events-list">
                <h2>Ongoing Events</h2>
                <div class="event">
                    <div>
                        <h3>Ongoing Event 1</h3>
                        <p>Location: Event Location</p>
                        <p>Date: January 12, 2025 - January 20, 2025</p>
                    </div>
                    <button class="button">View</button>
                </div>
                <div class="event">
                    <div>
                        <h3>Ongoing Event 2</h3>
                        <p>Location: Event Location</p>
                        <p>Date: January 14, 2025 - January 22, 2025</p>
                    </div>
                    <button class="button">View</button>
                </div>
            </div>

            <div class="events-list">
                <h2>Upcoming Events</h2>
                <div class="event">
                    <div>
                        <h3>Event Title 1</h3>
                        <p>Location: Event Location</p>
                        <p>Date: January 20, 2025</p>
                    </div>
                    <button class="button">View</button>
                </div>
                <div class="event">
                    <div>
                        <h3>Event Title 2</h3>
                        <p>Location: Event Location</p>
                        <p>Date: February 15, 2025</p>
                    </div>
                    <button class="button">View</button>
                </div>
            </div>

            <div class="events-list">
                <h2>Past Events</h2>
                <div class="event">
                    <div>
                        <h3>Past Event 1</h3>
                        <p>Location: Event Location</p>
                        <p>Date: December 20, 2024</p>
                    </div>
                    <button class="button">View</button>
                </div>
                <div class="event">
                    <div>
                        <h3>Past Event 2</h3>
                        <p>Location: Event Location</p>
                        <p>Date: November 15, 2024</p>
                    </div>
                    <button class="button">View</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
