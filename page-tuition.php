<?php get_header(); ?>
<?php
/*
  Template Name: 授業料ページ
*/
?>
  <div class="site-content">
  
  <section class="tuitionWrap">
    <div class="tuitionInfo">
      <div class="tuitionTitle">授業料一覧</div>
      <div class="tuitionContent">
      サクラ塾は月謝制なので安心。
      合宿などの追加料金もありません。
      </div>
    </div>
    <div class="tuitionImg"><img src="<?php echo get_template_directory_uri();?>/img/tuition_img.jpg" alt="授業料画像"></div>
  </section>

  <section class="tuitionTable">
    <table border="1">
      <tr>
        <th>学年</th>
        <th>授業時間</th>
        <th>授業料/月</th>
      </tr>
      <tr>
        <td>小学生</td>
        <td><?php echo esc_html(CFS()->get('elementary_min')); ?>分</td>
        <td><?php echo esc_html(number_format(CFS()->get('elementary_price'))); ?>円</td>
      </tr>
      <tr>
        <td>中学生</td>
        <td><?php echo esc_html(CFS()->get('junior_min')); ?>分</td>
        <td><?php echo esc_html(number_format(CFS()->get('junior_price'))); ?>円</td>
      </tr>
      <tr>
        <td>高1</td>
        <td><?php echo esc_html(CFS()->get('high_1_min')); ?>分</td>
        <td><?php echo esc_html(number_format(CFS()->get('high_1_price'))); ?>円</td>
      </tr>
      <tr>
        <td>高2</td>
        <td><?php echo esc_html(CFS()->get('high_2_min')); ?>分</td>
        <td><?php echo esc_html(number_format(CFS()->get('high_2_price'))); ?>円</td>
      </tr>
      <tr>
        <td>高3</td>
        <td><?php echo esc_html(CFS()->get('high_3_min')); ?>分</td>
        <td><?php echo esc_html(number_format(CFS()->get('high_3_price'))); ?>円</td>
      </tr>
    </table>


    <div class="tuitionNote">
      <div class="entry">入学金：20,000円</div>
      <div class="material">教材費: 0円(授業料に含まれています)</div>
      <div class="adminFee">運営費：2,000円/月</div>
    </div>

  </section>




  </div><!-- ./ site-content -->
  <?php get_footer(); ?>