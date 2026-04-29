<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/fonte.css">
    <style>
        @font-face {
    font-family: 'gtimes';
    src: url(../assets/fontes/good_times/Good\ Times\ Rg.otf);
    font-weight: bold;
    font-style: normal;
}
.gtimes{
    font-family: 'gtimes', Arial, Helvetica, sans-serif;
}
@font-face {
    font-family: 'luxo';
    src: url(../assets/fontes/luxoorea/Luxoorea.ttf);
    font-weight: bold;
    font-style: normal;
}
#luxo {
    font-family: 'luxo', Arial, Helvetica, sans-serif;
    font-weight: 800;
    font-style: normal;
}
    </style>
</head>
<body>
  
    <?php
    include "../includes/navbar.php";
    include "../includes/carrousel.php";
    echo "<br><br><br>";
    include "../includes/titulo1.php";
    include "../includes/marcas.php";
    include "../includes/titulo2.php";
    include "../includes/cards.php"; 
    include "../includes/footer.php";
    ?>
</body>
</html>
