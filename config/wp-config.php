<?php
// Set custom wp-config.php settings in this file 
	define( 'DISALLOW_FILE_MODS', false );

	define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', true );
@ini_set( 'display_errors', 1 );
define( 'SCRIPT_DEBUG', true );

/*
if ( 'development' === getenv('WP_ENV') ) {
	define( 'DISALLOW_FILE_EDIT', false );
	define( 'DISALLOW_FILE_MODS', false );

	define( 'WP_DEBUG', true );
	define( 'SAVEQUERIES', true );
}
