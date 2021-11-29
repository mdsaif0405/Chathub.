
<head>
  <title>Password reset</title>
</head>
<!-- <style type="text/css">
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
    margin-top: 14px;
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
    #link{
        margin: 16px 0;
        font-size: 18px;
    }
</style> -->
<style>
    #content{
        background: bisque;
    }
    #content div{
        border: 1px dashed black;
        border-style: dashed;
        border-top: inset;
        border: solid thick solid thick;
        border-top: solid;
        border-right: thick;
        /* border-buttom: solid; */
        border-left: thick;
        
    }
    .main{
        width: 100%;
        height: 100vh;
    }
    /* form{
        width: 40%%;

    } */
    .form{
        padding: 40px;
        border-radius: 38px;
        background: khaki;
        box-shadow: 14px 20px 15px rgb(0 0 0 / 36%);
        /* border-style: dashed; */
    }

    .container{
        display: flex;
        flex-direction: column;
        align-items: center;
        height: 100%;
    }
    p{
        padding: 10px 0px 0px 0px;
        margin: 0px;
        margin-bottom: 5px !important;
    }
    input{
        width: 100%;
        border-radius: 30px;
        background: antiquewhite;
        border-style: initial;
    }
    input:hover{
        border: 2px solid orange;
        transition: 2px;
    }

    #link{
        margin: 16px 0;
        font-size: 18px;
    }
    #submit{
        width: 100%;
        margin-top: 23px;
        background: lightseagreen;
        color: white;
        font-weight: 600;
        font-size: 19px;
    }
    #submit:hover{
        background: #207974;
        border: 1px solid #207974;
        box-shadow: 14px 20px 15px rgb(0 0 0 / 36%);
    }
    input{
        outline: none;
        padding: 3px 0px 3px 3px;
        margin: 5px 1px 3px 0px;
        border: 1px solid #DDDDDD;
        width: 100%;
        padding-left: 32px;
        border-radius: 30px;
        background: antiquewhite;
        border-style: initial;
        transition: all 0.30s ease-in-out;
    }
    input[type=text]:focus {
        box-shadow: 0 0 5px rgba(81, 203, 238, 1);
        padding: 3px 0px 3px 3px;
        padding-left: 12px;
        margin: 5px 1px 3px 0px;
        border: 1px solid rgba(81, 203, 238, 1);
    }
</style>
<?php include_once "time.php";?>
<?php include_once "header.php";?>
<!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
        <div class="container">
        <h1 style="margin-bottom: 1.5rem;margin-top: 20px;"><?php //echo $_SESSION['name'];?>Upate Password</h1>

            <form enctype="multipart/form-data" action="php/update_pass.php" method="post">
                <h2><?php //echo "";?> </h2>
                <div class="form">


                    <p>Previous Password</p>
                    <input type="text" name="password" patternrequired>
                    <p>New Password</p>
                    <input type="text" name="n_password" pattern="(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain upper,lowercase and at least 8" required>
                    <p>Confirm Password</p>
                    <input type="text" name="nc_password" pattern="(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain upper,lowercase and at least 8" required>
                    <input id="submit" type="submit" name="Update" value="Update" style="padding:0px;"/>
                </div>
            </form>
        </div>
      </div>

  </body>
</html>


<!-- passwordinline: pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" -->
<?php //include("php/alert.php"); ?>
