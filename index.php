

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>IIIT Vadodara Fresher</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->

  <!-- <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png"> -->

  <!-- <title>Frontend Mentor | Four card feature section</title> -->
  <link rel="stylesheet" href="styles.css">
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,600;1,200;1,400;1,600&display=swap"
    rel="stylesheet">
</head>

<body>
  <div class="header">
    <h1></h1>
  <h1>IIIT Vadodara Fresher</h1>
  </div>




<?php

require_once "con.php";

$result = mysqli_query($con, "SELECT * FROM `intro`") or exit("Failed to run query");

$row = mysqli_fetch_assoc($result);



while ($row) {
  
   
?>

<div class="row1-container">

 
    <div class="box box-down cyan">
      <h2><?php echo $row['name'];?></h2>
      <p><?php echo $row['bio'];?></p>
      <!-- <img src="https://assets.codepen.io/2301174/icon-supervisor.svg" alt=""> -->
    </div>
    <?php $row = mysqli_fetch_assoc($result);?>
    
    
    <div class="box red">
      <h2><?php echo $row['name'];?></h2>
      <p><?php echo $row['bio'];?></p>
      <!-- <img src="https://assets.codepen.io/2301174/icon-team-builder.svg" alt=""> -->
    </div>
    <?php $row = mysqli_fetch_assoc($result);?>
    
    
    <div class="box box-down blue">
      <h2><?php echo $row['name'];?></h2>
      <p><?php echo $row['bio'];?></p>
      <!-- <img src="https://assets.codepen.io/2301174/icon-calculator.svg" alt=""> -->
    </div>
    <?php $row = mysqli_fetch_assoc($result);?>



    <div class="box orange">
      <h2><?php echo $row['name'];?></h2>
      <p><?php echo $row['bio'];?></p>
      <!-- <img src="https://assets.codepen.io/2301174/icon-karma.svg" alt=""> -->
    </div>
    <?php $row = mysqli_fetch_assoc($result);?>


  </div>

  


<?php


}


mysqli_close($con);
?>

<br><br><br><br><br><br><br><br>
<div class="header">
<p><a href="add.php">Introduce Myself</a> OR <a href="update.php">Update Intro</a> OR <a href="delete.php">Delete Intro</a></div>
<footer>
    <p class="attribution">
        Made with ❤️ by Deepak Gohil
    </p>
  </footer>


</body>

</html>
<!-- partial -->
  
</body>
</html>
