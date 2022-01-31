<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit file</title>
</head>
<body>
    <?php
    if(isset($_REQUEST["edit_id"])){
        $edit_ID = $_REQUEST["edit_id"];
   
     include_once("root.php");
     
     $dbQuery ="SELECT * FROM user_data WHERE id=$edit_ID";
     $dbQueryConnect = mysqlI_query($con,$dbQuery);
     if($dbQueryConnect== true){
         while($row = mysqlI_fetch_array($dbQueryConnect)){
             ?>
            <form method="post" action="edit_file_core.php">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
             <input type ="text" name="fname" value="<?php echo $row['fname']?>" placeholder="Enter your fname">
             <input type ="text" name="lname" value="<?php echo $row['lname']?>" placeholder="Enter your lname">
             <input type ="email" name="usr_email" value="<?php echo $row['email']?>" placeholder="Enter your Email">
             <input type ="text" name="usr_psw" value="<?php echo $row['password']?>" placeholder="Enter your password">
             <input type ="submit" name="update_btn" value="update Data">

            </form>  
        <?php }}}  ?>

</body>
</html>