<?php

session_start();

include_once('config');


if(empty($_SESSION['username'])){
    header("location:login.php");
}

$sql = "SELECT * from users";

$selectUsers = $conn ->prepare($sql);
 $selectUsers ->execute();

 $users_data = $selectusers->fetchAll();
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
	<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
	<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
	<link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
	<link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
	<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
 </head>
 <body>
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-norwrap p-0 shadow">
        <a class="navbar-brand col-md-3 col lg-2 me-0 px-3">
            <?php echo "Welcome to dashboard" .$_session['username'];?>
        </a>

        <button class="nav-toggler position absolute d-md-none collapsed"
    </header>
    
 </body>
 </html>

