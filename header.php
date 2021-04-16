<!DOCTYPE html>
<!-- <html lang="en"> -->
<html <?php language_attributes(); ?>>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
        integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div class="container">
    <header class="site-header">
      <div class="top-header">
        <div class="header-left">
          <div class="header-logo">
            <h1><a class="header-logo-name" href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_url(bloginfo('name')); ?></a></h1>
          </div>
        </div>
       
        <div class="header-right">
        <div class="menu-toggle"></div>
          <div class="info-wrap">
            <div class="hour-info">営業時間:平日9:00 ~17:00</div>
            <div class="phone-info">03-0000-0000</div>
          </div>
          <div class="trial-btn">
            <a href="#">無料体験</a>
          </div>
        </div>
      </div><!-- ./top-header -->


      <nav class="site-nav">
        <?php
        //メニューIDを取得する
        $menu_name = 'global_nav';
        $locations = get_nav_menu_locations();
        $menu = wp_get_nav_menu_object($locations[$menu_name]);
        $menu_items = wp_get_nav_menu_items($menu->term_id);
        ?>
        <ul class="flex site-nav-list">
          <?php foreach ($menu_items as $item) : ?>
            <li><a href="<?php echo esc_attr($item->url); ?>"><?php echo esc_html($item->title); ?></a></li>
          <?php endforeach; ?>
        </ul>
      </nav>
    </header>
  </div><!-- ./ container -->



  <?php
  if (is_front_page()) :
    if (have_posts()) :
      while (have_posts()) : the_post();
  ?>
        <!-- トップ画像を表示 -->
        <?php
        if (has_post_thumbnail()) :
          // アイキャッチ画像が保存してある場合
          $id = get_post_thumbnail_id();
          $img = wp_get_attachment_image_src($id, 'home-banner');
        else :
          // アイキャッチ画像が保存してない場合
          $img = array(get_template_directory_uri() . '/img/default.jpg');
        endif;
        ?>
        <div class="home-banner">
          <img src="<?php echo $img[0]; ?>" alt="home banner">
        </div>
      <?php
      endwhile;
    endif;
  elseif (is_page()) :
    if (have_posts()) :
      while (have_posts()) : the_post(); ?>
        <!-- トップ画像を表示 -->
        <?php
        if (has_post_thumbnail()) :
          // アイキャッチ画像が保存してある場合
          $id = get_post_thumbnail_id();
          $img = wp_get_attachment_image_src($id, 'page-banner');
        else :
          // アイキャッチ画像が保存してない場合
          $img = array(get_template_directory_uri() . '/img/default.jpg');
        
        endif;
        ?>
        <div class="home-banner">
          <?php
          if (!$img == 'http://cramschool.local/wp-content/themes/sakura_wordpress/img/default.jpg') :
          ?>
            <!-- キャプチャーが保存してあれば -->
            <img src="<?php echo $img[0]; ?>" alt="キャプチャー画像">
          <?php else : ?>
            <!-- キャプチャーしてなくてデフォルト画像なら -->
            <img src="<?php echo $img[0]; ?>" alt="Default" style="height: 200px;">
          <?php endif; ?>
        </div>
  <?php
      endwhile;
    endif;
  endif;
  ?>





  <div class="container">