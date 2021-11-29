
<?php include_once "header.php";?>
<?php include_once "time.php";?>

<style type="text/css">
    body{
        background: beige;
    }
    #content div{
        border: 1px solid white;
    }
    li .home, li > a{
        color: white;
    }

    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
    /* *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
    }
    body{
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    background: #343F4F;
    } */
    div{
        border: 0px;
    }
    .type{
    display: flex;
    padding-top: 13px;
    box-shadow: 10px 12px 2px black;
    transition:1s ease;
    }
    .type .static-txt{
    color: #ff4e4e;
    font-size: 60px;
    font-weight: 400;
    }
    .type .dynamic-txts{
        /* background: black; */
    margin-left: 15px;
    height: 90px;
    line-height: 90px;
    overflow: hidden;
    }
    .dynamic-txts li{
    list-style: none;
    color: #FC6D6D;
    font-size: 60px;
    font-weight: 500;
    position: relative;
    top: 0;
    animation: slide 12s steps(4) infinite;
    }
    @keyframes slide {
    100%{
        top: -360px;
    }
    }
    .dynamic-txts li span{
    position: relative;
    margin: 5px 0;
    line-height: 90px;
    }
    .dynamic-txts li span::after{
    content: "";
    position: absolute;
    top: -2px;
    left: 0;
    /* height: 100%;
    width: 100%; */
    height: 92px;
    width: 600px;
    background: beige;;
    border-left: 2px solid #FC6D6D;
    animation: typing 3s steps(10) infinite;
    background: #373737;
    }
    @keyframes typing {
    40%, 60%{
        left: calc(100% + 30px);
    }
    100%{
        left: 0;
    }
    }
    @media only screen and (min-width: 513px) {
            .hide {
                display: block;
            }
        }
    h1{
        font-weight: 700;
        font-size: 37px;
        color: white;
        /* box-shadow: 2px 4px; */
        text-shadow: 3px 4px 7px black;
        font-size: 40px;
    }
    body{
        background: #373737;
    }
    #time{
        color: white;
    }
    .type:hover{
        box-shadow: 10px 12px 2px darkslategray;
        transition:2s ease;
        animation-name: zoom;
        animation-duration: 0.6s;
    }
</style>
    <!-- Page Content  -->
    <div class="user hide" style="position: absolute;top: 48px;right: 13px; ">
            <h2><?php //echo $_SESSION["name"];?></h2>
            <p class="status" style="float: right;margin-top: -17px;">
                <?php //echo $_SESSION["status"];?></p>
    </div>

    <div id="content" class="p-4 p-md-5 pt-5">
        <br><br><br><br>
        <h1 class="mb-4">
          <?php

                date_default_timezone_set("Asia/Kolkata");
                if(date("H")<11){
                    echo 'Good morning ';
                }
                elseif(date('H')<14){
                    echo "Good Afternoon ";
                }
                elseif(date('H'>14)){
                    echo "Good evening ";
                }
                 echo "<span style='float: right;'>".$_SESSION["name"]."</span>";
            ?>
        </h1>
        <p><?php echo "<span style='float: right;margin-top: -30px;font-size: 20px;float: right;'>ID: ".$_SESSION["unique_id"]."</span>";?></p>
        <br><br>
        <div class="type">
            <!-- <h2 class="static-txt">Welcome to </h2> -->
                <ul class="dynamic-txts">
                    <li><span>Welcome to</span></li>
                    <li><span>Chathub</span></li>
                    <li><span>A chatting webapp</span></li>
                    <li><span>Free to All</span></li>
                </ul>
        </div>    
    </div>

    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
