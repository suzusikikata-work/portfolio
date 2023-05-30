<?php include('./common/head.php'); ?>
<?php include('./common/header.php'); ?>

<div class="page_title">
  <div class="page_title_inner">
    <h1>PRODUCT WORKS</h1>
    <p>
      PRODUCT WORKSのページでは、個人案件での・名刺制作・チラシ制作・web制作をご紹介いたします。
    </p>
  </div>
</div>

<div id="wrapper">

  <div id="second_container">

    <h2>
      一覧
    </h2>


    <div class="el_searchResult">
      <span class="el_searchResult_nume js_numerator"></span>件／全<span class="el_searchResult_deno js_denominator"></span>件
    </div>

    <div class="bl_selectBlock_wrapper_wrapper">
      <div class="art-input-box js_conditions" data-type="type">
        <span class="art_selectBlock_check"><input id="type-web" type="checkbox" name="type" value="web">
          <label for="type-web">
            <span class="el_checkbox"></span>
            web
          </label>
        </span>

        <span class="art_selectBlock_check"><input id="type-logo" type="checkbox" name="type" value="logo">
          <label for="type-logo">
            <span class="el_checkbox"></span>
            logo
          </label>
        </span>
      </div>
    </div>

    <!-- <div class="bl_selectBlock_release js_release">すべての選択を解除</div> -->


    <div class="thumbnail_box">

      <!-- list -->

      <div class="thumbnail_list bl_searchResultBlock_item js_target" data-type="web">
        <div class="article_img">
          <video playsinline autoplay muted loop>
            <source src="./works/work-002/img/work-002_s.webm">
            <source src="./works/work-002/img/work-002_s.mp4">
          </video>
        </div>

        <div class="article_lead font_14">
          <div class="category font_14">
            <p>web</p>
          </div>
          <h2>
            SUZUSIKIKATA<br>web site
          </h2>
          <div class="article_btn">
            <a class="button_basic" href="./works/work-002/single.php">read more</a>
          </div>
        </div>
      </div>

      <!-- list -->

      <div class="thumbnail_list bl_searchResultBlock_item js_target" data-type="logo">
        <div class="article_img">
          <img class="lazyload" data-src="./works/work-001/img/work-001_s.jpg" art="suzusikikata logo">
        </div>

        <div class="article_lead font_14">
          <div class="category font_14">
            <p>logo</p>
          </div>
          <h2>
            SUZUSIKIKATA LOGO
          </h2>
          <div class="article_btn">
            <a class="button_basic" href="./works/work-001/single.php">read more</a>
          </div>
        </div>
      </div>

    </div><!-- thumbnail_box -->
  </div><!-- second_container -->
</div><!-- wrapper -->

<?php include('./common/footer.php'); ?>

<script>
$("img.lazyload").lazyload();
</script>

</body>

</html>