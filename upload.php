 <?php

 echo "<pre>";
 print_r($_FILES);
 echo "</pre>";
 $image_name = rand(0,100)."_".$_FILES["image"]["name"];
 $tmp_name = $_FILES["image"]["tmp_name"];
 move_uploaded_file($tmp_name , "./myImage/$image_name");


 
?>