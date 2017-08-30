<?php

/**
 *
 * @class ZGMSavedModuleSlider
 */
class ZGMSavedModuleSlider extends FLBuilderModule {

    /** 
     * Constructor function for the module. You must pass the
     * name, description, dir and url in an array to the parent class.
     *
     * @method __construct
     */  
    public function __construct()
    {
        parent::__construct(array(
            'name'          => __('Saved Module Slider', 'fl-builder'),
            'description'   => __('Create a slider from saved modules.', 'fl-builder'),
            'category'		=> __('ZGM Modules', 'fl-builder'),
            'dir'           => ZGM_MODULE_DIR . 'saved-module-slider/',
            'url'           => ZGM_MODULE_URL . 'saved-module-slider/',
            'editor_export' => true, // Defaults to true and can be omitted.
            'enabled'       => true, // Defaults to true and can be omitted.
        ));
        
        // Register and enqueue

        //$this->add_css('slick-slider-css-cdn', '//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css');
        $this->add_css('slick-slider-css', $this->url . 'assets/css/slick.css');

        //$this->add_js('slick-slider-js-cdn', '//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js', array(), '', true);
        $this->add_js('slick-slider-js', $this->url . 'assets/js/slick.min.js', array(), '', true);

        $this->add_js('saved-module-slider-js', $this->url . 'assets/js/main.js', array(), '', true);
    }
}

/**
 * Register the module and its form settings.
 */
FLBuilder::register_module('ZGMSavedModuleSlider', array(
    'general'       => array( // Tab
        'title'         => __('General', 'fl-builder'), // Tab title
        'sections'      => array( // Tab Sections
            'general'       => array( // Section
                'title'         => __('Section Title', 'fl-builder'), // Section Title
                'fields'        => array( // Section Fields
                    'saved_module_category' => array(
                        'type'          => 'suggest',
                        'label'         => __( 'Saved Module Category', 'fl-builder' ),
                        'action'        => 'fl_as_terms', // Search posts.
                        'data'          => 'fl-builder-template-category', // Slug of the post type to search.
                        'limit'         => 1, // Limits the number of selections that can be made.
                        'help'          => 'Select a category associated to your saved module. http://kb.wpbeaverbuilder.com/article/98-enable-the-builder-or-templates-admin-panel',
                    ),
                )
            )
        )
    )
));