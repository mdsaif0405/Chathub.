<?php
    session_start();
    include_once "config.php";

    $group_id = $_POST['g_id'];

    $sql = "DELETE from groups where group_id='$group_id'";
    $query1 = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    $sql = "DELETE from participant where group_id='$group_id'";
    $query2 = mysqli_query($conn, $sql) or die(mysqli_error($conn));

    if($query1 and $query2){
        echo "<script>
                alert('group deleted successfully..')
                //window.location='../list_group.php';  
                window.history.back();
            </script>";
    }
?>