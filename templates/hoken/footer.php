<?php
/**
 * hoken用フッターテンプレート
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
          <a href="tel:0120-921-907" class="l-footer__link">
            <div class="l-footer__icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/hoken/tel-icon.webp" width="190" height="206" alt="電話のアイコン" /></div>
            <p><img src="<?php echo get_template_directory_uri(); ?>/assets/images/hoken/tel-time.webp" width="776" height="179" alt="0120-921-907 受付時間 10:00-19:00 [平日]" /></p>
          </a>
          <p class="l-footer__stop-text">配信停止をご希望の場合は<a href="https://form.run/@project-planning-xDzhW6pGGYHG6JOD0lI2" class="l-section__link" target="_blank" rel="noopener">こちら</a>からお手続きください。</p>
        </div>
        <div class="l-footer__info">
          <p class="l-footer__info-bold">ディーニーズ株式会社</p>
          <p>〒144-0051<br />東京都大田区西蒲田7-25-7&emsp;グレワンビル</p>
        </div>
        <p class="l-footer__approval-number">【D50187】</p>
      </div>
    </div>
    <p class="l-footer__copyright js-fade">Copyright &copy; 2002-2025 Dneeds CO., LTD.</p>
  </footer>

  </main>

  <?php wp_footer(); ?>

  <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.3/dist/js/splide.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-auto-scroll@0.4.1/dist/js/splide-extension-auto-scroll.min.js"></script>
  <script defer src="<?php echo get_template_directory_uri(); ?>/assets/js/hoken/bundle.js"></script>
</body>
</html>