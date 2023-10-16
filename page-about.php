<!DOCTYPE html>
<html lang="ja">

<head>
  <?php get_header(); ?>
</head>

<body>
  <?php get_template_part('parts/header') ?>
  <main class="u-max-w-content">
    <section class="u-mt5">
      <h2 class="c-secondary-4-title u-text-center">About</h2>
      <div class="u-flex-center u-p3">
        <img src="<?php echo get_template_directory_uri(); ?>/images/nixyo.svg" alt="" />
      </div>
      <p class="u-text-center">
        初めまして、6ヶ月のWebエンジニア経験を持つ能登明日香（のと あすか）です。プロジェクトの成功と信頼性を大切にし、HTML/CSS/JavaScript(jQuery)を使用したコーディングから、レスポンシブサイト制作、WordPressサイトの構築まで、幅広いウェブ開発スキルを提供いたします。柔軟なスケジュール調整と継続的なコミュニケーションを通じて、お客様の要望に応え、プロジェクトを成功に導きます。
      </p>
    </section>
    <section class="u-mt5">
      <h2 class="c-secondary-4-title u-text-center">Skill</h2>
      <div class="u-grid-3">
        <div class="u-p1 c-card-pickup u-mt3">
          <div class="c-card-img u-flex-center">
            <i class="fab fa-html5"></i>
          </div>
          <p class="u-mt1 c-card-pickup-text">
            半年間の実務経験を通じて、パーツ単位から全体のレイアウトまでのデザインを実現する能力を磨き上げました。様々なデバイスでの閲覧を考慮したレイアウト作成が得意です。
          </p>
        </div>
        <div class="u-p1 c-card-pickup u-mt3">
          <div class="c-card-img u-flex-center">
            <i class="fab fa-css3-alt"></i>
          </div>
          <p class="u-mt1 c-card-pickup-text">
            実務でのコーディング経験があり、デザインを忠実に再現することができます。これにより、ウェブページのビジュアル面での要求をしっかりと捉え、実現することができます。
          </p>
        </div>
        <div class="u-p1 c-card-pickup u-mt3">
          <div class="c-card-img u-flex-center">
            <i class="fab fa-sass"></i>
          </div>
          <p class="u-mt1 c-card-pickup-text">
            CSSの拡張言語であるSASSを用いることで、効率的なスタイルシートの管理と、より高度なデザインの実現が可能です。
          </p>
        </div>
        <div class="u-p1 c-card-pickup u-mt3">
          <div class="c-card-img u-flex-center">
            <i class="fab fa-js-square"></i>
          </div>
          <p class="u-mt1 c-card-pickup-text">
            人気のあるライブラリやプラグイン、例えば「slick」や「garalley」の導入経験を持っています。これにより、動的なウェブページの実装やユーザー体験の向上が期待できます。
          </p>
        </div>
        <div class="u-p1 c-card-pickup u-mt3">
          <div class="c-card-img u-flex-center">
            <i class="fas fa-code"></i>
          </div>
          <p class="u-mt1 c-card-pickup-text">
            jQueryについては、現在学習中です。この技術を習得することで、フロントエンドの技術の幅をさらに広げることを目指しています。
          </p>
        </div>
        <div class="u-p1 c-card-pickup u-mt3">
          <div class="c-card-img u-flex-center">
            <i class="fab fa-wordpress"></i>
          </div>
          <p class="u-mt1 c-card-pickup-text">
            WordPressに関しては、ショートコードの知見を持っています。また、その深い部分についても学習を進めており、今後はWordPressの高度なカスタマイズやテーマ作成にも挑戦していく予定です。
          </p>
        </div>
      </div>
    </section>
    <section class="u-mt5">
      <h2 class="c-secondary-4-title u-text-center">Work</h2>
      <div class="u-flex-center u-mt2">
        <div class="u-mr2">
          <img src="<?php echo get_template_directory_uri(); ?>/images/circle_green.svg" alt="" />
        </div>
        <p class="c-3-title">オーストラリア短期留学</p>
      </div>
      <div class="u-flex-center u-mt2">
        <div class="u-mr2">
          <img src="<?php echo get_template_directory_uri(); ?>/images/circle_green.svg" alt="" />
        </div>
        <p class="c-3-title">幼稚園教諭１年</p>
      </div>
      <div class="u-flex-center u-mt2">
        <div class="u-mr2">
          <img src="<?php echo get_template_directory_uri(); ?>/images/circle_green.svg" alt="" />
        </div>
        <p class="c-3-title">保育士３年</p>
      </div>
      <div class="u-flex-center u-mt2">
        <div class="u-mr2">
          <img src="<?php echo get_template_directory_uri(); ?>/images/circle_green.svg" alt="" />
        </div>
        <p class="c-3-title">Webエンジニア</p>
      </div>
    </section>
  </main>
  <?php get_footer(); ?>
</body>
<?php get_template_part('parts/footer') ?>

</html>