<?php
/**
 * PM用ヘッダーテンプレート
 *
 * @package Telken
 */

if (!defined('ABSPATH')) exit;

// スラッグに基づいてURLを設定
$current_slug = get_post_field('post_name', get_post());
$base_url = '';
?>

<!doctype html>
<html lang="ja">
  <head>
    <?php
    require_once get_template_directory() . '/includes/gtm.php';
    output_gtm_head_script();
    ?>
  </head>
  <body>
    <?php output_gtm_body_script(); ?>