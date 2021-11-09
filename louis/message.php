<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Téléphone de Louis</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
    <?php include('batterie.php');?>
    <div class="contenu" id="message">
        <div class="header-message">
            <?php include('ClassBattery.php');?>
            <img src="img/bubble.png" alt="telephone blanc" class="phoner">
            <a href="#"><img src="img/feather.png" class="composer"></a>
        </div>
        <div id="wrapper">
            <table>
                <tr>
                    <td rowspan="2" class="profile"><img src="img/profile.png"></td>
                    <td><a href="conversations_charlotte.php">Chat 💋</a></td>
                    <td>21:23</td>
                </tr>
                <tr>
                    <td colspan="2"> Louis, stp réponds je t’en ...</td>
                </tr>

                <tr>
                    <td rowspan="2" class="profile"><img src="img/profile.png"></td>
                    <td><a href="conversations_thomas.php">Bro 👊</a></td>
                    <td>21:15</td>
                </tr>
                <tr>
                    <td colspan="2">Tu fais quoi tout le monde....</td>
                </tr>

                <tr>
                    <td rowspan="2" class="profile"><img src="img/profile.png"></td>
                    <td><a href="conversations_simon.php">Le lover 👅💦</a></td>
                    <td>12:34</td>
                </tr>
                <tr>
                    <td colspan="2">Tu fais quoi, tout le monde ...</td>
                </tr>

                <tr>
                    <td rowspan="2" class="profile"><img src="img/profile.png"></td>
                    <td><a href="conversations_maman.php">Maman</a></td>
                    <td>12:34</td>
                </tr>
                <tr>
                    <td colspan="2">Je sais pas..</td>
                </tr>

                <tr>
                    <td rowspan="2" class="profile"><img src="img/profile.png"></td>
                    <td><a href="conversations_sarah.php">P’tite Blonde 😏</a></td>
                    <td>12:34</td>
                </tr>
                <tr>
                    <td colspan="2">Oké 😏</td>
                </tr>

                <tr>
                    <td rowspan="2" class="profile"><img src="img/profile.png"></td>
                    <td><a href="conversations_papa.php">Papa</a></td>
                    <td>12:34</td>
                </tr>
                <tr>
                    <td colspan="2">T'inquiète pas ça va passer</td>
                </tr>



            </table>
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
