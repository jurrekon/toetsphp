<?php
	require_once("search.logic.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Schoenmerken</title>
	<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
	<?php if (isset($_POST['merk'])): ?>
		<table>
			<thead>
				<th>Merk</th>
				<th>Maat 38</th>
				<th>Maat 39</th>
				<th>Maat 40</th>
				<th>Maat 41</th>
				<th>Maat 42</th>
				<th>Maat 43</th>
				<th>Maat 44</th>
				<th>Maat 45</th>
				<th>Maat 46</th>
				<th>Maat 47</th>
			</thead>
			<tbody>
				<tr>
					<td><?= $merken[0]['naam'];?></td>
					<td><?= $merken[0]['maat_38'];?></td>
					<td><?= $merken[0]['maat_39'];?></td>
					<td><?= $merken[0]['maat_40'];?></td>
					<td><?= $merken[0]['maat_41'];?></td>
					<td><?= $merken[0]['maat_42'];?></td>
					<td><?= $merken[0]['maat_43'];?></td>
					<td><?= $merken[0]['maat_44'];?></td>
					<td><?= $merken[0]['maat_45'];?></td>
					<td><?= $merken[0]['maat_46'];?></td>
					<td><?= $merken[0]['maat_47'];?></td>
				</tr>
			</tbody>
		</table>
	<?php endif;?>
	<?php if (isset($_POST['size'])): ?>
		<table>
			<thead>
				<th>Merk</th>
				<th><?= $size;?></th>
			</thead>
			<tbody>
				<?php
					foreach ($merken as $merk) {
						echo "<tr>";
						echo "<td>" . $merk['naam'] . "</td>";
						echo "<td>" . $merk[$size] . "</td>";
						echo "</tr>";
					}
				?>
			</tbody>
		</table>
	<?php endif;?>
	<a href="index.php">Home</a>
</body>
</html>