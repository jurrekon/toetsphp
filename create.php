<?php
	require_once('create.logic.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Schoenmerken</title>
	<link rel="stylesheet" href="style.css" type="text/css">
</head>
	<body>
		<h2>Voeg een nieuw merk toe</h2>
		<form action="create.php" method="post">
			<label for="naam">Merknaam</label>
			<input type="text" name="naam">
			<br/>
			<label for="maat_38">Maat 38</label>
			<input type="text" name="maat_38">
			<br/>
			<label for="maat_39">Maat 39</label>
			<input type="text" name="maat_39">
			<br/>
			<label for="maat_40">Maat 40</label>
			<input type="text" name="maat_40">
			<br/>
			<label for="maat_41">Maat 41</label>
			<input type="text" name="maat_41">
			<br/>
			<label for="maat_42">Maat 42</label>
			<input type="text" name="maat_42">
			<br/>
			<label for="maat_43">Maat 43</label>
			<input type="text" name="maat_43">
			<br/>
			<label for="maat_44">Maat 44</label>
			<input type="text" name="maat_44">
			<br/>
			<label for="maat_45">Maat 45</label>
			<input type="text" name="maat_45">
			<br/>
			<label for="maat_46">Maat 46</label>
			<input type="text" name="maat_46">
			<br/>
			<label for="maat_47">Maat 47</label>
			<input type="text" name="maat_47">
			<br/>
			<br/>
			<input type="submit" name="submit" value="Create">
		</form>
	</body>
</html>