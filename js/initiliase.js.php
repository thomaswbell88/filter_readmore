<?php 

header('Content-Type: text/javascript');	

define('AJAX_SCRIPT', true);
require_once dirname(dirname(dirname(__DIR__))) . '/config.php';

$params = json_encode(array(
	// Here we'll eventually put the options that are defined in settings.php & filterlocalsettings.php
	'height'    => 100, // for now, keep as these two static options to represent the future!
	'speed' 	=> 400
));

// This needs work to get the local options > global options > fallback default logic working. 
// For now, just getting the global option:
$cssclass = "." . $CFG->filter_readmore_cssclass;


?>
$(<?php var_export($cssclass); ?>).readmore(<?php echo $params; ?>);
