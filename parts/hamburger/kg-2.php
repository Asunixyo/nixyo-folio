<!-- hamburger -->
<div class="font-open-sans md:hidden" id="navArea">
  <nav>
    <div class="inner">
      <ul class="font-mochiy whitespace-nowrap">
        <li>
          <a href="<?php echo get_permalink(get_page_by_path('course')); ?>">
            基本情報 / コース
          </a>
        </li>
        <li>
          <a href="<?php echo get_permalink(get_page_by_path('graduation')); ?>">
            卒業する為に必要なこと
          </a>
        </li>
        <li>
          <a href="<?php echo get_permalink(get_page_by_path('activity')); ?>">
            特別活動
          </a>
        </li>
        <li>
          <a href="<?php echo get_permalink(get_page_by_path('life')); ?>">
            スクールライフ
          </a>
        </li>
        <li>
          <a href="<?php echo get_permalink(get_page_by_path('support')); ?>">
            サポート
          </a>
        </li>
        <li>
          <a href="<?php echo get_permalink(get_page_by_path('message')); ?>">
            ご挨拶
          </a>
        </li>
        <li>
          <a href="<?php echo get_post_type_archive_link('setagaya'); ?>">
            世田谷キャンパス
          </a>
        </li>
        <li>
          <a href="<?php echo get_post_type_archive_link('nishinippori'); ?>">
            西日暮里駅前キャンパス
          </a>
        </li>
        <li>
          <a href="<?php echo get_permalink(get_page_by_path('setagaya-contact')); ?>">
            世田谷キャンパス<br>お問い合わせ
          </a>
        </li>
        <li>
          <a href="<?php echo get_permalink(get_page_by_path('nishinippori-contact')); ?>">
            西日暮里駅前キャンパス<br>お問い合わせ
          </a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="toggle_btn">
    <span></span>
    <span></span>
    <span></span>
  </div>
  <div id="mask"></div>
</div>