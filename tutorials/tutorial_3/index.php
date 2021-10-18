<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tutorial 3</title>
  <link href="css/reset.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
  <h1 class="title">Age Calculator</h1>
  <?php
    error_reporting(1);
    if (isset($_POST['btn'])) {
        $dob=$_POST['birthday'];
        $today=date("Y-m-d");
        $age=date_diff(date_create($dob), date_create($today));
    }
  ?>
  <form method="POST">
    <table class="table">
      <tr>
          <td class="text">
              Choose Your Birthday:
          </td>
          <td>
              <input type="date" id="birthday" name="birthday">
          </td>
      </tr>
      <tr>
          <td class="text">
              Your Age is: 
          </td>
          <td>
            <?php
              error_reporting(1);
              echo $age->y.'years '.$age->m.'months '.$age->d.'days';
            ?>
          </td>
      </tr>
      <tr>
          <td class="btn-data" colspan=2>
              <input class="btn" type="submit" name="btn" value="Calculate" >
          </td>
      </tr>
    </table>
  </form>
</body>

</html>