<?php 
    
    session_start();
    include_once "config.php";

    $id = $_SESSION['unique_id'];
    $status = "Offline now";
    $sql2 = mysqli_query($link, "UPDATE students SET status = '$status' WHERE unique_id = '$id' ");
    $_SESSION["logout"]="yes";

    if($sql2){    
        session_destroy();
        header("Location: ../login.php");   
?>
    <script>
        //window.history.back();
    </script>
<?php
}
?>