<?php
    session_start();
    include_once "config.php";
    $outgoing_id = $_SESSION['unique_id'];
  
    // find list of groups for users registered into
    $sql = "SELECT groups.group_id, groups.group_name, groups.img, participant.block_status FROM groups INNER JOIN participant ON groups.group_id=participant.group_id where unique_id='$outgoing_id'";
    // place query to database
    $query = mysqli_query($conn, $sql);
    
    
    $output = "";
    
    if(mysqli_num_rows($query) == 0){
        $output .= "No groups are available";
    }elseif(mysqli_num_rows($query) > 0){
        include_once "data.php";
    }
    echo $output;
?>
