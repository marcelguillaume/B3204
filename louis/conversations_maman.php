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
            <h1>Maman</h1>
            <h2></h2>
        </div>
        <div id="wrapper">

            <p>1 JANVIER 2019</p>

            <div class="messagerecu">
                Comment tu vas on a pas eu de nouvelles de toi et ta chérie ?
            </div>

            <div class="messageenvoi">
                Ouais ça va avec Charlotte
            </div>

            <div class="messagerecu">
                Tu as trouvé ton stage ?
            </div>

            <div class="messageenvoi">
                Ouais
            </div>

            <div class="messagerecu">
                Et ta chérie ?
            </div>

            <div class="messageenvoi">
                Je sais pas..
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
