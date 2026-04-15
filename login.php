

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRMS • Login</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f5f7fa;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .card {
      background: #fff;
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      width: 400px;
      text-align: center;
    }
    .logo {
      font-size: 48px;
      margin-bottom: 10px;
    }
    h2 {
      margin: 0 0 20px 0;
      font-size: 22px;
      color: #1a2942;
    }
    .input, .select {
      width: 100%;
      padding: 12px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 14px;
    }
    .btn {
      background: #1a2942;
      color: white;
      padding: 12px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-size: 16px;
      width: 100%;
      transition: 0.3s;
    }
    .btn:hover {
      background: #2c3e5c;
    }
  </style>
</head>
<body>
  <div class="card">
    <div class="logo">👮</div>
    <h2>CRIME RECORD MANAGEMENT SYSTEM</h2>
    <form method="POST" action="login_process.php">
      <input class="input" type="text" name="username" placeholder="Username" required>
      <input class="input" type="password" name="password" placeholder="Password" required>
      <select class="select" name="role">
        <option>Admin</option>
        <option>Officer</option>
        <option>Viewer</option>
      </select>
      <button class="btn" type="submit">LOGIN</button>
    </form>
  </div>
</body>
</html>

