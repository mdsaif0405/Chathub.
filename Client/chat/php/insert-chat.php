<?php 
    session_start();
    include_once "config.php";
    ini_set('memory_limit', '1024M');

    if(isset($_SESSION['unique_id'])){
        
        $sender = $_SESSION['unique_id'];
        $receiver = $_SESSION['receiver'];
        
        // -------uploading files--------
        $file = $_FILES['file-upload'];
        echo "<script>alert(".$file.")</script>";

        if($_FILES['file-upload']['size'] == 0 && $_FILES['file-upload']['error'] == 0){
            // file is empty
            echo "<script>alert('empty')</script>";
        }
        move_uploaded_file($f["tmp_name"], "uploads/".$file);
        $dir = "uploads/";
        // echo basename($_FILES["pic"]["size"],'.jpg');
        
        // -------------end------------------

        
        // -----------------uploading messages-------------------
        $message = mysqli_real_escape_string($conn, $_POST['message']);
        if(!empty($message)){
            $sql = mysqli_query($conn, "INSERT INTO messages (receiver_id, sender_id, msg)
                                        VALUES ('$receiver', '$sender', '$message')") or die();
        }
    }else{
        header("location: ../login.php");
    }

    
    
?>