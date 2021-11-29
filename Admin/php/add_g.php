<?php
  session_start();
  include "config.php";

  $g_name = mysqli_real_escape_string($conn, $_POST["g_name"]);
  $dept = mysqli_real_escape_string($conn, $_POST["dept"]);
  $year = mysqli_real_escape_string($conn, $_POST["year"]);
  $img = "g_".$g_name.".jpg";
  // $img = $_FILES["g_img"]['name'];
  $created_by = $_SESSION['admin_username'];

  // echo $g_name.'<br>';
  // echo $dept.'<br>';
  // echo $year.'<br>';
  // echo $created_by.'<br>';

  if($_FILES['g_img']['name'] == ""){
      $img = "g_default.jpg";
    }
  // echo $img.'<br>';

  $f = $_FILES['g_img'];
  move_uploaded_file($f["tmp_name"], "../../client/gchat/php/uploads/".$img);
  $dir = "uploads/";

  // group created------------------>>>>
  $sql = "INSERT into groups(group_name, img, created_by) values('$g_name', '$img', '$created_by')";
  mysqli_query($conn, $sql);

  // bring group id----------------->>>>
  $sql = "SELECT group_id from groups where group_name='$g_name'";
  $result = mysqli_query($conn, $sql);
  $entry = mysqli_fetch_assoc($result);
  // ---->
  $group_id = $entry['group_id'];

  if($dept!="" and $year!=""){

    // participants from students-------->>>>
    $sql = "SELECT unique_id from students where (department='$dept' and year='$year')";

    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
      $unique_id = $row['unique_id'];
      //echo $unique_id." ".$group_id."<br>";
      $sql = "INSERT into participant(unique_id, group_id) value('$unique_id', '$group_id')";
      $query = mysqli_query($conn, $sql);
      if($query){
        echo '<script>
                alert("Group Created successfully")
                //window.history.back();
                window.location="../list_group.php"; 
              </script>';  
    
      }
    }
  }

mysqli_close($conn);
?>
