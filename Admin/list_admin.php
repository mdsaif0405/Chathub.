<?php
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['admin_id'])){
    header("location: login.php");
  }
?>
<?php include_once "header.php";?>
<head>
  <title>Admin list</title>
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
    /* input[type=text] {
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
    } */
    
    #delBtn:hover{
        color: 2px solid white;
        height: 30px;   
      background: #207974;
      border: 1px solid #207974;
      box-shadow: 14px 20px 15px rgb(0 0 0 / 36%);
      color: #f2f2f2;
    }
  </style>

</style>


<div id="content" class="p-5 p-md-5 pt-5 main" style="height: 100%;">
    <div class="container" style="max-width: 1150px !important;">
        <h1 style="color:Black; text-align:center;"><?php //echo $_SESSION['name'];?>Admin list</h1>
        <div class="form" style="overflow:auto;margin-bottom:10px;padding:4px;">
            <table class="table table-hover table-striped table-dark">
                <thead>
                    <th>Sno.</th>
                    <th>Admin ID</th>
                    <th>Name</th>
                    <th>Username</th>
                    <th>created on</th>
                    <th>Action</th>
                </thead>

                <tbody>
                <?php
                $data = mysqli_query($conn, "select * from admin");
                $count = 1;
                while($array = mysqli_fetch_array($data)){
                    
                    // $_SESSION["id"] = $array["unique_id"];
                    echo '<tr>
                            <td>'.$count++.'</td>
                            <td>'.$array["admin_id"].'</td>
                            <td>'.$array["fname"].' '.$array["lname"].'</td>
                            <td>'.$array["username"].'</td>
                            <td>'.$array["created_at"].'</td>
                            <td>
                                <form method="post" action="php/del_admin.php"> 
                                    <input id="delBtn" type="submit" name="del" value="remove">
                                    <input type="hidden" name="admin_id" value="'.$array['admin_id'].'">
                                </form>
                            </td>
                          </tr>';
                }
                ?>
        </div>
    </div>

    
</div>

