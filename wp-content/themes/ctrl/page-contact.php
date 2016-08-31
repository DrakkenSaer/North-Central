<?php 
/* 
Template name: Contact Layout Template
*/

get_header(); ?>

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>


  <main>
    <article class="container clearfix">
      <div class="col-md-7 nopad">
        <div class="clearfix buffer-padding-25 border-bottom-blue-1">
          <h2 class="h1 title"><?php the_field('main_title'); ?></h2>
          <p><?php the_field('sub_text'); ?></p>
        </div>
        <div class="clearfix buffer-margin-50 submit-green">
          <?php the_content(); ?>
        </div>
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
