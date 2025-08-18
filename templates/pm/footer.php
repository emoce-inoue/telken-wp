<?php
/**
 * PM用フッターテンプレート
 *
 * @package Telken
*/

if (!defined('ABSPATH')) exit;
?>

  <footer class="l-section">
    <div class="l-section__inner l-section__inner--footer">
      <h2 class="l-section__title js-fade">お問い合わせ</h2>
      <div class="l-footer js-fade">
        <div class="l-footer__content">
          <a href="tel:0120844628" class="l-footer__link">
            <div class="l-footer__icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/pm/tel-icon.webp" width="190" height="206" alt="電話のアイコン" /></div>
            <p><img src="<?php echo get_template_directory_uri(); ?>/assets/images/pm/tel-time.webp" width="776" height="179" alt="0120-844-628 受付時間 10:00-19:00 [平日]" /></p>
          </a>
          <p class="l-footer__stop-text">配信停止をご希望の場合は<a href="" class="l-section__link" target="_blank" rel="noopener">こちら</a>からお手続きください。</p>
        </div>
        <div class="l-footer__info">
          <p class="l-footer__info-bold">株式会社フィナンシャル・エージェンシー</p>
          <p>〒150-0013 東京都渋谷区恵比寿１丁目19-19<br />恵比寿ビジネスタワー 16F</p>
        </div>
        <p class="l-footer__approval-number">承認番号：xxxxx</p>
      </div>
    </div>
    <p class="l-footer__copyright js-fade">&copy; FINANCIAL AGENCY, Inc.</p>
  </footer>

  </main>

  <?php wp_footer(); ?>

  <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.3/dist/js/splide.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-auto-scroll@0.4.1/dist/js/splide-extension-auto-scroll.min.js"></script>
  <script defer src="<?php echo get_template_directory_uri(); ?>/assets/js/pm/bundle.js"></script>
</body>
</html>