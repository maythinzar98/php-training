<html>
    <head>
    </head>
    <table style="margin:auto; border:1px solid #000" cellspacing="0px" cellpadding="0px">
    <?php
        for ($row=1;$row<=8;$row++) {
            echo "<tr>";
            for ($col=1;$col<=8;$col++) {
            $total=$row+$col;
            if ($total%2) {
                echo "<td width=50px height=50px bgcolor=#000000></td>";
            }
            else
            {
                echo "<td width=50px height=50px bgcolor=#ffffff></td>";
            }
            }
            echo "</tr>";
        }
    ?>
</table>
</html>