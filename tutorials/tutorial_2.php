<body align="center">
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