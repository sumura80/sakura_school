<?php get_header(); ?>
<div class="site-content">

  <?php if (have_posts()) :
    while (have_posts()) : the_post();
  ?>

      <section class="classBoxes">
        <a href="privatelesson/#elementaryUrl" class="elementaryBox classBox">小学生の個別指導</a>
        <a href="privatelesson/#juniorUrl" class="juniorHighBox classBox">中学生の個別指導</a>
        <a href="privatelesson/#highUrl" class="highSchoolBox classBox">高校生の個別指導</a>
      </section>


      <section class="callInfoWrap">
        <table border="1">
          <tr>
            <th class="callTitle">お気軽にお問い合わせください</th>
            <td class="callNum">0120-000-000
              <br>
              <span class="callTime">月～金：10時～21時、土・日：10時～19時</span>
            </td>
          </tr>
        </table>
      </section>

      <section class="reasonWrap">
        <div class="reasonTitle">
          <h2><span class="sakura">サクラ塾</span>を選ぶ<span class="blue">3つ</span>の理由</h2>
        </div>
        <div class="reasonBoxes">
          <section class="reasonBox">
            <div class="resonImage"><img src="<?php echo get_template_directory_uri(); ?>/img/reason1.jpg" alt="個別指導の画像"></div>
            <h3 class="reason-head">個別指導</h3>
            <p class="reasonContent">個別指導により、生徒様の弱点を把握し、的確に成績を伸ばしていきます。平均点が100点上がることも珍しくありません。</p>
            <a href="#">詳しく見る &gt;</a>
          </section>

          <section class="reasonBox">
            <div class="resonImage"><img src="<?php echo get_template_directory_uri(); ?>/img/reason2.jpg" alt="個別指導の画像"></div>
            <h3 class="reason-head">生徒の体験</h3>
            <p class="reasonContent">生徒様の体験をまとめました。生徒様の悩みや解決方法なども載せております。</p>
            <a href="#">詳しく見る &gt;</a>
          </section>
          <section class="reasonBox">
            <div class="resonImage"><img src="<?php echo get_template_directory_uri(); ?>/img/reason3.jpg" alt="個別指導の画像"></div>
            <h3 class="reason-head">保護者の声</h3>
            <p class="reasonContent">保護者様の方々からの要望をお伺いしております。定期的に保護者会などを開き、時間割についても改定しております。</p>
            <a href="#">詳しく見る &gt;</a>
          </section>
        </div>
      </section>


      <?php
        $args = array(
          'post_type' =>'news', //投稿タイプスラッグ
          'posts_per_page' => 5
        );
        $the_query = new WP_Query($args);
         if($the_query->have_posts()):
      ?>

      <section class="news">
        <div class="newsTitle">
          <h3>お知らせ</h3>
        </div>
        <div class="newsData">
        <?php while($the_query->have_posts()): $the_query->the_post(); ?>
          <dl>
            <a href="<?php the_permalink();?>">
              <dt><?php the_time('Y/m/d');?></dt>
              <dd><?php the_title();?></dd>
            </a>
          </dl>
          
          <?php  endwhile; ?>
          <?php 
                wp_reset_postdata();
              else: 
            endif;
            ?>
            

          <a class="newsList" href="<?php echo get_post_type_archive_link( 'news' ) ?>">お知らせ一覧を見る&gt;</a>
        </div>
      </section>

      <section class="trialFreeBtn">
        <a href="#">無料体験に申し込む</a>
      </section>



      <section class="mapLocation">
        <h2 class="mapTitle">東京教室</h2>
        <div class="mapAddress">
          <p>東京都新宿区東新宿2-21-410 <br>
            0120-000-000
          </p>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.4868970051425!2d139.689912015259!3d35.68963418019229!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188cd4b71a37a1%3A0xf1665c37f38661e8!2z5p2x5Lqs6YO95bqB!5e0!3m2!1sja!2sjp!4v1618125868216!5m2!1sja!2sjp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </section>


  <?php
    endwhile;
  endif;
  ?>
</div><!-- ./ site-content -->
<?php get_footer(); ?>




