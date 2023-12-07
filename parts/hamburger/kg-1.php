<!-- hamburger -->
<div class="md:hidden" id="menu">
  <input type="checkbox" id="menu-btn-check">
  <label for="menu-btn-check" id="menu-btn"><span></span></label>
  <div id="menu-content">
    <ul class="mt-16">
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
          世田谷キャンパスお問い合わせ
        </a>
      </li>
      <li>
        <a href="<?php echo get_permalink(get_page_by_path('nishinippori-contact')); ?>">
          西日暮里駅前キャンパスお問い合わせ
        </a>
      </li>
    </ul>
  </div>
</div>