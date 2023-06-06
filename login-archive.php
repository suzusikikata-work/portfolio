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

    <style>
    .c-form-text {
      height: 2.4em;
      width: 100%;
      padding: 0 16px;
      border-radius: 0;
      border: none;
      box-shadow: 0 0 0 1px #ccc inset;
      appearance: none;
      -webkit-appearance: none;
      -moz-appearance: none;
      margin-bottom: 40px;
      background-color: var(--base-bg-color);
      margin-top: 40px;
    }

    .c-form-text:focus {
      outline: 0;
      box-shadow: 0 0 0 2px rgb(33, 150, 243) inset;
    }

    .c-form-submit-button {
      display: inline-block;
      width: auto;
      padding: 8px 40px;
      border: none;
      border-radius: 4px;
      background-color: #333;
      color: #fff;
      appearance: none;
      -webkit-appearance: none;
      -moz-appearance: none;
      cursor: pointer;
      border: 2px solid transparent;
      margin-bottom: 40px;
      background-color: var(--text-color);
      color: var(--second-bg);
    }

    .c-form-submit-button-2 {
      display: inline-block;
      width: auto;
      padding: 8px 40px;
      border: none;
      border-radius: 4px;
      background-color: #333;
      color: #fff;
      appearance: none;
      -webkit-appearance: none;
      -moz-appearance: none;
      cursor: pointer;
      border: 2px solid transparent;
      margin-bottom: 40px;
      background-color: var(--second-bg);
      color: var(--text-color);
    }

    .c-form-submit-button:hover,
    .c-form-submit-button-2:hover {
      background-color: #000;
    }

    .c-form-submit-button:focus,
    .c-form-submit-button-2:focus {
      outline: 0;
      background-color: #000;
      border: 2px solid rgb(33, 150, 243);
    }
    </style>

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