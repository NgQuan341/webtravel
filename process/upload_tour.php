
<?php
  
 
  $uploaddir = '../img/';
  $uploadfile = $uploaddir . basename($_FILES['img']['name']);
  
  echo '<pre>';
  if (move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile)) {
      echo "File is valid, and was successfully uploaded.\n";
  } else {
      echo "Possible file upload attack!\n";
  }
  
  echo 'Here is some more debugging info:';
  print_r($_FILES);
  
  print "</pre>";
  
  ?>
  