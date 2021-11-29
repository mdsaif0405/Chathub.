<?php
session_start();
    include "config.php";
    $id =$_SESSION['id'];
    $sql = "select * from userdata where id=$id";
    $record = mysqli_query($link, $sql);
    $array = mysqli_fetch_array($record);


    $name = $_POST["name"];
    if($_POST['name']==""){
        $name = $array['name'];
        // echo '<script>
        //        alert("'.$name.'");
        //       </script>';
    }
    $user=$_POST["username"];
    if($_POST['username']==""){
        $user = $array['username'];
        // echo '<script>
        //        alert("'.$name.'");
        //       </script>';
    }
    // $f = $_FILES["pic"];
    // $pic = $f["name"];
    $pic = $array['id'].".jpg";

    $id =$_SESSION['id'];
    $sql = "update userdata set name='$name', username='$user', pic='$pic' where  id=$id";


    $f = $_FILES["pic"];
    move_uploaded_file($f["tmp_name"], "../uploads/".$pic);
    $dir = "uploads/";
    // echo basename($_FILES["pic"]["size"],'.jpg');


    if (mysqli_query($link, $sql))
    {
        echo "<script>
               alert('entry update successfull...');
               //window.location='users_list.php';
              </script>";
    }
    else
    {
    // echo "Error: " . $sql . "<br>" . mysqli_error($link);
        echo "<script>
               alert('updation failed..');
               //window.location='users_list.php';
              </script>";
    }

    mysqli_close($link);


?>
