<?php 
/* 
Template name: Home Layout Template
*/

get_header(); ?>

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>


  <main>
    <article class="container clearfix">
      <div class="col-md-7 nopad">
        <div class="clearfix">
          <h2 class="h1 title"><?php the_field('main_title'); ?></h2>
          <p><?php the_content(); ?></p>
        </div>
        <?php if( have_rows('cta_sections') ):
          while ( have_rows('cta_sections') ) : the_row(); ?>
        
        <div class="clearfix buffer-margin-50">
          <div class="col-md-8 nopad">
            <h2 class="h2 title"><?php the_sub_field('section_title'); ?></h2>
          </div>
          <div class="col-md-8 no-padding-left">
            <?php the_sub_field('section_body_text'); ?>
          </div>
          <div class="col-md-4 text-center">
            <a href="<?php the_sub_field('cta_button_url'); ?>" class="btn btn-cta"><?php the_sub_field('cta_button_text'); ?></a>
          </div>
        </div>

          <?php endwhile;
        endif; ?>
      </div>

      <div class="col-md-4 col-md-offset-1">
        <?php get_sidebar(); ?>
      </div>
    </article>
  </main>

    <?php endwhile; ?>
<?php else : ?>
    
<p>No content found</p>
    
<?php endif; ?>

<?php get_footer(); ?>
