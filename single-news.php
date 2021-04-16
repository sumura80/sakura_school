<?php get_header(); ?>

<div class="site-content">

  <?php if (have_posts()) :
    while (have_posts()) : the_post();
  ?>
  <section class="newsWrap">
    <h2><?php the_title();?></h2>
    <div class="newsContent">
      <?php the_content();?>
    </div>
  </section>
  <a class="newsList" href="<?php echo get_post_type_archive_link( 'news' ) ?>">お知らせ一覧に戻る&gt;</a>

  <?php
    endwhile;
  endif;
  ?>


</div><!-- ./ site-content -->
<?php get_footer(); ?>