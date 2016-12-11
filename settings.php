<?php

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {

    // Graphic Wrap (Background Image)
    $name = 'theme_aardvark_postitnote/graphicwrap';
    $title=get_string('graphicwrap','theme_aardvark_postitnote');
    $description = get_string('graphicwrapdesc', 'theme_aardvark_postitnote');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $settings->add($setting);

    // Graphic Wrap (Background Position)
    $name = 'theme_aardvark_postitnote/bgposition';
    $title = get_string('bgposition','theme_aardvark_postitnote');
    $description = get_string('bgpositiondesc', 'theme_aardvark_postitnote');
    $default = 'no-repeat';
    $choices = array('no-repeat'=>get_string('no-repeat','theme_aardvark_postitnote'), 'repeat'=>get_string('repeat','theme_aardvark_postitnote'), 'repeat-x'=>get_string('repeat-x','theme_aardvark_postitnote'), 'repeat-y'=>get_string('repeat-y','theme_aardvark_postitnote'));
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $settings->add($setting);

    // Logo file setting
    $name = 'theme_aardvark_postitnote/logo';
    $title = get_string('logo','theme_aardvark_postitnote');
    $description = get_string('logodesc', 'theme_aardvark_postitnote');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $settings->add($setting);

    // Profile Bar (Background Image)
    $name = 'theme_aardvark_postitnote/profilebarbg';
    $title=get_string('profilebarbg','theme_aardvark_postitnote');
    $description = get_string('profilebarbgdesc', 'theme_aardvark_postitnote');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $settings->add($setting);

    // Menu select background colour setting
    $name = 'theme_aardvark_postitnote/menuhovercolor';
    $title = get_string('menuhovercolor','theme_aardvark_postitnote');
    $description = get_string('menuhovercolordesc', 'theme_aardvark_postitnote');
    $default = '#FFCC00';
    $previewconfig = NULL;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $settings->add($setting);

    // Profilebar postitnote-note(1) setting...
    $name = 'theme_aardvark_postitnote/postitnote1';
    $title = get_string('postitnote1','theme_aardvark_postitnote');
    $description = get_string('postitnotedesc', 'theme_aardvark_postitnote');
    $default = get_string('postitnotetxt', 'theme_aardvark_postitnote');
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $settings->add($setting);

    // Profilebar postitnote-note(2) setting...
    $name = 'theme_aardvark_postitnote/postitnote2';
    $title = get_string('postitnote2','theme_aardvark_postitnote');
    $description = get_string('postitnotedesc', 'theme_aardvark_postitnote');
    $default = get_string('postitnotetxt', 'theme_aardvark_postitnote');
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $settings->add($setting);

    // Profilebar postitnote-note(3) setting...
    $name = 'theme_aardvark_postitnote/postitnote3';
    $title = get_string('postitnote3','theme_aardvark_postitnote');
    $description = get_string('postitnotedesc', 'theme_aardvark_postitnote');
    $default = get_string('postitnotetxt', 'theme_aardvark_postitnote');
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $settings->add($setting);

    // Email url setting

    $name = 'theme_aardvark_postitnote/emailurl';
    $title = get_string('emailurl','theme_aardvark_postitnote');
    $description = get_string('emailurldesc', 'theme_aardvark_postitnote');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $settings->add($setting);

    // Foot note setting
    $name = 'theme_aardvark_postitnote/footnote';
    $title = get_string('footnote', 'theme_aardvark_postitnote');
    $description = get_string('footnotedesc', 'theme_aardvark_postitnote');
    $default = get_string('footnotetxt', 'theme_aardvark_postitnote');
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $settings->add($setting);

    // Custom CSS file
    $name = 'theme_aardvark_postitnote/customcss';
    $title = get_string('customcss','theme_aardvark_postitnote');
    $description = get_string('customcssdesc', 'theme_aardvark_postitnote');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $settings->add($setting);

    // Theme override of custommenu items
    $name = 'theme_aardvark_postitnote/custommenuitems';
    $title = get_string('custommenuitems', 'admin');
    $description = get_string('configcustommenuitems', 'admin');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $settings->add($setting);
}
