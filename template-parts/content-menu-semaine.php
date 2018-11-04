

<div class="menu-semaine">
    
    <div class="week-nav">
        <div class="button prev"></div>
        <div class="button next"></div>
    <div class="week-title"><h2>Menu de la semaine du au </h2></div>
</div>
<div class="week">

    <section class="day">
        <a href: "#"><span class"first">Lundi</span></a>
        <ul class="menu-plats">

			<?php 
				$lundi = atelier_get_day_product('lundi');

				 foreach ($lundi as $plat) { ?>

					<li>
						<?php atelier_render_menu_plat($plat); ?>
					</li>				 	 
				 
			<?php } ?>
        </ul>
    </section>

    <section class="day">
        <a href: "#"><span class"first">Mardi</span></a>
        <ul class="menu-plats">
            <?php 
				$mardi = atelier_get_day_product('mardi');

				 foreach ($mardi as $plat) { ?>

					<li>
						<?php atelier_render_menu_plat($plat); ?>
					</li>				 	 
				 
			<?php } ?>
        </ul>
    </section>

    <section class="day">
        <a href: "#"><span class"first">Mercredi</span></a>
        <ul class="menu-plats">
            <?php 
				$mercredi = atelier_get_day_product('mercredi');

				 foreach ($mercredi as $plat) { ?>

					<li>
						<?php atelier_render_menu_plat($plat); ?>
					</li>				 	 
				 
			<?php } ?>
        </ul>
    </section>

    <section class="day">
        <a href: "#"><span class"first">Jeudi</span></a>
        <ul class="menu-plats">
            <?php 
				$jeudi = atelier_get_day_product('jeudi');

				 foreach ($jeudi as $plat) { ?>

					<li>
						<?php atelier_render_menu_plat($plat); ?>
					</li>				 	 
				 
			<?php } ?>
        </ul>
    </section>

    <section class="day">
        <a href: "#"><span class"first">Vendredi</span></a>
        <ul class="menu-plats">
            <?php 
				$vendredi = atelier_get_day_product('vendredi');

				 foreach ($vendredi as $plat) { ?>

					<li>
						<?php atelier_render_menu_plat($plat); ?>
					</li>				 	 
				 
			<?php } ?>
        </ul>
    </section>

    <section class="day">
        <a href: "#"><span class"first">Samedi</span></a>
        <ul class="menu-plats">
            <?php 
				$samedi = atelier_get_day_product('samedi');

				 foreach ($samedi as $plat) { ?>

					<li>
						<?php atelier_render_menu_plat($plat); ?>
					</li>				 	 
				 
			<?php } ?>
        </ul>
    </section>

  </div>
</div>
