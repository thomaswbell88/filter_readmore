<?php

class filter_readmore extends moodle_text_filter {
	function init() {
		// Including jQuery
        	$PAGE->requires->jquery();
	}
	public function filter($text, array $options = array()) {
		global $CFG, $PAGE;

		// Look if there is a local CSS class defined for the context ..
		if (isset($this->localconfig['localcssclass'])) {
            $cssclass = $this->localconfig['localcssclass'];
        } 
		// .. and if there's not, then we'll find a global setting for it
        elseif (isset($CFG->filter_readmore_cssclass)) {
        	$cssclass = $CFG->filter_readmore_cssclass;
        } 
        // Otherwise, we're just gonna set a fallback default
        else {
            // This is setting the default, for now
            $cssclass = 'readmore'; 
        }

        // See if the defined CSS class is in text on the page ..
		if (strpos($text, $cssclass)) {
        	
        	// And if the CSS class has been used, include the jQuery plugin
        	$PAGE->requires->js(new moodle_url('/filter/readmore/js/readmore.min.js'));
        	// .. initiliase the plugin on the defined CSS class
   	        $PAGE->requires->js(new moodle_url('/filter/readmore/js/initiliase.js.php')); 
        	
        	return $text;
		}
    }
}

?>