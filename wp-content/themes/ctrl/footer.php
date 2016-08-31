    <footer id="end" class="clearfix flex">
      <div class="col-md-4 col-xs-12 end-cr">
        <div class="logo">
          <a href="/" class="up bold">North <br> Central <span>Pharmacy</span></a>
        </div>
        <div class="end-cr-cr">
          All rights reserved © 2016 <br>
          North Central Pharmacy
        </div>
      </div>
      <div class="col-md-8 col-xs-12 end-content clearfix">
        <div class="col-md-6 col-md-offset-1">
          <div class="end-contact" style="border-right: solid white 1px;">
            <h3>2741 Virginia Pkwy., #800 <br>
            McKinney, Texas 75071</h3>
            <a href="#">Hours</a> | <a href="#">Directions</a>
          </div>
        </div>
        <div class="col-md-5">
          <div class="end-contact">
            <h3><a href="tel:9725409900" class="text-white">(972) 540 9900</a></h3>
            <a href="mailto:<?php the_field('footer_contact_email', 'option'); ?>"><?php the_field('footer_contact_email', 'option'); ?></a>
          </div>
        </div>
    
        <div class="clearfix"></div>
    
        <div class="end-tools col-md-10 col-md-offset-1">
            <div class="end-tool col-md-4">
              <h5 class="up bold">Connect with us</h5>
              <div class="social">
                <?php $sms = get_field('social_media_profiles', 'option'); foreach ($sms as $sm) { ?>
                  <a href="<?php echo $sm['url']; ?>"><span class="fa <?php echo $sm['icon']; ?>"></span></a>
                <?php } ?>
              </div>
            </div>
            
            <div class="end-tool col-md-4">
              <h5 class="up bold">Navigate Our Site</h5>
              <?php
                $args = array(
                  'theme_location' => 'footer',
                  'menu_class' => 'nav'
                );
      
                wp_nav_menu($args); 
              ?>
            </div>
            
            <div class="end-tool col-md-4">
              <h5 class="up bold">Stay Updated</h5>
              Updates and specials in your inbox.
              <div class="subscribe-form-lite buffer-margin-10">
                <?php the_field('footer_subscribe_form', 'option'); ?>
              </div>
            </div>
        </div>
      </div>
    </footer>

    <?php wp_footer(); ?>
    </body>
</html>
