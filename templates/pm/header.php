<?php
/**
 * PM用ヘッダーテンプレート
 *
 * @package Telken
 */

if (!defined('ABSPATH')) exit;
?>

<!doctype html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <title>【ダイレクトテレショップ研究所】無料の節約サービスのご案内</title>
    <meta content="商品をご購入いただいたことのあるお客さま限定のご案内！無料で見積もりが作れるサービスをご紹介いたします。" name="description" />
    <meta content="width=device-width,initial-scale=1" name="viewport" />
    <link href="" rel="canonical" />
    <!-- OGP -->
    <meta content="" property="og:url" />
    <meta content="商品をご購入いただいたことのあるお客さま限定のご案内！無料で見積もりが作れるサービスをご紹介いたします。" property="og:description" />
    <meta content="【ダイレクトテレショップ研究所】無料の節約サービスのご案内" property="og:site_name" />
    <meta content="【ダイレクトテレショップ研究所】無料の節約サービスのご案内" property="og:title" />
    <meta content="website" property="og:type" />
    <meta content="<?php echo get_template_directory_uri(); ?>/assets/images/pm/og-image.png" property="og:image" />
    <meta content="ja_JP" property="og:locale" />
    <!-- favicon -->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/pm/favicon.ico" />
    <link rel="icon" type="image/webp" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/images/pm/favicon.webp" />
    <!-- css/js -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preload" as="style" fetchpriority="high" href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap" media="print" onload="this.media='all'" />
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet" />
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/pm/style.css" rel="stylesheet">
    <?php
    require_once get_template_directory() . '/includes/gtm.php';
    output_gtm_head_script();
    ?>
  </head>
  <body>
    <?php output_gtm_body_script(); ?>