<?php include_once "header.php";?>
<?php include_once "time.php";?>

<style>
    #content{
      overflow: hidden;
      background-image: url('image/7.jpg');
      background-position: bottom;
      background-attachment: fixed;
      background-repeat: no-repeat;
      background-size: 101%;
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
        /* padding: 40px; */
    }
    .form{
            padding: 16px;
            width: 320px;
    }
    p{
        padding: 10px 0px 0px 0px;
        margin-bottom: 5px !important;
    }
    input{
        width: 100%;
        /* width: 326px; */
    }
    #submit{
        width: 100%;
        height: 35px;
        margin-top: 32px;
        background: lightseagreen;
        color: white;
    }
    .inp{
        /*position: absolute;*/
    /*top: 306px;*/
    /* right: 274px; */
    /*left: 669px;*/
    width: 91px;
    }
    #t{
      margin-bottom: 1.5rem;
      margin-top: 20px;
    }
    #link{
        margin: 16px 0;
        font-size: 18px;
    }
    .box{
        padding: 30px 50px 40px 50px;
        height: 425px;
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        align-content: center;
        align-items: center;
        box-shadow: inset 0px 0px 7px 0px rgb(1 1 1);
        padding-top: 56px;
    }
    #submit:hover{
        background: #207974;
        border: 1px solid #207974;
        box-shadow: 14px 20px 15px rgb(0 0 0 / 36%);
    }
</style>

<!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
        <div class="container">
        <h1 id="t"><?php //echo $_SESSION['name'];?>Update Password</h1>
            <div class="box">
                <form enctype="multipart/form-data" action="php/update_pass.php" method="post">
                    <h2><?php //echo "";?> </h2>
                    <div class="form">


                        <p>Previous Password</p>
                        <input type="text" name="password" patternrequired>
                        <p>New Password</p>
                        <input type="text" name="n_password" pattern="(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain upper,lowercase and at least 8" required>
                        <p>Confirm Password</p>
                        <input type="text" name="nc_password" pattern="(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain upper,lowercase and at least 8" required>
                        <input id="submit" type="submit" name="Update" value="Update" />
                    </div>
                </form>
                <a id="link" href="profile.php">My Profile</a>
            </div>
        </div>
      </div>


    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>


<!-- passwordinline: pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" -->