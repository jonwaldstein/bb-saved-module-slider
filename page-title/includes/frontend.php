<<?php echo $settings->tag; ?> class="fl-heading">
	<?php if(!empty($settings->link)) : ?>
	<a href="<?php echo $settings->link; ?>" title="<?php echo esc_attr( $settings->heading ); ?>" target="<?php echo $settings->link_target; ?>">
	<?php endif; ?>
	<span class="fl-heading-text"><?php echo !empty($settings->heading) ? $settings->heading : ZGMPageTitleModule::title(); ?></span>
	<?php if(!empty($settings->link)) : ?>
	</a>
	<?php endif; ?>
</<?php echo $settings->tag; ?>>
