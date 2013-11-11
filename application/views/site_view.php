<!DOCTYPE html>

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
	<title>untitled</title>
	
</head>
<body>
     <div id="container">
		<h1>Super Pagination with CodeIgniter</h1>
		<!--with table->generate(data), there's no need a foreach-->
		<?php echo $this->table->generate($records); ?>
		<?php echo $this->pagination->create_links(); ?>
	 </div>
     

</body>
</html>	