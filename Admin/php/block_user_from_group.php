<?php
    session_start();
    include_once "config.php";

    $status = $_POST['block_status'];
    //echo "$status";
    if($status == 'yes'){
        $status = 'no';
    }else{
        $status = 'yes';
    }
    $unique_id = $_POST['unique_id'];
    $group_id = $_SESSION['group_selected'];

    // -------->>> for debuging  
    // echo "status".$status.'<br>';
    // echo "unique_id".$unique_id.'<br>';
    // echo "group_id".$group_id;

    $sql = "UPDATE participant set block_status ='$status' where (unique_id='$unique_id' and group_id='$group_id')";
    $query = $conn->query($sql);
    $_SESSION['block_member'] = $status;

    if($query){
        echo "<script>
                //alert('Block status : ".$status."')
                //window.location='../view_g.php?view=view&g_id=".$group_id."';  
                window.history.back();
            </script>";
    }

    // $_SESSION['block_status'] = '';
    unset($_SESSION['group_selected']);
?>
