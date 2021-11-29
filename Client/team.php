<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Circular Progress Bar | CampCodes</title>
    <link rel="stylesheet" href="css/team.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-circle-progress/1.2.2/circle-progress.min.js"></script>
  </head>
  <style>
    img{
      filter: drop-shadow(2px 4px 6px black);
    }
  </style>
  <body>
  <div class="title"><h1> Team Member <h1></div>
    <div class="wrapper">

      <div class="card">
        <div class="circle">
          <div class="bar"></div>
          <div class="box"><span> <img src="img/1.jpg" alt="" style="width: 149px;border-radius: 50%;"></span></div>
        </div>
        <div class="text">MD SAIF <p>Team leader <br> (Full stack Developer)</p></div>
      </div>


      <div class="card js">
        <div class="circle">
          <div class="bar"></div>
          <div class="box"><img src="img/2.jpg" alt="" style="width: 151px;border-radius: 50%;"> </a></div>
        </div>
        <div class="text">J. Kavya <p>Designer</p></div>
      </div>

      <div class="card react">
        <div class="circle">
          <div class="bar"></div>
          <div class="box"><span><img src="img/3.jpg" alt="" style="width: 148px;border-radius: 50%;"></span></div>
        </div>
        <div class="text">A. Rakshak <p>Developer</p></div>
      </div>
    </div>

<!--     <script>
      let options = {
        startAngle: -1.55,
        size: 150,
        value: 0.10,
        fill: {gradient: ['#a445b6', '#fa4221']}
      }
      $(".circle .bar").circleProgress(options).on('circle-animation-progress',
      function(event, progress, stepValue){
        $(this).parent().find("span").text(String(stepValue.toFixed(2).substr(2)) + "%");
      });
      $(".js .bar").circleProgress({
        value: 0.20
      });
      $(".react .bar").circleProgress({
        value: 0.60
      });
    </script> -->

  </body>
</html>
