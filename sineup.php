<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>singnUp page</title>
</head>
<body>
  <?php
   if(isset($_REQUEST["Insert_data"])){
     if($_REQUEST["Insert_data"] == "true"){
       echo "<font color='green'>Data submit successfully</font>";
     }else{
      echo "<font color='red'>Data submit unsuccessfully</font>";
     }
   }
  
  ?>
   <form method="post" action="index.php">
    <input type ="text" name="fname" placeholder="Enter your fname">
    <input type ="text" name="lname" placeholder="Enter your lname">
    <input type ="email" name="usr_email" placeholder="Enter your Email">
    <input type ="password" name="usr_psw" placeholder="Enter your password">
    <input type ="submit" name="submit_btn" value="sumit Data">

  </form>  
  <br/><br/>
  <?php
   if(isset($_REQUEST["delete"])){
     echo "data deleted";
   }
  
  
  ?>
    <table border="1px" >
    <tr>
      <th><b>ID</b></th>
      <th><b>fname</b></th>
      <th><b>lname</b></th>
      <th><b>user_email</b></th>
      <th><b>user_psw</b></th>
      <th><b>action</b></th>
    </tr>
    <?php
    require_once("root.php");
    $RunQuery = "SELECT * FROM user_data";
    $connectQuery = mysqli_query($con,$RunQuery);
    if($connectQuery==true){
      while($mydata = mysqli_fetch_array($connectQuery)){
       ?>
       <tr>
       <td><?php echo $mydata["id"]?></td>
      <td><?php echo $mydata["fname"]?></td>
      <td><?php echo $mydata["lname"]?></td>
      <td><?php echo $mydata["email"]?></td>
      <td><?php echo $mydata["password"]?></td>
      <td><a href="editFile.php?edit_id=<?php echo $mydata['id']?>">Edit</a> | <a href="delete_data_core.php?id=<?php echo $mydata['id']?>">Delete</a></td>
    </tr>
    <?php
    }}
    ?>    
  </table>
  
  

</body>
</html>