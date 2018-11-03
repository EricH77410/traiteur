<?php

$_pf = new WC_Product_Factory();

$prod = $_pf->get_product(684);

?>

<div class="menu-semaine">
	<?php 
		echo '<pre>';
		var_dump($prod);
		echo '</pre>'; 
	?>
</div>