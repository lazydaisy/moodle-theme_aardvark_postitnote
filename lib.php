<?php

function aardvark_postitnote_process_css($css, $theme) {

    // Set the menu hover color
    if (!empty($theme->settings->menuhovercolor)) {
        $menuhovercolor = $theme->settings->menuhovercolor;
    } else {
        $menuhovercolor = null;
    }
    $css = aardvark_postitnote_set_menuhovercolor($css, $menuhovercolor);

    // Set the background image for the profile bar
    if (!empty($theme->settings->profilebarbg)) {
        $profilebarbg = $theme->settings->profilebarbg;
    } else {
        $profilebarbg = null;
    }
    $css = aardvark_postitnote_set_profilebarbg($css, $profilebarbg);

    // Set the background image for the graphic wrap
    if (!empty($theme->settings->graphicwrap)) {
        $graphicwrap = $theme->settings->graphicwrap;
    } else {
        $graphicwrap = null;
    }
    $css = aardvark_postitnote_set_graphicwrap($css, $graphicwrap);

    // Set graphicwrap background position
    if (!empty($theme->settings->bgposition)) {
       $bgposition = $theme->settings->bgposition;
    } else {
       $bgposition = null;
    }
    $css = aardvark_postitnote_set_bgposition($css, $bgposition);

   // Set custom CSS
    if (!empty($theme->settings->customcss)) {
        $customcss = $theme->settings->customcss;
    } else {
        $customcss = null;
    }
    $css = aardvark_postitnote_set_customcss($css, $customcss);

    return $css;
}

function aardvark_postitnote_set_menuhovercolor($css, $menuhovercolor) {
    $tag = '[[setting:menuhovercolor]]';
    $replacement = $menuhovercolor;
    if (is_null($replacement)) {
        $replacement = '#FFCC00';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function aardvark_postitnote_set_graphicwrap($css, $graphicwrap) {
    global $OUTPUT;
    $tag = '[[setting:graphicwrap]]';
    $replacement = $graphicwrap;
    if (is_null($replacement)) {
        $replacement = $OUTPUT->pix_url('graphics/postitnote','theme');
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function aardvark_postitnote_set_bgposition($css, $bgposition = 'no-repeat', $tag = '[[setting:bgposition]]'){
if($bgposition == "no-repeat" || $bgposition == "repeat" || $bgposition == "repeat-x" || $bgposition == "repeat-y"){
$css = str_replace($tag, $bgposition, $css);
}
return $css;
}

function aardvark_postitnote_set_profilebarbg($css, $profilebarbg) {
    global $OUTPUT;
    $tag = '[[setting:profilebarbg]]';
    $replacement = $profilebarbg;
    if (is_null($replacement)) {
        $replacement = $OUTPUT->pix_url('profile/profilebar-bg','theme');
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function aardvark_postitnote_set_customcss($css, $customcss) {
    $tag = '[[setting:customcss]]';
    $replacement = $customcss;
    if (is_null($replacement)) {
        $replacement = '';
    }

    $css = str_replace($tag, $replacement, $css);
    return $css;
}