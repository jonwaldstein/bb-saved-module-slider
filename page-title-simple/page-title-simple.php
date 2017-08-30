<?php

/**
 *
 * @class ZGMPageTitleModuleSimple
 */
class ZGMPageTitleModuleSimple extends FLBuilderModule {

    /** 
     * Constructor function for the module. You must pass the
     * name, description, dir and url in an array to the parent class.
     *
     * @method __construct
     */  
    public function __construct()
    {
        parent::__construct(array(
            'name'          => __('Page Title Simple', 'fl-builder'),
            'description'   => __('Simply output the current page title.', 'fl-builder'),
            'category'		=> __('ZGM Modules', 'fl-builder'),
            'dir'           => ZGM_MODULE_DIR . 'page-title-simple/',
            'url'           => ZGM_MODULE_URL . 'page-title-simple/',
            'editor_export' => true, // Defaults to true and can be omitted.
            'enabled'       => true, // Defaults to true and can be omitted.
        ));
    }
    public static function title() {
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
}

/**
 * Register the module and its form settings.
 */
FLBuilder::register_module('ZGMPageTitleModuleSimple', array(
    'general'       => array( // Tab
        'title'         => __('General', 'fl-builder'), // Tab title
        'sections'      => array( // Tab Sections
            'general'       => array( // Section
                'title'         => __('Section Title', 'fl-builder'), // Section Title
                'fields'        => array( // Section Fields
                    'page_title_tag' => array(
                        'type'          => 'select',
                        'label'         => __( 'Select Page Title Tag', 'fl-builder' ),
                        'default'       => 'h1',
                        'options'       => array(
                            'h1'      => __( 'h1', 'fl-builder' ),
                            'h2'      => __( 'h2', 'fl-builder' ),
                            'h3'      => __( 'h3', 'fl-builder' ),
                            'h4'      => __( 'h4', 'fl-builder' ),
                            'h5'      => __( 'h5', 'fl-builder' ),
                            'h6'      => __( 'h6', 'fl-builder' ),
                            'p'      => __( 'p', 'fl-builder' )
                        )
                    ),
                     'custom_page_title'     => array(
                        'type'          => 'text',
                        'label'         => __( 'Custom Page Title', 'fl-builder' ),
                    ),
                )
            )
        )
    )
));