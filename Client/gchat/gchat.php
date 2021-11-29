<?php 
  session_start();
  include_once "php/config.php";
  echo "<script> //alert('session id ".$_SESSION['unique_id']."')</script>";
  if(!isset($_SESSION['unique_id'])){
    header("location: ../login.php");
  }
  if($_GET['status']=='yes'){
    echo "<script>
            alert('Your are get blocked..');
            window.history.back();
          </script>";
  }


?>
<?php include_once "header.php"; ?>
<!------------ for modal ------------>
<style>
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
</style>
 <!--------------- ends ------------->

<style>
  body{
    /* background-image: linear-gradient(to right, rgb(9 41 26 / 68%), rgb(255 0 0 / 62%)); */
    /* background-image: linear-gradient( 135deg, #FEB692 10%, #EA5455 100%); */
    /* background-image: linear-gradient( 135deg, #E2B0FF 10%, #9F44D3 100%); */ 
    /* background: -webkit-linear-gradient(left, #a445b2, #fa4299); */

    background: #2b5876;  
    background: -webkit-linear-gradient(to right, #4e4376, #2b5876); 
    background: linear-gradient(to right, #4e4376, #2b5876);

  }
  header{
    /* background: burlywood; */
    border-radius: 15px 15px 0 0;
    /* background: -webkit-linear-gradient(left, #a445b2, #fa4299); */
  }
  .wrapper{
    max-width: 560px;
  }
  form{
    /* background: rosybrown; */
    border-radius: 0 0 15px 15px;
    /* background: -webkit-linear-gradient(left, #a445b2, #fa4299); */
  }
  .outgoing p{
    /* background: -webkit-linear-gradient(left, #a445b2, #fa4299) !important; */

    background: #1A2980 !important; 
    background: -webkit-linear-gradient(to right, #26D0CE, #1A2980); 
    background: linear-gradient(to right, #26D0CE, #1A2980);

  }
</style>    

<!--------------- Body ------------->
<body>
  <div class="wrapper">
    <section class="chat-area">
      <header>
        <?php  

          $_SESSION['g_id'] = $_GET['group_id'];         
          $grp_id = mysqli_real_escape_string($conn, $_GET['group_id']);
          $sql = "SELECT * FROM groups WHERE group_id = '$grp_id'";
          $query = mysqli_query($conn, $sql);
          // $query = mysqli_query($conn, $sql);
          // $record = mysqli_fetch_array($query);
          // $row = mysqli_fetch_array($query);
          if(mysqli_num_rows($query) > 0){
            $row = mysqli_fetch_assoc($query);
          }else{
            header("location: groups.php");
          }
        ?>
        <a href="groups.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
        <img src="php/uploads/<?php echo $row['img']; ?>" alt="">
        <div class="details">
          <span><?php echo $row['group_name'] ?></span>
          <p><?php //echo $row['status']; ?></p>
        </div>
      </header>
      <div class="chat-box">

      </div>
      <form action="#" class="typing-area">
        <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $grp_id; ?>" hidden>
        <input type="text" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off">
        <button><i class="fab fa-telegram-plane"></i></button>
      </form>
    </section>
  </div>

  <script src="javascript/gchat.js"></script>
       
  <!-- The Modal -->
  <div id="myModal" class="modal">
    <span class="close">&times;</span>
    <img class="modal-content" id="img01">
    <div id="caption">

    </div>  
  </div>

</body>
</html>
<script>

        function deleteme(id){
          // alert(id)
          
          var xhttp = new XMLHttpRequest();
          xhttp.open("get", "php/del_msg.php?msg_id="+id, true);

          xhttp.onreadystatechange = function(){
              if (this.readyState == 4 && this.status == 200){
                  // alert(this.responseText)    
              }
          };
          xhttp.send();  
          // location.reload();
        }
        
    </script>



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