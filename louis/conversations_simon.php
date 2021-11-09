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
            <h1>Simon</h1>
            <h2></h2>
        </div>
        <div id="wrapper">

            <p>1 JANVIER 2019</p>

            <div class="messagerecu">
                On peut venir ce soir à la soirée avec Eglantine?
            </div>

            <div class="messageenvoi">
                Ouais tkt mais vous restez pas collé toute la soirée
            </div>

            <div class="messagerecu">
                Promis, ça va avec Charlotte ? on vous a entendu tout à l’heure
            </div>

            <div class="messageenvoi">
                C’est rien elle casse la tête avec Sarah..
            </div>

            <div class="messagerecu">
                Tu fais quoi, tout le monde t’attends ?
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
