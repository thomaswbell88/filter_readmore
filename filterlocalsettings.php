<?php 

class readmore_filter_local_settings_form extends filter_local_settings_form {
    protected function definition_inner($mform) {
        $mform->addElement('text', 'localcssclass', get_string('localcssclass', 'filter_readmore'), array('size' => 20));
        $mform->setType('localcssclass', PARAM_RAW);
        $mform->addHelpButton('localcssclass', 'localcssclass', 'filter_readmore');
    }
}

?>