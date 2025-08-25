<?php
/**
 * The default page template
 *
 * Currently redirects to 'hoken' page as it's the main content
 */

if (!defined('ABSPATH')) exit;

// 現在のページスラッグを取得
$current_slug = get_post_field('post_name', get_post());

// すでにASページの場合はリダイレクトしない
if (strpos($current_slug, 'hoken') !== 0) {
    wp_redirect(home_url('/hoken/'));
    exit;
}

// hokenページの場合は通常の表示を続行
get_header();
?>

<?php
  while (have_posts()) :
    the_post();
    get_template_part('pages/hoken/page', $current_slug);
  endwhile;
?>

<?php
get_footer();
