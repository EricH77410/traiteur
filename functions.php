<?php /* * Child theme functions file * */ 
function foodhunt_child_enqueue_styles() { 
	$parent_style = 'foodhunt_style'; 
	//parent theme style handle 'spacious_style' 
	//Enqueue parent and child theme style.css 
	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' ); wp_enqueue_style( 'spacious_child_style', get_stylesheet_directory_uri() . '/style.css', array( $parent_style ), wp_get_theme()->get('Version')
   );
  wp_enqueue_style('bxSliderCss','https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css');

  // Fichier JS
  wp_enqueue_script('bxSlider','https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js', array('jquery'), '4.2.12', true);
  wp_enqueue_script('atelierjs', get_stylesheet_directory_uri() . '/js/atelier.js', array('jquery'),'1.0.0', true);
} 
add_action( 'wp_enqueue_scripts', 'foodhunt_child_enqueue_styles' );


// Ajout des options pour gglmap adresse etc 
function atelier_settings(){
  // Google maps settings
  register_setting('atelier_options_gmap', 'atelier_gmap_lat');
  register_setting('atelier_options_gmap', 'atelier_gmap_lng');
  register_setting('atelier_options_gmap', 'atelier_gmap_zoom');
  register_setting('atelier_options_gmap', 'atelier_gmap_key');

  // Options information
  register_setting('atelier_options_info', 'atelier_adresse');
  register_setting('atelier_options_info', 'atelier_phone');

  // Options reseaux sociaux
  register_setting('atelier_options_social', 'atelier_facebook');
  register_setting('atelier_options_social', 'atelier_instagram');

}

function atelier_options(){
  add_menu_page("L'Atelier", "Options Atelier", 'administrator', 'atelier_options', 'atelier_adjustments','',20);
}

add_action('init', 'atelier_settings');

function atelier_adjustments(){ ?>
  <div class="wrap">
    <h1>L'Atelier Options</h1>
    <form action="options.php" method="post">
      <?php
        settings_fields('atelier_options_gmap');
        do_settings_sections('atelier_options_gmap');
      ?>
      <h2>Google Maps</h2>
      <table class="form-table">
        <tr valign="top">
          <th scope="row">Latitude: </th>
          <td>
            <input type="text" name="atelier_gmap_lat" value="<?php echo esc_attr(get_option('atelier_gmap_lat')); ?>">
          </td>
        </tr>
        <tr>
          <th>Longitude: </th>
          <td>
            <input type="text" name="atelier_gmap_lng" value="<?php echo esc_attr(get_option('atelier_gmap_lng')); ?>">
          </td>
        </tr>
        <tr>
          <th>Zoom: </th>
          <td>
            <input type="number" max="21" min="1" name="atelier_gmap_zoom" value="<?php echo esc_attr(get_option('atelier_gmap_zoom')); ?>">
          </td>
        </tr>
        <tr>
          <th>API Key: </th>
          <td>
            <input type="text" name="atelier_gmap_key" value="<?php echo esc_attr(get_option('atelier_gmap_key')); ?>">
          </td>
        </tr>
      </table>
        <?php
          settings_fields('atelier_options_info');
          do_settings_sections('atelier_options_info');
        ?>
        <h2>Informations</h2>
        <table class="form-table">
          <tr valign="top">
            <th scope="row">Addresse: </th>
              <td>
                <input type="text" name="atelier_adresse" value="<?php echo esc_attr(get_option('atelier_adresse')); ?>">
              </td>
          </tr>
          <tr>
            <th>Téléphone: </th>
            <td>
              <input type="text" name="atelier_phone" value="<?php echo esc_attr(get_option('atelier_phone')); ?>">
            </td>
          </tr>
        </table>

        <?php
          settings_fields('atelier_options_social');
          do_settings_sections('atelier_options_social');
        ?>
        <h2>Réseaux sociaux</h2>
        <table class="form-table">
          <tr valign="top">
            <th scope="row">Facebook: </th>
            <td>
              <input type="text" name="atelier_facebook" value="<?php echo esc_attr(get_option('atelier_facebook')); ?>">
            </td>
          </tr>
          <tr valign="top">
            <th scope="row">Instagram: </th>
            <td>
              <input type="text" name="atelier_instagram" value="<?php echo esc_attr(get_option('atelier_instagram')); ?>">
            </td>
          </tr>
        </table>
      <?php submit_button(); ?>
    </form>
  </div>
<?php }


add_action('admin_menu', 'atelier_options');


// Selection des produits pour le menu de la semaine
// -------------------------------------------------
function atelier_get_day_product($day){
  $args = array(
      'category' => array( $day )
      );
  $products = wc_get_products( $args );

  return $products;
}

function atelier_render_menu_plat($plat){
  echo '<div class="menu-plat">';
    echo '<h4>' . $plat->get_name() . '</h4>';
    echo '<img src="';
    echo wp_get_attachment_url($plat->get_image_id());
    echo '" alt="'.$plat->get_name().'">';  
    echo '<p class="menu-description">' . $plat->get_short_description() . '</p>';
    echo '<div class="menu-price">'.$plat->get_regular_price().'</div>';
    echo '<a href="/boutique/?add-to-cart='.$plat->get_id().'" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart menu-button" data-product_id="'.$plat->get_id().'" data-product_sku="" aria-label="Ajouter “'.$plat->get_name().'” à votre panier" rel="nofollow"><i class="fa fa-cart"></i> Ajouter</a>';
    
  echo '</div>';
}


/* Supprimer un champ dans la page checkout */
function atelier_checkout_fields($fields){
  unset($fields['billing']['billing_company']);
  unset($fields['billing']['billing_country']);
  unset($fields['billing']['billing_address_1']);
  unset($fields['billing']['billing_address_2']);
  unset($fields['billing']['billing_city']);
  unset($fields['billing']['billing_state']);
  unset($fields['billing']['billing_postcode']);
  unset($fields['order']['order_comments']);
  return $fields;
}

add_filter( 'woocommerce_checkout_fields', 'atelier_checkout_fields', 20 );

?>

