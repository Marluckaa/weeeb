<?php
include 'check.php';
if(isset($_POST['garah'])){
    session_destroy();
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Document</title>
</head>
<body>
    <section class="darkCity">
        <img src="img/sky.png" alt="">
        <img src="img/stars.png" alt="">
        <h2 id="text"><span>ABOUT</span><br>US</h2>
        

    </section>
    <div class="underGround">
        <h2>Бидний тухай</h2>
        <p>
        
        </p>
    </div>
    <script src="main.js"></script>

</body>
</html>