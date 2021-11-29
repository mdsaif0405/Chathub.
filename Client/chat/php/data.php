<?php
    ini_set('memory_limit', '1024M');
    
    while($row = mysqli_fetch_assoc($query)){
        $id = $row['unique_id'];
        $sql2 = "SELECT * FROM messages WHERE (receiver_id = '$id'
                OR sender_id = '$id') AND (sender_id = '$sender' 
                OR receiver_id = '$sender') ORDER BY msg_id DESC LIMIT 1";
                
        $query2 = mysqli_query($conn, $sql2);
        $row2 = mysqli_fetch_assoc($query2);

        $result = mysqli_query($conn, "SELECT block_status from messages where receiver_id = '$sender' and sender_id = '$id'");
        $data = mysqli_fetch_array($result);

        $status = 'no';
        if(isset($data['block_status'])){
            $status = $data['block_status'];
        }
        // echo $data[];
        // $status = $data['block_status'];
        // if($id == $row2['receiver_id'] and $row2['block_status'] == 'yes'){
        //     $status = 'yes';
        // }
        
        (mysqli_num_rows($query2) > 0) ? $result = $row2['msg'] : $result ="No message available";
        
        (strlen($result) > 28) ? $msg =  substr($result, 0, 28) . '...' : $msg = $result;
        
        if(isset($row2['sender_id'])){
            ($sender == $row2['sender_id']) ? $you = "You: " : $you = "";
        }else{
            $you = "";
        }
        
        ($row['status'] == "Offline now") ? $offline = "offline" : $offline = "";
        ($sender == $row['unique_id']) ? $hid_me = "hide" : $hid_me = "";

        $output .= '<a href="chat.php?user_id='. $row['unique_id'] .'&status='.$status.'">
                    <div class="content">
                    <img src="../php/uploads/'. $row['img'] .'" alt="">
                    <div class="details">
                        <span>'. $row['fname']. " " . $row['lname'] .'</span>
                        <p>'. $you . $msg .'</p>
                    </div>
                    </div>
                    <div class="status-dot '. $offline .'"><i class="fas fa-circle"></i></div>
                </a>';


    
    }
?>
