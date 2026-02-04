  <?php
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

    $sql = "SELECT * FROM game WHERE id =  '" . $_GET['id'] . "'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $name = $row['name'];
    $price = $row['price'];
    $image = $row['image'];
    $link = $row['link'];

  ?>
<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="../images/icon.png">
  <link rel="stylesheet" href="../css/page.css">
  <title>Game Details</title>
</head>

<body>
  <div id="background"></div>

  <nav>
    <ul>
  <li><a href="../index.html">Back to Home</a></li>
    </ul>
  </nav>

  <main>
    <div >
      <h1><?php echo $name; ?></h1>
      <div>
        <div>
          <img src="<?php echo $image; ?>" alt="">
        </div>
        <div >
          <div >
            <h2>Price:</h2>
            <p><?php echo $price; ?></p>
          </div>
          <div>
            <a href="<?php echo $link; ?>" target="_blank" >Buy Now</a>
          </div>
        </div>
      </div>
    </div>
  </main>

  <footer>
    Gaming Deals &copy; 2025
  </footer>
</body>

</html>
