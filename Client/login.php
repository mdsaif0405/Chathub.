<?php
  // session_start();
  // if(isset($_SESSION['unique_id'])){
  //   header("location: users.php");
  // }
?>
<style>
  .float{
    position: absolute;
    top: 0px;
    /* left: 10px; */
    font-size: 60px;
    color: crimson;
  }
  span{
    color: #921b1b69;
  }
</style>
<?php include_once "head.php"; ?>
<body>
      <div class="float">
        <h1 class="title">Chat<span>hub.</span></h1>
      </div>
  <div class="wrapper">
    <section class="form login">
      <header>User Login</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Email Address</label>
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter your password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input class="btnn" type="submit" name="submit" value="Continue to Chathub">
        </div>
      </form>
      <!-- <div class="link">Not yet signed up? <a href="index.php">Signup now</a></div> -->
    </section>
  </div>

  <script src="js/pass-show-hide.js"></script>
  <script src="js/login.js"></script>

</body>

