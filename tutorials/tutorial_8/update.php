<?php
    error_reporting(1);
    include("connection.php");
    mysqli_select_db($conn,"mydb");
    $id=$_POST['updateid'];
    $sql="select * from 'student' where Student_id=$id";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($relsult);
    $name=$row['Name'];
    $dob=$row['Date_of_Birth'];
    $email=$row['Email'];
    $mobile=$row['Mobile'];
    $address=$row['Address'];                  
    if (isset($_POST['add'])) {
        $name=$_POST['name'];
        $dob=$_POST['dob'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $address=$_POST['address'];
        $sql="update 'student' set Student_id=$id,Name=$name,Date_of_Birth=$dob,Email=$email,
                Mobile=$mobile,Address=$address";
        $result=mysqli_query($conn,$sql);
        if($result){
          echo "Updated successfully";
        }else{
          die($conn->connect_error);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatitble" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add New Student</title>
  <link href="css/reset.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <h1 class="title">Add New Student Information</h1>
    <from method="post" class="stu-form">
      <label for="name">Name</label><br>
      <input type="text" class="txtbox" name="name" value=<?php echo $name;?>><br>
      <label for="dob">Date of Birth</label><br>
      <input type="date" class="txtbox" name="dob" value=<?php echo $dob;?>><br>
      <label for="name">Email Address</label><br>
      <input type="email" class="txtbox" name="email" value=<?php echo $email;?>><br>
      <label for="mobile">Phone Number</label><br>
      <input type="text" class="txtbox" name="mobile" value=<?php echo $mobile;?>><br>
      <label for="address">Address</label><br>
      <input type="text" class="txtbox" name="address" value=<?php echo $address;?>><br>
      <input type="submit" name="update" class="add-btn" value="Update">
      <a href="index.php"><input type="submit" name="cancel" class="cancel-btn" value="Cancel"></a>
    </form>
  </div>
</body>
</html>