<!DOCTYPE html>
<html class="no-js" lang="ja">

<head>
    <!-- Google Tag Manager -->
    <script>
    (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-MB96FWD');
    </script>
    <!-- End Google Tag Manager -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Proto System School</title>
    <meta property="og:locale" content="ja_JP">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Proto System Contact-form">
    <meta property="og:description" content="未経験からITエンジニアへ！完全オンラインで受講料無料！資格取得向けカリキュラムが充実しているプログラミング学習サービス">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="">
    <meta property="og:image" content="">
    <link rel="icon" href="assets/img/favicon.png">
    <link rel="stylesheet" href="assets/css/common.css">
    <link rel="stylesheet" href="assets/css/contact.css">
    <link rel="stylesheet" href="assets/scss/style.css">
    
    
</head>

<body class="home">
    <!-- Google Tag Manager (noscript) -->
    <noscript>
      <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MB96FWD"
      height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div id="wrapper">
        <!-- ===== ヘッダー ===== -->
    <header class="header">
        <!--ヘッダーロゴ-->
        <div class="header__logo">
            <a href="index.html">
                <img src="assets/img/logo.png" alt="ロゴ">
            </a>
        </div>
        
      </header>
      <!--ヘッダーロゴ-->
      <div class="PClogo">
          <a href="index.html">
            <img src="assets/img/logo.png" alt="">
          </a>
      </div>
        <!-- /page-header -->
        <main class="page-main page-contact">
            <div class="container">
                <h1 class="contact-ttl">応募フォーム</h1>
                <p class="contact-txt">下記の必要事項をご入力のうえ、<br class="show_sp">予約ボタンを押してください。<br><span class="req">※</span>は必須項目です。</p>
                <div class="contact-form">
                    <form action="./action.php" method="post" id="mail_form" enctype="multipart/form-data">
                        <input type="hidden" name="from_lp" value="1">
                        <dl class="frm_group">
                            <dt class="frm_lbl">名前<span class="req">※</span></dt>
                            <dd class="frm_box required">
                                <ul class="frm-flex">
                                    <li><input type="text"  id="name_1" name="name_1" value="" placeholder="山田 太郎" class="ipt" required></li>
                                </ul>
                            </dd>
                        </dl>
                        <dl class="frm_group">
                            <dt class="frm_lbl">フリガナ<span class="req">※</span></dt>
                            <dd class="frm_box required">
                                <ul class="frm-flex">
                                    <li><input type="text" name="read_1" value="" placeholder="ヤマダ タロウ" class="ipt" required></li>
                                </ul>
                            </dd>
                        </dl>
                        <dl class="frm_group">
                            <dt class="frm_lbl">メールアドレス<span class="req">※</span></dt>
                            <dd class="frm_box required">
                                <input type="email" id="mail_address" name="mail_address" value="" placeholder="protosystem＠example.com" class="ipt" required>
                            </dd>
                        </dl>
                        <dl class="frm_group">
                            <dt class="frm_lbl">メールアドレス【確認用】<span class="req">※</span></dt>
                            <dd class="frm_box required">
                                <input type="email" id="mail_address_confirm" name="mail_address_confirm" value="" placeholder="protosystem＠example.com" class="ipt" required>
                            </dd>
                        </dl>
                        <dl class="frm_group">
                            <dt class="frm_lbl">電話番号<span class="req">※</span></dt>
                            <dd class="frm_box required">
                                <input type="tel" id="phone" name="phone" placeholder="000-0000-0000" class="ipt" required>
                            </dd>
                        </dl>
                        <dl class="frm_group">
                            <dt class="frm_lbl">備考欄</dt>
                            <dd class="frm_box"><textarea name="contents" class="ipt are" placeholder="ご自由にお書きください。"></textarea></dd>
                        </dl>
                        <div class="b_privacy">
                        <div class="b_privacy__inner">
                          <p>1.個人情報の取得・利用・提供について<br>
                          当社は、個人情報の取得・利用に際して、その利用目的を明確にし、本人の同意を得たうえで利用目的の達成に必要な範囲内で適法かつ公正な手段によって取得・利用を行います。また、お客様の同意を得ずに目的外利用、第三者への提供・開示は行いません。またその為の措置を講じます。当社においてはこれらの取り組みを確実にするため、従業者等の教育を徹底してまいります。</p>
                          <p>2.個人情報の利用目的<br>当社で取扱う個人情報の利用目的は、以下のとおりです。</p>
                          <p>応募者情報：採用可否の判断及び、選考の際の連絡のため<br>
                            従業者情報：雇用・労務管理のため<br>
                            取引先情報：取引先担当者との業務連絡のため</p>
                          <p>3.法令遵守<br>
                          当社は、個人情報に関連する法令、国が定める指針及びその他の規範を遵守します。また、当社の管理の仕組みに、これらの法令及びその他の規範を常に適合させます。</p>
                          <p>4.個人情報の安全管理措置<br>
                          当社は、個人情報の正確性及び安全性を確保するために、セキュリティ対策をはじめとする安全対策を実施し、個人情報の漏えい、滅失またはき損の防止及び是正に努めます。</p>
                          <p>5.個人情報保護マネジメントシステムの継続的改善<br>
                          当社は、内部監査及びマネジメントレビューの機会を通じて、個人情報保護マネジメントシステムを継続的に改善し、常に最良の状態を維持します。</p>
                          <p>6.苦情及び相談受付け窓口<br>
                          貴殿の個人情報及び当社の個人情報保護マネジメントシステムに関するご相談及び苦情については以下までご連絡ください。</p>
                          <p>株式会社プロトシステム<br>
                            〒102-0074<br>
                            東京都千代田区九段南３丁目４−５ フタバ九段ビル 5F<br>
                            TEL: 03-3263-4343<br>
                            FAX: 03-3263-4344<br>
                            E-mail: privacy@prsys.jp</p>
                        </div>
                      </div>
                      <!--/.b_privacy-->
                      <div id="agreement" class="frm-privacy">
                        <p id="agree_check" class="frm-chk required">
                          <input type="checkbox" id="agree" name="agree" value="" class="checkboxRequired" required>
                          <label for="agree">個人情報の取扱規定に同意する</label>
                          <span class="error_check">同意していただく必要があります。</span>
                        </p>
                      </div>
                        <p id="form_submit" class="frm_btn">
                            <input type="image" id="form_submit_button" class="btn-submit" src="assets/img/send.png" alt="まずは無料で相談する">
                        </p>
                    </form>
                </div>
            </div>
        </main><!-- /.page-main -->
        <footer class="footer">
            <!--ライン1-->
            <div class="footer__line1">
              <!--スペース1-->
              <div class="footer__line1--space1">
                <!--ロゴ-->
                <div class="footer__line1--space1--logo">
                  <p>Proto System School</p>
                </div>
              </div>
              <!--スペース2-->
              <div class="footer__line1--space2">
                <!--住所-->
                <div class="footer__line1--space2--address">
                  <p><i class="fa-solid fa-location-dot"></i>東京都千代田区九段南3-4-5フタバ九段ビル4階・5階</p>
                </div>
                <!--運営元-->
                <div class="footer__line1--space2--management">
                    <a href="https://www.prsys.jp/">
                      <p>運営元：<span>株式会社プロトシステム</span></p>
                    </a>
                  </div>
                <!--TEL-->
                <div class="footer__line1--space2--tel">
                  <p>TEL：03-3263-4343</p>
                </div>
              </div>
            </div>
            <!--ライン2-->
            <div class="footer__line2">
              <p>Copyright ©Proto System Co. Ltd. All Rights Reserved.</p>
            </div>
          </footer>
        <!-- /page-footer -->
    </div>
    <!-- #wrapper -->
    <script src="../assets/js/hamburger.js"></script>
    <script src="../assets/js/jquery-1.11.3.min.js"></script>
    <script src="../assets/js/jquery.fancybox.min.js"></script>
    <script src="../assets/js/slick/slick.js"></script>
    <!--ページ共通読み込みJS（編集禁止）-->
    <script src="../assets/js/common.js"></script>
    <script src="js/mailform-js.php"></script>
    <script src="js/jquery.autoKana.js"></script>
    <script>
        (function( $ ) {
            $.fn.autoKana( 'input[name="name_1"]', 'input[name="read_1"]', {
                katakana: false
            });
            $.fn.autoKana( 'input[name="name_2"]', 'input[name="read_2"]', {
                katakana: false
            });
        })( jQuery );
    </script>
    <script src="js/jquery.datetimepicker.js"></script>
    <script>
        (function( $ ) {
            $( 'input[name="schedule"]' ).datetimepicker({
                lang: 'ja',
                timepicker: false,
                format: 'Y/m/d'
            });
        })( jQuery );
    </script>
</body>

</html>
