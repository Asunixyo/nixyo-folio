<!DOCTYPE html>
<html lang="ja">

<head>
  <?php get_header(); ?>
</head>

<body>
  <?php get_template_part('parts/header') ?>
  <main class="u-max-w-content u-mt5">
    <h2 class="c-5-title u-text-center">Contact</h2>
    <div id="" class="c-form u-mx3-sm-md">
      <form method="post" action="" enctype="multipart/form-data">
        <div class="u-mt5">
          <div class="">
            <p class="">会社名</p>
            <p>
              <input type="text" name="company-name" id="company-name" size="0" value="" placeholder="株式会社ASUNIXYO" />
            </p>
          </div>
        </div>
        <div class="u-mt5">
          <div class="">
            <p class="">氏名</p>
            <p>
              <input type="text" name="name" id="name" size="0" value="" placeholder="田中　太郎" />
            </p>
          </div>
        </div>
        <div class="u-mt5">
          <div class="">
            <p class="">メールアドレス</p>
            <p>
              <input type="text" name="mail" id="mail" size="0" value="" placeholder="example@example.com" />
            </p>
          </div>
        </div>
        <div class="u-mt5">
          <div class="">
            <p class="">氏名</p>
            <p>
              <input type="text" name="name" id="name" size="0" value="" placeholder="田中　太郎" />
            </p>
          </div>
        </div>
        <div class="u-mt5">
          <div class="">
            <p>お問い合わせ内容</p>
            <p>
              <textarea name="textarea-content" id="textarea-content" cols="30" rows="10" placeholder="入力して下さい"></textarea>
            </p>
          </div>
          <div class="c-form-submit u-flex-center u-mt5 u-pb10">
            <button type="submit" name="submitConfirm" value="confirm">
              確認画面へ
            </button>
          </div>
        </div>
      </form>
    </div>
  </main>
</body>
<?php get_template_part('parts/footer') ?>

</html>