<?php
    include ("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tutorial 8</title>
  <link href="css/reset.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>
<body>
  <div class="wrap">
    <div class="container">
      <h1 class="title">Student Information</h1>
      <a href="insert.php" class="addstu-btn">Add Student</a>
      <table class="display-table">
        <thead>
          <th>Student ID</th>
          <th>Name</th>
          <th>Date of Birth</th>
          <th>Email</th>
          <th>Mobile</th>
          <th>Address</th>
          <th>Action</th>
        </thead>
        <tbody>
          <?php
              mysqli_select_db($conn,"mydb");
              $sql="select * from 'student'";
              $relsult=mysqli_query($conn,$sql);
              if ($relsult) {
                  while (mysqli_fetch_assoc($relsult)) {
                      $id=$row['Student_id'];
                      $name=$row['Name'];
                      $dob=$row['Date_of_Birth'];
                      $email=$row['Email'];
                      $mobile=$row['Mobile'];
                      $address=$row['Address'];
                      echo '<tr>
                              <td>'.$id.'</td>
                              <td>'.$name.'</td>
                              <td>'.$dob.'</td>
                              <td>'.$email.'</td>
                              <td>'.$mobile.'</td>
                              <td>'.$address.'</td>
                              <td><a href="update.php?updateid='.$id.'" class="edit-btn">Edit</a>
                                  <a href="delete.php?deleteid='.$id.'" class="delete-btn">Delete</a></td>
                              </tr>';
                  }
              }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>