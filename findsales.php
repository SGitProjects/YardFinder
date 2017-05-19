<?php
    session_start();
    if (!isset($_SESSION['id']))
{
    header("Location: login.php");
    die();
}
?>



<!DOCTYPE html>
<html>
    <head>
        <title>YardFinder</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600" rel="stylesheet"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/main.css">
    </head>
<body>

<div class="navibar">
<div class="container">
    <ul>
        <li><a href="findsales.php">Look For Yard Sales</a></li>
        <li><a href="createsales.php">Create a Yard Sale</a></li>
        <nav>
<?php 
if (isset($_SESSION['id'])) {   
      echo  '<li><a href="phpfiles/logout.php">Logout</a></li>';
} else {
      echo  '<li><a href="login.php">Login</a></li>
             <li><a href="signup.php">Register</a></li>';    
}
?>
        </nav>
    </ul>
</div>
</div>



        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>