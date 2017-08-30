<?php

/**
 * This file should be used to render each module instance.
 * You have access to two variables in this file: 
 * 
 * $module An instance of your module class.
 * $settings The module's settings.
 *
 */

$page_title_tag = $settings->page_title_tag;
$custom_page_title = $settings->custom_page_title;
$page_title = !empty($custom_page_title) ? $custom_page_title : ZGMPageTitleModuleSimple::title();

if (!empty($page_title_tag)){
	echo sprintf('<%s>%s</%s>',$page_title_tag,$page_title,$page_title_tag);
}



