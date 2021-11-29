<?php
        session_start();
        include_once "config.php";
        
        $id = $_GET['msg_id'];
        $data = mysqli_query($conn, "delete from messages where msg_id='$id'");

?>