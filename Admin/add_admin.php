<?php
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['admin_id'])){
    header("location: login.php");
  }
?>
<head>
  <title>Add admin</title>
</head>
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
    form{
        width: 55%;

    }
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
        outline: none;
        padding: 3px 0px 3px 3px;
        margin: 5px 1px 3px 0px;
        border: 1px solid #DDDDDD;
        width: 100%;
        padding-left: 22px;
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
    /* input:hover{
        border: 2px solid orange;
        transition: 2px;
    } */
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
</style>

<?php include_once "header.php";?>
<div id="content" class="p-5 p-md-5 pt-5 main">
    <div class="container">
        <h1 style="margin-bottom: 1.5rem;margin-top: 20px;"><?php //echo $_SESSION['name'];?>Create Admin</h1>
        <form action="php/add_a.php" method="post">
        <div class="form">
            <p>Enter First name</p>
            <input type="text" name="fname">
            <p>Enter Last name</p>
            <input type="text" name="lname">
            <p>Email</p>
            <input type="text" name="email">
            <p>password</p>
            <input type="text" name="password">
            <p>Confirm</p>
            <input type="text" name="password">
            <input id="submit" type="submit" name="submit" style="padding:0px;"/>
        </div>
        </form>
    </div>
</div>
