<?php
  session_start();
  include_once "config.php";

  $user=$_POST["email"];
  $pass=$_POST["password"];

  $sql = "select * from students where username='$user' and password='$pass'";
  $result = mysqli_query($link, $sql);

  $record = mysqli_fetch_array($result);
  $_SESSION['img'] = $record['img'];

  if(is_array($record)) {
    $_SESSION["id"] = $record['unique_id'];
    $_SESSION["name"] = $record['fname']." ".$record['lname'];
  }
  else {
    echo '<script>
                alert("login details are incorrect...");
                window.location="../login.php";
            </script>';
    }

  if(isset($_SESSION["id"])) {
    header("Location: ../Home.php");
    }


  mysqli_close($link);
?>
