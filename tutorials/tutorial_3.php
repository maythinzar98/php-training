<body>
    <h1 align="center">Age Calculator</h1>
    <?php
        error_reporting(1);
    if (isset($_POST['btn'])) {
        $dob=$_POST['birthday'];
        $today=date("Y-m-d");
        $age=date_diff(date_create($dob),date_create($today));
    }
    ?>
    <form method="POST">
        <table style="margin:auto">
        <tr>
            <td>Choose Your Birthday:</td>
            <td><input type="date" id="birthday" name="birthday"></td>
        </tr>
        <tr>
            <td>Your Age is: </td>
            <td>
                <?php 
                    error_reporting(1);
                    echo $age->y.'years '.$age->m.'months '.$age->d.'days';
                ?>
            </td>
        </tr>
        <tr>
            <td><input type="submit" name="btn" value="Calculate"></td>
        </tr>   
        </table>
    </form>
</body>