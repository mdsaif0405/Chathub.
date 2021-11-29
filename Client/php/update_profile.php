<?php 
session_start();
    include "config.php";
    $id =$_SESSION['unique_id'];
    $sql = "select * from students where unique_id= '$id'";
    $record = mysqli_query($link, $sql);
    $array = mysqli_fetch_array($record);

    $nick = $_POST["nickname"];
    if($_POST['nickname']==""){
        $nick = $array['nickname'];
        // echo '<script>
        //        alert("'.$name.'");
        //       </script>';
    }

    if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
        $email = $_POST["email"];
    }
    else{
        echo '<script>
                echo "email is not valid..";
                window.history.back();
                </script>';
    }
    if($_POST['email']==""){
        $email = $array['email'];
    }

    $about = $_POST["about"];
    if($_POST["about"] == ""){
        $about = $array['about'];
    }

    //$img = $_SESSION['unique_id'].".jpg";
    $img = $array['unique_id'].".jpg";
    if($_FILES["img"]["name"] == ""){
        $img = $array["img"];
    }
    
    
    $sql = "update students set nickname='$nick', email='$email', img='$img', about='$about' where  unique_id='$id'";

    $f = $_FILES["img"];
    if($_FILES['img']['size'] == 0 && $_FILES['img']['error'] == 0){
        // file is empty
    }
    move_uploaded_file($f["tmp_name"], "uploads/".$img);
    $dir = "uploads/";
    // echo basename($_FILES["pic"]["size"],'.jpg');

    
    if (mysqli_query($link, $sql)) 
    {
        $_SESSION['img'] = $img;
        echo "<script>
               alert('entry update successfull...');
               window.location='../profile.php';
               
              </script>";
    } 
    else 
    {
    // echo "Error: " . $sql . "<br>" . mysqli_error($link);
        echo "<script>
               alert('updation failed..');
               //window.location='users_list.php';
               window.history.back();
              </script>";
    }

    mysqli_close($link);
    

?>
