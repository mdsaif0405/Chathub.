<?php
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['admin_id'])){
    header("location: login.php");
  }
?>
<head>
  <title>Student list</title>
</head>
<style>
    body{
        background: blanchedalmond !important;
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
            text-align: end;
            /* float: right; */
            /* padding-left: 4%; */
        }

        td:before {
            /* Now like a table header */
            position: absolute;
            /* Top/left values mimic padding */
            top: 6px;
            left: 6px;
            top: 11px;
            left: 29px;
            width: 45%;
            padding-right: 10px;
            white-space: nowrap;
            text-align: left;
        }
        .table tr:hover {background-color: #ddd;}
        .table tr:nth-child(even){background-color: #f2f2f2;}
        /*
        Label the data
        */
        /* position: relative;float: right; */
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
    .Btn:hover{
        /* height: 30px;    */
      background: #207974;
      border: 1px solid #207974;
      color: white;
      box-shadow: 14px 20px 15px rgb(0 0 0 / 36%);
    }

    /* --------------------------------- */
    .container, #content {
        transition:1s ease;
        box-shadow: 0 0 15px rgba(1, 1, 1, 1);
        height: 700px;
    }
    .form:hover{
        /* transform: scale(1.2); */
        transition:1s ease;
        box-shadow: 0 0 5px rgba(81, 23, 238, 1);
        /* padding: 13px 13px 13px 13px; */
        /* padding-left: 12px; */
        margin: 5px 1px 3px 0px;
        border: 1px solid rgba(81, 203, 238, 1);
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
    #submit:hover{
        background: #207974;
        border: 1px solid #207974;
        box-shadow: 14px 20px 15px rgb(0 0 0 / 36%);
        /* color: white; */
    }
    #submit{
        width: 100%;
        margin-top: 14px;
        background: lightseagreen;
        color: white;
    }
    .Btn:hover{
        color: white !important;
    }
</style>


<?php include_once "header.php";?>
<div id="content" class="p-5 p-md-5 pt-5 main" style="background: blanchedalmond;height: 100%;">
    <div class="container">

        <div class="g_data">
            <div class="g_img">
                <img src="" alt="">
            </div>
            <div class="g_info">
                <div class="g_title">
                    
                </div>
                <div class="info">
                
                </div>
            </div>
        </div>


        <h1><span style="text-transform: capitalize;">
            <?php 
                $group_id = $_GET['g_id'];
                $info = mysqli_query($conn, "SELECT group_name FROM groups where group_id='$group_id'");
                $row = mysqli_fetch_array($info);
                
                echo $row['group_name'];
                $_SESSION['group_selected'] = $group_id;
            ?>       
            </span> : Group Memebers</h1>
        <div class="form" style="overflow:auto;max-height: 616px;">
            <table class="table">
                <thead>
                    <th>Sno.</th>
                    <th>RollNo</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Department</th>
                    <th>Year</th>
                    <th>Email</th>
                    <th>Block</th>
                    <th>Remove</th>
                </thead>

                <tbody>
                <?php
                    $data = mysqli_query($conn, "SELECT * from students inner join participant on students.unique_id=participant.unique_id where group_id='$group_id'");

                    if(mysqli_num_rows($data)==0){
                        echo '<script>
                                alert("No members in this group..")
                                //window.history.back();
                                //window.location="list_group.php"; 
                              </script>';  
                              
                    }
                    
                    $count = 1;
                    clearstatcache();
                    while($array = mysqli_fetch_array($data)){
                        clearstatcache($array["img"]);
                        // $array["user_id"]
                        echo '<tr>
                                <td>'.$count++.'</td>
                                <td>'.$array["unique_id"].'</td>
                                <td>'.$array["fname"]." ".$array["lname"].'</td>
                                <td>'.$array["gender"].'</td>
                                <td>'.$array["department"].'</td>
                                <td>'.$array["year"].'</td>
                                <td>'.$array["email"].'</td>
                                <td><form method="post" action="php/block_user_from_group.php"> 
                                    <input class="Btn" type="submit" name="block_status" value="'.$array["block_status"].'">
                                    <input type="hidden" name="unique_id" value="'.$array['unique_id'].'">
                                    </form>'.'</td>
                                <td><form method="post" action="php/rem_member.php">
                                    <input class="Btn"  type="submit" name="delete" value="Delete">
                                    <input type="hidden" name="group_id" value="'.$group_id.'">
                                    <input type="hidden" name="unique_id" value="'.$array['unique_id'].'">
                                    </form></td>
                              </tr>';
                    }
                    // unset($_SESSION['g_name']);
                ?>
        </div>
    </div>
</div>
