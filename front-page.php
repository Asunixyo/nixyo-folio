<!DOCTYPE html>
<html lang="ja">

<head>
  <?php get_header(); ?>
</head>

<body>
  <?php get_template_part('includes/parts/header') ?>
  <main class="max-w-4xl u-px2">
    <div class="p-profile-container-content-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/front-page-bg.png');" alt="背景画像">
      <div class="u-flex-start-x u-mt10">
        <p class="c-3-title u-w-60">
          ウェブを通じて、お客様のストーリーを伝えます
        </p>
      </div>
      <div class="u-flex-end-x u-mt20">
        <p class="u-w-80">
          HTML、CSS、Sass、JavaScript、WordPressなど、多彩なスキルを持ち、ウェブプロジェクトの成功に貢献してきました。
          あなたのウェブプロジェクトを実現しましょう。HPの制作を承ります。お気軽にご相談ください。
        </p>
      </div>
    </div>
    <section class="mt-5">
      <h2 class="text-5xl text-center">About</h2>
      <div class="u-flex-center u-p3">
        <img src="<?php echo get_template_directory_uri(); ?>/images/about-face.png" alt="顔イラスト" />
      </div>
      <p class="mt-5">
        東京都出身の24歳、フリーランスのWebエンジニアとして活動しています。
      </p>
      <p class="mt-5">
        保育業界で4年間の経験を積み、その後はWeb系の会社に転職し、デザインとエンジニアリングの知識を深め、SEOの分野でも実績を持っています。
      </p>
      <p class="mt-5">
        どうぞよろしくお願いいたします。
      </p>
      <div class="u-flex-end-x u-mr3 u-mt7">
        <a href="<?php echo get_permalink(get_page_by_path('about')); ?>">
          <div class="c-more-circle-arrow">
            <span></span>
          </div>
        </a>
      </div>
    </section>
    <section class="mt-5">
      <h2 class="text-5xl text-center">Skill</h2>
      <div class="p-index-content-skill-container u-grid-3 u-grid-2-md u-grid-1-sm u-mx3">
        <div class="u-p1 c-card-pickup u-mt3">
          <div class="c-card-img u-flex-center">
            <i class="fab fa-html5"></i>
          </div>
          <div class="c-card-skill-text mt-5">
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
          <div class="c-card-skill-text mt-5">
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
          <div class="c-card-skill-text mt-5">
            <div class="c-secondary-3-title u-flex-center">wordPress</div>
            <p class="u-mt1 c-card-pickup-text">
              WordPressに関しては、ショートコードの知見を持っています。また、その深い部分についても学習を進めており、今後はWordPressの高度なカスタマイズやテーマ作成にも挑戦していく予定です。
            </p>
          </div>
        </div>
      </div>
      <div class="u-flex-end-x u-mr3 u-mt7">
        <a href="<?php echo get_permalink(get_page_by_path('about')); ?>">
          <div class="c-more-circle-arrow">
            <span></span>
          </div>
        </a>
      </div>
    </section>
    <section class="mt-5">
      <h2 class="text-5xl text-center">Blog</h2>
      <!-- 呼ぶ -->
      <?php display_custom_posts_with_template('post', 3, 'includes/parts/blog-post-template'); ?>
      <div class="u-flex-end-x u-mr3 u-mt7">
        <a href="<?php echo home_url('/archive/'); ?>">
          <div class="c-more-circle-arrow">
            <span></span>
          </div>
        </a>
      </div>
    </section>
  </main>
  <?php get_footer(); ?>
</body>
<?php get_template_part('includes/parts/footer') ?>

</html>