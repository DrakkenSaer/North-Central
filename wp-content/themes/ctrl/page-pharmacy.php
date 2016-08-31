<?php 
/* 
Template name: Pharmacy Layout Template
*/

get_header(); ?>

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>


  <main>
    <article class="container clearfix">
      <header class="clearfix col-lg-12">
        <strong class="text-uppercase bold strong-text"><?php the_field('subtitle'); ?></strong>
        <h2 class="h2"><?php the_field('main_title'); ?></h2>
        <div class="page-excerpt col-md-4 nopad"><?php the_field('main_text'); ?></div>
        <div class="col-md-4">
          <a href="<?php the_field('main_cta_url'); ?>" class="btn btn-cta"><?php the_field('main_cta'); ?></a>
        </div>
      </header>

      <div class="clearfix"></div>

      <div class="content clearfix">
        <div class="col-md-7 nopad">
          <div class="content-intro clearfix">
             <div class="col-md-6 content-intro-stock">
               <strong style="background:url(/wp-content/uploads/2016/07/compounding.jpg) bottom center no-repeat; background-size:cover;"></strong>
             </div>
             <div class="col-sm-6 content-intro-quote nopad">
               <div class="content-quote">
                 <span class="fa fa-quote-right"></span>
                 <p><?php the_field('sub_text'); ?></p>
                 <strong class="bold up">Anthony,<br>McKenney, Tx</strong>
               </div>
             </div>
          </div>
          <div class="clearfix">
            <?php the_content(); ?>
          </div>
        </div>

        <div class="col-md-5">
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
