<?php
session_start();

?>
<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Téléphone de Louis</title>
    <link rel="stylesheet" href="style.css" media="screen">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="apple-touch-icon" href="phone.png" />
</head>

<body>


    <?php
    
    
if(isset($_GET['batvid'])){
    
   ?>
    <div class="finbatterie">
        <div id="vue"></div><img src="batterie2.gif">
        <h1>Le film a repris, a vous d'accuser le coupable ! </h1>
    </div>
    <script>
        $(".finbatterie").css("z-index", "999999")
        $(".finbatterie").fadeIn()

    </script>

    <?php
    session_destroy();
}

if(isset($_GET['code'])){

  
if(isset($_SESSION['code'])){
    echo '<script>var code ="'.$_SESSION['code'].'"</script>';
    $code = $_SESSION['code'];
} 

else if(isset($_GET['code'])){
    echo '<script>var code ="'.$_GET['code'].'"</script>';
    $_SESSION['code'] = $_GET['code'];
    $code = $_GET['code'];
}

?>

    <?php include('batterie.php');?>
    <div class="finbatterie"><img src="batterie2.gif"></div>
    <?php 
    
    if(empty($_SESSION['verou'])){
        
    $_SESSION['verou'] = '1';
    ?>
    <div class="contenu" id="verou">
        <?php include('ClassBattery.php');?>

        <div class="header">
            <h1>19:50</h1>
            <p>LUN.7 JANVIER</p>
            <br><br><br><br><br><br><br><br><br><br><br><br><br>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <img src="img/lock.png" id="swipe">
        </div>

        <div class="deverouillage">

        </div>

    </div>
    <?php
        
    }

        
    ?>
    <div class="contenu" id="deverou">
        <?php include('ClassBattery.php');?>

        <div class="header">
            <h1>19:50</h1>
            <p>LUN.7 JANVIER</p>
        </div>

        <div id="menu1">
            <ul>
                <li><a href="appel.php"><img src="img/phone.png" alt="telephone"></a></li>
                <li><a href="contact.php"><img src="img/contact.png" alt="contact"></a></li>
                <li><a href="message.php"><img src="img/chat.png" alt="chat"></a></li>
                <li><a href="https://m.facebook.com/louis.dumont.775" target="_blank"><img src="img/facebook.png" alt="facebook"></a></li>
                <li><a href="galerie.php?code=<?php echo $code;?>"><img src="img/picture.png" alt="picture"></a></li>
            </ul>
        </div>

        <?php include('Menu2.php');?>
    </div>

</body>
<script type="text/javascript">
    $("body").on('click', function() {
        $("#swipe").attr("src", "img/unlock.png");
        $('#verou').slideUp();
    })

    $("h1").on('click', function() {
        $('#verou').slideUp();
    })

</script>
<?php
}
else{
?>

<div class="contenu" id="verou">
    <?php include('ClassBattery.php');?>

    <div class="header">
        <h1>19:50</h1>
        <p>LUN.7 JANVIER</p>
    </div>

    <div id="menu1">
        <form method="get">
            <input type="text" name="code" placeholder="Code de partie">
            <button type="submit">Go !</button>
        </form>
    </div>
</div>


<?php
}
?>

</html>
