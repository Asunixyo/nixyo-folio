<!DOCTYPE html>
<html lang="ja">

<head>
  <?php get_header(); ?>
</head>

<body>
  <?php get_template_part('parts/header') ?>
  <main class="u-max-w-content">
    <div class="p-profile-container-content-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/front-page-bg.png');" alt="背景画像">
      <div class="u-flex-start-x u-mt10">
        <p class="c-3-title u-w-60">
          名前テキスト名前テキスト名前テキスト名前テキスト名前テキスト
        </p>
      </div>
      <div class="u-flex-end-x u-mt20">
        <p class="u-w-80">
          自己紹介自己紹介自己紹介自己紹介自己紹介自己紹介自己紹介自己紹介
          自己紹介自己紹介自己紹介自己紹介自己紹介自己紹介自己紹介自己紹介
          自己紹介自己紹介自己紹介自己紹介自己紹介自己紹介自己紹介自己紹介
          自己紹介自己紹介自己紹介自己紹介自己紹介自己紹介自己紹介自己紹介
          自己紹介自己紹介自己紹介自己紹介自己紹介自己紹介自己紹介自己紹介
        </p>
      </div>
    </div>
    <section class="u-mt5">
      <h2 class="c-secondary-4-title u-text-center">About</h2>
      <div class="u-flex-center u-p3">
        <img src="<?php echo get_template_directory_uri(); ?>/images/about-face.png" alt="顔イラスト" />
      </div>
      <p class="u-text-center">
        テキストテキストテキストテキストテキストテキスト
      </p>
      <div class="u-flex-end-x u-mr3 u-mt7">
        <a href="http://localhost/asunixyo/about/">
          <div class="c-more-circle-arrow">
            <span></span>
          </div>
        </a>
      </div>
    </section>
    <section class="u-mt5">
      <h2 class="c-secondary-4-title u-text-center">Skill</h2>
      <div class="p-index-content-skill-container u-grid-3 u-grid-2-md u-grid-1-sm u-mx3">
        <div class="u-p1 c-card-pickup u-mt3">
          <div class="c-card-img u-flex-center">
            <i class="fab fa-html5"></i>
          </div>
          <div class="c-card-skill-text u-mt5">
            <div class="c-secondary-3-title u-flex-center">HTML</div>
            <p class="u-mt1 c-card-pickup-text">
              半年間の実務経験を通じて、パーツ単位から全体のレイアウトまでのデザインを実現する能力を磨き上げました。特に、レスポンシブデザインにも対応し、様々なデバイスでの閲覧を考慮したレイアウト作成が得意です。
            </p>
          </div>
        </div>
        <div class="u-p1 c-card-pickup u-mt3">
          <div class="c-card-img u-flex-center">
            <i class="fab fa-css3-alt"></i>
          </div>
          <div class="c-card-skill-text u-mt5">
            <div class="c-secondary-3-title u-flex-center">CSS</div>
            <p class="u-mt1 c-card-pickup-text">
              実務でのコーディング経験があり、デザインを忠実に再現することができます。これにより、ウェブページのビジュアル面での要求をしっかりと捉え、実現することができます。
            </p>
          </div>
        </div>
        <div class="u-p1 c-card-pickup u-mt3">
          <div class="c-card-img u-flex-center">
            <i class="fab fa-wordpress"></i>
          </div>
          <div class="c-card-skill-text u-mt5">
            <div class="c-secondary-3-title u-flex-center">wordPress</div>
            <p class="u-mt1 c-card-pickup-text">
              WordPressに関しては、ショートコードの知見を持っています。また、その深い部分についても学習を進めており、今後はWordPressの高度なカスタマイズやテーマ作成にも挑戦していく予定です。
            </p>
          </div>
        </div>
      </div>
      <div class="u-flex-end-x u-mr3 u-mt7">
        <a href="http://localhost/asunixyo/about/">
          <div class="c-more-circle-arrow">
            <span></span>
          </div>
        </a>
      </div>
    </section>
    <section class="u-mt5">
      <h2 class="c-secondary-4-title u-text-center">Blog</h2>
      <!-- 呼ぶ -->
      <?php display_custom_posts_with_template('post', 3, 'parts/blog-post-template'); ?>
      <div class="u-flex-end-x u-mr3 u-mt7">
        <a href="http://localhost/asunixyo/archive/">
          <div class="c-more-circle-arrow">
            <span></span>
          </div>
        </a>
      </div>
    </section>
  </main>
  <?php get_footer(); ?>
</body>
<?php get_template_part('parts/footer') ?>

</html>