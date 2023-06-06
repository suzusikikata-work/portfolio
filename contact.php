<?php include('./common/head.php'); ?>
<?php include('./common/header.php'); ?>

<div class="page_title">
  <div class="page_title_inner">
    <h1>CONTACT</h1>
  </div>
</div>

<div id="wrapper">

  <div id="second_container">
    <h2>
      お問い合わせ
    </h2>

    <div id="formWrap">
      <p>下記フォームに必要事項を入力後、確認ボタンを押してください。</p>
      <form method="post" action="mail.php">
        <table class="formTable">
          <tr>
            <th>お名前</th>
            <td><input size="20" type="text" class="c-form-text" name="お名前" /> ※必須</td>
          </tr>
          <tr>
            <th>Mail（半角）</th>
            <td><input size="30" type="text" class="c-form-text" name="Email" /> ※必須</td>
          </tr>
          <tr>
            <th>お問い合わせ内容<br /></th>
            <td><textarea name="お問い合わせ内容" cols="50" rows="5"></textarea></td>
          </tr>
        </table>
        <p align="center">
          <input type="submit" class="c-form-submit-button" value="確認" />
          <input type="reset" class="c-form-submit-button-2" value="リセット" />
        </p>
      </form>
      <p>※IPアドレスを記録しております。いたずらや嫌がらせ等はご遠慮ください</p>
    </div>



    <!-- ------contents------ -->
  </div>
</div><!-- wrapper -->

<?php include('./common/footer.php'); ?>
</body>

</html>