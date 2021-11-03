<?php
    error_reporting(1);
    include 'connection.php';
    mysqli_select_db($conn,"mydb");
    if (isset($_POST['add'])) {
        $name=$_POST['name'];
        $dob=$_POST['dob'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $address=$_POST['address'];
        $sql="insert into 'student'(Student_id,Name,Date_of_Birth,Email,Mobile,Address)
                values(' ','$name','$dob','$email','$mobile','$address')";
        $result=mysqli_query($conn,$sql);
        if($result){
          echo "Your information uploaded successfully";
        }else{
          die($conn->connect_error);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add New Student</title>
  <link href="css/reset.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <h1 class="title">Add New Student</h1>
    <from method="post" class="stu-form">
      <label for="name">Name</label><br>
      <input type="text" class="txtbox" name="name" placeholder="Enter Student Name..."><br>
      <label for="dob">Date of Birth</label><br>
      <input type="date" class="txtbox" name="dob" placeholder="Enter Date of Birth..."><br>
      <label for="email">Email Address</label><br>
      <input type="email" class="txtbox" name="email" placeholder="Enter Email Address..."><br>
      <label for="mobile">Phone Number</label><br>
      <input type="text" class="txtbox" name="mobile" placeholder="Enter Phone Number..."><br>
      <label for="address">Address</label><br>
      <input type="text" class="txtbox" name="address" placeholder="Enter Address..."><br>
      <input type="submit" name="add" class="add-btn" value="Add">
      <a href="index.php"><input type="submit" name="cancel" class="cancel-btn" value="Cancel"></a>
    </form>
  </div>
</body>
</html>