<!-- hamburger -->
<div class="outer-menu md:hidden">
  <input class="checkbox-toggle" type="checkbox" />
  <div class="hamburger">
    <div></div>
  </div>
  <div class="menu">
    <div>
      <div>
        <ul class="text-base">
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
  </div>
</div>