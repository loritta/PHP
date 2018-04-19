<?php

/*
 * LoadContent
 * Load the content
 * @parameter $default
 */

function loadContent($where, $default = '') {
    //get the content from the url
    //sanitize for security reasons

    $content = filter_input(INPUT_GET, $where, FILTER_SANITIZE_STRING);
    $default = filter_var($default, FILTER_SANITIZE_STRING);
    //if there was anything from the url then use the default

    $content = (empty($content)) ? $default : $content; 
    //if we have content, then get it and pass it back
    if($content){
        //sanitize the data to prevent hacking
        $html=include 'content/' . $content . '.php';
    }
    return $html;
}
