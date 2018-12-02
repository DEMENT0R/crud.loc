<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Documents List</title>
</head>
<body>
	<form method="POST">
		date: <input type="text" name="date" value="<?=e($row['date'])?>"><br>
		name: <input type="text" name="name" value="<?=e($row['name'])?>"><br>
		kpowner: <input type="text" name="kpowner" value="<?=e($row['kpowner'])?>"><br>
		phone: <input type="text" name="phone" value="<?=e($row['phone'])?>"><br>
		address: <input type="text" name="address" value="<?=e($row['address'])?>"><br>
		percentage: <input type="text" name="percentage" value="<?=e($row['percentage'])?>"><br>
		acctype: <input type="text" name="acctype" value="<?=e($row['acctype'])?>"><br>
		haul: <input type="text" name="haul" value="<?=e($row['haul'])?>"><br>
		tujuan: <input type="text" name="tujuan" value="<?=e($row['tujuan'])?>"><br>
		amount: <input type="text" name="amount" value="<?=e($row['amount'])?>"><br>
		consultantid: <input type="text" name="consultantid" value="<?=e($row['consultantid'])?>"><br>
		method: <input type="text" name="method" value="<?=e($row['method'])?>"><br>
		asnafLuar: <input type="text" name="asnafLuar" value="<?=e($row['asnafLuar'])?>"><br>
		status: <input type="text" name="statusstatus'])?>"><br>
		<input type="hidden" name="id" value="<?=e($row['id'])?>">
		<input type="submit"><br>
	</form>
	<a href="?">Return to the list</a>

	<?php if ($row['id']): ?>
		<form method="POST">
			<input type="hidden" name="delete" value="<?=e($row['id'])?>">
			<input type="submit" value="Delete"><br>
		</form>
	<? endif ?>
</body>
</html>