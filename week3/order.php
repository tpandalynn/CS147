<!DOCTYPE html>
<html>
	<head>
		<title>Maya Online Books</title>
		<link rel="apple-touch-icon" href="appicon.png" />
		<link rel="apple-touch-startup-image" href="startup.png">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta name="viewport" content="width=device-width, user-scalable=no" />
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="chosen/chosen.css" />
		<script src="chosen/chosen.jquery.js" type="text/javascript"></script>

	</head>

	<body>
	<?php
	echo "test";
	?>
	
		<div class="banner"></div>
<<<<<<< HEAD
						<table>
				<?php
include("config.php");
include("menu.php");

?>
</table>
=======
			<?php
				include("menu.php");
			?>
>>>>>>> b3dacea09ff430bf4988b594f3098ed8216df35c
		<div class="orderarea">
		<!-- This is where we'll put our form -->


<table>

		<form action="submit.php" method="post">
<label>Name: <input class="forminput" type="text" name="name" /></label>
<label>Email: <input class="forminput" type="text" name="email" autocapitalize="off" /></label>
<select name="book">
<option value=””></option>
</select>
<input type="submit" class="medium red awesome" value="Order &raquo;" />
</form>			

<table/>
		
		</div>
			

  <script type="text/javascript">
  $(".chzn-select").chosen();
  </script> 
  <script type="text/javascript">
		$("a").click(function (event) {
		    event.preventDefault();
		    window.location = $(this).attr("href");
		});
  </script>
 
	</body>
</html>