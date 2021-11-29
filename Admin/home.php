<?php
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['admin_id'])){
    header("location: login.php");
  }
?>
<?php include_once "header.php";?>
<head>
  <title>Home</title>
</head>
<style>
/* font-family: "Operator Mono SSm A", "Operator Mono SSm B", "Source Code Pro", Menlo, Consolas, Monaco, monospace; */
  #time{
    color: white;
  }
  h1{
    margin-bottom: 20px;
    line-height: 1.5;
    font-weight: 700;
    font-family: "Poppins", Arial, sans-serif;
    color: #fff;
    font-size: 2.5rem;
  }
  #content{
    background: -webkit-linear-gradient(left, #684f4f, #948475);
    background-color: #4158D0;
    background-image: linear-gradient(43deg, #4158D0 0%, #C850C0 46%, #FFCC70 100%);
    background-image: radial-gradient( circle 759px at -6.7% 50%,  rgba(80,131,73,1) 0%, rgba(140,209,131,1) 26.2%, rgba(178,231,170,1) 50.6%, rgba(144,213,135,1) 74.1%, rgba(75,118,69,1) 100.3% );
    background-image: linear-gradient( 102.1deg,  rgba(96,221,142,1) 8.7%, rgba(24,138,141,1) 88.1% );
    background-image: radial-gradient( circle 602px at 2.1% 5.1%,  rgba(233,0,120,1) 0%, rgba(0,0,0,1) 90.1% );
    background-image: linear-gradient( 76.3deg,  rgba(44,62,78,1) 12.6%, rgba(69,103,131,1) 82.8% );

    /* border: 1px solid black; */
    
  }
  #content h1:hover{
    color: #e83e8c;
  }
  .box h3{
    color: white;
  }
  .box{
    display: flex;
    justify-content: space-evenly;
    /* margin-top: 60px; */
  }
  .box1{
    display: flex;
    justify-content: space-around;
    flex-direction: column;
    padding: 20px 18px 10px 18px;
    width: 320px;
    min-height: 220px;
    border: 1px solid black;
    border-radius: 30px;
    background-image: linear-gradient( 109.6deg,  rgba(0,191,165,1) 11.2%, rgba(0,140,122,1) 100.2% );
    box-shadow: 14px 20px 15px rgb(0 0 0 / 36%);
  }
  .box1:hover{
    filter: invert(1);
    /* margin-bottom: 80px; */
  }
  .box span{
    color: white;
    text-align: center;
    font-size: 50px;
  }

</style>
<div id="content" class="p-5 p-md-5 pt-5">
  <h1 class="mb-4">
        <?php

                date_default_timezone_set("Asia/Kolkata");
                if(date("H")<11){
                    echo 'Good morning, ';
                }
                elseif(date('H')<14){
                    echo "Good Afternoon, ";
                }
                elseif(date('H'>14)){
                    echo "Good evening, ";
                }
                

            ?>
            <span style="float: right;"><?php echo $_SESSION["admin_name"];?></span>
        </h1> <br> <br>
        <div>
          <span style="padding-left: 58px;color: wheat;font-size: 30px;"> My Dashboard</span>
          <div class="box">
            <a href="list_user.php">
            
              <div class="box1 users">
                <!-- <span style="padding-left: 58px;color: wheat;font-size: 30px;"> My Dashboard</span> -->
                    <h3>Registered user:</h3> 
                    <h3><?php 
                      $data = mysqli_query($conn, "select count(*) from students");
                      $array = mysqli_fetch_array($data);
                      echo "$array[0]";                            
                    ?></h3>
              </div>
            </a>
            <a href="list_group.php">
            
              <div class="box1 groups">
                    <h3>Registered Groups:</h3>
                    <h3><?php 
                      $data1 = mysqli_query($conn, "select count(*) from groups");
                      $array1 = mysqli_fetch_array($data1);
                      echo "$array1[0]";                            
                    ?></h3>
              </div>
            </a>
          </div>
        </div>
</div>
