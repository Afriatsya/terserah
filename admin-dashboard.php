<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin - UPT TIK</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background-color: #f4f4f4;
        }
        .header {
            background-color: #f57c00;
            color: white;
            padding: 15px 30px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .header h1 {
            font-size: 22px;
            margin: 0;
        }
        .sidebar {
            width: 220px;
            background-color: #2c2c2c;
            height: 100vh;
            position: fixed;
            top: 60px;
            left: 0;
            padding-top: 20px;
            color: white;
        }
        .sidebar a {
            display: block;
            color: white;
            padding: 15px 20px;
            text-decoration: none;
        }
        .sidebar a:hover {
            background-color: #444;
        }
        .content {
            margin-left: 220px;
            padding: 20px;
            padding-top: 80px;
        }
        .card {
            background-color: white;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        footer {
            text-align: center;
            padding: 10px;
            margin-top: 30px;
            color: #777;
        }
    </style>
</head>
<body>

<div class="header">
    <h1>Dashboard Admin - UPT TIK</h1>
    <div>
        <a href="logout.php" style="color:white; text-decoration:none;"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </div>
</div>

<div class="sidebar">
    <a href="#"><i class="fas fa-home"></i> Beranda</a>
    <a href="#"><i class="fas fa-users"></i> Data User</a>
    <a href="#"><i class="fas fa-calendar"></i> Permintaan Zoom</a>
    <a href="#"><i class="fas fa-envelope"></i> Permintaan Email</a>
    <a href="#"><i class="fas fa-database"></i> Permintaan Data</a>
</div>

<div class="content">
    <div class="card">
        <h2>Selamat Datang, Admin!</h2>
        <p>Ini adalah halaman dashboard untuk mengelola layanan UPT TIK.</p>
    </div>

    <div class="card">
        <h3>Statistik Layanan</h3>
        <ul>
            <li>Permintaan Zoom: 12</li>
            <li>Permintaan Email: 8</li>
            <li>Permintaan Data: 5</li>
        </ul>
    </div>
</div>

<footer>
    &copy; 2025 UPT TIK - Institut Teknologi BJ Habibie. All rights reserved.
</footer>

</body>
</html>
