<!--
	Le menu du jour
-->

<?php
  setlocale(LC_TIME,'fra_fra');
  $day = strftime('%A');
  $products = atelier_get_day_product($day)
?>

<section class="slider">
  <?php 
    foreach ($products as $plat) { ?>

      <li>
        <!--		<?php atelier_render_menu_plat($plat); ?>-->
        <h3><?php echo $plat->name ?></h3>
      </li>				 	 
				 
  <?php } ?>
</section>

<!--
<section class="banner-menu">
	<h3 class="section-title">Au menu aujourd'hui <?php echo $day; ?></h3>
	<div class="menu-items">
		<?php echo do_shortcode( '[featured_products]' );  ?>
	</div>
</section>-->
