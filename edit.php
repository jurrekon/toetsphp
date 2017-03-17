<?php
	require_once('edit.logic.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Schoenmerken</title>
	<link rel="stylesheet" href="style.css" type="text/css">
</head>
	<body>
		<h2>Pas het merk aan</h2>
		<form action="edit.php" method="post">
			<input type="hidden" name="id" value="<?=$merken[0]['id'];?>">
			<label for="naam">Merknaam</label>
			<input type="text" name="naam" value="<?=$merken[0]['naam'];?>">
			<br/>
			<label for="maat_38">Maat 38</label>
			<input type="text" name="maat_38" value="<?=$merken[0]['maat_38'];?>">
			<br/>
			<label for="maat_39">Maat 39</label>
			<input type="text" name="maat_39" value="<?=$merken[0]['maat_39'];?>">
			<br/>
			<label for="maat_40">Maat 40</label>
			<input type="text" name="maat_40" value="<?=$merken[0]['maat_40'];?>">
			<br/>
			<label for="maat_41">Maat 41</label>
			<input type="text" name="maat_41" value="<?=$merken[0]['maat_41'];?>">
			<br/>
			<label for="maat_42">Maat 42</label>
			<input type="text" name="maat_42" value="<?=$merken[0]['maat_42'];?>">
			<br/>
			<label for="maat_43">Maat 43</label>
			<input type="text" name="maat_43" value="<?=$merken[0]['maat_43'];?>">
			<br/>
			<label for="maat_44">Maat 44</label>
			<input type="text" name="maat_44" value="<?=$merken[0]['maat_44'];?>">
			<br/>
			<label for="maat_45">Maat 45</label>
			<input type="text" name="maat_45" value="<?=$merken[0]['maat_45'];?>">
			<br/>
			<label for="maat_46">Maat 46</label>
			<input type="text" name="maat_46" value="<?=$merken[0]['maat_46'];?>">
			<br/>
			<label for="maat_47">Maat 47</label>
			<input type="text" name="maat_47" value="<?=$merken[0]['maat_47'];?>">
			<br/>
			<br/>
			<input type="submit" value="Edit">
		</form>
	</body>
</html>