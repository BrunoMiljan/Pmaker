
<!DOCTYPE html>
<html>
<head>
    <title>Project Maker v 0.0.1</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../projectmaker/css/stil.css">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="left">
            
            <ul>
                <li><img src="../projectmaker/images/1x/1x/Asset 1.png" class="img">Općenito</li>
                <img src="../projectmaker/images/1x/Asset 5.png" class="img1">
                <li><img src="../projectmaker/images/1x/Asset 2.png" class="img">Tehnologije</li>
                <img src="../projectmaker/images/1x/Asset 5.png" class="img1">
                <li><img src="../projectmaker/images/1x/Asset 2.png" class="img">Završetak</li>
            </ul>

        </div>
        <div class="right">

            <h1>Dobrodošli!</h1>
            <p class="pod">Project maker je spreman.</p>

            <form method="POST" action="/projectmaker/includes/script1.php">

                <p class="pod">Naziv projekta:</p>
                <input type="text" name="p_name" placeholder="Ime projekta">
                <p class="pod">Opis:</p>
                <textarea placeholder="Opis" name="dis"></textarea>
                <p></p>

                <input type="submit" name="next" value="Nastavi">
            </form>

        </div>
    </div>
</body>
</html>