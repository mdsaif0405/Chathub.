<?php include_once "header.php";?>
<!-- 
<style>
    body{
        background: slategrey !important;
    }
    table {
        width: 100%;
        border-collapse: collapse;
    }
    /* Zebra striping */
    tr:nth-of-type(odd) {
        background: #eee;
    }
    th {
        background: #333;
        color: white;
        font-weight: bold;
    }
    td, th {
        padding: 6px;
        border: 1px solid #ccc;
        text-align: left;
    }
    @media
    only screen and (max-width: 760px),
    (min-device-width: 768px) and (max-device-width: 1024px)  {

        /* Force table to not be like tables anymore */
        table, thead, tbody, th, td, tr {
            display: block;
        }

        /* Hide table headers (but not display: none;, for accessibility) */
        thead tr {
            position: absolute;
            top: -9999px;
            left: -9999px;
        }

        tr { border: 1px solid #ccc; }

        td {
            /* Behave  like a "row" */
            border: none;
            border-bottom: 1px solid #eee;
            position: relative;
            padding-left: 50%;
        }

        td:before {
            /* Now like a table header */
            position: absolute;
            /* Top/left values mimic padding */
            top: 6px;
            left: 6px;
            width: 45%;
            padding-right: 10px;
            white-space: nowrap;
        }

        /*
        Label the data
        */
        td:nth-of-type(1):before { content: "ID"; }
        td:nth-of-type(2):before { content: "RollNo"; }
        td:nth-of-type(3):before { content: "fname"; }
        td:nth-of-type(4):before { content: "lname"; }
        td:nth-of-type(5):before { content: "gender"; }
        td:nth-of-type(6):before { content: "department"; }
        td:nth-of-type(7):before { content: "year"; }
        td:nth-of-type(8):before { content: "email"; }
        td:nth-of-type(9):before { content: "update"; }
        td:nth-of-type(10):before { content: "remove"; }
    }
 
</style> -->
<style>
    body{
        background: url(img/bac3.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        /* filter: blur(1); */
        box-shadow: 4px 0px 5px black;
    }
    .Friends{
        color: white !important;
    }
    #content div{
        border: 1px solid black;
    }
    #std {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
        max-height: 600px;
        padding: 6px;
    }

    #std td, #std th {
        border: 1px solid #ddd;
        padding: 8px;
        color: white;
    
        }

    #std tr:nth-child(even){background-color: #f2f2f2;}
    #std tr:nth-child(even){background-color: #f2f2f233;}

    #std tr:hover {background-color: #ddd;}
    #std tr:hover {background-color: #8eb29c87;}

    #std th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #04AA6D;
        background-color: #02442b75;
        color: cornsilk;
        text-shadow: 2px 2px black;
    }
    #viewBtn{
        /* box-shadow: 14px 20px rgb(0 0 0 / 36%); */
        background: initial;
        color: navajowhite;
        /* border-radius: 20px; */
    }
    #viewBtn:hover{
        color: 2px solid white;
        height: 30px;   
        background: #207974;
        border: 1px solid #207974;
        box-shadow: 4px 5px rgb(0 0 0 / 60%);
        color: #f2f2f2;
        background: #000000a6;
    }
    #block{
        font-size: 15px;
        position: absolute;
        top: 60px;
        right: 67px;
        /* border: 1px solid; */
        color: white;
        padding: 9px 9px;
        border-radius: 6px;
        background: #6f7277;
        text-shadow: none;
    }
    #block:hover{
        box-shadow: 3px 3px 9px black;
    }
</style>


<div id="content" class="p-5 p-md-5 pt-5 main" style="height: 100%;">
    <div class="container" style="max-width: 1150px !important;">
        <h1 style="color:white; text-align:center; font-weight: bolder;text-shadow: 5px 4px 3px black;"><?php //echo $_SESSION['name'];?>Friend list <a href="block_list.php"> <span id="block">block list</span></a></h1>
        <div class="form" style="overflow:auto;margin-bottom:10px;padding:4px;max-height: 616px;">
            <table class="table" id="std" style="overflow: auto; max-height:600px;">
                <thead>
                <th>ID</th>
                <th>RollNo</th>
                <th>fname</th>
                <th>lname</th>
                <th>gender</th>
                <th>department</th>
                <th>year</th>
                <!-- <th>email</th> -->
                <th>Profile</th>
                <th>Block</th>
                <!-- <th>Unfriend</th> -->
                </thead>

                <tbody>
                <?php
                    $id = $_SESSION['unique_id'];
                    
                    // $result = mysqli_query($link, $sql);
                    // $row = mysqli_fetch_array($result);


                    $data = mysqli_query($link, "select * from students");
                    clearstatcache();
                    while($array = mysqli_fetch_array($data)){
                        clearstatcache($array["img"]);
                        $_SESSION["friends_id"] = $array["unique_id"];
                        echo '<tr>
                                    <td>'.$array["user_id"].'</td>
                                    <td>'.$array["unique_id"].'</td>
                                    <td>'.$array["fname"].'</td>
                                    <td>'.$array["lname"].'</td>
                                    <td>'.$array["gender"].'</td>
                                    <td>'.$array["department"].'</td>
                                    <td>'.$array["year"].'</td>
                                    
                                    <td><form method="post" action="view.php"> 
                                            <input id="viewBtn" type="submit" name="view" value="view">
                                            <input type="hidden" name="id" value="'.$array['user_id'].'">
                                        </form>
                                    <td><form method="post" action="php/chat_Block.php"> 
                                            <input id="viewBtn" type="submit" name="view" value="block">
                                            <input type="hidden" name="id" value="'.$array['unique_id'].'">
                                            <input type="hidden" name="name" value="'.$array['fname'].'">

                                        </form>
                                    '.'</td>
                                    
                                    </tr>';
                                }
                                // <td>'.$array["email"].'</td>
                                ?>
                                
                <!-- <td><form method="post" action="php/unfriend.php">
                                        <input type="submit" name="delete" value="remove">
                                        <input type="hidden" name="id" value="'.$array['user_id'].'">
                                        </form></td> -->
        </div>
    </div>

    
</div>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
