<!DOCTYPE html>
<html lang="en">
<head>
	<title>Day 10 (Calendar)</title>
	<style type="text/css" />
		.calendar {
			font-family: Arial; font-size: 12px;
		}
		table.calendar{
			margin: auto; border-collapse: collapse;
		}
		.calendar .days td{
			width: 80px; height: 80px; padding: 8px;
			border:1px solid #999;
			vertical-align: top;
			background-color: #DEF;
		}
		.calendar .days td:hover {
			background-color: #FFF;
		}
		.calendar .highlight{
			font-weight: bold; color: #00F
		}
	</style>
</head>
<body>
	<?php echo $calendar?>
</body>
</html>