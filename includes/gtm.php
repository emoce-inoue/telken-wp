<?php
/**
 * Google Tag Manager Configuration
 *
 * @package Telken
 */

if (!defined('ABSPATH')) exit;

/**
 * GTMのヘッダースクリプトを出力
 */
function output_gtm_head_script() {
    ?>
    <!-- Google Tag Manager -->
    <!-- End Google Tag Manager -->
    <?php
}

/**
 * GTMのボディスクリプトを出力
 */
function output_gtm_body_script() {
    ?>
    <!-- Google Tag Manager (noscript) -->
    <!-- End Google Tag Manager (noscript) -->
    <?php
} 