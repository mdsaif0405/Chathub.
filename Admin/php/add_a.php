<?php
  session_start();
  include "config.php";

  $fname = mysqli_real_escape_string($conn, $_POST["fname"]);
  $lname = mysqli_real_escape_string($conn, $_POST["lname"]);

  $email = mysqli_real_escape_string($conn, $_POST["email"]);
  $pass = mysqli_real_escape_string($conn, $_POST["password"]);


      if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
            $sql = mysqli_query($conn, "SELECT * FROM admin WHERE username='$email'");
            if(mysqli_num_rows($sql) > 0){

              echo "<script>
                        alert('".$_POST['email']." This email already exist!');
                        window.history.back();
                    </script>";
            }
            else{
                $email= mysqli_real_escape_string($conn, $_POST["email"]);
                $encrypt_pass = md5($pass);
                $sql = "insert into admin(fname, lname, username, password) values('$fname', '$lname', '$email', '$encrypt_pass')";

                if (mysqli_query($conn, $sql))
                {
                  echo "<script>
                          alert('entry successfull...');
                          window.location='../add_admin.php';
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
// mysqli_close($conn);
?>
