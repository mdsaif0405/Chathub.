<?php
        session_start();
        include_once "config.php";
        
        $id = $_GET['msg_id'];
        $data = mysqli_query($conn, "DELETE from group_msg where msg_id='$id'");
        // echo $id;

?>