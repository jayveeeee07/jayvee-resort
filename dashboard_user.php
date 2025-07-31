<?php
// dashboard_user.php — Form 4: User Dashboard
?>

<!DOCTYPE html>
<html>
<head>
  <title>Dashboard - Jayvee Hall of Mansion</title>
  <style>
    body { font-family: Arial; background-color: #eef2f3; margin: 0; padding: 0; }
    .header { background: #2e8b57; color: white; padding: 15px; text-align: center; }
    .nav { background: #444; color: white; padding: 10px; text-align: center; }
    .nav a { color: white; margin: 0 15px; text-decoration: none; }
    .container { padding: 20px; }
    .room-card {
      background: white; padding: 15px; margin: 10px 0;
      box-shadow: 0 0 8px #ccc; border-radius: 5px;
    }
    .room-card img { width: 100%; max-height: 200px; object-fit: cover; }
    .book-btn { background: #2e8b57; color: white; padding: 10px; border: none; margin-top: 10px; cursor: pointer; }
  </style>
</head>
<body>

<div class="header">
  <h2>Welcome to Jayvee Hall of Mansion</h2>
</div>

<div class="nav">
  <a href="inbox_user.php">Message</a>
  <a href="settings_user.php">Setting</a>
  <a href="logout.php">Logout</a>
  <a href="customer_service.php">Customer Service</a>
</div>

<div class="container">

  <?php
  // Example static room data (you will fetch from DB later)
  for ($i = 1; $i <= 5; $i++) {
    echo "
    <div class='room-card'>
      <img src='assets/images/room$i.jpg' alt='Room $i'>
      <h3>Room Number: 00$i</h3>
      <p>Room Details: A cozy deluxe room with garden view and complete amenities.</p>
      <p>Price: ₱" . (1500 + $i * 100) . "</p>
      <form action='booking.php' method='POST'>
        <input type='hidden' name='room_number' value='00$i'>
        <button class='book-btn' type='submit'>BOOK</button>
      </form>
    </div>
    ";
  }
  ?>

</div>

</body>
</html>
