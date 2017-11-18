<!DOCTYPE html>
<html>
<!--
There are probably many improvements that could be made,
but it's a start on the frontend at least.
-->
<head>  <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../../../favicon.ico">
        <link rel="stylesheet" type="text/css" href="style/feedback.css">
        <title>QuizRank Feedback</title>
</head>
<body>
<div class="container">
	<div class="row">
			<h1>Contact us</h1>
	</div>
	<div class="row">
			<h4 style="text-align:center">We'd love to hear from you!</h4>
	</div>
  <form method="post" action="">
	<div class="row input-container">
			<div class="col-xs-12">
				<div class="styled-input wide">
					<input type="text" name="name" />
					<label>Name</label>
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="styled-input">
					<input type="text" name="email" required />
					<label>Email</label>
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="styled-input" style="float:right;">
					<input type="text" name="phone" />
					<label>Phone Number</label>
				</div>
			</div>
			<div class="col-xs-12">
				<div class="styled-input wide">
					<textarea name="message" required></textarea>
					<label>Message</label>
				</div>
			</div>
			<div class="col-xs-12">
				<div class="btn-lrg submit-btn"><input type="submit" value="send"></div>
			</div>
	</div>
</form>


<?php
if(isset($_POST['send']))
{
  $myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
  $name = $_POST['name'];
  fwrite($myfile, $name);
  $visitor_email = $_POST['email'];
  fwrite($myfile, $visitor_email);
  $phone= $_POST['phone'];
  fwrite($myfile, $phone);
  $message = $_POST['message'];
  fwrite($myfile, $message);
  fclose($myfile);
}
?>


</div>
</body>
</html>
