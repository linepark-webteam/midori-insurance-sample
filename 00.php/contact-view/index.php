<!DOCTYPE html>
<html lang="ja">

<head>
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>
  <meta name="keywords" content="みどり総合保険事務所 お問い合わせ">
  <meta name="description" content="お問い合わせ｜株式会社みどり総合保険事務所">
  <title>お問い合わせ｜株式会社みどり総合保険事務所</title>
</head>

<body>
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

  <section class="hero mb-5">
    <div class="image-section position-relative masked">
      <img src="../img/contact1.webp" class="d-block w-100" alt="Image 1">
      <div class="position-absolute top-50 start-50 translate-middle text-white">
        <div class="hero-fixed-text d-flex flex-column align-items-center justify-content-center">
          <h3>Contact</h3>
          <h2>お問い合わせ</h2>
        </div>
      </div>
    </div>
  </section>

  <section class="mb-5 py-5">
    <div class="container">
      <div class="mb-3">
        <div class="mb-5 d-flex flex-column align-items-center">
          <div class="section-header col-lg-4">
            <h2>お問合せ</h2>
            <h6>― Contact ―</h6>
          </div>
        </div>
        <div class="container row">
          <form action="" method="post">
            <!-- お問合わせ項目 -->
            <div class="form-group col-12 d-lg-flex">
              <label for="inquiryType" class="col-lg-3 mb-2 me-5">お問合わせ項目 <span class="badge text-bg-success">必須</span></label>
              <div class="d-flex flex-column col-lg-8">
                <div class="d-lg-flex col-lg-9">
                  <div class="form-check form-check-block align-items-center col-lg-4">
                    <input class="form-check-input" type="radio" name="inquiryType" id="corporate" value="法人のお客様" >
                    <label class="form-check-label" for="corporate">法人のお客様</label>
                  </div>
                  <div class="form-check form-check-block align-items-center col-lg-4">
                    <input class="form-check-input" type="radio" name="inquiryType" id="individual" value="個人のお客様">
                    <label class="form-check-label" for="individual">個人のお客様</label>
                  </div>
                  <div class="form-check form-check-block align-items-center col-lg-4">
                    <input class="form-check-input" type="radio" name="inquiryType" id="other" value="その他">
                    <label class="form-check-label" for="other">その他</label>
                  </div>
                </div>
              </div>
            </div>

            <!-- お名前 -->
            <div class="form-group d-lg-flex mt-3">
              <label for="name" class="col-lg-3 mb-2 me-5">お名前 <span class="badge text-bg-success">必須</span></label>
              <div class="d-flex flex-column col-lg-8">
                <input type="text" name="name" class="form-control d-block" id="name" placeholder="お名前を入力してください" maxlength="32">
                <span class="small">（32文字以内）</span>
              </div>
            </div>

            <!-- 会社名 -->
            <div class="form-group d-lg-flex mt-3">
              <label for="companyName" class="col-lg-3 mb-2 me-5">会社名 <span class="badge text-bg-secondary">任意</span></label>
              <div class="d-flex flex-column col-lg-8">
                <input type="text" name="companyName" class="form-control d-block" id="companyName" placeholder="会社名を入力してください" maxlength="64">
                <span class="small">（64文字以内）</span>
              </div>
            </div>

            <!-- メールアドレス -->
            <div class="form-group d-lg-flex mt-3">
              <label for="email" class="col-lg-3 mb-2 me-5">メールアドレス <span class="badge text-bg-success">必須</span></label>
              <div class="d-flex flex-column col-lg-8">
                <input type="email" name="email" class="form-control d-block" id="email" placeholder="メールアドレスを入力してください" maxlength="64">
                <span class="small">（64文字以内）</span>
              </div>
            </div>

            <!-- メールアドレス（確認用） -->
            <div class="form-group d-lg-flex mt-3">
              <label for="confirmEmail" class="col-lg-3 mb-2 me-5">メールアドレス（確認用） <span class="badge text-bg-success">必須</span></label>
              <div class="d-flex flex-column col-lg-8">
                <input type="email" name="confirmEmail" class="form-control d-block" id="confirmEmail" placeholder="確認用メールアドレスを入力してください" maxlength="64">
                <span class="small">（上記と同じメールアドレスを入力してください）</span>
              </div>
            </div>

            <!-- 担当者からの折り返し方法 -->
            <div class="form-group d-lg-flex mt-3">
              <label class="col-lg-3 mb-2 me-5">担当者からの折り返し方法 <span class="badge text-bg-success">必須</span></label>
              <div class="d-flex flex-column col-lg-8">
                <div class="col-lg-9">
                  <div class="form-check align-items-center form-check-block">
                    <input class="form-check-input" type="radio" name="callbackPreference" id="contactByEmail" value="メールでの連絡希望">
                    <label class="form-check-label" for="contactByEmail">メールでの連絡希望</label>
                  </div>
                  <div class="form-check align-items-center form-check-block">
                    <input class="form-check-input" type="radio" name="callbackPreference" id="contactByPhone" value="電話での連絡希望">
                    <label class="form-check-label" for="contactByPhone">電話での連絡希望</label>
                  </div>
                </div>
              </div>
            </div>

            <!-- お問合せ内容 -->
            <div class="form-group d-lg-flex mt-3">
              <label for="inquiry" class="col-lg-3 mb-2 me-5">お問合せ内容 <span class="badge text-bg-success">必須</span></label>
              <div class="d-flex flex-column col-lg-8">
                <textarea name="inquiry" class="form-control" id="inquiry" rows="10" placeholder="お問い合わせ内容を入力してください" maxlength="1000"></textarea>
                <span class="small">（1000文字以内）</span>

              </div>
            </div>

            <!-- 「個人情報保護方針」 -->
            <div class="form-group my-5">
              <div class="form-check d-flex justify-content-center">
                <div class="d-flex flex-column align-items-center col-lg-8">
                  <div class="d-flex">
                    <input type="checkbox" name="privacyPolicy" class="form-check-input" id="privacyPolicy" value="accepted">
                    <label class="form-check-label" for="privacyPolicy">「<a href="../privacy-policy/">個人情報保護方針</a>」に同意の上、チェックを入れて送信してください。</label>
                  </div>
                </div>
              </div>
            </div>

            <!-- 送信ボタン -->
            <div class="d-flex justify-content-center">
              <button type="submit" class="btn btn-outline-success col-4">確認ページへ</button>
            </div>
          </form>

        </div>
      </div>
    </div>
  </section>


  <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
</body>

</html>