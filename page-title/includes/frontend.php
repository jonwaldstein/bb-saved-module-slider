<?php

/**
 * This file should be used to render each module instance.
 * You have access to two variables in this file: 
 * 
 * $module An instance of your module class.
 * $settings The module's settings.
 *
 */

function title() {
  if (is_home()) {
    if (get_option('page_for_posts', true)) {
      return get_the_title(get_option('page_for_posts', true));
    } else {
      return __('Latest Posts', 'sage');
    }
  } elseif (is_archive()) {
    return get_the_archive_title();
  } elseif (is_search()) {
    return sprintf(__('Search Results for %s', 'sage'), get_search_query());
  } elseif (is_404()) {
    return __('Not Found', 'sage');
  } else {
    return get_the_title();
  }
}

$page_title_tag = $settings->page_title_tag;
$custom_page_title = $settings->custom_page_title;
$page_title = !empty($custom_page_title) ? $custom_page_title : title();

if (!empty($page_title_tag)){
	echo sprintf('<%s>%s</%s>',$page_title_tag,$page_title,$page_title_tag);
}



