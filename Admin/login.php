<head>
  <title>Login</title>
</head>
<style>
  body{
    background-image: url('./img/1.jpg') !important;
    background-repeat: no-repeat;
    background-attachment: fixed; 
    background-size: 100% 100%;  
  }
  .float{
    position: absolute;
    margin: 9px 31px 0px 32px;
    top: 0px;
    /* left: 10px; */
    width: 98%;
    font-size: 30px;
    border: 1px solid black;
    text-align: center;
    color: wheat;

    background-color: rgba(0, 0, 0, 0.63);
    border-radius: 6px;
    box-shadow: 0 5px 10px rgb(0 0 0 / 40%);
  }
  span{
    color: #921b1b69;
  }
  input{
    background: transparent;
  }
  ::placeholder { 
    color: rgb(70, 53, 167);
    color: wheat;
    /* opacity: 1; */
    background: transparent !important;
  }
  .wrapper{
    margin-top: 50px;
    background: transparent !important;
    box-shadow: 0 0px 30px rgb(0 0 0 / 55%) !important;
  }
</style>
<?php 
  include_once "head.php";

?>

<body>
<div class="float">
        <h1 class="title">Chathub. Admin<span></span></h1>
      </div>
  <div class="wrapper">
    <section class="form login">
      <header style="border-bottom: 1px solid;">Admin Login</header>
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
          <input type="submit" name="submit" value="SIGN IN">
        </div>
      </form>

    </section>
  </div>

  <script src="js/pass-show-hide.js"></script>
  <script src="js/login.js"></script>

</body>
</html>
<?php //include("php/out.php"); ?>