<!DOCTYPE html>
<html lang="ja">

<head>
  <?php get_header(); ?>
</head>

<body>
  <?php get_template_part('parts/header') ?>
  <main class="max-w-4xl mt-5">
    <h2 class="text-5xl text-center mb-4">Contact</h2>
    <?php the_content(); ?>
  </main>
  <?php get_footer(); ?>
</body>
<?php get_template_part('parts/footer') ?>

</html>