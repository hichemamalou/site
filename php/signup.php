<?php
session_start();
$servername = "sql100.infinityfree.com";
$username = "if0_39964980";
$password = "hichemamalou";
$dbname = "if0_39964980_gamingdeals";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $submitSignup = false;
  $name = $_POST['name'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM user WHERE name =  '" . $name . "'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) == 0) {
    $sql = "INSERT INTO user (name, password) VALUES ('$name', '$password')";
    mysqli_query($conn, $sql);
    $submitSignup = true;
    $_SESSION['user_name'] = $name;
  } else {
    $submitSignup = false;
  }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="../images/icon.png">
  <link rel="stylesheet" href="../css/sign.css">
  <title>Sign Up</title>
</head>

<body>
  <div id="background"></div>

  <nav>
    <ul>
      <li><a href="../index.php">Back to Home</a></li>
    </ul>
  </nav>

  <main>
    <div>
      <form action="" method="post">
        <h1>Sign up</h1>
        <p id="errorSignup"></p>
        <div class="form">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" required>
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" required>
        </div>
        <button type="submit">Sign up</button>
      </form>
    </div>
  </main>

  <footer>
    Gaming Deals &copy; 2025
  </footer>
  <script src="../JS/submit.js"></script>
  <?php if (isset($_POST['name'])) { ?>
    <script>
      submitFormSignup(<?php echo $submitSignup ? 'true' : 'false'; ?>, '<?php echo $name; ?>');
    </script>
  <?php } ?>
</body>

</html>