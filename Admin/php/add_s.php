<?php
  session_start();
  include "config.php";

  $id = mysqli_real_escape_string($conn, $_POST["id"]);
  $fname = mysqli_real_escape_string($conn, $_POST["fname"]);
  $lname = mysqli_real_escape_string($conn, $_POST["lname"]);

  $gender = mysqli_real_escape_string($conn, $_POST["gen"]);
  $dept = mysqli_real_escape_string($conn, $_POST["dept"]);
  $year = mysqli_real_escape_string($conn, $_POST["year"]);
  $pass = mysqli_real_escape_string($conn, $_POST["id"]);
  $pic = "default.jpg";



  $sql = mysqli_query($conn, "SELECT * FROM students WHERE unique_id = '{$_POST["id"]}'");
  if(mysqli_num_rows($sql) > 0){
              echo "<script>
                        alert('".$_POST['id']." This id already exist!');
                        window.history.back();
                    </script>";
  }
  else if($dept == 'Choose...'){
    echo "<script>
              alert('please mention department!');
              window.history.back();
          </script>";

  }
  else if($year == 'Choose...'){
    echo "<script>
              alert('please mention course year!');
              window.history.back();
          </script>";

  }
  else if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
        $sql2 = mysqli_query($conn, "SELECT * FROM students WHERE email = '{$_POST["email"]}'");
            if(mysqli_num_rows($sql2) > 0){

              echo "<script>
                        alert('".$_POST['email']." This email already existing!');
                        window.history.back();
                    </script>";
            }
            else{
                $email= mysqli_real_escape_string($conn, $_POST["email"]);
                $encrypt_pass = md5($pass);
                $sql = "insert into students(unique_id, fname, lname, gender, department, 
                year, img, email, password, block) values('$id', '$fname', '$lname', 
                '$gender', '$dept', '$year', '$pic', '$email', '$encrypt_pass', 'no')";

                if (mysqli_query($conn, $sql))
                {
                  echo "<script>
                          alert('user account created successfull...');
                          window.location='../add_student.php';
                        </script>";
                }
                else
                {
                  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
            }
  }
      else{
        echo "<script>
                  alert('".$_POST["email"]." is not a valid email!');
                  window.history.back();
              </script>";
      }
  
?>

