<?php
    session_start();
    include_once "config.php";
    
    $sender = $_SESSION['unique_id'];
    $sql = "SELECT * FROM students WHERE NOT unique_id = '$sender' ORDER BY user_id DESC";
    $query = mysqli_query($conn, $sql);
    // $record = mysqli_fetch_array($query);
    



    $output = "";
    if(mysqli_num_rows($query) == 0){
        $output .= "No users are available to chat";
    }elseif(mysqli_num_rows($query) > 0){
        include_once "data.php";
    }
    echo $output;
?>