<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>


  <main>
    <article class="page clearfix">
      <header class="clearfix col-lg-12">
        <strong class="up bold">North Central Pharmacy Services</strong>
        <h2 class="h2"><?php the_title(); ?></h2>
        <div class="page-excerpt col-md-4 nopad"><?php the_content(); ?></div>
        <div class="col-md-4">
          <a href="#" class="btn btn-cta">Have Questions?</a>
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
                 <p>Vestibulum et justo finibus, viverra urna ut, mattis dui. Donec consectetur ante tortor, vel lacinia nisl mattis nec.</p>
                 <strong class="bold up">Anthony,<br>McKenney, Tx</strong>
               </div>
             </div>
          </div>

            <div class="clearfix">
            
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

            <p>Pellentesque elementum ac erat vitae rutrum. Mauris sollicitudin turpis neque, sit amet scelerisque odio finibus ut. Integer tincidunt justo ipsum. Quisque non urna nec arcu bibendum mollis.</p>

            <h4>Lorem ipsum dolor sit amet</h4>

            <p>Vestibulum et justo finibus, viverra urna ut, mattis dui. Donec consectetur ante tortor, vel lacinia nisl mattis nec.</p>

            <p>Phasellus auctor diam velit, ac faucibus eros gravida id. Cras vehicula feugiat massa. Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut tincidunt ante sem, eget egestas sapien luctus ac. Nulla ut dolor risus.</p>

            <p>Mauris accumsan justo massa, nec hendrerit leo elementum vitae.</p>

            </div>

        </div>

        <div class="col-md-5">

          <div class="content-faqs">
            <h2 class="h2">Compounding FAQ</h2>

            <div class="faq">
              <h4 class="up bold"><a href="#">How do I start the compounding service?</a></h4>
              <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque commodi ipsa a maxime consectetur accusamus mollitia.</p>
              </div>
            </div>

            <div class="faq">
              <h4 class="up bold"><a href="#">Do you offer different flavors?</a></h4>
            </div>

            <div class="faq">
              <h4 class="up bold"><a href="#">Can I combine more than one medication?</a></h4>
            </div>

            <div class="faq">
              <h4 class="up bold"><a href="#">What packing options do you offer?</a></h4>
            </div>
          </div>

          <div class="content-cta">
             <span class="fa fa-circle"></span>

            <div class="col-sm-8 col-sm-offset-2">
              <h2 class="text-center buffer-margin-50 no-margin-top">Compounding getting started</h2>
            </div>

             <div class="content-cta-item clearfix">
               <div class="col-sm-2">
                 <span class="fa fa-phone"></span>
               </div>
               <div class="col-sm-10">
                 <strong class="up bold">By Phone</strong>
                 <p>Nullam vel ligula ac mauris sagittis vestibulum.</p>
               </div>
             </div>

             <div class="content-cta-item clearfix">
               <div class="col-sm-2">
                 <span class="fa fa-map-marker"></span>
               </div>
               <div class="col-sm-10">
                 <strong class="up bold">In Person</strong>
                 <p>Nullam vel ligula ac mauris sagittis vestibulum.</p>
               </div>
             </div>

          </div>

        </div>
      </div>
    </article>
  </main>

    <?php endwhile; ?>
<?php else : ?>
    
<p>No content found</p>
    
<?php endif; ?>

<?php get_footer(); ?>
