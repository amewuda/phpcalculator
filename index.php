<?php
	
	if(isset($_POST['submit'])){
		if(empty($_POST['number1'] and $_POST['number2'])){
			echo 'Enter the numbers';
		} else{
			echo $_POST['number1'] + $_POST['number2'] . ' ' . "for " . 'Addition' . '<br>';
			echo $_POST['number1'] - $_POST['number2'] . ' '. "for " . 'Subtraction'.'<br>';
			echo $_POST['number1'] * $_POST['number2'] . ' '. "for " . 'Multiplication'.'<br>';
			echo $_POST['number1'] / $_POST['number2'] . ' '. "for " . 'Division' .'<br>';
		}
	}

?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>Simple PHP Calculator</title>
	</head>
	<body>
	
		<h1>Adding numbers</h1>
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
			<label for="add">Adding the number1</label>
			<input id="add" type="number" name="number1" placeholder="Write number"><br>
			<label for="add">Adding the number2</label>
			<input id="add" type="number" name="number2" placeholder="Write number">
			<input type="submit" name="submit" value="Submit">

		</form>
	</body>
	</html>




