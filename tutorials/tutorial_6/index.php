<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Tutorial 5 </title>
  <link href="css/reset.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
  <div class="upload-form">
    <form action="index.php" method="POST" enctype="multipart/form-data">
        <h1 class="title">Upload Image</h1>
        <input type="text" class="folder" name="upfolder" placeholder="Enter New Folder Name...">
        <br><br>
        <input type="file" class="file" name="upfile">
        <br><br>
        <input type="submit" class="btn" value="Upload" name="btnUpload">
    </form>
  </div>
</body>

</html>

<?php
// Credit to: https://www.php.net/manual/en/features.file-upload.php
try {
  if (!isset($_FILES['upfile']['error']) || is_array($_FILES['upfile']['error'])) {
    throw new RuntimeException('Invalid parameters.');
  }
  switch ($_FILES['upfile']['error']) {
    case UPLOAD_ERR_OK:
      break;
    case UPLOAD_ERR_NO_FILE:
      throw new RuntimeException('No file sent.');
    case UPLOAD_ERR_INI_SIZE:
    case UPLOAD_ERR_FORM_SIZE:
      throw new RuntimeException('Exceeded filesize limit.');
    default:
      throw new RuntimeException('Unknown errors.');
  }
  if ($_FILES['upfile']['size'] > 2000000) {
    throw new RuntimeException('Exceeded filesize limit.');
  }
  $finfo = new finfo(FILEINFO_MIME_TYPE);
  if (false === $ext = array_search(
    $finfo->file($_FILES['upfile']['tmp_name']),
    array(
      'jpg' => 'image/jpeg',
      'png' => 'image/png',
      'gif' => 'image/gif',
    ),
    true
  )) {
    throw new RuntimeException('Invalid file format.');
  }

  $uploadPath = './uploads/';
  $userDefinedFolder = $_POST['upfolder'];
  if (!empty($userDefinedFolder)) {
    $dest_path = sprintf($uploadPath . '%s', $userDefinedFolder);
    if (!file_exists($dest_path)) {
      if (!mkdir($dest_path, 0777, true)) {
        throw new RuntimeException('Cannot create a directory');
      }
    }
  } else {
    throw new RuntimeException('Folder name cannot be empty');
  }
  if (!move_uploaded_file(
    $_FILES['upfile']['tmp_name'],
    sprintf(
      $uploadPath . '%s/%s.%s',
      $userDefinedFolder,
      sha1_file($_FILES['upfile']['tmp_name']),
      $ext
    )
  )) {
    throw new RuntimeException('Failed to move uploaded file.');
  }

  echo 'File is uploaded successfully.';
} catch (RuntimeException $e) {

  echo $e->getMessage();
}
?>