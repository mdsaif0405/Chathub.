<?php 
    session_start();
    if(isset($_SESSION['unique_id'])){
        include_once "config.php";
        $outgoing_id = $_SESSION['unique_id'];
        // $incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);
        $grp_id = $_SESSION['g_id'];
        
        $message = mysqli_real_escape_string($conn, $_POST['message']);
        if(!empty($message)){
            $sql = mysqli_query($conn, "INSERT INTO group_msg (group_id, unique_id, msg)
                                        VALUES ('$grp_id', '$outgoing_id', '$message')") or die();
        }
    }else{
        header("location: ../login.php");
    }


    
?>