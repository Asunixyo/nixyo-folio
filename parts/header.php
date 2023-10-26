<header class="u-flex-space-between-x u-p3 max-w-4xl">
  <div class="c-logo u-flex-center u-mx5">
    <a href="<?php echo home_url(); ?>">
      <img src="<?php echo get_template_directory_uri(); ?>/images/logo-asunixyo.png" alt="ロゴ" />
    </a>
  </div>
  <ul class="l-header-nav u-flex-space-between-x u-flex-center-y u-text-bold">
    <li>
      <a href="<?php echo home_url(); ?>">Home</a>
    </li>
    <li class="u-mx1">
      <a href="<?php echo home_url('/archive/'); ?>">Blog</a>
    </li>
    <li>
      <a href="<?php echo get_permalink(get_page_by_path('about')); ?>">About</a>
    </li>
    <li>
      <a href="<?php echo get_permalink(get_page_by_path('contact')); ?>">Contact</a>
    </li>
  </ul>
</header>