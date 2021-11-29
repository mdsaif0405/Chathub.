<?php
    session_start();
    include_once "config.php";

    $id = $_SESSION['unique_id_update'];
    $sql = "select * from students where unique_id='$id'";
    $record = mysqli_query($conn, $sql);
    $array = mysqli_fetch_array($record);

    // $id = $_SESSION['user_id'];
    $fname = $_POST['fname'];
    if($fname == ""){
      $fname = $array['fname'];
    }
    
    $lname = $_POST['lname'];
    if($lname == ""){
      $lname = $array['lname'];
    }
    $gender = $_POST['gender'];
    if($gender == ""){
      $gender = $array['gender'];
    }
    $department = $_POST['department'];
    if($department == ""){
      $department = $array['department'];
    }
    $year = $_POST['year'];
    if($year == ""){
      $year = $array['year'];
    }
    $email = $_POST['email'];
    if($email == ""){
      $email = $array['email'];
    }
    $ban = $_POST['block'];
    if($_POST['block']=="")
    {
        $ban = 'no';
    }
    
    // for testing and debugging 
    // echo "<script>
    //                       alert('".$ban."entry successfull...');
    //                       //window.location='../student_details.php';
    //                       //window.history.back();
    //                     </script>";

    $sql = "update students set fname='$fname', lname='$lname', gender='$gender', department='$department', year='$year', email='$email', block='$ban' where  unique_id='$id'";
    if (mysqli_query($conn, $sql))
                {
                  echo "<script>
                          alert('entry successfull...');
                          window.location='../list_user.php';
                        </script>";
                }
                else
                {
                  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
?>