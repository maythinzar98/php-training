<?php
    include("connection.php");
    mysqli_select_db($conn,"mydb");
    if (isset($_POST['deleteid'])) {
        $id=$_POST['deleteid'];
        $sql="delete from 'student' where Student_id=$id";
        $result=mysqli_query($conn,$sql);
        if($result){
          echo "Deleted successfully";
        }else{
          die($conn->connect_error);
        }
    }
?>