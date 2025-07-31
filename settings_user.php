<?php
// settings_user.php — Form 8: User Settings
?>

<!DOCTYPE html>
<html>
<head>
  <title>Settings - Jayvee Hall of Mansion</title>
  <style>
    body { font-family: Arial; background: #f0f0f0; }
    .container { max-width: 600px; margin: auto; background: #fff; padding: 25px; box-shadow: 0 0 8px #ccc; }
    input { width: 100%; padding: 10px; margin: 10px 0; }
  </style>
</head>
<body>

<div class="container">
  <h2>My Profile</h2>

  <form>
    <label>Full Name:</label>
    <input type="text" value="Juan Dela Cruz" readonly>

    <label>Birthdate:</label>
    <input type="date" value="2000-01-01" readonly>

    <label>Status:</label>
    <input type="text" value="Single" readonly>

    <label>Sex:</label>
    <input type="text" value="Male" readonly>

    <label>Address:</label>
    <input type="text" value="Malungon, Sarangani" readonly>

    <label>Contact:</label>
    <input type="text" value="09464766208" readonly>

    <label>Email:</label>
    <input type="email" value="jayveecaringal07@gmail.com" readonly>
  </form>

  <a href="dashboard_user.php"><button>BACK</button></a>
</div>

</body>
</html>
