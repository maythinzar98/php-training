<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tutorial 1</title>
  <link href="css/reset.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
  <table class="chess-table">
  <?php
    $num=8;
    for ($row=1;$row<=$num;$row++) {
      echo "<tr>";
      for ($col=1;$col<=$num;$col++) {
        $total=$row+$col;
        if ($total%2) {
          echo "<td class=black-cell></td>";
        } 
        else {
          echo "<td class=white-cell></td>";
        }
      }
      echo "</tr>";
    }   
  ?>
  </table>
</body>

</html>