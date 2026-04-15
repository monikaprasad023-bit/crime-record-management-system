<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 100px;
            background: #f2f2f2;
        }
        .box {
            background: white;
            padding: 40px;
            border-radius: 10px;
            display: inline-block;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .btn {
            margin-top: 20px;
            padding: 10px 20px;
            background: #f44336;
            color: white;
            border: none;
            border-radius: 5px;
            text-decoration: none;
        }
        .btn:hover {
            background: #d32f2f;
        }
    </style>
</head>
<body>
    <div class="box">
        <h1>Welcome, <?php echo $_SESSION['username']; ?> 🎉</h1>
        <p>You have successfully logged in.</p>
        <a href="logout.php" class="btn">Logout</a>
    </div>
</body>
</html>
