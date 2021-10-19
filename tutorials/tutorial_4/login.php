<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tutorial 4</title>
  <link href="css/reset.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>
<body>
  <form class="login-form" method="post">
    <h1 class="title">Enter Username and Password</h1>
    <table>
      <tr>
        <td> Username : </td>
        <td> 
          <input type="text" name="username" placeholder="Enter Username">
        </td>
      </tr>
      <tr>
        <td> Password : </td>
        <td> 
          <input type="password" name="password" placeholder="Enter Password">
        </td>
      </tr>
      <tr>
        <td colspan=2>
          <input type="checkbox" name="chkbox">
          <label>Stay Sign in</label>
        </td>
      </tr>
      <tr>
        <td colspan=2> 
          <input type="submit" value="Login" name="login" class="btn">
        </td>
      </tr>
    </table>
  </form>   
</body>
</html>
<?php
    error_reporting(1);
    if (isset($_POST['login'])) {
        $user = $_POST['username'];
        $pwd = $_POST['password'];
        if ($user=="MaMa" && $pwd=="mama1234") {
            $_SESSION['luser'] = $user;
            $_SESSION['start'] = time();
            $_SESSION['expire'] = $_SESSION['start']+(30*60);
            header('Location:home.php');
        } else {
            echo "Please Enter Username and Password Again!!";
        }
    }
    if ($_POST['chkbox'] == true) {
      setcookie("user",$_POST['username'],time()+60*60);
      setcookie("pwd",$_POST['password'],time()+60*60);
    }
?>