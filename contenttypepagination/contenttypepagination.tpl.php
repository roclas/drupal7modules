<?php //print_r($variables['contenttypepagination']['items']) ?>
<?php //print_r(get_defined_vars())?>

<?php foreach($variables['contenttypepagination']['items'] as $e){ ?>
	<?php 
		print_r($e->title);
		//print_r($e->field_salaryrange['und'][0]['value']);
		//print_r($e);
	?>
	<br />---<br />
<?php } ?>
