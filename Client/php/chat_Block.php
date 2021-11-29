<?php
    session_start();
    include_once "config.php";

    $receiver = $_POST['id'];
    $sender = $_SESSION['unique_id'];

    // $sql = "UPDATE messages set block_status ='yes' where (sender_id = '$sender' AND receiver_id = '$receiver') OR (sender_id = '$receiver' AND receiver_id = '$sender')";
    $sql = "UPDATE messages set block_status ='yes' where receiver_id = '$receiver' and sender_id = '$sender'";
    $query = $link->query($sql);

    if($query){
        
        echo "<script>
                alert('You blocked Your friend..".$_POST['name']."') 
                window.history.back();
            </script>";
    }

?>

<!-- UPDATE messages set block_status ='no' where (sender_id = '123' AND receiver_id = '17D91A0539') OR (sender_id = '17D91A0539' AND receiver_id = '123'); -->