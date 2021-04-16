<?php get_header(); ?>
<?php
/* カスタムフィールドで個別指導を読み込むための記述
Template Name: 個別指導
*/
?>
<div class="site-content">

  <section class="privateLessonTitle">
    <h2>個別指導に力を入れております</h2>
  </section>
  <section class="elementaryWrap" id="elementaryUrl">
    <div class="elementaryLeft">
      <div class="elementaryTitle"><?php echo CFS()->get('elementary_title'); ?></div>
      <div class="elementaryHead"><?php echo CFS()->get('elementary_head'); ?></div>
      <div class="elementaryContent"><?php echo CFS()->get('elementary_content'); ?></div>
    </div>
    <div class="elementaryRight">
      <div class="elementaryImg"><img src="<?php echo CFS()->get('elementary_img'); ?>" alt="小学生個別"></div>
    </div>
  </section>

  <div class="horizontalLine"> </div>

  <section class="juniorWrap" id="juniorUrl">
    <div class="juniorLeft">
      <div class="juniorTitle"><?php echo CFS()->get('junior_title'); ?></div>
      <div class="juniorHead"><?php echo CFS()->get('junior_head'); ?></div>
      <div class="juniorContent"><?php echo CFS()->get('junior_content'); ?></div>
    </div>
    <div class="juniorRight">
      <div class="juniorImg"><img src="<?php echo CFS()->get('junior_img'); ?>" alt="中学生個別"></div>
    </div>
  </section>


  <div class="horizontalLine"> </div>


  <section class="highWrap" id="highUrl">
    <div class="highLeft">
      <div class="highTitle"><?php echo CFS()->get('high_title'); ?></div>
      <div class="highHead"><?php echo CFS()->get('high_head'); ?></div>
      <div class="highContent"><?php echo CFS()->get('high_content'); ?></div>
    </div>
    <div class="highRight">
      <div class="highImg"><img src="<?php echo CFS()->get('high_img'); ?>" alt="高校生個別"></div>
    </div>
  </section>



  <!-- <?php if (have_posts()) :
          while (have_posts()) : the_post();
        ?>

  
  <?php
          endwhile;
        endif;
  ?> -->
</div><!-- ./ site-content -->
<?php get_footer(); ?>