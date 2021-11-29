<?php include_once "header.php";?>
<?php include_once "time.php";?>

<style type="text/css">

    /*mondal*/
    /*-------------------------------------------------------------*/
    body {
      font-family: Arial, Helvetica, sans-serif;
      background-color: #fff;
      
    }
    a{
      font-family: "Poppins", Arial, sans-serif;
    }
    #myImg {
      border-radius: 5px;
      cursor: pointer;
      transition: 0.3s;
      border: 1px solid black;
      padding: 4px;
    }

    #myImg:hover {
      opacity: 0.7;
      transform: scale(1.1);
        
      }

    /* The Modal (background) */
    .modal {
      display: none; /* Hidden by default */
      position: fixed; /* Stay in place */
      z-index: 1; /* Sit on top */
      padding-top: 100px; /* Location of the box */
      left: 0;
      top: 0;
      width: 100%; /* Full width */
      height: 100%; /* Full height */
      overflow: auto; /* Enable scroll if needed */
      background-color: rgb(0,0,0); /* Fallback color */
      background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
    }

    /* Modal Content (image) */
    .modal-content {
      margin: auto;
      display: block;
      width: 52%;
      height: 79%;
      max-width: 650px;
      border: 2px solid pink;
      border-radius: 23px;
    }

    /* Caption of Modal Image */
    #caption {
      margin: auto;
      display: block;
      width: 80%;
      max-width: 700px;
      text-align: center;
      color: #ccc;
      padding: 10px 0;
      height: 150px;
    }

    /* Add Animation */
    .modal-content, #caption {
      -webkit-animation-name: zoom;
      -webkit-animation-duration: 0.6s;
      animation-name: zoom;
      animation-duration: 0.6s;
    }

    @-webkit-keyframes zoom {
      from {-webkit-transform:scale(0)}
      to {-webkit-transform:scale(1)}
    }

    @keyframes zoom {
      from {transform:scale(0)}
      to {transform:scale(1)}
    }

    /* The Close Button */
    .close {
      position: absolute;
      top: 15px;
      right: 35px;
      color: #f1f1f1;
      font-size: 40px;
      font-weight: bold;
      transition: 0.3s;
    }

    .close:hover,
    .close:focus {
      color: #bbb;
      text-decoration: none;
      cursor: pointer;
    }

    /* 100% Image Width on Smaller Screens */
    @media only screen and (max-width: 700px){
      .modal-content {
        width: 100%;
      }
    }
    /*-------------------------------------------------------------*/
    #content{
      overflow: hidden;
      background-image: url('image/7.jpg');
      background-position: bottom;
      background-attachment: fixed;
      background-repeat: no-repeat;
      background-size: 101%;
      padding: 3vh 4vh;
    }
    
    #content div{
        border: 1px solid black;
    }
        .main{
        width: 100%;
        height: 100vh;
    }
    .container{
        display: flex;
        flex-direction: column;
        align-items: center;
        height: 100%;
        padding: 10px;
        justify-content: space-around;
        /* display: flex;
        flex-direction: column;
        align-items: center;
        height: 100%;
        transition:1s ease;
        box-shadow: 0 0 15px rgba(1, 1, 1, 1); */
    }
    .form{
            padding: 16px;
    }
    h1{
      margin: 0;
    }
    p{
        padding: 10px 0px 0px 0px;
        margin-bottom: 5px !important;
    }
    input{
        width: 100%;
    }
    #submit{
        width: 100%;
        height: 33px;
        margin-top: 14px;
        background: lightseagreen;
        color: white;
    }
    .inp{
        /*position: absolute;*/
      /*top: 306px;*/
      /* right: 274px; */
      /*left: 669px;*/
      /* width: 91px; */
      width: 188px;
    }
    #link{
        margin: 6px 0 0 0;
        font-size: 18px;
    }
    #submit:hover{
        background: #207974;
        border: 1px solid black;
        box-shadow: 6px 6px 9px rgb(0 0 0 / 63%);
    }
    input[type=text] {
        outline: none;
        padding: 3px 0px 3px 3px;
        padding-left: 12px;
        margin: 5px 1px 3px 0px;
        border: 1px solid #DDDDDD;
        transition: all 0.30s ease-in-out;
        /* height: ; */
    }
 
    input[type=text]:focus {
        box-shadow: 0 0 5px rgba(81, 203, 238, 1);
        padding: 3px 0px 3px 3px;
        padding-left: 22px;
        margin: 5px 1px 3px 0px;
        border: 1px solid rgba(81, 203, 238, 1);
    }
    .mypic{
      margin-bottom: 13px;
    }
    .img, .img div{
      border: none !important;
    }
    .form{
        /* transform: scale(1.2); */
        /* transition:1s ease; */
        box-shadow: 0 0 5px rgba(81, 23, 238, 1);
        padding: 13px 13px 13px 13px;
        margin: 5px 1px 3px 0px;
        border: 1px solid rgba(81, 203, 238, 1);
    }
    .form:hover{
        /* transform: scale(1.2); */
        transition:1s ease;
        box-shadow: 0 0 15px rgb(29 137 51 / 90%);
        /* border: 1px solid rgba(81, 203, 238, 1); */
    }
</style>
    <!-- Page Content  -->
      <div id="content">
        <div class="container">
        <h1><?php //echo $_SESSION['name'];?>Update Profile</h1>

        <form enctype="multipart/form-data" action="php/update_profile.php" method="post">
          <!-- <h2 style="margin-bottom:-3px;"><?php //echo $_SESSION["name"];?></h2> -->
          
          <div class="form" style="width: 335px;">
              <div class="img" style="display: flex; flex-direction: column;margin-bottom: 35px;">
                <div class="mypic" style="display: flex;justify-content: center;">
                  <img id="myImg" src="php/uploads/<?php echo $_SESSION['img'];?>" alt="ProfilePic" style="border-radius: 50%;width: 200px;height: 200px;">
                        <!-- <img  src=".jpg"  style="width:100%;max-width:300px"> -->
                </div>
                <div style="display: flex;justify-content: center;">
                  <input class="inp" id="img" type="file" name="img" size=30
                            accept="image/.png, image/.jpeg, image/.jpg"/>
                </div>
              </div>
                    <?php
                      
                      $id =$_SESSION['unique_id'];
                      $sql = "select * from students where unique_id='$id'";
                      $record = mysqli_query($link, $sql);
                      $array = mysqli_fetch_array($record);
                  
                    ?>

                    <p>Enter Nickname</p>
                    <input type="text" name="nickname" placeholder="<?php echo $array['nickname'];?>">
                    <p>Enter Username</p>
                    <input type="text" name="email" placeholder="<?php echo $array['email'];?>">
                    <p>About</p>
                    <input type="text" name="about" placeholder="<?php echo $array['about'];?>" style="height: calv(4vh - 2px);">

                    <input id="submit" type="submit" name="Update" value="Update" />
            </div>
        </form>
          <a id="link" href="profile.php">Go back</a>
      </div>



        <!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}
</script>
      </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
