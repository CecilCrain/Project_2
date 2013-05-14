
<?php 
include_once("connection.php"); 
?>

<html>
<head>
	<title>Country Information</title>
</head>
<body>
	<H3>Select one of the Countries Below for Additional Information</h3>
	<form action="process.php" method="post">
		<?php
			$database = new Database();

			$query = "SELECT * FROM country";
			$countries = $database->fetch_all($query);

			// need to populate the option value from the country_code????
			// var_dump($countries);
			?>
			<select name="country">
			<?php
			foreach ($countries as $country) 
			{
				echo '<option value="'.$country['Name'].'">'.$country['Name'].'</option>';
			}
			?>
			</select>		
		<input type="submit" value="Check Info">
	</form>
<h3>Country Information</h3>
<hr>
<?php
		$country = new country();


?>
</body>
</html>