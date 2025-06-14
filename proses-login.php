<?php
session_start();

$host = "localhost";
$user = "root";
$pass = "";
$db = "upt_tik";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $_SESSION['admin'] = $username;
  header("Location: admin-dashboard.php");
  exit();
} else {
  echo "Login gagal. Username atau password salah.";
}

$conn->close();
?>
