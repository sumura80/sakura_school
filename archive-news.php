<?php get_header(); ?>
  <div class="site-content">
    <section class="newsArchiveWrap">
    <h2>お知らせ一覧</h2>
      <?php 
      if(have_posts()): 
        while(have_posts()): the_post();?>
       
      <div class="newsArciveTitle">
         <a href="<?php the_permalink();?>"><?php the_title();?></a>
      </div>

    <?php endwhile;
      endif;?>
    </section>
  
 
  </div><!-- ./ site-content -->
  <?php get_footer(); ?>