<?php

	//use vendor\khanamiryan\qrcode\lib\QRReader;
	//use khanamiryan\qrcode\lib\QRCode\QRCodeReader;

	class Decode extends QrCodeReader {
		$qrcode = new QrReader('uploads/qr-code.png'); //
		//$text = $qr_code->text();
		$imageData = $qr_code->decode();

		public function verifyQR() {
			if(isset($_POST["submit"]) && $imageData) {
				return $qr_code->getResult();
			} else {
				return "Invalid qrcode result to show.";
			}
		}
		//var_dump($text);
	}

	$qr_decode = new Decode();
	$result = $qr_decode.verifyQR();
	//var_dump($result);
	//var_dump($text);
				
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/styles.css"/>
	<script type="text/javascript" src="js/scripts.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link type="text/javascript" src="js/script.js">
</head>
<body class="bg">
	<div class="container">
		<div class="row">
			<div class="content">
				
			</div>
		</div>
		<div class="row">
			<div id="decode">
				<h3>QrCode content:</h3>
				<p><?php echo $result ?></p>
			</div>
		</div>
	</div>
</body>
</html>
