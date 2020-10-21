<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    <?=wp_title('&laquo;',true,'right')?>
      <?= bloginfo('name')?>
  </title>
  <?php wp_head();?>
</head>

<body>
  <div id="fb-root"></div>
  <script>
    (function (d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s);
      js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=401514826619301";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>
  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
        <?php the_custom_logo();?>
          <!-- <img src="<?php echo get_stylesheet_directory_uri();?>/img/logo.png" alt="Logo"> -->
        </div>
        <div class="col-sm-8">
          <?php dynamic_sidebar( 'logo-right' );?>
        </div>
      </div>
      <div class="row pb-3">
        <?php get_template_part('nav');?>
      </div>
    </div>
    <div class="container">
  <?php //the_field('show_banner', 'option'); ?>
