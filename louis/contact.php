<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Téléphone de Louis</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
    <div class="contenu" id="contact">
        <?php include('batterie.php');?>
        <div class="header-contact">
            <?php include('ClassBattery.php');?>
            <img src="img/users.png" alt="telephone blanc" class="phoner">
            <a href="#"><img src="img/plus.png" class="composer"></a>
        </div>
        <div id="wrapper">
            <div class="menu_1">
                <a href="appel.php" class="appel_lien">Appels</a>
                <a href="contact.php" class="appel_lien active">Contacts</a>
            </div>

            <table>
                <tr>
                    <td><img src="img/user.png"></td>
                    <td>Chat 💋</td>
                    <td><img src="img/phone-receiver1.png"><a href="conversations_charlotte.php"><img src="img/chat.png"></a></td>
                </tr>
                <tr>
                    <td><img src="img/user.png"></td>
                    <td>Bro 👊</td>
                    <td><img src="img/phone-receiver1.png"><a href="conversations_thomas.php"><img src="img/chat.png"></a></td>
                </tr>
                <tr>
                    <td><img src="img/user.png"></td>
                    <td>Le lover 👅💦</td>
                    <td><img src="img/phone-receiver1.png"><a href="conversations_simon.php"><img src="img/chat.png"></a></td>
                </tr>
                <tr>
                    <td><img src="img/user.png"></td>
                    <td>Maman</td>
                    <td><img src="img/phone-receiver1.png"><a href="conversations_maman.php"><img src="img/chat.png"></a></td>
                </tr>
                <tr>
                    <td><img src="img/user.png"></td>
                    <td>Papa</td>
                    <td><img src="img/phone-receiver1.png"><a href="conversations_papa.php"><img src="img/chat.png"></a></td>
                </tr>
                <tr>
                    <td><img src="img/user.png"></td>
                    <td>P’tite Blonde 😏</td>
                    <td><img src="img/phone-receiver1.png"><a href="conversations_sarah.php"><img src="img/chat.png"></a></td>
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
