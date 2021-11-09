<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Téléphone de Louis</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
    <div class="contenu" id="message">
        <div class="header-message">
            <?php include('ClassBattery.php');?>
            <img src="img/profile_white.png" alt="telephone blanc" class="phoner">
            <h1>Sarah</h1>
            <h2></h2>
        </div>
        <div id="wrapper">

            <p>1 JANVIER 2019</p>

            <div class="messageenvoi">
                T’es prête pour la soirée? Tu as le Jäger?
            </div>

            <div class="messagerecu">
                Non faut que je me douche et que je m’habille, mais oui j’ai la tease 👌
            </div>

            <div class="messageenvoi">
                Tu vas mettre quoi 😏 ?
            </div>

            <div class="messagerecu">
                Bah mon kimono, je sais pas moi ... a plus
            </div>

            <div class="messageenvoi">
                Oké 😏
            </div>




            <?php include('Menu2.php');?>
        </div>
    </div>
</body>
<script type="text/javascript">
    $("#swipe").on('click', function() {
        $('#verou').slideUp();
    })

</script>

</html>
