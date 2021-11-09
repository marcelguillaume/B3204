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
        <?php include('batterie.php');?>
        <div class="header-message">
            <?php include('ClassBattery.php');?>
            <img src="img/profile_white.png" alt="telephone blanc" class="phoner">
            <h1>Papa</h1>
            <h2></h2>
        </div>
        <div id="wrapper">

            <p>1 JANVIER 2019</p>

            <div class="messageenvoi">
                Maman elle est jalouse genre chiante ou c’est que Charlotte?
            </div>

            <div class="messagerecu">
                Non ta mère ça va, elle est tout le temps sur ton dos ?
            </div>

            <div class="messageenvoi">
                Ouais elle casse la tête à cause de Sarah, je suis trop proche apparemment..

            </div>

            <div class="messagerecu">
                Et ta chérie ?
            </div>


            <div class="messageenvoi">
                T'inquiète pas ça va passer
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
