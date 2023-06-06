<?php include('./common/head.php'); ?>
<?php include('./common/header.php'); ?>

<div class="page_title">
  <div class="page_title_inner">
    <h1>ACHIEVE WORKS</h1>
    <p>
      担当案件紹介
    </p>
  </div>
</div>

<div id="wrapper">

  <div id="second_container">

    <h2>
      Please enter your password
    </h2>

    <form name="pwform" onsubmit="return false;">

      <!--　パスワードを入力する -->
      <input type="password" name="txtb" value="" class="c-form-text" placeholder="password">

      <!--　送信したらjavascriptのtbox()の中身が動く -->
      <input type="button" value="送信" onclick="tbox()" class="c-form-submit-button">

      <!--　送信したらjavascriptのclr()の中身が動く -->
      <input type="button" value="リセット" onclick="clr()" class="c-form-submit-button-2">

    </form>

    <script>
    // onclick="tbox()" が押されたら
    function tbox() {
      // <form name="pwform">内の <input name="txtb">　の値を取得
      var str = document.pwform.txtb.value;

      // もし　<input name="txtb">　の値が半角英数字以外だったら、アラートを出す
      if (/\W+/g.test(str)) {
        alert('半角英数字のみを入力して下さい。');
      }

      // もし　<input name="txtb">　の値に何かしら入っていたら、入力値.htmlに移動する
      else if (str != null) {
        location.href = str + '.php';
      }
    }

    // onclick="clr()" が押されたら、フォームの値を消す
    function clr() {
      document.pwform.txtb.value = '';
    }
    </script>


  </div><!-- second_container -->
</div><!-- wrapper -->

<?php include('./common/footer.php'); ?>

<script>
$("img.lazyload").lazyload();
</script>

</body>

</html>