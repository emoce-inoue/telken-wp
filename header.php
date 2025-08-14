<?php
/**
 * Default header template
 * This file is maintained for WordPress theme structure compatibility
 * Actual header implementations are in templates/{section}/header.php
 */

if (!defined('ABSPATH')) exit;
?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta content="width=device-width,initial-scale=1" name="viewport" />
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <header>
    </header>
