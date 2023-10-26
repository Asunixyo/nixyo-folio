<!DOCTYPE html>
<html lang="ja">

<head>
  <?php get_header(); ?>
</head>

<body>
  <?php get_template_part('parts/header') ?>
  <main class="max-w-4xl">
    <!-- 呼ぶ -->
    <?php display_custom_posts_with_template('post', 5, 'parts/blog-post-template'); ?>

    <?php if (function_exists('wp_pagenavi')) {
      wp_pagenavi();
    } ?>

    <!-- <?php
          $link = get_next_posts_link('古い記事へ &rarr;');
          if ($link) {
            $link = str_replace('<a', '<a class=""', $link);
            echo $link;
          }
          ?> -->
  </main>
  <?php get_footer(); ?>
</body>
<?php get_template_part('parts/footer') ?>

</html>