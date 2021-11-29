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
      margin: 11px;
      border: 2px solid black;
      padding: 5px;
      margin-bottom: 35px;
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
      height: 100vh; /* Full height */
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
      font-size: 17px;
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
        justify-content: flex-start;
    }
    .form{
            padding: 16px;
            margin-top: -23px !important;
    }
    p{
        /*padding: 10px 0px 0px 0px;*/
        margin-bottom: 5px !important;
        width: 152px;
        display: inline;
        color: black;
        font-weight: 40px;
        display: table-cell;
    }
    input{
        width: 100%;
    }
    #submit{
      width: 100%;
      height: 40px;
      margin-top: 14px;
      background: lightseagreen;
      color: white;
      width: 100%;
      margin-top: 14px;
      background: lightseagreen;
      color: white;
      padding: 4px;
      display: block;
      border: 2px solid black;
      text-align: center;
    }
    .inp{
        /*position: absolute;*/
    /*top: 306px;*/
    /* right: 274px; */
    /*left: 669px;*/
    width: 91px;
    padding: 20px;
    }

    #link{
        margin: 16px 0;
        font-size: 18px;
    }
    h1{
      font-weight: 900;
      color: white;
      text-shadow: 0px 0px 12px black;
    }
    h2{
      margin-bottom: -9px;
      /*margin-top: 40px;*/
      position: relative;
      top: 253px;
      left: 13px;
    }
    .profile{
      float: left;
      /*position: absolute;*/
      left: 337px;
    }
    td .td-r{
      max-width:200px;
      min-width:200px;
      width: 250px;
      
    }
    td{
      padding: 10px 17px 4px 18px !important;
    }
    #submit:hover{
        background: #207974;
        border: 1px solid black;
        box-shadow: 6px 6px 9px rgb(0 0 0 / 63%);
    }
    .img{
      border: none !important;
      margin-bottom: 14px;
    }
    .form{
        /* transform: scale(1.2); */
        /* transition:1s ease; */
        box-shadow: 0 0 5px rgba(81, 23, 238, 1);
        padding: 13px 13px 13px 13px;
        margin: 5px 1px 3px 0px;
        /* border: 1px solid rgba(81, 203, 238, 1); */
    }
    .form:hover{
        /* transform: scale(1.2); */
        transition:1s ease;
        box-shadow: 0 0 15px rgb(255 0 203);
        /* padding: 13px 13px 13px 13px;
        margin: 5px 1px 3px 0px;
        border: 1px solid rgba(81, 203, 28, 1); */
    }
</style>
    <!-- Page Content  -->
      <div id="content" class="p-4">
            <div class="container">
                <h1 class="profile" style="margin-bottom: -0.2rem;"><?php //echo $_SESSION['name'];?>My Profile</h1>
            <form>
            
                <h2><?php echo $_SESSION["name"];?> </h2>
                <div class="form">
                    <div class="img" style="display: flex; width: 100%;    flex-direction: column;">
                        <div style="margin: 0 auto; border:0px;">
                        <img id="myImg" src="php/uploads/<?php echo $_SESSION['img'];?>" alt="ProfilePic" style="border-radius: 50%;width: 200px;height: 200px;">
                        <!-- <img  src=".jpg"  style="width:100%;max-width:300px"> -->
                        </div>
                        <!-- <div style="display: flex;justify-content: center;">
                            <input class="inp" id="pic" type="file" name="pic" size=30
                            accept="image/.png, image/.jpeg, image/.jpg"/>
                        </div> -->
                    </div>
                    <?php
                      // session_start();
                      // include_once "config.php";
                      $id = $_SESSION['unique_id'];
                      $sql = "SELECT * FROM students WHERE unique_id = '$id'";
                      $result = mysqli_query($link, $sql);
                      $row = mysqli_fetch_array($result);
                      
                    ?>
                    <div class="table">
                    <table>
                        <tr>
                            <td class="td-f"><p>ID: </p></td>
                            <td class="td-r"><span><?php echo $row['unique_id']; ?></span></td>
                        </tr>
                        <tr>
                            <td class="td-f"><p>Nickname: </p></td>
                            <td class="td-r"><span><?php echo $row['nickname']; ?></span></td>
                        </tr>
                        <tr>
                            <td class="td-f"><p>Username: </p></td>
                            <td class="td-r"><span><?php echo $row['email']; ?></span></td>
                        </tr>
                        <tr>
                            <td class="td-f"><p>Department: </p></td>
                            <td class="td-r"><span><?php echo $row['department']; ?></span></td>
                        </tr>
                        <tr>
                            <td class="td-f"><p>Year: </p></td>
                            <td class="td-r"><span><?php echo $row['year']; ?></span></td>
                        </tr>
                        <tr>
                            <td class="td-f"><p>About: </p></td>
                            <td class="td-r"><span><?php echo $row['about']; ?></span></td>
                        </tr>

                    </table>
                    </div>
<!--                    <p>ID: </p>-->
<!--                    <span>--><?php //echo $row['unique_id']; ?><!--</span>-->
<!--                    <p>Nickname: </p>-->
<!--                    <span>--><?php //echo $row['nickname']; ?><!--</span>-->
<!--                    <p>Username: </p>-->
<!--                    <span>--><?php //echo $row['email']; ?><!--</span>-->
<!--                    <p>department: </p>-->
<!--                    <span>--><?php //echo $row['department']; ?><!--</span>-->
<!--                    <p>Year: </p>-->
<!--                    <span>--><?php //echo $row['year']; ?><!--</span>-->
                    <!-- <p>Username: </p> -->
                    
                    <a id="submit" href="profile_update.php">Update profile</a>
                </div>
            </form>
           
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
