<?php
session_start();
if (!isset($_SESSION["logged_in"])) {
    header("Location: login.php");
    exit;
}
$requests = file("requests.txt", FILE_IGNORE_NEW_LINES);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <div class="logo">Qhowmenz Admin</div>
    <nav>
      <a href="dashboard.php">Dashboard</a>
      <a href="logout.php">Logout</a>
    </nav>
  </header>

  <section class="hero">
    <h1>Submitted Voucher Requests</h1>
  </section>

  <section style="padding: 2em;">
    <table border="1" cellpadding="10" cellspacing="0" style="width: 100%; background: white;">
      <tr><th>Name</th><th>Institution</th><th>Phone</th><th>Voucher Type</th><th>Message</th></tr>
      <?php
        foreach ($requests as $line) {
            $parts = explode("|", $line);
            echo "<tr>";
            foreach ($parts as $part) {
                echo "<td>" . htmlspecialchars($part) . "</td>";
            }
            echo "</tr>";
        }
      ?>
    </table>
  </section>
</body>
</html>
