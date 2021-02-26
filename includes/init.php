<?php

namespace BSD_Plugin_Boilerplate\Inc;

function plugin_init() {
  register_plugin_settings();
}

function register_plugin_settings() {
  /* Sample Setting - Replace with your own */
  register_setting(
    'BSD_Plugin_Boilerplate_options_admin',
    'BSD_Plugin_Boilerplate_sample_setting',
    array(
      'type'          => 'string',
      'show_in_rest'  => true,      
    )
  );
}