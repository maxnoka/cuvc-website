<?php

define("DEBUG_ENABLED", True);
if (DEBUG_ENABLED) {
	ini_set('display_startup_errors', 1);
	ini_set('display_errors', 1);
	error_reporting(E_ALL);
}

define( "VIEW_PATH", "../private/views");
define( "TEMPLATE_PATH", VIEW_PATH . "/templates" );

define( "STYLE_PATH",  "/styles" );
define( "CONTENT_PATH", "../private/content" );

require( VIEW_PATH . "/MyView.php" );


function handleException( $exception ) {
   echo "Sorry, a problem occurred. Please try later.";
   error_log( $exception->getMessage() );
}

set_exception_handler( 'handleException' );
?>