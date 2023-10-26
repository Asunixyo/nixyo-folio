<!DOCTYPE html>
<html lang="ja">

<head>
  <?php get_header(); ?>
</head>

<body>
  <?php get_template_part('parts/header') ?>
  <main class="u-max-w-content u-mt5">
    <h2 class="c-secondary-4-title u-text-center u-mb4">Contact</h2>
    <div class="u-m2-sm-md">
      <?php the_content(); ?>
    </div>
  </main>
  <?php get_footer(); ?>
</body>
<?php get_template_part('parts/footer') ?>

</html>