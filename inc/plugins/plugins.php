<?php

// Register action to declare required plugins

add_action('tgmpa_register', 'themesflat_recommend_plugin');

function themesflat_recommend_plugin() {

    

    $plugins = array(

        array(

            'name' => esc_html__('Elementor', 'saylo'),

            'slug' => 'elementor',

            'required' => true

        ),

        array(

            'name' => esc_html__('ThemesFlat Core', 'saylo'),

            'slug' => 'plugin-core',

            'source' => THEMESFLAT_DIR . 'inc/plugins/plugin-core.zip',

            'required' => true

        ),

        array(

            'name' => esc_html__('Metform', 'saylo'),

            'slug' => 'metform',

            'required' => true

        ),

        array(

            'name' => esc_html__('Contact Form 7', 'saylo'),

            'slug' => 'contact-form-7',

            'required' => false

        ),    

        array(

            'name' => esc_html__('Mailchimp', 'saylo'),

            'slug' => 'mailchimp-for-wp',

            'required' => false

        ),        

        array(

            'name' => esc_html__('One Click Demo Import', 'saylo'),

            'slug' => 'one-click-demo-import',

            'required' => false

        )   

    );

    

    tgmpa($plugins);

}



