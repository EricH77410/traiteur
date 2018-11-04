<?php
/*	
	présentation d'un plat dans le menu semaine
	<h4><?php echo $plat->name; ?></h4>
	<p><?php echo $plat->short_description; ?></p>
	<p><?php echo $plat->price; ?></p>
	<p><?php echo wp_get_attachment_url($plat->image_id); ?></p>
*/
?>
<div class="menu-plat">
	<img src="<?php echo wp_get_attachment_url($plat->image_id); ?>" alt="Plat">
	<h4><?php echo $plat->name; ?></h4>
	<p class="menu-description">Petite description</p>
</div>