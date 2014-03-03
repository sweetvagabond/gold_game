<?php
session_start();
if(!isset($_SESSION['total']))
		{
			$_SESSION['total'] = 0;
			$_SESSION['gold'] = 0;
			$_SESSION['place'] = '';
			$_SESSION['message'] = '';
		}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Advanced Intermediate</title>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

       <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
 
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap-theme.min.css">
	<style type="text/css">
	body {
		font-family: 'Source Sans Pro', sans-serif;
        color: #39454b;
        margin: 3%;
	}
	.farm, .cave, .house, casino{
		border: 1px solid black;
		border-radius: 5px;
		width: 220px;
		height: 200px;
		margin: 10px;
		display: inline-block;
		padding-left: 10px;
	}
	.activities{
		border: 1px solid black;
		width: 600px;
		height: 200px;
		overflow: auto;
		border-radius: 5px;
	}

	h1 {
		font-size: 18px;
	}

	h2{
		width: 100px;
		display: inline-block;
		margin: 0;
		font-size: 18px;
	}
	h2{
		margin: 0px;
	}

	h3 {
		font-size: 14px;
	}
	p{
		margin: 0px;
	}
	.gold{
		width: 50px;
		display: inline-block;
		border: 1px solid black;
		height: 30px;
		border-radius: 5px;
		padding: 2px;
	}
	</style>
</head>
<body>
	<!-- farm form -->
	<h1>Welcome to a really cheezy game. Find as much gold as you can!</h1>
	<h2>Your Gold:</h2>
	<div class="gold">
		<?php
		if(null !== $_SESSION['total'])
		{
			?>
			<h2><?=$_SESSION['total']?></h2>
			<?php
		}
			?>
	</div>
	<br>

	<div class="farm">
		<h2>Farm</h2>
		<h3>(earn 10-20 pieces of gold)</h3>
		<form action="process.php" method="post">
			<input type="hidden" name="action" value="farm">
			<input type="submit" class="btn btn-warning" value="Find Gold!">
		</form>
	</div>
	<!-- cave form -->
	<div class="cave">
		<h2>Cave</h2>
		<h3>(earn 5-10 pieces of gold)</h3>
		<form action="process.php" method="post">
			<input type="hidden" name="action" value="cave">
			<input type="submit" class="btn btn-warning" value="Find Gold!">
		</form>
	</div>
	<!-- house form -->
	<div class="farm">
		<h2>House</h2>
		<h3>(earn 2-5 pieces of gold)</h3>
		<form action="process.php" method="post">
			<input type="hidden" name="action" value="house">
			<input type="submit" class="btn btn-warning" value="Find Gold!">
		</form>
	</div>
	<!-- casino form -->
	<div class="farm">
		<h2>Casino</h2>
		<h3>(earn/lose 0-50 pieces of gold)</h3>
		<form action="process.php" method="post">
			<input type="hidden" name="action" value="casino">
			<input type="submit" class="btn btn-warning" value="Find Gold!">
		</form>
	</div>
	<!-- activity log -->
	<p>Activities:</p><br>
	<div class="activities">
		<?php
		if(isset($_SESSION['message']))
		{
		
			echo $_SESSION['message'];
		
		}
		?>
	</div>
	<!-- reset form -->
	<div>
	<form action="process.php" method="post">
			<input type="hidden" name="action" value="reset">
			<input type="submit" value="reset">
	</form>
	</div>
</body>
</html>
