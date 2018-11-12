<!--
	Le menu du jour
	on vient récupérer la liste des plats du jour
	et on l'affiche sous forme de slider
-->

<?php

  $days = array(
    "Monday"    => "lundi",
    "Tuesday"   => "mardi",
    "Wednesday" => "mercredi",
    "Thursday"  => "jeudi",
    "Friday"    => "vendredi",
    "Saturday"  => "samedi",
    "Sunday"    => "dimanche"
  );

  setlocale(LC_TIME,'fra_fra');
  $day = $days[strftime('%A')];
  $products = atelier_get_day_product($day);
?>

<section class="banner-menu">
  <h3 class="section-title">Au menu aujourd'hui <?php echo ucfirst($day); ?></h3>
 <div class="slider">
  <?php 
    foreach ($products as $plat) { ?>

      <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="product/<?php echo $plat->slug ?>">
        <!--		<?php atelier_render_menu_plat($plat); ?>-->
        <h3 class="plat-title"><?php echo $plat->name ?></h3>
        <img src="<?php echo wp_get_attachment_url($plat->image_id); ?>" alt="<?php echo $plat->name ?>" title="<?php echo $plat->name ?>">
      </a>				 	 
				 
  <?php } ?>
  </div>
</section>


<!-- Ancienne version
<section class="banner-menu">
	<h3 class="section-title">Au menu aujourd'hui <?php echo $day; ?></h3>
	<div class="menu-items">
		<?php //echo do_shortcode( '[featured_products]' );  ?>
	</div>
</section>
-->
