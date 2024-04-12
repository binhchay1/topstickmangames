<!doctype html>
<!--[if IE 8]><html class="ie-8" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 9]><html class="ie-9" <?php language_attributes(); ?>><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html <?php language_attributes(); ?>><!--<![endif]-->
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open();  ?>
  <?php get_template_part( "partials/featured" ); ?>

  <header id="header">
    <div class="header_wrap">
      <div class="logo">
        <a href="<?php echo home_url(); ?>" title="<?php bloginfo('name');?>">
          <?php if ( myfriv_get_option('logo') ) { ?>
          <img src="<?php echo myfriv_get_option('logo'); ?>">
           <?php } else { ?>
           <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png">
           <?php } ?>
        </a>
      </div>

      <div class="btns">
        <ul>
          <li><a href="<?php echo home_url(); ?>" title="<?php _e("Home", "myfriv"); ?>"><span class="icon icon-home"></span></a></li>

          <?php if ( ! myfriv_get_option( 'feat_games' ) ) : ?>
          <li><a href="#" class="btn-slide" title="<?php _e("Most Played", "myfriv"); ?>"><span class="icon icon-star"></span></a></li>
          <?php endif; ?>

          <li class="empty">|</li>
        </ul>
      </div>

      <div class="menu">
        <a class="btn"><?php _e("Categories", "myfriv"); ?> <span class="icon icon-angle-down"></span></a>
        <ul class="actions">
          <?php wp_list_categories('orderby=name&title_li='); ?>
        </ul>
      </div>

      <div class="header-search">
        <form method="get" id="searchform" action="<?php bloginfo('url'); ?>">
          <input type="submit" class="submit" value="" />
          <input type="text" placeholder="<?php _e("Search Games...", 'myfriv'); ?>" name="s" id="s" class="text" />
        </form>
      </div>

      <div class="social">
        <ul>
          <?php if ( myfriv_get_option('facebook_url') ) { ?><li class="facebook"><a href="<?php echo myfriv_get_option('facebook_url'); ?>"><span class="icon icon-facebook"></span></a></li><?php } ?>
          <?php if (myfriv_get_option('twitter_url')) { ?><li class="twitter"><a href="<?php echo myfriv_get_option('twitter_url'); ?>"><span class="icon icon-twitter"></span></a></li><?php } ?>
          <?php if (myfriv_get_option('plus_url')) { ?><li class="gplus"><a href="<?php echo myfriv_get_option('plus_url'); ?>"><span class="icon icon-gplus"></span></a></li><?php } ?>
          <?php if (myfriv_get_option('youtube_url')) { ?><li class="youtube"><a href="<?php echo myfriv_get_option('youtube_url'); ?>"><span class="icon icon-youtube-play"></span></a></li><?php } ?>
        </ul>
      </div>
    </div>
  </header>
