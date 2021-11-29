<?php
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['admin_id'])){
    header("location: login.php");
  }
?>
<?php include_once "header.php";?>
<head>
  <title>Group list</title>
</head>

<style>

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
        }

    #std tr:nth-child(even){background-color: #f2f2f2;}

    #std tr:hover {background-color: #ddd;}

    #std th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #04AA6D;
        color: white;
    }

    #viewBtn:hover{
        color: 2px solid white;
        height: 30px;   
      background: #207974;
      border: 1px solid #207974;
      box-shadow: 14px 20px 15px rgb(0 0 0 / 36%);
      color: #f2f2f2;
    }
    /* -------------------------------- */
    .container, #content {
        transition:1s ease;
        box-shadow: 0 0 15px rgba(1, 1, 1, 1);
        height: 700px;
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
    }
    #submit{
        width: 100%;
        margin-top: 14px;
        background: lightseagreen;
        color: white;
    }
  </style>

</style>


<div id="content" class="p-5 p-md-5 pt-5 main" style="height: 100%;">
    <div class="container" style="max-width: 1150px !important;">
        <h1 style="color: black;text-shadow: 10px 7px 4px #bbabab;font-weight: 700;text-align:center;"><?php //echo $_SESSION['name'];?>Group list</h1>
        <div class="form" style="overflow:auto;margin-bottom:10px;padding:4px;">
            <table class="table" id="std" style="overflow: auto; max-height:600px;">
                <thead>
                    <th>Sno.</th>
                    <th>Group ID</th>
                    <th>Group Name</th>
                    <!-- <th>Image</th> -->
                    <th>Created At</th>
                    <th>Created By</th>

                    <th>Details</th>
                    <th>Delete</th>
                </thead>

                <tbody>
                <?php
                    // $id = $_SESSION['admin_id'];
                    $count = 1;
                    // $result = mysqli_query($link, $sql);
                    // $row = mysqli_fetch_array($result);
                    $data = mysqli_query($conn, "SELECT * from groups");
                    clearstatcache();
                    while($array = mysqli_fetch_array($data)){
                        clearstatcache($array["img"]);
                        // $_SESSION["friends_id"] = $array["unique_id"];
                        $_SESSION['g_name'] = $array["group_name"];
                        echo '<tr>
                                <td>'.$count++.'</td>
                                <td>'.$array["group_id"].'</td>
                                <td>'.$array["group_name"].'</td>
                                <td>'.$array["created_at"].'</td>
                                <td>'.$array["created_by"].'</td>
                                
                                <td><form method="get" action="./view_g.php"> 
                                        <input id="viewBtn" type="submit" name="view" value="view">
                                        <input type="hidden" name="g_id" value="'.$array['group_id'].'">
                                    </form></td>

                                <td><form method="post" action="php/del_g.php"> 
                                        <input id="viewBtn" type="submit" name="Remove" value="Remove">
                                        <input type="hidden" name="g_id" value="'.$array['group_id'].'">
                                        
                                    </form>
                                </td>
                                
                                    
                              </tr>';

                    }
                    // <td>'.$array["img"].'</td>
                    //unset($_SESSION['g_name']);
                ?>
                                
        </div>
    </div>

    
</div>

