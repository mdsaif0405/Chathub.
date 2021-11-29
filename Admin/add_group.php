<?php
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['admin_id'])){
    header("location: login.php");
  }
?>
<head>
  <title>Add Group</title>
</head>
<style>
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
        transition:1s ease;
        box-shadow: 0 0 15px rgba(1, 1, 1, 1);
    }
    .form:hover{
        /* transform: scale(1.2); */
        transition:1s ease;
        box-shadow: 0 0 5px rgba(81, 23, 238, 1);
        padding: 13px 13px 13px 13px;
        /* padding-left: 12px; */
        margin: 5px 1px 3px 0px;
        border: 1px solid rgba(81, 203, 238, 1);
    }
    .form{
        padding: 18px;
        height: 455px;
    }
    p{
        padding: 5px 0px 5px 0px;
        margin-bottom: -1px !important;
    }
    input{
        width: 100%;
        border: 1px solid black;
    }
    #submit{
        width: 100%;
        height: 34px;
        font-size: 17px;
        margin-top: 24px;
        background: lightseagreen;
        color: white;
    }
    input[type=text] {
        outline: none;
        padding: 3px 0px 3px 3px;
        padding-left: 12px;
        margin: 5px 1px 3px 0px;
        border: 1px solid #DDDDDD;
        /* border: 1px solid rgba(81, 203, 238, 1);
        box-shadow: 0 0 5px rgba(81, 203, 238, 1); */
        transition: all 0.30s ease-in-out;
    }
 
    input[type=text]:focus {
        box-shadow: 0 0 15px rgba(81, 203, 238, 1);
        padding: 3px 0px 3px 3px;
        padding-left: 22px;
        margin: 5px 1px 3px 0px;
        border: 1px solid rgba(81, 203, 238, 1);
    }
    #submit:hover{
        background: #207974;
        border: 2px solid #207974;
        box-shadow: 14px 20px 15px rgb(0 0 0 / 36%);
    }
</style>

<?php include_once "header.php";?>
<div id="content" class="p-5 p-md-5 pt-5 main">
    <div class="container">
        <!-- <h1>Create Group</h1> -->
        <h1 style="color: black;text-shadow: 10px 7px 4px #bbabab;font-weight: 700;"><?php //echo $_SESSION['name'];?>Create Group</h1>
        <form enctype="multipart/form-data" action="php/add_g.php" method="post">
        <div class="form">
            <p>Enter Group name</p>
            <input type="text" name="g_name" required>

            <p>Members</p>
            <div style="padding: 10px;margin:6px 0px 18px 0px;">
                        <label for="dept">Department</label>

                        <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="dept" name="dept">
                            <option selected>Choose...</option>
                            <option value="CSE">CSE</option>
                            <option value="ME">ME</option>
                            <option value="CE">CE</option>
                            <option value="IT">IT</option>
                        </select>

                        <label for="dept">Year</label>
                        <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="year" name="year">
                            <option selected>Choose...</option>
                            <option value="1">1st year</option>
                            <option value="2">2nd year</option>
                            <option value="3">3rd year</option>
                            <option value="4">4th year</option>
                        </select>
            </div>

            <p>Choose group image</p>
            <input type="file" name="g_img" id="g_img" size="30" style="border:none;">

            <input id="submit" type="submit" name="submit" />
        </div>
        </form>
    </div>
</div>
