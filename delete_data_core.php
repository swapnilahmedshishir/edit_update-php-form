<?php

 require_once("root.php");
 $dataId = $_REQUEST["id"];
 $querySql = "DELETE FROM user_data WHERE id=$dataId";
 $connetQuery = mysqli_query($con, $querySql);
  if($connetQuery == true){
      header("Location:sineup.php?delete");
  }

?>