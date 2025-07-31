<?php
// login_customer.php — Form 2.1: Customer Login
?>

<!DOCTYPE html>
<html>
<head>
  <title>Customer Login - Jayvee Hall of Mansion</title>
  <style>
    body { font-family: Arial; background-color: #f4f4f4; }
    .container { max-width: 400px; margin: 60px auto; background: #fff; padding: 20px; box-shadow: 0 0 8px #aaa; }
    input[type=text], input[type=password] {
      width: 100%; padding: 10px; margin: 8px 0; box-sizing: border-box;
    }
    button { width: 100%; padding: 10px; background: #2e8b57; color: white; border: none; }
    button:hover { background: #246b46; }
    .links { margin-top: 15px; text-align: center; }
    a { text-decoration: none; color: #2e8b57; }
  </style>
</head>
<body>

<div class="container">
  <h2>Customer Login</h2>
  <form method="POST" action="process_login.php">
    <label>Username:</label>
    <input type="text" name="username" required>
    
    <label>Password:</label>
    <input type="password" name="password" required>
    
    <button type="submit">LOGIN</button>
  </form>

  <div class="links">
    <p><a href="register.php">REGISTER</a></p>
    <p><a href="login_staff.php">ADMIN / STAFF PANEL</a></p>
  </div>
</div>

</body>
</html>
