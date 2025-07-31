<?php
// register.php — Form 3: Customer Sign-Up
?>

<!DOCTYPE html>
<html>
<head>
  <title>Register - Jayvee Hall of Mansion</title>
  <style>
    body { font-family: Arial; background-color: #f4f4f4; }
    .container { max-width: 600px; margin: auto; background: white; padding: 30px; box-shadow: 0 0 10px #aaa; }
    input, select { width: 100%; padding: 10px; margin: 10px 0; box-sizing: border-box; }
    button { padding: 10px 20px; background-color: #2e8b57; color: #fff; border: none; cursor: pointer; }
    button:hover { background-color: #246b46; }
  </style>
</head>
<body>

<div class="container">
  <h2>Create Customer Account</h2>
  <form method="POST" action="process_register.php">
    <label>Full Name:</label>
    <input type="text" name="fullname" required>

    <label>Birthdate:</label>
    <input type="date" name="birthdate" required>

    <label>Status:</label>
    <select name="status" required>
      <option value="">Select Status</option>
      <option value="Single">Single</option>
      <option value="Married">Married</option>
    </select>

    <label>Sex:</label>
    <select name="sex" required>
      <option value="">Select Sex</option>
      <option value="Male">Male</option>
      <option value="Female">Female</option>
    </select>

    <label>Address:</label>
    <input type="text" name="address" required>

    <label>Contact Number:</label>
    <input type="text" name="contact" required>

    <label>Email Address:</label>
    <input type="email" name="email" required>

    <label>OTP Code:</label>
    <input type="text" name="otp" required>

    <button type="submit">CREATE ACCOUNT</button>
    <a href="login_customer.php"><button type="button">BACK</button></a>
  </form>
</div>

</body>
</html>
