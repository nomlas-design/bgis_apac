<?php

/**
 * @package BGISTheme
 * @since BGISTheme 1.0
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);

function bgistheme_files()
{
  wp_enqueue_script('main-bgistheme-js', get_theme_file_uri('/build/index.js'), NULL, '1.0', true);
  wp_enqueue_style('bgistheme_main_styles', get_stylesheet_uri());
  wp_enqueue_style('bgistheme_build_styles', get_template_directory_uri() . '/build/index.css');
  wp_enqueue_style('bgistheme_extra_styles', get_template_directory_uri() . '/extra/style.min.css');
}

add_action('wp_enqueue_scripts', 'bgistheme_files');

function bgistheme_features()
{
  add_theme_support('page-templates');
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  set_post_thumbnail_size(1792, 880, true);
}

add_action('after_setup_theme', 'bgistheme_features');

function custom_post_permalink($permalink, $post, $leavename, $sample)
{
  if ($post->post_type == 'post' && !is_wp_error($permalink)) {
    $category = get_the_category($post->ID);
    if (!empty($category)) {
      $category_slug = $category[0]->slug;
      $permalink = str_replace('%category%', $category_slug, $permalink);
    }
    $permalink = str_replace('%postname%', $post->post_name, 'news-and-insights/%category%/%postname%/');
  }
  return $permalink;
}
add_filter('post_type_link', 'custom_post_permalink', 10, 4);
