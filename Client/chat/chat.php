<?php 
  session_start();
  include_once "php/config.php";
  echo "<script> //alert('session id ".$_SESSION['unique_id']."')</script>";
  if(!isset($_SESSION['unique_id'])){
    header("location: ../login.php");
  }

  if($_GET['status']=='yes'){
    //$_SESSION['chat_block'] = $_GET['status'];
    echo "<script>
            alert('Your are get blocked..');
            window.history.back();
          </script>";
  }

?>
<?php include_once "header.php"; ?>
<style> 
  div .files {
    width: 60px;
    height: 0px;
    /* overflow:hidden; */
    /* background-color: black; */
  }
  #file{
    width: 100%;
  }
  #fi{
    position: relative;
    top: 7px;
    right: -4px;
    filter: invert(1);
  }
  input #file-upload-button{
    color: red;
    background-color: black;
  }
  input[type="file"] {
    display: none;
  }
  .custom-file-upload {
    border: 1px solid #ccc;
    display: inline-block;
    padding: 6px 12px;
    cursor: pointer;
    height: 45px;
    width: 50px;
    border-radius: 5px;
    background: #6f6c6c;
    transition: all 0.3s ease;
  }
</style>

<body>
  <div class="wrapper">
    <section class="chat-area">
      <header>
        <?php 
          $_SESSION['receiver'] = $_GET['user_id'];
          $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
          $sql = "SELECT * FROM students WHERE unique_id = '$user_id'";
          $query = mysqli_query($conn, $sql);
          // $query = mysqli_query($conn, $sql);
          // $record = mysqli_fetch_array($query);
          // $row = mysqli_fetch_array($query);
          if(mysqli_num_rows($query) > 0){
            $row = mysqli_fetch_assoc($query);
          }else{
            header("location: users.php");
          }
        ?>
        <a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
        <img src="../php/uploads/<?php echo $row['img']; ?>" alt="">
        <div class="details">
          <span><?php echo $row['fname']. " " . $row['lname'] ?></span>
          <p><?php echo $row['status']; ?></p>
        </div>
      </header>
      <div class="chat-box">

      </div>
      <form action="#" enctype="multipart/form-data" class="typing-area">
      <!----------------------- file upload.. --------------------->
        <div class="files">
          <label for="file-upload" class="custom-file-upload">
            <input type="file" name="file-upload" id="file-upload">
            <i id="fi" class="fa fa-paperclip" aria-hidden="true"></i>
          </label>
        </div>
      <!------------------------- end ----------------------->
        <input type="text" class="incoming_id" name="receiver" value="<?php echo $user_id; ?>" hidden>
        <input type="text" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off">
        <button><i class="fab fa-telegram-plane"></i></button>
      </form>
    </section>
  </div>

  <script src="javascript/chat.js"></script>
  <script src="javascript/sweetalert.js"></script>

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
