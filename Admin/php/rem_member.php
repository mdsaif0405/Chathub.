<?php
    session_start();
    include_once "config.php";

    $unique_id = $_POST['unique_id'];
    $group_id = $_POST['group_id'];

    // echo $unique_id.$group_id;
    $sql = "DELETE FROM participant where unique_id='$unique_id' and group_id='$group_id'";

    if(mysqli_query($conn, $sql)){
        echo "<script>
                alert('selected member removed from group.')
                //window.location='../list_group.php';   
                window.history.back(); 
            </script>";
    }

?>