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
            <h1>Charlotte</h1>
            <h2></h2>
        </div>
        <div id="wrapper">

            <p>1 JANVIER 2019</p>

            <div class="messagerecu">
                C’est quoi la photo avec Sarah là encore? Tu te moques de moi? 😡
            </div>

            <div class="messageenvoi">
                Avec Sarah, non mais c’est juste une photo entre potes..
            </div>

            <div class="messagerecu">
                Et tu mets ton bras autour de ses épaules ??!!😡
            </div>

            <div class="messageenvoi">
                Non mais elle voulait juste donner des nouvelles à ses parents et j’étais là c’est tout
            </div>

            <div class="messagerecu">
                Tu fais quoi là tout le monde t’attends !😡
            </div>

            <div class="messagerecu">
                Allô! Louis! Putain tu saoules là t’es où?😡
            </div>

            <div class="messagerecu">
                Louis, stp réponds je t’en veux pas ok?!😥
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
