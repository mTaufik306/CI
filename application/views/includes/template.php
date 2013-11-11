<?php $this->load->view('includes/header'); ?>

<!--rather than referencing an absolute path, it should go with a variable
	because the content of a page should be relative
	this variable will be passed by controller who load the page
	and should be passed as '$data[main_content]'
-->
<?php $this->load->view($main_content); ?>
<?php $this->load->view('includes/tut_info'); ?>

<?php $this->load->view('includes/footer'); ?>