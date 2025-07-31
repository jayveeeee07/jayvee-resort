<?php
// inbox_user.php — Form 7: User Inbox
?>

<!DOCTYPE html>
<html>
<head>
  <title>Inbox - Jayvee Hall of Mansion</title>
  <style>
    body { font-family: Arial; background: #f7f7f7; }
    .container { max-width: 700px; margin: auto; background: #fff; padding: 30px; box-shadow: 0 0 8px #ccc; }
    .message { border-bottom: 1px solid #ddd; padding: 10px 0; }
    .message:last-child { border: none; }
  </style>
</head>
<body>

<div class="container">
  <h2>Inbox</h2>

  <?php
  // Static example messages — replace with database content
  $messages = [
    "Your booking has been approved. See you soon!",
    "Please resend your payment proof. File was not readable.",
    "Thank you for staying with us!"
  ];

  foreach ($messages as $msg) {
    echo "<div class='message'><p>$msg</p></div>";
  }
  ?>

  <a href="dashboard_user.php"><button>BACK</button></a>
</div>

</body>
</html>
