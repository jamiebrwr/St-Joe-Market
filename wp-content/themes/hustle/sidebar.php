<?php
if ( ! defined( 'ABSPATH' ) ) exit; 
/**
 * Sidebar Template
 *
 * If a `primary` widget area is active and has widgets, display the sidebar.
 *
 * @package WooFramework
 * @subpackage Template
 */
	global $woo_options;
	global $current_user;
	get_currentuserinfo();
	
	//var_dump($current_user);
	
	if ( isset( $woo_options['woo_layout'] ) && ( $woo_options['woo_layout'] != 'layout-full' ) ) {
?>	
<aside id="sidebar" class="col-right">

	<?php woo_sidebar_inside_before(); ?>

	<?php if ( woo_active_sidebar( 'primary' ) || is_singular( 'product' ) ) { ?>
    <div class="primary">
    	<?php if ($post->post_author == $current_user->ID) { ?>
			<p><a class="button post-delete-link" href="<?php echo get_delete_post_link( $post->ID ) ?>">Delete Listing</a></p>
			<div class="fix" style="margin-bottom:3em;"></div>
			<?php } ?>
			
			<?php if ($post->post_author == $current_user->ID) { ?>
			<p><a class="button" href="/swap-and-shop/author/<?php echo $current_user->user_login . "\n"; ?>">Manage your listings</a></p>
			<div class="fix" style="margin-bottom:3em;"></div>
			<?php } ?>
			
			<?php
			$author_id = get_queried_object()->post_author;
			$author_name = get_the_author_meta('user_firstname', $author_id);
			?>
    
			<?php if ($post->post_author != $current_user->ID) { ?>
			<p><a class="button" href="/swap-and-shop/author/<?php echo $author_name; ?>">View all Posts by <?php echo $author_name; ?></a></p>
			<div class="fix" style="margin-bottom:3em;"></div>
			<?php } ?>
		<?php woo_sidebar( 'primary' ); ?>		           
	</div>        
	<?php } // End IF Statement ?>   
	
	<?php woo_sidebar_inside_after(); ?> 
	
</aside><!-- /#sidebar -->
<?php } // End IF Statement ?>