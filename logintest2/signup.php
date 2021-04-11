<html>
  <head>
  <link rel="stylesheet" href="../assets/styles/signup.css" />
    <?php 
    session_start();
    ?>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  </head>
    <body>
      <div class="card">
      <div style="border-radius:200px; height:200px; width:200px; background: #484848; margin:0 auto;">
        <i class="checkmark">✓</i>
      </div>
        <h1>Success</h1> 
        <p>Account is aangemaakt<br/>Wacht 5-10 seconden</p>
      </div>
    </body>
</html>
<script>
    var timer = setTimeout(function() {
        window.location='login.php'
    }, 5000);
</script>
<?php

$link = mysqli_connect("127.0.0.1", "c979aps1", "miyqpiel", "c979ecosy");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$naam = $_POST['name'];
$email = $_POST['ename'];
$password = $_POST['pname'];

$sql = "INSERT INTO `users` (`userid`, `name`, `email`, `password`) VALUES (NULL, '$naam', '$email', '$password');";
if(mysqli_query($link, $sql)){
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);
?>