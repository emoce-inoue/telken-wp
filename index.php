<?php
/**
 * The main template file
 *
 * Currently redirects to PM page as it's the main content
 */

if (!defined('ABSPATH')) exit;

// ASページにリダイレクト
wp_redirect(home_url('/pm/'));
exit;
