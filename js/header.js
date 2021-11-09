$(document).on("scroll", function() {

      if($(document).scrollTop()>200) {
        $("header").css("background-color","rgba(0,0,0,0.7)");
        $("header").css("border-bottom",".1vw solid #C01213");
        $("#logoButton").css("width","7%");
        $("header img").css("transform","rotate(0deg)");
        $("#logoButton").css("margin","0.4vw 0");
        $("header a").css("font-size","1.2vw");
        $("header img").css("margin","0");
      } else {
        $("header").css("background-color","transparent");
        $("header").css("border-bottom",".1vw solid transparent");
        $("#logoButton").css("width","15%");
        $("header img").css("transform","rotate(-4deg)");
        $("header img").css("margin","1vw 0");
      }
});