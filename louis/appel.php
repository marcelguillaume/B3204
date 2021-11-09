<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Téléphone de Louis</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
    <div class="contenu" id="appel">
        <?php include('batterie.php');?>
        <div class="header-appel">
            <?php include('ClassBattery.php');?>
            <img src="img/phone-receiver.png" alt="telephone blanc" class="phoner">
            <a href="composer.html"><img src="img/phone_keyboard.png" class="composer"></a>
        </div>
        <div id="wrapper">
            <div class="menu_1">
                <a href="appel.php" class="appel_lien active">Appels</a>
                <a href="contact.php" class="appel_lien">Contacts</a>
            </div>

            <p>6 JANVIER 2019</p>
            <table>
                <table>
                    <tr>
                        <td><img src="img/incoming-call.png" alt="incoming call"></td>
                        <td> Chat 💋</td>
                        <td>20:51</td>
                    </tr>
                    <tr>
                        <td><img src="img/incoming-call.png" alt="incoming call"></td>
                        <td> Bro 👊</td>
                        <td>20:48</td>
                    </tr>
                    <tr>
                        <td><img src="img/incoming-call.png" alt="incoming call"></td>
                        <td>Bro 👊</td>
                        <td>20:42</td>
                    </tr>
                    <tr>
                        <td><img src="img/incoming-call.png" alt="incoming call"></td>
                        <td> Chat 💋</td>
                        <td>20:37</td>
                    </tr>
                    <tr>
                        <td><img src="img/incoming-call.png" alt="incoming call"></td>
                        <td>Le lover 👅💦</td>
                        <td>20:34</td>
                    </tr>
                    <tr>
                        <td><img src="img/incoming-call.png" alt="incoming call"></td>
                        <td> Chat 💋</td>
                        <td>20:05</td>
                    </tr>
                    <tr>
                        <td><img src="img/incoming-call.png" alt="incoming call"></td>
                        <td> Chat 💋</td>
                        <td>18:13</td>
                    </tr>
                    <tr>
                        <td><img src="img/incoming-call.png" alt="incoming call"></td>
                        <td>Maman</td>
                        <td>16:05</td>
                    </tr>
                    <tr>
                        <td><img src="img/incoming-call.png" alt="incoming call"></td>
                        <td> Chat 💋</td>
                        <td>14:43</td>
                    </tr>
                    <tr>
                        <td><img src="img/incoming-call.png" alt="incoming call"></td>
                        <td>Le lover 👅💦</td>
                        <td>14:02</td>
                    </tr>
                </table>
            </table>
        </div>

        <?php include('Menu2.php');?>
    </div>
</body>
<script type="text/javascript">
    $("#swipe").on('click', function() {
        $('#verou').slideUp();
    })

</script>

</html>
