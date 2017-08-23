<?php

/**
 * This file should be used to render each module instance.
 * You have access to two variables in this file: 
 * 
 * $module An instance of your module class.
 * $settings The module's settings.
 *
 */

?>
<?php
if ( !empty(($settings->saved_module_category)) ):
$args = [
	'post_type' => 'fl-builder-template',
	'fl-builder-template-category' => get_the_category_by_ID($settings->saved_module_category),
	'orderby' => 'menu_order',
	'order' => 'ASC'
]; 
?>
<div class="bb-saved-module-slider">
	<?php FLBuilder::render_query($args); ?>
</div>
<?php endif; ?>


