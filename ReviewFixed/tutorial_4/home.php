<?php
session_start();
if (!isset($_SESSION['luser'])) {
    echo "Please Login Again!";
    echo "Click <a href='login.php'>here </a> to Login";
} else {
    $now = time();
    if ($now > $_SESSION['expire']) {
        session_destroy();
        echo "Your session has expired !";
        echo "Click <a href='login.php'>here </a> to Login again";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page</title>
  <link href="css/reset.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
  <h1 class="title">
    Welcome <?php echo $_SESSION['luser']; ?> from Home Page
  </h1>
  <?php
  echo "<a href='logout.php'>Logout</a>";
  ?>
</body>

</html>