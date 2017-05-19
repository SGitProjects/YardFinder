<!DOCTYPE html>
<html>
    <head>
        <title>YardFinder</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600" rel="stylesheet"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/login.css">
    </head>
<body>

<?php 

$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
if (strpos($url, 'error=empty') !== false) {
    echo "Fill out all fields";
}
elseif(strpos($url, 'email=empty') !== false) {
    echo "Email already associated with another account!";
}

?>

<div class="signup">
<p class="banner">Sign Up</p>    
<form action="phpfiles/signupcode.php" method="POST">
    <input type="text" name="first" placeholder="First Name"><br>
    <input type="text" name="last" placeholder="Last Name"><br>
    <input type="text" name="email" placeholder="Email"><br>
    <input type="password" name="password" placeholder="Password"><br>
    <button type="submit">Sign Up</button>
</form>
</div>
  

</body>
</html>