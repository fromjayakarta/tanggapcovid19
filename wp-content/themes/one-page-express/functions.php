<?php

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 */

if(!defined('OPE_THEME_REQUIRED_PHP_VERSION')){
    define('OPE_THEME_REQUIRED_PHP_VERSION','5.3.0');
}

add_action( 'after_switch_theme', 'one_page_express_check_php_version' );

function one_page_express_check_php_version(){
  // Compare versions.
  if ( version_compare(phpversion(), OPE_THEME_REQUIRED_PHP_VERSION, '<') ) :
    // Theme not activated info message.
    add_action( 'admin_notices', 'one_page_express_php_version_notice' );
    

    // Switch back to previous theme.
    switch_theme(get_option( 'theme_switched' )  );
    return false;
  endif;
}

function one_page_express_php_version_notice() {
    ?>
    <div class="notice notice-alt notice-error notice-large">
        <h4><?php _e('One Page Express theme activation failed!','one-page-express'); ?></h4>
        <p>
            <?php _e( 'You need to update your PHP version to use the <strong>One Page Express</strong>.', 'one-page-express' ); ?> <br />
            <?php _e( 'Current php version is:', 'one-page-express' ) ?> <strong>
            <?php echo phpversion(); ?></strong>, <?php _e( 'and the minimum required version is ', 'one-page-express' ) ?> 
            <strong><?php echo OPE_THEME_REQUIRED_PHP_VERSION; ?></strong>
        </p>
    </div>
    <?php
}

if( version_compare(phpversion(), OPE_THEME_REQUIRED_PHP_VERSION, '>=')){
    require_once get_template_directory() . "/inc/functions.php";
}

add_filter('wp_nav_menu_items', 'add_login_logout_link', 10, 2);
function add_login_logout_link($items, $args) {
        ob_start();
        wp_loginout('index.php');
        $loginoutlink = ob_get_contents();
        ob_end_clean();
        $items .= '<li>'. $loginoutlink .'</li>';
    return $items;
}

add_filter( 'admin_bar_menu', 'replace_wordpress_howdy', 25 );
function replace_wordpress_howdy( $wp_admin_bar ) {
$my_account = $wp_admin_bar->get_node('my-account');
$newtext = str_replace( 'Howdy,', 'Welcome,', $my_account->title );
$wp_admin_bar->add_node( array(
'id' => 'my-account',
'title' => $newtext,
) );
}

function get_user_role() {
	global $current_user;

	$user_roles = $current_user->roles;
	$user_role = array_shift($user_roles);

	return $user_role;
}
