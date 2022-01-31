
   <?php 
     require_once("root.php");
    
        if(isset($_REQUEST["submit_btn"])){       
            $fname = $_REQUEST["fname"];
            $lname = $_REQUEST["lname"];
            $Email = $_REQUEST["usr_email"];
            $password = $_REQUEST["usr_psw"];
        }
     
     
     
     
    $dataQuery ="INSERT INTO user_data (fname,lname,email,password) VALUES ('$fname','$lname','$Email','$password')";
    $dataRun = mysqli_query($con,$dataQuery);
    if($dataRun==true){
        header("location:sineup.php?Insert_data=true");
    }else{
        header("location:sineup.php?Insert_data=false");
    }

    ?>
