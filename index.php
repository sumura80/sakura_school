  <?php get_header(); ?>
  <div class="site-content">
  
  <?php if(have_posts()):
    while(have_posts()): the_post();
    ?>
    <!-- トップ画像を表示 -->
 
  <?php 
  endwhile;
    endif;
  ?>
  </div><!-- ./ site-content -->
  <?php get_footer(); ?>