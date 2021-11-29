<?php
// echo "hello";
    while($grp = mysqli_fetch_assoc($query)){
        $g_id = $grp['group_id'];
        $g_name = $grp['group_name'];
        $_SESSION['g_id'] = $g_id;
        $_SESSION['g_name'] = $g_name;
        //echo $g_id;
        
        $id = $_SESSION['unique_id'];
        $result = mysqli_query($conn, "SELECT block_status from participant where group_id = '$g_id' and unique_id = '$id'");
        $data = mysqli_fetch_array($result);

        $status = 'no';
        if(isset($data['block_status'])){
            $status = $data['block_status'];
        }
        // query to get msg 
        $sql = "SELECT * from group_msg where group_id ='$g_id' order by msg_id desc limit 1";
        $result = mysqli_query($conn, $sql);
        $grp_msg = mysqli_fetch_assoc($result);

        // check msg existance
        (mysqli_num_rows($result) > 0) ? $g_msg = $grp_msg['msg'] : $g_msg ="No message available";
        
        // set msg length to view
        (strlen($g_msg) > 28) ? $g_msg =  substr($g_msg, 0, 28) . '...' : $g_msg = $g_msg;
       
        // $serder_id = $grp_msg['unique_id'];
        // $sql = "SELECT fname from students where unique_id='$serder_id'";
        // $table = mysqli_query($conn,$sql);
        // $row = mysqli_fetch_array($table);
        // $sender_name = $row['fname'];

        if(isset($grp_msg['msg'])){
            ($outgoing_id == $grp_msg['unique_id']) ? $you = "You: " : $you = "";
        }else{
            $you = "";
        }

        
        $output .= '<a href="gchat.php?group_id='. $g_id .'&status='.$status.'">
                    <div class="content">
                        <img src="php/uploads/'. $grp['img'] .'" alt="">
                        <div class="details">
                            <span>'. $g_name .'</span>
                            <p>'. $you . $g_msg .'</p>
                        </div>
                    </div>
                    </a>';
                    
    
    }
?>
