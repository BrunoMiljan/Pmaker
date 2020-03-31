<?php 
    
    session_start();
    if(!isset($_SESSION['p_name'])){
        header("Location: index.php");
        exit();
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Project Maker v 0.0.1</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../projectmaker/css/stil.css">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../projectmaker/jquery.js"></script>
</head>
<body>
    <div class="container">
        <div class="left">
            
            <ul>
                <li><img src="../projectmaker/images/1x/Asset 2.png" class="img">Općenito</li>
                <img src="../projectmaker/images/1x/Asset 5.png" class="img1">
                <li><img src="../projectmaker/images/1x/1x/Asset 1.png" class="img">Tehnologije</li>
                <img src="../projectmaker/images/1x/Asset 5.png" class="img1">
                <li><img src="../projectmaker/images/1x/Asset 2.png" class="img">Završetak</li>
            </ul>

        </div>
        <div class="right">

            <h1>Odaberite Tehnologije - <?php echo $_SESSION['p_name']; ?></h1>
            <p class="pod">Skripta sama generira početni kod bez vaše pomoći.</p>

            <form method="POST" action="/projectmaker/includes/script2.php">
                <div class="cb">
                    <input class="c1" type="checkbox" name="html">
                    <div class="html"><p>HTML<p></div>
                    <input class="c2" type="checkbox" name="css">
                    <div class="css"><p>CSS<p></div>
                    <input class="c3" type="checkbox" name="js">
                    <div class="js"><p>JavaScript<p></div>
                    <input class="c4" type="checkbox" name="jquery">
                    <div class="jquery"><p>JQuery<p></div>
                    <input class="c5" type="checkbox" name="php">
                    <div class="php"><p>PHP<p></div>
                    <input class="c6" type="checkbox" name="wp">
                    <div class="wp"><p>Wordpress<p></div>
                </div>
                <input type="submit" name="next2" value="Nastavi">
            </form>

        </div>
    </div>
</body>
</html>