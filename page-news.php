<?php get_header(); ?>
<?php
/*
  Template Name: お問い合わせ
*/
?>
<div class="site-content">



  <?php if (have_posts()) :
    while (have_posts()) : the_post();
  ?>


      <section class="contactFormWrapping">



        <?php the_content(); ?>
      </section>

      



  <?php
    endwhile;
  endif;
  ?>


</div><!-- ./ site-content -->
<?php get_footer(); ?>