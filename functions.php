<?php

load_theme_textdomain('rig', get_template_directory() . '/languages');

remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('wp_head', 'wp_oembed_add_discovery_links');

require_once __DIR__ . '/functions/helpers.php';
require_once __DIR__ . '/functions/post-types.php';
require_once __DIR__ . '/functions/rest.php';
require_once __DIR__ . '/functions/block-editor.php';
require_once __DIR__ . '/functions/meta-boxes.php';
require_once __DIR__ . '/functions/assets.php';
