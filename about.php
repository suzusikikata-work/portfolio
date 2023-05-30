<?php include('./common/head.php'); ?>
<?php include('./common/header.php'); ?>

<div class="page_title">
  <div class="page_title_inner">
    <h1>ABOUT</h1>
  </div>
</div>

<div id="wrapper">

  <div id="second_container">
    <h2>
      PROFILE
    </h2>

    <article class="blog_container">

      <div class="min-profile">
        <div class="min-profile-pic">
          <img src="./img/common/min-profile.jpg" art="profile">
        </div>
        <p class="min-profile-text font_14">
          SUZUSIKIKATA(佐々木 涼太)<br>
          1993年生まれ29歳。<br>
          UI・WEBデザイナー。<br class="br-sp">あだ名は「侍」と呼ばれてます。
        </p>
      </div>

      <p class="font_14 mt_40">
        初めまして、SUZUSIKIKATA(スズシキカタ)の佐々木と申します。<br>
        SUZUSIKIKATA(スズシキカタ)というのは個人での活動名です。<br>
        現在は都内のインハウスデザイナーでwebデザインを中心に制作を行なっています。<br>
        過去の職務経歴としては
      </p>
      <ul class="font_14 mt_40">
        <li>システム会社の社内制作チームで、ディレクター兼デザイナーとして、提案書作成 / サイト構成 / ワイヤーラフ / WEBデザイン / コーディングを担当。</li>
        <li>某専門学校 広報部署でのサイトリニューアル / 現行サイトの運用 / 保守 / 特設サイト制作</li>
        <li>某ポータルサイトのUI改善部門でオプディマイズのABテストの実装・数値調査</li>
        <li>某通信会社にて、アジャイル開発によるデジタルミニサイネージのUIデザイン制作</li>
        <li>某通販会社にて、LP・バナーなどのデザイン制作 / コーディング / オプディマイズでのABテスト / analyticsの整備・保守 / EC forceの保守 / サイト保守 / スプレッドシートによる業務効率ツール作成</li>
      </ul>
      <p class="font_14 mt_40">
        現在では今までの経験を活かし、デザイナーからエンジニアへの実装依頼の最適化・LP管理に独自のバージョン管理の仕組みを導入・figmaを使用したデザイン管理ツールやテンプレート作成、など全体が効率よく精度の高いクリエイティブが発揮できる環境を整えています。
      </p>
      <p class="font_14 mt_40">
        あだ名の「侍」は、数年前に髪を伸ばして縛っていた姿が「侍」っぽいと言われてから、すっかり定着しました、笑<br>
        社内では「サムライ」「侍さん」など呼ばれており、よくよく考えると「侍」って何やねんと心の中でツッコんでます</p>
      </p>

      <h3 class="mt_40">
        当サイトについて
      </h3>
      <p class="font_14 mt_40">
        当サイトでは、今までの作品などの掲載を目的としたサイトとなりますが、コーディングの知見深めるために、1から制作した一種の静的なサイトとなります。<br>
        CMSなどの仕組みを深めるため、どのように最適化を行い、共通化を図るかなど調査を行っているサイトです。<br>
      </p>

      <h3 class="mt_40">
        SUZUSIKIKATAとは
      </h3>

      <p class="font_14 mt_40">
        源氏物語に「涼しき方」という言葉があります。<br>
        「いかなる所におはしますらむ。さりとも―にぞと思ひやり奉るを」<br>
        (清らかで気分さわやかな世界。極楽浄土。地獄を焦熱の所とみるのに対していう。)<br><br>

        私の名前の涼には「相手を涼しく癒してあげられる人でいて欲しい」と想いが込められています。<br>
        名前の由来と「涼しき方」という言葉は近いものを感じ、SUZUSIKIKATAという名で活動を始めました。
      </p>

      <p class="font_14 mt_40">
        引用:<a href="https://dictionary.goo.ne.jp/word/%E6%B6%BC%E3%81%97%E3%81%8D%E6%96%B9/#jn-118364" target="_blank">goo辞書:涼しき方（すずしきかた）の意味</a>
      </p>

      <h3 class="mt_40">SKILL SET</h3>

      <table id="skill-table">
        <thead>
          <tr>
            <th>category</th>
            <th>tool</th>
            <th>years</th>
            <th>message</th>
          </tr>
        </thead>

        <tbody>

          <?php
          $url="https://script.google.com/macros/s/AKfycbzG6tmuOXocXbuTvRr3JU8cmJHeUJzaL1geKNHXrZIFXZXuvvXTOK-Bcv_lvoS7vwXo/exec";
          $json=file_get_contents($url);
          $arr=json_decode($json,true);

          foreach($arr as $data){
            $category= '<tr class='.$data['status'].'><td data-label="category">'.$data['category'].'</td>'.PHP_EOL;
            $tool= '<td data-label="tool">'.$data['tool'].'</td>'.PHP_EOL;
            $years= '<td data-label="years">'.$data['years'].'</td>'.PHP_EOL;
            $message= '<td data-label="message">'.$data['message'].'</td></tr>'.PHP_EOL;
            $virusData= array(
            $status,$category,$tool,$years,$message,
          );
          echo implode('',$virusData);
          }
        ?>

        </tbody>

      </table>


      <!-- <h2>
            Contact
        </h2>

        <a href="info@suzusikikata.com" target="_blank">info@suzusikikata.com</a> -->

    </article>

  </div>

</div><!-- wrapper -->

<?php include('./common/footer.php'); ?>
</body>

</html>