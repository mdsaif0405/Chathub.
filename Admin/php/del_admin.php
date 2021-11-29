<?php
    session_start();
    include_once "config.php";

    $admin_id = $_POST['admin_id'];
    if($admin_id==1){
        echo "<script>
                alert('Warning! This Admin account is master account.')
                //window.location='../list_group.php';  
                window.history.back();
            </script>";
    }
    else{
        $sql = "DELETE from admin where admin_id='$admin_id'";
        $query1 = mysqli_query($conn, $sql);
        

        if($query1){
            echo "<script>
                    alert('Warning! Admin account deleted.')
                    //window.location='../list_group.php';  
                    window.history.back();
                </script>";
        }
    }
?>