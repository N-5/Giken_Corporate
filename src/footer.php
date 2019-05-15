<footer class="<?php if(is_tree(89)): ?><?php echo ('en') ?><?php elseif(is_tree(90)): ?><?php echo ('cn') ?><?php else: ?><?php echo ('jp') ?><?php endif; ?>">
  <div class="l-container">
      <div class="company">
        <div class="company-logo">
          <?php if(is_tree(89)): ?>
          <a href="<?php echo home_url(); ?>/en/">
          <?php elseif(is_tree(90)): ?>
          <a href="<?php echo home_url(); ?>/cn/">
          <?php else: ?>
          <a href="<?php echo home_url(); ?>">
          <?php endif; ?>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/common/logo.svg" alt="<?php bloginfo('name'); ?>"></a>
        </div>
        <div class="company-about">
          <?php if(is_tree(89)): ?>
          GIKEN CO., LTD.<br>3-2 Shimoshimizu-machi, Nomi, Ishikawa 923-1238<br>Tel.+81-761-51-5700 Fax.+81-761-51-5336 <br><br>
          Giken America Corp.<br>6147 Red Winesap Way, Dublin, Ohio 43016<br>Tel.+1-614-783-3477 Fax.+1-614-876-1824
          <?php elseif(is_tree(90)): ?>
          技研株式会社<br>邮编：923-1238<br>日本石川县能美市下清水町3番地2<br>Tel.+81-761-51-5700 Fax.+81-761-51-5336
          <?php else: ?>
          技研株式会社<br>〒923-1238<br>石川県能美市下清水町3番地2<br>TEL.0761-51-5700　FAX.0761-51-5336<br>
          <?php endif; ?>
        </div>
      </div>
      <div class="sitemap">
        <div class="sitemap-list sitemap-drower">
          <h3 class="heading" data-footer-drower>SERVICE</h3>
          <ul class="drower">
            <li class="item">
              <?php if(is_tree(89)): ?>
              <a href="<?php echo home_url(); ?>/en/service/automotive">AUTOMOTIVE</a>
              <?php elseif(is_tree(90)): ?>
              <a href="<?php echo home_url(); ?>/cn/service/automotive">汽车事业</a>
              <?php else: ?>
              <a href="<?php echo home_url(); ?>/service/automotive">自動車産業</a>
              <?php endif; ?>
            </li>
            <li class="item">
              <?php if(is_tree(89)): ?>
              <a href="<?php echo home_url(); ?>/en/service/aluminum">ALUMINUM</a>
              <?php elseif(is_tree(90)): ?>
              <a href="<?php echo home_url(); ?>/cn/service/aluminum">铝材事业</a>
              <?php else: ?>
              <a href="<?php echo home_url(); ?>/service/aluminum">アルミ事業</a>
              <?php endif; ?>
            </li>
            <li class="item">
              <?php if(is_tree(89)): ?>
              <a href="<?php echo home_url(); ?>/en/service/industrial/">INDUSTRIAL MACHINES</a>
              <?php elseif(is_tree(90)): ?>
              <a href="<?php echo home_url(); ?>/cn/service/industrial/">产业机械事业</a>
              <?php else: ?>
              <a href="<?php echo home_url(); ?>/service/industrial/">産業機械事業</a>
              <?php endif; ?>
            </li>
            <li class="item">
              <?php if(is_tree(89)): ?>
              <a href="<?php echo home_url(); ?>/en/service/partner/">PARTNER</a>
              <?php elseif(is_tree(90)): ?>
              <a href="<?php echo home_url(); ?>/cn/service/partner/">销售业绩</a>
              <?php else: ?>
              <a href="<?php echo home_url(); ?>/service/partner/">パートナー</a>
              <?php endif; ?>
            </li>
          </ul>
        </div>
        <div class="sitemap-list sitemap-drower">
          <h3 class="heading" data-footer-drower>VISION</h3>
          <ul class="drower">
            <li class="item">
              <?php if(is_tree(89)): ?>
              <a href="<?php echo home_url(); ?>/en/partner/">PARTNER</a>
              <?php elseif(is_tree(90)): ?>
              <a href="<?php echo home_url(); ?>/cn/movie/">MOVIE</a>
              <?php else: ?>
              <a href="<?php echo home_url(); ?>/movie/">MOVIE</a>
              <?php endif; ?>
            </li>
          </ul>
        </div>
        <div class="sitemap-list">
          <h3 class="heading">
            <?php if(is_tree(89)): ?>
            <a href="<?php echo home_url(); ?>/en/company/">COMPANY</a>
            <?php elseif(is_tree(90)): ?>
            <a href="<?php echo home_url(); ?>/cn/company/">COMPANY</a>
            <?php else: ?>
            <a href="<?php echo home_url(); ?>/company/">COMPANY</a>
            <?php endif; ?>
          </h3>
        </div>
        <?php if(is_tree(89)): ?>
        <?php elseif(is_tree(90)): ?>
        <?php else: ?>
        <div class="sitemap-list sitemap-drower">
          <h3 class="heading" data-footer-drower>RECRUIT</h3>
          <ul class="drower">
            <li class="item"><a href="<?php echo home_url(); ?>/recruit/newgraduate/">新卒採用</a></li>
            <li class="item"><a href="<?php echo home_url(); ?>/recruit/career/">経験者採用</a></li>
            <li class="item"><a href="<?php echo home_url(); ?>/recruit/voice/">先輩からのメッセージ</a></li>
          </ul>
        </div>
        <?php endif; ?>
        <div class="sitemap-list">
          <h3 class="heading">
            <?php if(is_tree(89)): ?>
            <a href="<?php echo home_url(); ?>/en/csr/">CSR</a>
            <?php elseif(is_tree(90)): ?>
            <a href="<?php echo home_url(); ?>/cn/csr/">CSR</a>
            <?php else: ?>
            <a href="<?php echo home_url(); ?>/csr/">CSR</a>
            <?php endif; ?>
          </h3>
        </div>
        <?php if(is_tree(89)): ?>
        <?php elseif(is_tree(90)): ?>
        <?php else: ?>
        <div class="sitemap-list">
          <h3 class="heading"><a href="<?php echo home_url(); ?>/news/">NEWS</a></h3>
        </div>
        <?php endif; ?>
        <div class="sitemap-list">
          <h3 class="heading">
            <?php if(is_tree(89)): ?>
            <a href="<?php echo home_url(); ?>/en/contact/">CONTACT</a>
            <?php elseif(is_tree(90)): ?>
            <a href="<?php echo home_url(); ?>/cn/contact/">CONTACT</a>
            <?php else: ?>
            <a href="<?php echo home_url(); ?>/contact/">CONTACT</a>
            <?php endif; ?>
          </h3>
        </div>
      </div>
    </div>
    <div class="footer-copy">
      <div class="l-container">
        <p class="popup-youtube">Copyright(c) GIKEN co.,ltd. All Right Reserved.</p>
      </div>
    </div>
</footer>
</div>
<?php wp_footer(); ?>

</body>
</html>
