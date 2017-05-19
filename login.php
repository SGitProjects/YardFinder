<?php
    session_start();
?>


<!DOCTYPE html>
<html>
    <head>
        <title>YardFinder</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600" rel="stylesheet"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/login.css">
    </head>
<body>

<div class="signup">
<p class="banner">Login</a></p>   
<form action="phpfiles/logincode.php" method="POST">
    <input type="text" id="loginemail" name="email" placeholder="Email"><br>
    <input type="password" name="password" placeholder="Password"><br>
    <button type="submit"  id="emailsubmit">Login</button>
    <p class="registerlink"><a href="signup.php">New? Click to register!</a></p>
</form>
</div>
<br>

        
 
</body>
</html>