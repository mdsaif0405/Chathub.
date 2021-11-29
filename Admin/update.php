<?php         
  session_start();
  include "php/config.php";
  include_once "header.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<style>
  /* *{
    border: 0px !important;
  } */

  form{
    margin: 0 15px;
  }
  td{
        padding-bottom: 6px;
  }
  input{
    /* border-radius: 3px; */
  }
</style>
<style type="text/css">
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
            padding: 25px;
            min-width: 400px;
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
    /* h1{
      margin-bottom: 1.5rem;
      margin-top: 20px;
    } */
    h2{
      margin: 20px auto;
      text-align: center;
    }
    #link{
        margin: 16px 0;
        font-size: 18px;
    }
    input[type=text] {
        outline: none;
        padding: 3px 0px 3px 3px;
        margin: 5px 1px 3px 0px;
        border: 1px solid #DDDDDD;
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
<style>
    .container {
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
    input[type=text] {
        outline: none;
        padding: 3px 0px 3px 3px;
        padding-left: 12px;
        margin: 5px 1px 3px 0px;
        border: 1px solid #DDDDDD;
        transition: all 0.30s ease-in-out;
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
    #submit{
        width: 100%;
        background: lightseagreen;
        color: white;
        margin-top: 2px;
        margin-bottom: 6px;
    }
    .table{
      padding: 0px 12px 0px 12px;
    }
  </style>
</body>
    <?php //include("header.php"); ?>
    <div id="content" class="p-5 p-md-5 pt-5 main" style="height: 100%;">
    <div class="container">
    <form enctype="multipart/form-data" action="php/update_data.php" method="post" >
    <h2>Update Entry</h2>
      <!-- <h3 style="display: block">Name: <?php //echo $array['fname']; ?></h3> -->
      <div class="table">
      <?php

        $id = $_POST['id'];

        $sql = "select * from students where unique_id='$id'";
        $record = mysqli_query($conn, $sql);
        $array = mysqli_fetch_array($record);
        $_SESSION['unique_id_update'] = $array['unique_id'];
      ?>
      <table>
        <tr>
          <td>first name:</td>
          <td><input id="fname"
                          type="text"
                          name="fname"
                          placeholder="<?php echo $array['fname'];?>"
                          default="<?php echo $array['fname'];?>"/> <br/></td>
        </tr>
        <td>last name:</td>
          <td><input id="lname"
                          type="text"
                          name="lname"
                          placeholder="<?php echo $array['lname'];?>"
                          default="<?php echo $array['lname'];?>"/> <br/></td>
        </tr>
        <td>Gender:</td>
          <td><input id="gender"
                          type="text"
                          name="gender"
                          placeholder="<?php echo $array['gender'];?>"
                          default="<?php echo $array['gender'];?>"/> <br/></td>
        </tr>
        <td>Department:</td>
          <td><input id="dept"
                          type="text"
                          name="department"
                          placeholder="<?php echo $array['department'];?>"
                          default="<?php echo $array['department'];?>"/> <br/></td>
        </tr>
        <td>Year:</td>
          <td><input id="year"
                          type="text"
                          name="year"
                          placeholder="<?php echo $array['year'];?>"
                          default="<?php echo $array['year'];?>"/> <br/></td>
        </tr>
        <tr>
          <td>Email:</td>
          <td><input id="email"
                          type="text"
                          name="email"
                          placeholder="<?php echo $array['email'];?>" 
                          default="<?php echo $array['email']; ?>"/> <br/></td>
        </tr>
        <tr>
          <td>Block:</td>
          <td><input id="block"
                          type="text"
                          name="block"
                          placeholder="<?php echo $array['block'];?>" 
                          default="<?php echo $array['block']; ?>"/> <br/></td>
        </tr>
      </table>
      </div>
      
      <input id="submit" type="submit" name="submit" />
      <a href="list_user.php">back</a>

      <br><br><br>
      <!-- <p>**ID : college roll Number</p> -->
      </form>

    </div>

</div>

</body>
</html>
