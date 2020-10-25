<?php
/***
 * Functions helpers
 */


/**
 * Retrieve link URI to theme assets.
 *
 * @param string $filename
 *
 * @return string
 */
function cosmos_get_asset_file_uri( $filename ) {
	return COSMOS_ASSETS_URI . ltrim( $filename );
}

/**
 * Retrieve path to the filename from theme includes directory.
 *
 * @param string $filename
 */
function cosmos_get_file_path( $filename ) {
	return  COSMOS_INCLUDES_PATH . ltrim($filename, '/');
}

/**
 * Retrieve link uri to the filename from theme includes directory.
 *
 * @param $filename
 *
 * @return string
 */
function cosmos_get_file_uri( $filename ) {
	return COSMOS_INCLUDES_URI . ltrim( $filename );
}


/**
 * Include file from `includes` directory.
 *
 * @param string $filename
 * @param false $required
 */
function cosmos_includes( $filename, $required = false ) {

	$path_to_filename = cosmos_get_file_path( $filename );

	if ( file_exists( $path_to_filename ) ) {
		if ( $required ) {
			require_once $path_to_filename;
		} else {
			include_once $path_to_filename;
		}
	}
}