
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
    }

    #myImg:hover {opacity: 0.7;}

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
      width: 80%;
      max-width: 700px;
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
    }
    .form{
            padding: 16px;
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
    #back{
            width: 100%;
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
    h2{
      margin-bottom: -3px;
      /*margin-top: 40px;*/
    }
    .profile{
      float: left;
      /*position: absolute;*/
      left: 337px;
    }
</style>
<?php
    $id = $_POST['id'];
    $sql = "SELECT * FROM students WHERE user_id= '$id'";
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_array($result);
?>
    <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
            <div class="container">
                <h1 class="profile"><?php echo $row['fname']."'s";?> Profile</h1>
            <form>
                
                <div class="form">
                    <div class="img" style="display: flex; width: 100%;    flex-direction: column;">
                        <div style="margin: 0 auto; border:0px;">
                        <img id="myImg" src="php/uploads/<?php echo $row['img'];?>" alt="ProfilePic" style="border-radius: 50%;width: 200px;height: 200px;">
                        <!-- <img  src=".jpg"  style="width:100%;max-width:300px"> -->
                        </div>
                        <!-- <div style="display: flex;justify-content: center;">
                            <input class="inp" id="pic" type="file" name="pic" size=30
                            accept="image/.png, image/.jpeg, image/.jpg"/>
                        </div> -->
                    </div>
                    
                    <div class="table">
                    <table>
                        
                        <tr>
                            <td><p>Name: </p></td>
                            <td><span><?php echo $row['fname']." ".$row['lname']; ?></span></td>
                        </tr>
                        <tr>
                            <td><p>Nickname: </p></td>
                            <td><span><?php echo $row['nickname']; ?></span></td>
                        </tr>
                        <tr>
                            <td><p>Branch: </p></td>
                            <td><span><?php echo $row['department']; ?></span></td>
                        </tr>
                        <tr>
                            <td><p>Username: </p></td>
                            <td><span><?php echo $row['email']; ?></span></td>
                        </tr>
                        <tr>
                            <td><p>Status: </p></td>
                            <td><span><?php echo $row['status']; ?></span></td>
                        </tr>
                        <tr>
                            <td><p>About: </p></td>
                            <td><span><?php if($row['about']==""){echo "no about";}else{echo $row['about'];} ?></span></td>
                        </tr>
                    </table>
                    </div>
                    
                    <a id="back" href="friend_list.php">Go back</a>
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
