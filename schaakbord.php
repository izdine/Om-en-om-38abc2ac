<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>schaakbord</title>
<link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <table>
      <tbody>
          <?php
            $rij = 8;
            $colomen = 8;
          for ($i=0; $i < $rij; $i++) {
            if ($i%2 === 1) {
              echo "</tr>";
              for ($j=0; $j <$colomen ; $j++) {
            if ($j%2 === 0) {
              echo ('<td class="black"></td>');
            }else {
              echo "<td></td>";
            }
              }
              echo "'</tr>'";
            }else {
              echo "'<tr>'";
              for ($j=0; $j <$colomen ; $j++) {
                if($j%2 === 1){
                    echo('<td class="black"></td>');
                    }else {
                    echo('<td></td>');
                    }
                     }
                    echo "</tr>";
              }
            }
           ?>
      </tbody>
  </table>
  </body>
</html>
