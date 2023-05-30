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
          $url="https://script.googleusercontent.com/macros/echo?user_content_key=ZgQ1048lSNd3qjnGLCHCyLpCTBUFlZt4HbmM4Id1t7yMj6YX-xvMIjeL-zyfL6uji1T76yJyIr2cL5qC4FMzOr4Df3ST_5SGm5_BxDlH2jW0nuo2oDemN9CCS2h10ox_1xSncGQajx_ryfhECjZEnP7kinFRbixZ128vi2tQ6s-crBLzXw-HNzaTEjEalW7Q63fo7dJr6i1Br28y36VclZkGzkNDWioDIyUbJT8bQ2x9GvYTqTnAQ9z9Jw9Md8uu&lib=M95Wbcr0ue_-zV0WJcLe_3Tr8suxT4cXs";
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


<!-- ただテキストだけ出したい時 -->

<br><br><br><br><br><br>

<?php
          $url="https://script.googleusercontent.com/macros/echo?user_content_key=ZgQ1048lSNd3qjnGLCHCyLpCTBUFlZt4HbmM4Id1t7yMj6YX-xvMIjeL-zyfL6uji1T76yJyIr2cL5qC4FMzOr4Df3ST_5SGm5_BxDlH2jW0nuo2oDemN9CCS2h10ox_1xSncGQajx_ryfhECjZEnP7kinFRbixZ128vi2tQ6s-crBLzXw-HNzaTEjEalW7Q63fo7dJr6i1Br28y36VclZkGzkNDWioDIyUbJT8bQ2x9GvYTqTnAQ9z9Jw9Md8uu&lib=M95Wbcr0ue_-zV0WJcLe_3Tr8suxT4cXs";
          $json=file_get_contents($url);
          $arr=json_decode($json,true);

          foreach($arr as $data){
            $category= $data['category']."<br>".PHP_EOL;
            $tool= $data['tool']."<br>".PHP_EOL;
            $years= $data['years']."<br>".PHP_EOL;
            $message= $data['message']."<br>".PHP_EOL;
            $virusData= array(
            $status,$category,$tool,$years,$message,
          );
          echo implode('',$virusData);
          }
        ?>