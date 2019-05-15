<?php get_header(); ?>
<main id="error">
  <section class="error-notpage">
      <div class="l-container">
        <div class="error-notpage__title" data-inview>404 Not found</div>
        <p class="u-m" data-inview>
          <?php
          $url = $_SERVER['REQUEST_URI'];
          if(strstr($url,'cn')==true):
          ?>
          对不起，没有相应的页面。<br>
          如果您对此页面添加了书签，<br class="u-md_max">很抱歉给您带来麻烦，但请更改书签。
          <?php elseif(strstr($url,'en')==true): ?>
          Sorry, there is no corresponding page.<br>
          If you bookmark this page, sorry to trouble you, but please change the bookmark.
          <?php else: ?>
          大変申し訳ありませんが、<br class="u-md_max">該当ページがございません。<br>
          このページをブックマーク登録されていた方は、お手数ですがブックマークの変更を<br class="u-md_max">お願いいたします。
          <?php endif; ?>
        </p>
        <div class="m-link m-link__blueborder" data-inview>
          <?php
          $url = $_SERVER['REQUEST_URI'];
          if(strstr($url,'cn')==true):
          ?>
          <a href="<?php echo home_url(); ?>/cn/"><span>BACK TO TOP</span></a>
          <?php elseif(strstr($url,'en')==true): ?>
          <a href="<?php echo home_url(); ?>/en/"><span>BACK TO TOP</span></a>
          <?php else: ?>
          <a href="<?php echo home_url(); ?>"><span>BACK TO TOP</span></a>
          <?php endif; ?>
        </div>
      </div>
  </section>
</main>
<?php get_footer(); ?>
