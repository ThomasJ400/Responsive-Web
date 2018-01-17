<!DOCTYPE html>
<head>
<title>Slieve Bloom</title>

<style type="text/css">
	body {
		font-family: Calibri, sans-serif;
		font-size:1.1em;
		text-align:center;
		margin:0px;
		background-color: #e8fbd2;
	}
	#container {
		width: 70%;
	 	margin: 0px auto;
	  	background-color: #F2EFDF;
	}
	fieldset { 
		border:solid 3px #AF9D88;
		text-align:left;
	}
	header {background-color: #05572d; /*dark green ik*/
		margin: 0px;
		height: 5em;
	}
	header img{float: left;
		margin: 0.7em 0.5em;
	}
	main{padding: 10px;}  
</style> 

</head>
 
<body>
<div id="container">
	<header>
		<a href="http://www.slievebloom.ie/"><img src="images/logo.png" alt="Slieve Bloom Website"></a>
	</header>
	<main>
		<h1>Slieve Bloom Weekend Break </h1>
		<h3>Thank you for Entering our Competition</h3>
		<fieldset>
		<?php
			$name = $_POST['name'];
			$email = $_POST['email'];
			$activity = $_POST['activity'];
		?>

		<p> Your name is: <strong><?php echo "$name";?></strong>.</p>
		<p> Your email is: <strong><?php echo "$email";?></strong>.</p>
		<p> Your chosen activity is: <strong><?php echo "$activity";?></strong>.</p>
		</fieldset>
	</main>
</div>
</body>
</html>