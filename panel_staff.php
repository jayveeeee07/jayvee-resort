<?php
// panel_staff.php — Form 11: Staff Panel
?>

<!DOCTYPE html>
<html>
<head>
  <title>Staff Panel - Jayvee Hall of Mansion</title>
  <style>
    body { font-family: Arial; background: #f8f8f8; }
    .container { max-width: 1000px; margin: auto; background: #fff; padding: 20px; box-shadow: 0 0 8px #ccc; }
    h2 { color: #2e8b57; }
    table { width: 100%; border-collapse: collapse; margin-bottom: 30px; }
    th, td { border: 1px solid #ccc; padding: 10px; text-align: center; }
    th { background: #2e8b57; color: #fff; }
    button { padding: 5px 10px; border: none; color: white; cursor: pointer; }
    .approve { background: #28a745; }
    .deny { background: #dc3545; }
    .send { background: #007bff; }
  </style>
</head>
<body>

<div class="container">
  <h2>Booking Requests</h2>
  <table>
    <tr>
      <th>Name</th>
      <th>Room Number</th>
      <th>Total Amount</th>
      <th>Action</th>
    </tr>
    <?php
    // Example booking data
    for ($i = 1; $i <= 3; $i++) {
      echo "
      <tr>
        <td>Customer $i</td>
        <td>00$i</td>
        <td>₱" . (2000 + $i * 100) . "</td>
        <td>
          <button class='approve'>APPROVE</button>
          <button class='deny'>DENY</button>
        </td>
      </tr>";
    }
    ?>
  </table>

  <h2>Payments Received</h2>
  <table>
    <tr>
      <th>Customer</th>
      <th>Room</th>
      <th>Amount</th>
      <th>Method</th>
      <th>Proof</th>
    </tr>
    <?php
    for ($i = 1; $i <= 3; $i++) {
      echo "
      <tr>
        <td>Customer $i</td>
        <td>00$i</td>
        <td>₱" . (2000 + $i * 100) . "</td>
        <td>Gcash</td>
        <td><a href='#'>View</a></td>
      </tr>";
    }
    ?>
  </table>

  <h2>Send Message to Customer</h2>
  <form method="POST" action="send_message.php">
    <select name="customer">
      <option>Customer 1</option>
      <option>Customer 2</option>
      <option>Customer 3</option>
    </select>
    <br><br>
    <textarea name="message" rows="4" cols="50" placeholder="Type your message..."></textarea><br><br>
    <button class="send" type="submit">SEND</button>
  </form>

  <h2>Customer Personal Details</h2>
  <table>
    <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Contact</th>
      <th>Status</th>
    </tr>
    <?php
    for ($i = 1; $i <= 3; $i++) {
      echo "
      <tr>
        <td>Customer $i</td>
        <td>customer$i@gmail.com</td>
        <td>0912345678$i</td>
        <td>Single</td>
      </tr>";
    }
    ?>
  </table>

</div>

</body>
</html>
