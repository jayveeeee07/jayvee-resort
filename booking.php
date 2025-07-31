<?php
// booking.php — Form 5: Booking Form
$room_number = $_POST['room_number'] ?? '001';
?>

<!DOCTYPE html>
<html>
<head>
  <title>Booking - Jayvee Hall of Mansion</title>
  <style>
    body { font-family: Arial; background: #f8f8f8; }
    .container { max-width: 500px; margin: auto; background: white; padding: 30px; box-shadow: 0 0 10px #ccc; }
    input, select { width: 100%; padding: 10px; margin: 10px 0; }
    button { padding: 10px 20px; background: #2e8b57; color: white; border: none; }
    button:hover { background: #246b46; }
  </style>
</head>
<body>

<div class="container">
  <h2>Book Room #<?php echo htmlspecialchars($room_number); ?></h2>
  <form method="POST" action="payment.php">
    <input type="hidden" name="room_number" value="<?php echo htmlspecialchars($room_number); ?>">

    <label>Full Name:</label>
    <input type="text" name="fullname" required>

    <label>No. of Person:</label>
    <input type="number" name="person" required min="1">

    <label>Date In-Out:</label>
    <input type="text" name="date_range" placeholder="mm/dd/yyyy - mm/dd/yyyy" required>

    <label>Season:</label>
    <select name="season" required>
      <option value="AM">AM</option>
      <option value="PM">PM</option>
    </select>

    <button type="submit">SUBMIT</button>
    <a href="dashboard_user.php"><button type="button">CANCEL</button></a>
  </form>
</div>

</body>
</html>
