<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>


  <main>
    <article class="container clearfix">

      <div class="content clearfix">
        <div class="col-md-5 nopad">
          <div class="clearfix">
            <h2 class="h1 title"><?php the_field('main_title'); ?></h2>
            <p><?php the_content(); ?></p>
          </div>
          <div class="clearfix buffer-margin-50">
            <div class="col-md-8 nopad">
              <h2 class="h2 title"><?php the_field('cta_title'); ?></h2>
            </div>
            <div class="col-md-8 no-padding-left">
              <?php the_field('cta_body_text'); ?>
            </div>
            <div class="col-md-4 text-center">
              <a href="<?php the_field('cta_button_url'); ?>" class="btn btn-cta"><?php the_field('cta_button_text'); ?></a>
            </div>
          </div>
          <div class="clearfix buffer-margin-50">
            <div class="col-md-8 nopad">
              <h2 class="h2 title"><?php the_field('subscribe_section_title'); ?></h2>
              <p><?php the_field('subscribe_section_text'); ?></p>
              <div class="buffer-margin-40 no-margin-bottom subscribe-form">
                <?php the_field('subscribe_section_form'); ?>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-md-offset-3">
          <?php get_sidebar(); ?>
        </div>
      </div>
    </article>
  </main>

    <?php endwhile; ?>
<?php else : ?>
    
<p>No content found</p>
    
<?php endif; ?>

<?php get_footer(); ?>
