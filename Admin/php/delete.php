<?php
    session_start();

    include_once "config.php";
    $id= $_POST['id'];
    $sql = "delete from students where user_id='$id'";

    if(mysqli_query($conn, $sql)==TRUE){
        echo '<script language="javascript">';
        echo 'alert("Deleted successfully")';
        echo 'window.history.back();';
        echo '</script>';
        // header("location: ../list_user.php");
    }
    else
        {
        echo '<script language="javascript">';
        echo 'alert("Error in deletion")';
        echo 'window.history.back();';
        echo '</script>';
        }


?>

