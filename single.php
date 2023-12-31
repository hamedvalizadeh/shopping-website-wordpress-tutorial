<html lang="en" dir="ltr">

<head>
  <?php get_header('head'); ?>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/style.css" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/menu.css" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/header.css" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/footer.css" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/bread-crumb.css" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/page-content.css" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/page-aside.css" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/post.css" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/comments.css">
</head>

<body>
  <?php get_header('menu'); ?>

  <div class="recotik-container">
    <div class="bread-crumb">
      <?php if (function_exists('rank_math_the_breadcrumbs'))
        rank_math_the_breadcrumbs(); ?>
    </div>
    <section class="page-content">
      <div class="post-head-image">
        <?php the_post_thumbnail('post-detail-image-size'); ?>
      </div>
      <div class="post-head-data">
        <span class="post-head-data-category">
          <?php the_category(','); ?>
        </span>
        <h1 class="post-head-data-title">
          <?php the_title(); ?>
        </h1>
        <p class="post-head-data-description">
          <?php echo wp_trim_words(get_the_excerpt(), 50, ' ...'); ?>
        </p>
        <div class="post-head-data-meta-info">
          <span class="post-head-data-commnet-count">
            <?php echo get_comments_number(); ?>
          </span>
          <span class="post-head-data-publish-date">
            <?php the_date(); ?>
          </span>
          <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><span class="post-head-data-auther">
              <?php echo get_the_author(); ?>
            </span></a>
        </div>
      </div>
      <div class="clear"></div>
      <div class="post-inner-data">
        <p>
          <?php the_content(); ?>
        </p>
      </div>
    </section>
    
    <?php get_sidebar('pgeaside'); ?>
    <section class="page-content recotic-comment">
      <?php comments_template(); ?>
    </section>
  </div>

  <?php get_footer('foot'); ?>

</body>

</html>