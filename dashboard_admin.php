<?php
// dashboard_admin.php — Form 10: Admin Panel
?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin Panel - Jayvee Hall of Mansion</title>
  <style>
    body { font-family: Arial; background: #f1f1f1; }
    .container { max-width: 900px; margin: auto; background: #fff; padding: 20px; box-shadow: 0 0 8px #bbb; }
    table { width: 100%; border-collapse: collapse; margin-top: 20px; }
    th, td { border: 1px solid #ccc; padding: 10px; text-align: center; }
    th { background-color: #2e8b57; color: white; }
    button { padding: 5px 10px; background: #2e8b57; color: white; border: none; cursor: pointer; }
    .add-btn { float: right; margin-bottom: 10px; }
  </style>
</head>
<body>

<div class="container">
  <h2>Admin Panel - Manage Rooms</h2>

  <button class="add-btn" onclick="window.location.href='add_room.php'">[ ADD ROOM ]</button>

  <table>
    <tr>
      <th>Room Picture</th>
      <th>Room Number</th>
      <th>Room Details</th>
      <th>Price</th>
      <th>Actions</th>
    </tr>

    <?php
    // Example static data — replace with DB
    for ($i = 1; $i <= 5; $i++) {
      echo "
      <tr>
        <td><img src='assets/images/room$i.jpg' width='100'></td>
        <td>00$i</td>
        <td>Deluxe Room with view</td>
        <td>₱" . (1500 + $i * 100) . "</td>
        <td>
          <button onclick=\"location.href='edit_room.php?id=$i'\">[EDIT]</button>
          <button onclick=\"location.href='delete_room.php?id=$i'\">[DELETE]</button>
        </td>
      </tr>";
    }
    ?>
  </table>
</div>

</body>
</html>
