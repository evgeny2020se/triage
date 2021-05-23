<?php require_once 'date.php'; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Document</title>
</head>
<body>
	<form action="" method="post">
		<label>Введите начальную дату</label>
		<input type="text" name="date_start">
		<label>Введите конечную дату</label>
		<input type="text" name="date_end">
		<input type="submit" name="btn">
	</form>
	<table>
		<tr>
			<th>№</th>
			<th>Дата</th>
			<th>Диц.счёт</th>
			<th>Город</th>
			<th>Время</th>
			<th>Тариф</th>
			<th>Сумма</th>
		</tr>
		<?php
		if (isset($_POST['btn'])) {
			foreach ($result_date as $date) {
			?>
				<tr>
					<td><?= $date[0] ?></td>
					<td><?= $date[1] ?></td>
					<td><?= $date[2] ?></td>
					<td><?= $date[3] ?></td>
					<td><?= $date[4] ?></td>
					<td><?= $date[5] ?></td>
					<td><?= $date[6] ?></td>
				</tr>
			<?php
			}
		}
		else {
			foreach ($link_res as $res) {
			?>
				<tr>
					<td><?= $res[0] ?></td>
					<td><?= $res[1] ?></td>
					<td><?= $res[2] ?></td>
					<td><?= $res[3] ?></td>
					<td><?= $res[4] ?></td>
					<td><?= $res[5] ?></td>
					<td><?= $res[6] ?></td>
				</tr>
			<?php
			}
		}
		?>
	</table>
</body>
</html>