<?php 
    
    session_start();
    include_once "config.php";

    $id = $_SESSION['admin_id'];
    $_SESSION["logout"]="yes";
        
?>
    <script>
        window.history.back();
    </script>