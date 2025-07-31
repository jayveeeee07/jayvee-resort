<?php
// index.php — Form 1: Welcome Page
?>

<!DOCTYPE html>
<html>
<head>
  <title>Welcome to Jayvee Hall of Mansion</title>
  <style>
    body { font-family: Arial, sans-serif; background: #f4f4f4; padding: 20px; }
    .container { max-width: 800px; margin: auto; background: #fff; padding: 30px; box-shadow: 0 0 10px #aaa; }
    h1, h2, h3 { color: #2e8b57; }
    textarea { width: 100%; height: 100px; }
    button { padding: 10px 20px; background-color: #2e8b57; color: #fff; border: none; cursor: pointer; }
    button:hover { background-color: #246b46; }
    label { display: block; margin: 10px 0 5px; }
  </style>
</head>
<body>

<div class="container">
  <h1>WELCOME TO JAYVEE HALL OF MANSION</h1>

  <p>
    Nestled in the heart of Malungon, Sarangani, Jayvee Hall of Mansion offers guests a relaxing stay surrounded by lush scenery and genuine hospitality. Whether you're visiting for leisure or events, we provide a sanctuary where comfort meets tradition. Our rooms are thoughtfully designed for rest and tranquility, while our staff ensures personalized service with every stay.
  </p>

  <h2>Our Mission</h2>
  <p>
    To deliver exceptional hospitality through service that comes from the heart, fostering a sense of community and belonging.
  </p>

  <h2>Our Vision</h2>
  <p>
    To be the most preferred resort in Sarangani by setting new standards in comfort, sustainability, and local cultural experience.
  </p>

  <h3>Disclaimer</h3>
  <p>
    By accessing our resort system, you agree to the terms and policies outlined. Bookings are subject to availability. Misuse or fraudulent activity will be reported and may result in a ban.
  </p>

  <form action="login_customer.php" method="GET" onsubmit="return validateCheck();">
    <label>
      <input type="checkbox" id="agree" required>
      I agree to the Terms and Conditions.
    </label>
    <br>
    <button type="submit">Get Started</button>
  </form>
</div>

<script>
function validateCheck() {
  return document.getElementById('agree').checked;
}
</script>

</body>
</html>
