<?php
/**
 * The main template file
 *
 * Currently redirects to 'hoken' page as it's the main content
 */

if (!defined('ABSPATH')) exit;

// ASページにリダイレクト
wp_redirect(home_url('/hoken/'));
exit;
