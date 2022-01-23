

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
    <!-- <h1>Reliable, efficient delivery</h1> -->
    <h1></h1>
    <h1>IIIT Vadodara Fresher</h1>

    <p>
        Please Note : The details about you enter over here are in public domain means 
                      anyone who have url can view this detail. By entering this details
                      you agree to keep your details in public domain.
                      So we don't recommend you to share any private details about you.
    </p>
</p>

  </div>
  <div class="row1-container">

  <div class="box blue">
<form action="" method="post">
    <p>Last 5 digits student id
    <input type="number" name="id"></p>
    <p>Name
    <input type="text" name="name"></p>
    <p>Write Something About You
    <input type="textarea" name="bio"></p>
    <input type="submit" name="submit" value="submit">
</form>
</div>
</div>

<div class="header">
<p><a href="index.php">View Fresher</a> OR <a href="update.php">Update My Intro</a> OR <a href="delete.php">Delete My Intro</a></p>
</div>
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

<?php
if($_POST['submit'])
{
require_once "con.php";

$id = $_POST['id'];
$name = $_POST['name'];
$bio = $_POST['bio'];

$query = "INSERT INTO `intro` (`id`, `name`, `bio`) VALUES ($id, '$name', '$bio');";

$result = mysqli_query($con,$query) or exit("Failed to run query");

if($result)
{
    echo '<script>alert("Your Details are Added Successfully");</script>';
}
else
{
    echo '<script>alert("Something went wrong while adding your details");</script>';
}


mysqli_close($con);
}

?>