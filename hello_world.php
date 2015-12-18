<?php
/*
Plugin Name: Hello-World
Plugin URI: http://example.com/
Description: My plugin
Version: 1.0
Author: Nomad
Author URI: http://example.com/
License: GPL

*/

const WP_FILTER_THE_CONTENT = 'the_content';

add_filter(WP_FILTER_THE_CONTENT, 'appendHelloWorldToEachPost');

function appendHelloWorldToEachPost($content)
{
    return $content . '<BR>Hello World!!!';
}
