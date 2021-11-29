
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
    include_once "config.php";
    ini_set('memory_limit', '1024M');
    
    if(isset($_SESSION['unique_id'])){
        $sender = $_SESSION['unique_id'];
        $receiver = $_SESSION['receiver'];
        
        $output = "";
        
        $sql = "SELECT * FROM messages LEFT JOIN students ON students.unique_id = messages.sender_id
                WHERE (sender_id = '$sender' AND receiver_id = '$receiver')
                OR (sender_id = '$receiver' AND receiver_id = '$sender') ORDER BY msg_id";
        $query = mysqli_query($conn, $sql);

        if(mysqli_num_rows($query) > 0){
          
            while($row = mysqli_fetch_assoc($query)){

                // ------------time---------------
                // $t = date("H:i:s", strtotime($row['time']));
                $date = $row['time'];
                $t = date("g:i a", strtotime($date));
                $d = date("F j", strtotime($date));
                
                // $d = date("F jS, Y", strtotime($date));
                
                date_default_timezone_set("Asia/kolkata");
                $datetime = new DateTime(); 
                $var = $datetime->format('g a'); 
                
                // $var1 = 0;
                // if($var > '12 am')
                // {   if($var1 == 0){
                //     $output .= '<p style="text-align:center;">'.$d.'</p>';
                //     $var1 = 1;
                // }
                // }
                // -----------end---------------
                
                if($row['sender_id'] === $sender){
                    $output .= '<div class="chat outgoing">
                                <div class="details">
                                    <p>'.$row['msg'] .'</p>
                                    <a id="t-r" class="time">'.$t." ".$d.'</a>
                                    
                                </div>
                                <button id="del" onclick="deleteme(this.value)" value="'.$row['msg_id'].'"><i class="fa fa-trash"></i></button>
                                
                                </div>';
                }else{
                    // '<span id="i-l">'.$row['fname'].'</span>'.
                    $output .= '<div class="chat incoming">
                                <img src="http://localhost/major/Client/php/uploads/'.$row['img'].'" alt="">
                                <div class="details">'.'
                                    <p>'.$row['msg'] .'</p>
                                    <a id="t-l" class="time">'. $t." ".$d .'</a>
                                    
                                </div>
                                </div>';
                }
                unset($row);
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
    