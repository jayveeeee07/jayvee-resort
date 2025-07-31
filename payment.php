<?php
// payment.php — Form 6: Payment Details
$room_number = $_POST['room_number'] ?? '';
$fullname = $_POST['fullname'] ?? '';
$total_amount = 2000; // You can dynamically calculate this later
?>

<!DOCTYPE html>
<html>
<head>
  <title>Payment - Jayvee Hall of Mansion</title>
  <style>
    body { font-family: Arial; background: #f0f0f0; }
    .container { max-width: 500px; margin: auto; background: #fff; padding: 25px; box-shadow: 0 0 10px #ccc; }
    input, select { width: 100%; padding: 10px; margin: 10px 0; }
    button { padding: 10px 20px; background-color: #2e8b57; color: #fff; border: none; cursor: pointer; }
    button:hover { background-color: #246b46; }
  </style>
</head>
<body>

<div class="container">
  <h2>Payment Details</h2>
  <p><strong>Total Amount:</strong> ₱<?php echo number_format($total_amount, 2); ?></p>

  <form method="POST" action="submit_payment.php" enctype="multipart/form-data">
    <input type="hidden" name="fullname" value="<?php echo htmlspecialchars($fullname); ?>">
    <input type="hidden" name="room_number" value="<?php echo htmlspecialchars($room_number); ?>">

    <label>Payment Method:</label>
    <select name="method" required>
      <option value="">Select</option>
      <option value="Gcash">Gcash</option>
      <option value="Bank Transfer">Bank Transfer</option>
      <option value="Cash on Arrival">Cash on Arrival</option>
    </select>

    <label>Proof of Payment:</label>
    <input type="file" name="proof" accept="image/*" required>

    <label>Reference Number (optional):</label>
    <input type="text" name="ref_number">

    <button type="submit">SUBMIT</button>
    <a href="dashboard_user.php"><button type="button">CANCEL</button></a>
  </form>
</div>

</body>
</html>
