<?php 
    session_start();
    include_once "config.php";

    $email = mysqli_real_escape_string($link, $_POST['email']);
    $password = mysqli_real_escape_string($link, $_POST['password']);
    
    if(!empty($email) && !empty($password)){
        $sql = mysqli_query($link, "SELECT * FROM students WHERE email = '{$email}'");
        
        if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
            $user_pass = md5($password);
            $enc_pass = $row['password'];
            
            if($user_pass === $enc_pass){
                if($row['block']=='yes'){
                    echo "blocked!! contact admin";
                }
                else{
                    $status = "Active now";
                    $id = $row['unique_id'];
                    $sql2 = mysqli_query($link, "UPDATE students SET status = '$status' WHERE unique_id = '$id' ");
                        
                    // if(mysqli_num_rows($sql2) > 0){
                        $_SESSION['unique_id'] = $row['unique_id'];
                        $_SESSION["name"] = $row['fname']." ".$row['lname'];
                        $_SESSION["status"] = $row['status'];
                        $_SESSION['img'] = $row['img'];
                        $_SESSION["logout"] = null;
                        echo "success";
                    // }
                    // else{
                    //     echo $sql2."Something went wrong. Please try again!";
                    // }
                }
            }
            else{
                echo "Email or Password is Incorrect!";
            }
        }
        else{
            echo "$email - This email not Exist!";
        }
    }
    else{
        echo "All input fields are required!";
    }
?>
