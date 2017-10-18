<?php
    date_default_timezone_set('America/New_York');
    include 'dba.inc.php';
    include 'comments.inc.php';

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
<?php
echo    "<form method='POST' action='".setComments($conn)."'>
      <input type='hidden' name='uid'  value='Anonymous'>
      <input type='hidden' name='date'  value='".date('Y-m-d H:i:s')."'>
      <textarea name='message'></textarea> <br>
      <button class='but'type='sumbit' name='commentSubmit'>Comment</button>
    </form>";

getComments($conn)
      ?>
  </body>
</html>
