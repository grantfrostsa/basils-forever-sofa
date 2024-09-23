<footer class="footer__main-footer">
    <div class="container">
      <div class="footer__link-menu-box">
        <h3 class="footer__menu-heading">Quick Links</h3>
        <?php
          wp_nav_menu(array(
            'theme_location' => 'footerQuickLinksMenuLocation'
          ));
        ?>  
      </div>
      <div class="footer__logo-box">
        <a href="<?php echo site_url(''); ?>"><img src="<?php echo get_theme_file_uri('assets/imgs/logo-no-text.png'); ?>" alt="Basil's Forever Sofa Logo" class="footer__logo"></a>
        <p class="footer__copyright">Basil's Forever Sofa</p>
        <p class="footer__copyright">Copyright &copy; 2024</p>
        <div class="footer__socials-box">
            <a href="https://www.instagram.com/basils_forever_sofa?igsh=YWZjMnNkZXYwNGoz" class="footer__social-link" target="_blank"><i class='bx bxl-instagram-alt'></i></a>
            <a href="https://www.facebook.com/profile.php?id=61555839989868" class="footer__social-link" target="_blank"><i class='bx bxl-facebook-square'></i></a>
        </div>
      </div>
      <div class="footer__info-box">
        <p class="footer__info">Basil's Forever Sofa helps dogs in England. Regrettably, due to size restrictions, only special cases of surrendering animals will be entertained. </p>
        <a href="https://www.paypal.com/paypalme/basilsforeversofa" class="footer__link"><i class='bx bxl-paypal'></i>Donate via Paypay</a>
      </div>
    </div>
  </footer>
  <?php wp_footer();?>
</body>
</html>