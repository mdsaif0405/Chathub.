<style>
  .time{
    font-size: 10px;
    /* width: 100px; */
    }
  .chat .incoming{
    align-items: center;
  }  
  #t-r{
      /* float: right; */
      padding-left: 9px; 
  }
  #t-l{
      float: right;
      padding-right: 9px;
  }
  #i-l{
      position: absolute;
      font-size: 10px;
      left: 30px
  }
  #del{
      border: 0px;
      height: 2px;
      font-size: 10px;
      float: right;
      margin-top: 30px;
      padding-left: 5px;
      cursor: pointer;
      /* position: absolute; */
  }
  a{
      cursor: pointer;
  }

</style>

<?php 
    session_start();
    if(isset($_SESSION['unique_id'])){
        include_once "config.php";
        $outgoing_id = $_SESSION['unique_id'];
        // $incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);
        // $incoming_id = $_SESSION['incoming_id'];
        $g_id = $_SESSION['g_id'];
        //$g_id = $_POST['group_id'];
        
        $output = "";

        $sql = "SELECT students.unique_id, students.fname, students.lname, students.img, group_msg.msg_id, group_msg.msg, group_msg.time from group_msg inner join students on group_msg.unique_id = students.unique_id where group_id='$g_id' order by msg_id";

        
        $query = mysqli_query($conn, $sql);

        if(mysqli_num_rows($query) > 0){
          
            while($row = mysqli_fetch_assoc($query)){
                // $t = date("H:i:s", strtotime($row['time']));
                $date = $row['time'];
                $t = date("g:i a", strtotime($date));
                $d = date("F j", strtotime($date));
                
                // $d = date("F jS, Y", strtotime($date));
                date_default_timezone_set("Asia/kolkata");
                $datetime = new DateTime(); 
                $var = $datetime->format('g a'); 
            
                if($var == '12 am')
                {
                    // $output .= '<p>'.$d.'</p>';
                }

                if($row['unique_id'] === $outgoing_id){
                    $msg_id = $row['msg_id'];
                    $output .= '<div class="chat outgoing">
                                <div class="details">
                                    <p>'.$row['msg'] .'</p>
                                    <a id="t-r" class="time">'.$t." ".$d.'</a>
                                    
                                </div>
                                <button id="del" onclick="deleteme(this.value)" value="'.$msg_id.'"><i class="fa fa-trash"></i></button>
                                
                                </div>';
                }else{
                    $output .= '<div class="chat incoming">
                                <img src="http://localhost/major/Client/php/uploads/'.$row['img'].'" alt="">
                                <div class="details">'.'
                                    <span id="i-l">'.$row['fname'].'</span>'.'
                                    <p>'.$row['msg'] .'</p>
                                    <a id="t-l" class="time">'. $t." ".$d .'</a>
                                    
                                </div>
                                </div>';
                }
                // href="php/del.php?msg_id='.$row['msg_id'].'"

                // <a onClick=\"javascript: return confirm('."Please confirm deletion".');\" href=''>x</a>
            }
        }else{
            $output .= '<div class="text">No messages are available. Once you send message they will appear here.</div>';
        }
        echo $output;
    }else{
        header("location: ../login.php");
    }

?>
    