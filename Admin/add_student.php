<?php
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['admin_id'])){
    header("location: login.php");
  }
?>
<head>
  <title>Add student</title>
</head>
<style>
    body{
        background-image: url('./img/1.jpg') !important;
        background-repeat: no-repeat;
        background-attachment: fixed; 
        background-size: 100% 100%;  
        filter: blur(0.5);
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
        /* height: 100%; */
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
    }
    p{
        padding: 5px 0px 0px 0px;
        margin-bottom: -1px !important;
    }
    input{
        width: 100%;
        border: 1px solid black;

    }
    #submit{
        width: 100%;
        margin-top: 20px;
        background: lightseagreen;
        color: white;
        margin-bottom: 5px;
        height: 37px;
    }
    input[type=text] {
        outline: none;
        padding: 3px 0px 3px 3px;
        padding-left: 12px;
        margin: 5px 1px 3px 0px;
        border: 1px solid #DDDDDD;
        transition: all 0.30s ease-in-out;

        background: transparent;
        border: 1px solid;
    }
 
    input[type=text]:focus {
        
        box-shadow: 0 0 5px rgba(81, 203, 238, 1);
        padding: 3px 0px 3px 3px;
        padding-left: 22px;
        margin: 5px 1px 3px 0px;
        border: 1px solid rgba(81, 203, 238, 1);
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
        <h1 style="color: white;text-shadow: 3px 4px #183135;font-weight: 700;"><?php //echo $_SESSION['name'];?>Add Student</h1>
        <form action="php/add_s.php" method="post">
        <div class="form">
            <p>Enter Roll no.</p>
            <input type="text" name="id" required>
            <p>Enter First name</p>
            <input type="text" name="fname" required>
            <p>Enter Last name</p>
            <input type="text" name="lname" required>
            <p>Enter Email</p>
            <input type="text" name="email" required>
            <p>Gender</p>
            <label><input type="radio" name="gen" value="male" required>Male</label><!--class="radio-inline"-->
            <label style="padding-left: 12px;"><input type="radio" name="gen" value="female">Female</label>

            <div style="padding: 10px;">
                        <label for="dept">Department</label>

                        <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="dept" name="dept" required>
                            <option selected>Choose...</option>
                            <option value="CSE">CSE</option>
                            <option value="ME">ME</option>
                            <option value="CE">CE</option>
                            <option value="IT">IT</option>
                        </select>

                        <label for="dept">Year</label>
                        <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="year" name="year" required>
                            <option selected>Choose...</option>
                            <option value="1">1st year</option>
                            <option value="2">2nd year</option>
                            <option value="3">3rd year</option>
                            <option value="4">4th year</option>
                        </select>
            </div>
            <input id="submit" type="submit" name="submit" />
        </div>
        </form>
    </div>
</div>
