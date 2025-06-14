<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Hubungi Kami</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 20px;
      background-color: #fff;
    }

    h1 {
      color: #e67e22;
    }

    .kontak-container {
      max-width: 600px;
      margin: 0 auto;
    }

    .form-group {
      margin-bottom: 15px;
    }

    label {
      display: block;
      margin-bottom: 5px;
    }

    input, textarea {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    button {
      background-color: #e67e22;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    button:hover {
      background-color: #cf711f;
    }

    .info-kontak {
      margin-top: 30px;
      padding-top: 20px;
      border-top: 1px solid #ccc;
    }

    .info-kontak p {
      margin: 6px 0;
    }

    .info-kontak a {
      color: #e67e22;
      text-decoration: none;
    }

    .info-kontak a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <div class="kontak-container">
    <h1>Hubungi Kami</h1>
    <p>Silakan isi formulir di bawah ini untuk menghubungi kami:</p>

    <form action="proses_kontak.php" method="POST">
      <div class="form-group">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="pesan">Pesan:</label>
        <textarea id="pesan" name="pesan" rows="5" required></textarea>
      </div>
      <button type="submit">Kirim</button>
    </form>

    <div class="info-kontak">
      <h3>Kontak Langsung</h3>
      <p>Email: <a href="ith.ac.id">ith@gmail.com</a></p>
      <p>Instagram: <a href="ith" target="_blank">ith/a></p>
    </div>
  </div>

</body>
</html>
