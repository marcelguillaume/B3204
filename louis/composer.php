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
          
       </div>
       <div id="clavier">
           <div class="numero">1</div>    
           <div class="numero">2</div> 
           <div class="numero">3</div> 
           <div class="numero">4</div> 
           <div class="numero">5</div> 
           <div class="numero">6</div> 
           <div class="numero">7</div> 
           <div class="numero">8</div> 
           <div class="numero">9</div>
           <div class="numero">0</div> 
           <img src="img/phone-receiver1.png" class="call"> 
       </div>

    
    <?php include('Menu2.php');?>
    </div>
</body>
<script type="text/javascript">
   $("#swipe").on('click',function(){
       $('#verou').slideUp();
   }) 
    var audiotel = new Audio('10815.mp3');
    var audiocomp = new Audio('1561.mp3')

    
    $(".numero").on('click',function(){
       audiotel.play();
   }) 
    
     $(".call").on('click',function(){
       audiocomp.play();
   }) 
  </script>
</html>