<?php
    session_start();
    include_once "config.php";

    $status = $_POST['block_status'];
    // echo "$status";
    if($status == 'yes'){
        $status = 'no';
    }else{
        $status = 'yes';
    }
    $unique_id = $_POST['unique_id'];
    
    // -------->>> for debuging  
    // echo "status    ".$status.'<br>';
    // echo "unique_id ".$unique_id.'<br>';
    
    $sql = "UPDATE students set block='$status' where unique_id='$unique_id'";
    $query = $conn->query($sql);

    $_SESSION['id_block'] = $status;

    if($query){
        echo "<script>
                //alert('Block status : ".$status."') 
                window.history.back();
            </script>";
    }

?>
