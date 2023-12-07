<div class="u-flex-md-xl u-flex-md u-m3">
  <div class="c-post-img u-flex-center u-mx-auto u-flex-shrink">
    <a href="<?php the_permalink(); ?>">
      <?php
      if (has_post_thumbnail() && get_the_post_thumbnail_url() != "") {
        echo '<img src="' . get_the_post_thumbnail_url() . '" alt="メイン画像">';
      } else {
        echo '<img src="' . get_template_directory_uri() . '/images/no_image.png"  alt="イメージなし">';
      }
      ?>
    </a>
  </div>
  <div class="u-flex-space-between-y u-ml2 u-p1 u-ml0-sm u-mt1-sm">
    <p><?php echo get_the_date(); ?></p>
    <a href="<?php the_permalink(); ?>">
      <p class="c-3-title u-ellipsis-2">
        <?php
        $title = get_the_title();
        if (!empty($title)) :
          echo $title;
        else :
          echo "タイトルのない投稿";
        endif;
        ?>
      </p>
    </a>
    <a href="<?php the_permalink(); ?>">
      <p class="u-ellipsis-2"><?php the_excerpt(); ?></p>
    </a>
  </div>
</div>