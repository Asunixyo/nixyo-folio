<!DOCTYPE html>
<html lang="ja">

<head>
  <?php get_header(); ?>
</head>

<body>
  <?php get_template_part('parts/header') ?>
  <main class="p-single max-w-4xl u-grid-70-30">
    <div class="u-px2">
      <?php
      $title = get_the_title();
      if (!empty($title)) : ?>
        <h1><?php echo $title; ?></h1>
      <?php else : ?>
        <h1>タイトルのない投稿</h1>
      <?php endif; ?>
      <div class="u-flex-center u-my2 u-flex-space-between-x">
        <div class="u-mr2">
          <i class="fab fa-html5"></i>
          <i class="fab fa-html5"></i>
          <i class="fab fa-html5"></i>
        </div>
        <div>2023.09.03</div>
      </div>
      <?php
      if (has_post_thumbnail() && get_the_post_thumbnail_url() != "") {
        echo '<img src="' . get_the_post_thumbnail_url() . '" alt="メイン画像">';
      } else {
        echo '<img src="' . get_template_directory_uri() . '/images/no_image.png"  alt="イメージなし">';
      }
      ?>
      <?php the_content(); ?>
    </div>
    <aside>
      <p>Index</p>
      <ol>
        <li>111</li>
        <li>222</li>
        <li>333</li>
        <li>444</li>
        <li>555</li>
      </ol>
    </aside>
  </main>
  <?php get_footer(); ?>
</body>
<?php get_template_part('parts/footer') ?>

</html>