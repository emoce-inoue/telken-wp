<?php
/**
 * Theme Functions
 */

if (!defined('ABSPATH')) exit;

/**
 * テーマのセットアップ
 */
function telken_setup() {
  // テーマサポート
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('html5', [
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ]);
}
add_action('after_setup_theme', 'telken_setup');
