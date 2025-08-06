<?php
session_start();

$USERNAME = "admin";
$PASSWORD = "qhowmenz123"; // Change to your own secure password

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST["username"];
    $pass = $_POST["password"];
    if ($user === $USERNAME && $pass === $PASSWORD) {
        $_SESSION["logged_in"] = true;
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Invalid credentials.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin Login - Qhowmenz</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <section class="hero">
    <h1>Admin Login</h1>
    <form method="POST" style="max-width:400px; margin:auto;">
      <input type="text" name="username" placeholder="Username" required><br><br>
      <input type="password" name="password" placeholder="Password" required><br><br>
      <button type="submit">Login</button>
      <?php if (!empty($error)) echo "<p style='color:red;'>$error</p>"; ?>
    </form>
  </section>
</body>
</html>
