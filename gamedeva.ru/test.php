
<form action="" method="POST">
<input type="text" name="text">
<input type="submit" name="submit" value="Go">
</form>
<?php 
if($_POST['submit'])
  echo 'Вы ввели ' . $_POST['text'];
?>