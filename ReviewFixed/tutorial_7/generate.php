<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Generate QR Code</title>
  <link href="css/reset.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
  <?php
			error_reporting(1);
			include 'phpqrcode/qrlib.php';
			$tempDir = "QRcodes/";
			$codeContents = $_POST['text'];
			$fileName = $codeContents . md5($codeContents) . '.png';

			$pngAbsoluteFilePath = $tempDir . $fileName;
			$urlRelativeFilePath = $tempDir . $fileName;

			// generating
			if (!file_exists($pngAbsoluteFilePath)) {
					QRcode::png($codeContents, $pngAbsoluteFilePath);
					echo '<br>File generated!';
					echo '<hr>';

					echo '<img src="' . $urlRelativeFilePath . '">';

					echo '<br>Generated QR image was saved: ' . $pngAbsoluteFilePath;
					echo '<hr>';
			} else {
					 echo '<br>File already generated! We can use this cached file to speed up site on common codes!';
					 echo '<hr>';
			}
			echo '<br><a href="index.php">Generate More...</a>';
		?>
	</body>

</html>
