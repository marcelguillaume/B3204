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
           <h1>Thomas</h1>
           <h2>+33606423449</h2>
       </div>
       <div id="wrapper">
       
       <p>1 JANVIER 2019</p>
       
       <div class="messagerecu">
          Je sais tkt
       </div>
       
       <div class="messageenvoi">
           Ouais bah j’aime bien Sarah c’est tout !
       </div>
       
       <div class="messagerecu">
           Ouais ‘fin tu passes ton temps avec aussi, puis tu connais Charlotte elle est jalouse en permanence
       </div>
       
       <div class="messageenvoi">
          Charlotte elle est chiante.. pas moyen de vivre, elle casse la tête pour une photo avec Sarah encore.

       </div>
       
        
       <?php include('Menu2.php');?>
       </div>
    </div>
</body>
<script type="text/javascript">
   $("#swipe").on('click',function(){
       $('#verou').slideUp();
   }) 
  </script>
</html>
