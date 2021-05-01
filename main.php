<?php 

?>
 
<!DOCTYPE html>
<html>

<head>
<title>Lab Activity 4 - Main</title>
<link rel="stylesheet" href="styles.css" />
</head>

<body>

<form method="post">

<div class="w3-container">

<div class="container">
   <div class="row">
      <div class="neons col-12">
         <h1><em>WELCOME, DRAGON WARRIOR!</em></h1>
      </div>
      </div>
   </div>   

<div class="form1">

<p>Yesterday is history, Tomorrow is a mystery, but Today is a gift. That is why it is called, The Present.</p>

<address><b>-Master Oogway</b></address>    

    <br><br><br>
    
    <center>
    	<button type="submit" class="btn" method="post" name="logout" id="logout">Logout</button>
    </center>

</form>

</div>
</div>
</body>

<?php
session_start();

  include 'config.php';

  $_SESSION["verify"] = false;
  $_SESSION["code_access"] = false;

  if (isset($_REQUEST['logout'])){

        date_default_timezone_set('Asia/Manila');
        $currentDate = date('Y-m-d H:i:s');
        $currentDate_timestamp = strtotime($currentDate);
        $_SESSION["current"] = $currentDate;

        $_SESSION["verify"] = true;
        $_SESSION["code_access"] = true;

        $id = $_SESSION["id"];
        $username = $_SESSION["username"];

        $sql = "INSERT INTO `userlog` (user_id, username, activity, dateandtime) VALUES ('$id', '$username', 'Logged Out', '$currentDate')";
            $result = mysqli_query($con, $sql);
      
        if($result){
            header("Location: ../Activity4/index.php");
        }else{

        }      
  }
      
?>

</html>
