<?php 
    session_start();
    include_once "config.php";
    
    $pass = $_POST['password'];
    $npass = $_POST['n_password'];
    $ncpass = $_POST['nc_password'];
    $id = $_SESSION['admin_id'];

    $epass = md5($pass);
    $sql = "SELECT * FROM admin WHERE password = '$epass'";
    $result = mysqli_query($conn, $sql);
    // $row = mysqli_fetch_assoc($result);
     
    // $row['password'] == $epass
    
    if(mysqli_num_rows($result)){
        
        if($npass == $ncpass){
            
            $enc = md5($npass);
            $result = mysqli_query($conn, "update admin set password = '$enc' where admin_id = '$id'");
            if($result){
                $_SESSION['password_update_status'] = 'pass';
                $_SESSION['password_update_msg'] = "password updated successfully..";
                echo '<script>
                        alert("password updated successfully..");
                        window.location="../update_pass.php";
                        //window.history.back();
                      </script>';    
                // header("location: ../update_pass.php");   
            }
            else{
                $_SESSION['password_update_status'] = 'fail';
                $_SESSION['password_update_msg'] = "something wrong..";
                echo '<script>
                        alert("something wrong..");
                        window.history.back();
                      </script>';    
            }
        }
        else{
            $_SESSION['password_update_status'] = 'fail';
            $_SESSION['password_update_msg'] = "password confirmation fail";
            echo '<script>
                     alert("password confirmation fail");
                     window.history.back();
                  </script>';
            // header("location:users_list.php");
        }
    }
    else{
        $_SESSION['password_update_status'] = 'fail';
        $_SESSION['password_update_msg'] = "previous password didn\'t match";
        echo '<script>
               alert("previous password didn\'t match");
               window.history.back();
              </script>';
        // header("location: ../pass_update.php");
    }
?>