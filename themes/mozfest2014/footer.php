    <div id="footer">
      <div class="constrained">
        <?php
          echo mf2012_menu('footer');
          echo mf2012_menu('contact');
          echo mf2012_menu('previously');
        ?>
        <div class="logo-menu">
          <a href="https://webmaker.org/"><img id="webmaker-wordmark" src="http://2014.mozillafestival.org/wp-content/uploads/2014/05/webmaker_whitewordmark.png" /></a>
          <div>Tools, curriculum and communities dedicated to teach the web.</div>
        </div>
        <div class="logo-menu">
          <a href="https://party.webmaker.org/"><img id="makerparty-wordmark" src="http://2014.mozillafestival.org/wp-content/uploads/2014/05/makerparty_whitewordmark.png" /></a>
          <div>Mozilla's global campaign to teach the web.</div>
        </div>
      </div>
    </div>
    <div id="footer-bar">
      <div class="constrained">
        <div class="left">
          <img id="mozfest-wordmark" src="http://2014.mozillafestival.org/wp-content/uploads/2014/05/mozfest_whitewordmark.png" />
        </div>
        <div id="social-media">
          <a href="https://secure.flickr.com/photos/mozillaeu/sets/72157636932514584/"><i class="fa fa-flickr"></i></a>
          <a href="https://twitter.com/mozillafestival"><i class="fa fa-twitter-square"></i></a>
        </div>
      </div>
    </div>
    <?php @wp_footer(); ?>
    <script src="//www.mozilla.org/tabzilla/media/js/tabzilla.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/media/js/ui.js"></script>
  </body>
</html>
