<!DOCTYPE html>
<html lang="en">
<head>
	<title>Films</title>
	<style>
		* {
			font-family: Arial;
			font-size: 12px;
		}
		table {
			border-collapse: collapse;
		}
		th {
			background-color: green;
			color: white;
		}
		td, th {
			border: 1px solid #666666;
			padding:  4px;	
		}
		div {
			margin: 4px;
		}
		.sort_asc:after {
			content: "▲";
		}
		.sort_desc:after {
			content: "▼";
		}
	</style>
	
</head>
<body>
	<div>
		Found <?php echo $num_result; ?> films
	</div>
	<table>
		<thead>
			<th>ID</th>
			<th>Title</th>
			<th>Category</th>
			<th>Length</th>
			<th>Rating</th>
			<th>Price</th>
		</thead>
		<tbody>
			<?php foreach ($films as $film): ?>
			<tr>
				<td><?php echo $film->FID; ?></td>
				<td><?php echo $film->title;?></td>
				<td><?php echo $film->category;?></td>
				<td><?php echo $film->length;?></td>
				<td><?php echo $film->rating;?></td>
				<td><?php echo $film->price;?></td>
			</tr>
			<?php endforeach;?>
		</tbody>
	</table>
</body>
</html>