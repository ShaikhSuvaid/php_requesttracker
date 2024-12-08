<?php
if(isset($_POST['submit'])){
  $file_name = $_FILES['file']['name'];
  $file_tmp = $_FILES['file']['tmp_name'];
  move_uploaded_file($file_tmp,"upload-img/". $file_name);
  $file_name = $_FILES['filet']['name'];
  $file_tmp = $_FILES['filet']['tmp_name'];
  move_uploaded_file($file_tmp,"upload-img/". $file_name);
  $file_name = $_FILES['fileth']['name'];
  $file_tmp = $_FILES['fileth']['tmp_name'];
  move_uploaded_file($file_tmp,"upload-img/". $file_name); 
}
?>

<html>
  <body>
    <form method="post" enctype="multipart/form-data">
      <input type="text" name="title">
      <input type="file" name="file">
      <input type="file" name="filet">
      <input type="file" name="fileth">
      <input type="submit" name="submit">
    </form>
  </body>
</html>