<?php

get_header();

?>

<div id="carousel">
  <div class="constrained save-the-date">
    <h2>MozFest 2015</h2>
    <h3>November 6-8</h3>
    <a class="button" href="https://sendto.mozilla.org/page/s/mozfest-2015-save-the-date">Save the date</a>
  </div>
</div>

<div id="content" class="splash-2014">
  <div class="constrained">
    <div id="home-sidebar" class="section">
      <div class="section">
        <h3>Missed out on MozFest 2014?</h3>
        <p>It's not too late to participate! Remix our <a href="https://jess.makes.org/thimble/LTgzMjI4MTY=/mozfest-remotee-challenge">Remotee Challenge</a>.</p>
      </div>
      <?php if ( is_active_sidebar( "home-primary" ) ) : ?>
      <div id="blogs-list" class="section">
        <?php dynamic_sidebar( "home-primary" ); ?>
      </div>
      <?php endif; ?>
    </div>
    <div id="home-main-wrapper">
      <a href="<?php echo get_template_directory_uri(); ?>/media/img/MozillaFestival2014_WrapUpGraphic_Web_1240x4733.jpg"><img src="<?php echo get_template_directory_uri(); ?>/media/img/MozillaFestival2014_WrapUpGraphic_Web_620x2367.jpg" alt="MozFest 2014 Wrap-up graphic"  /></a>
    </div>
  </div>
</div>
<?php

get_footer();
