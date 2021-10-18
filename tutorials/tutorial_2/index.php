<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tutorial 2</title>
  <link href="css/reset.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
  <?php
    $num=6;
    for ($i=1;$i<=$num;$i++) {
        for ($j=1;$j<=(2*$num)-1;$j++) {
            if ($j>=$num-($i-1) && $j<=$num+($i-1)) {
                echo " * ";
            }
            else{
                echo "&nbsp;&nbsp;";
            }
        }
        echo "<br>";
    }
    for ($i=$num-1;$i>=1;$i--) {
        for ($j=1;$j<=(2*$num)-1;$j++) {
            if ($j>=$num-($i-1) && $j<=$num+($i-1)) {
                echo " * ";
            }
            else{
                echo "&nbsp;&nbsp;";
            }
        }
        echo "<br>";
    }
  ?>
</body>

</html>