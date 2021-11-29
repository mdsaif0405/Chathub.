<?php 
    session_start();
    include_once "config.php";
    
    $pass = $_POST['password'];
    $npass = $_POST['n_password'];
    $ncpass = $_POST['nc_password'];
    $id = $_SESSION['unique_id'];

    $sql = "SELECT * FROM students WHERE unique_id = '$id'";
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($result);

    $epass = md5($pass);    
    if($row['password'] == $epass){
        if($npass == $ncpass){
            $enc = md5($npass);
            $result = mysqli_query($link, "update students set password = '$enc' where unique_id = '$id'");
            if($result){
                echo '<script>
                        alert("password updated successfully..")
                        window.location="../profile.php";
                        //window.history.back();
                      </script>';    
            }
            else{
                echo '<script>
                        alert("something wrong..")
                        window.history.back();
                      </script>';    
            }
        }
        else{
            echo '<script>
                     alert("password confirmation fail")
                     window.history.back();
                  </script>';
        }
    }
    else{
        echo '<script>
               alert("previous password didn\'t match")
               window.history.back();
              </script>';
    }
?>