<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Téléphone de Louis</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="src/js/jquery.swipebox.js"></script>
    <link rel="stylesheet" href="src/css/swipebox.css">
</head>

<body>
    <div class="contenu" id="galerie">
        <?php include('batterie.php');?>
        <div class="header-galerie">
            <?php include('ClassBattery.php');?>
            <img src="img/picture.png" alt="telephone blanc" class="phoner">
            <h1>Galerie</h1>
        </div>

        <?php include('Menu2.php');?>
        <div id="content">
            <img src="img/img_louis/1.jpg" alt="photo1" class="gal" id="gal1" />
            <img src="img/img_louis/2.png" alt="photo2" class="gal" id="gal2" />
            <img src="img/img_louis/3.jpg" alt="photo3" class="gal" id="gal3" />
            <img src="img/img_louis/4.jpg" alt="photo4" class="gal" id="gal4" />
            <img src="img/img_louis/5.png" alt="photo5" class="gal" id="gal5" />
        </div>
    </div>

</body>
<script type="text/javascript">
    var code = "<?php echo $_GET['code']; ?>";
    var httpRequest = new XMLHttpRequest();

    function requete(x) {
        var xhr = httpRequest
        xhr.open('GET', 'requete.php?req=' + x + '&code=' + code, true)
        // On envoit un header pour indiquer au serveur que la page est appellée en Ajax
        xhr.setRequestHeader('X-Requested-With', 'xmlhttprequest')
        // On lance la requête
        xhr.send()
    }

    var regard = 0;
    var batt = 1;



    $("#gal1").on('click', function() {
        requete("ajoutvue");
        document.getElementById("gal1").src = "img/img_louis/grosse/1.jpg";
        $("#gal1").css("width", "90vw");

        setTimeout(function() {
            $("#gal1").fadeOut();
        }, 6000)
        batt++;
        bat();

    })

    $("#gal2").on('click', function() {
        requete("ajoutvue");
        document.getElementById("gal2").src = "img/img_louis/grosse/2.PNG";
        $("#gal2").css("width", "90vw");

        setTimeout(function() {
            $("#gal2").fadeOut();
        }, 6000)
        batt++;
        bat();


    })

    $("#gal3").on('click', function() {
        requete("ajoutvue");
        document.getElementById("gal3").src = "img/img_louis/grosse/3.JPG";
        $("#gal3").css("width", "90vw");

        setTimeout(function() {
            $("#gal3").fadeOut();
        }, 6000)

        batt++;
        bat();


    })

    $("#gal4").on('click', function() {
        requete("ajoutvue");
        document.getElementById("gal4").src = "img/img_louis/grosse/4.jpg";
        $("#gal4").css("width", "90vw");

        setTimeout(function() {
            $("#gal4").fadeOut();
        }, 6000)

        batt++;
        bat();


    })

    $("#gal5").on('click', function() {
        requete("ajoutvue");
        document.getElementById("gal5").src = "img/img_louis/grosse/5.png";
        $("#gal5").css("width", "90vw");

        setTimeout(function() {
            $("#gal5").fadeOut();
        }, 6000)

        batt++;
        bat();




    })


    function bat() {

        var bat = document.getElementById("bat").src;

        if (window.batt == 1) {

            document.getElementById("bat").src = "img/1.png";

        }

        if (window.batt == 2) {

            document.getElementById("bat").src = "img/2.png";

        }

        if (window.batt == 3) {

            document.getElementById("bat").src = "img/3.png";

        }

        if (window.batt == 4) {

            document.getElementById("bat").src = "img/4.png";

            window.location = "https://tim.cgmatane.qc.ca/projets/2019/eq6/louis/index.php?batvid";


        }

    }

</script>

</html>
