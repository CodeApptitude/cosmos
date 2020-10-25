<?php
/**
 * Load Theme functionalities.
 */

define( 'COSMOS_THEME_VERSION', '1.0.0' );
define( 'COSMOS_INCLUDES_PATH', get_template_directory() . '/includes/' );
define( 'COSMOS_INCLUDES_URI', get_template_directory_uri() . '/includes/' );
define( 'COSMOS_ASSETS_URI', get_template_directory_uri() . '/assets/' );

// Load required functions helpers.
require_once COSMOS_INCLUDES_PATH . 'functions-helpers.php';

cosmos_includes( 'loader.php', true );