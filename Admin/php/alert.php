<?php echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>'; ?>
<?php echo '<script src="../js/sweetalert.js"></script>'; ?>
<!-- alert for log out session -->
<?php
  // for logout --------->>
  if(isset($_SESSION["logout"]))
  {
?>
  <script>
  swal({
    title: "Confirm LOGOUT",
    text: "Are you sure you want to Logout?",
    icon: "warning",
    buttons: ["Cancel","YES"],
    dangerMode: true,
  })
  .then((willDelete) => {
      if (willDelete) {
          swal("Successfully Logout!", {
              icon: "success",
              button:false,
              timer: 1500,
          });
          <?php session_destroy();?>
          setTimeout(() => window.location="login.php",600);     
      }else {
          <?php $_SESSION["logout"]=null;?>
      }
  })   
    </script>
<?php unset($_SESSION["logout"]); } ?>


<!-- alert for id block -->
<?php 
  // block id ------->>
  // for debug ----------->>
  // echo "<script>alert('".$_SESSION['id_block']."')</script>";
  if(isset($_SESSION['id_block']) and $_SESSION['id_block']=='yes'){    
?>
    <script>
    swal({     
      icon: "warning",
      title: "Select ID blocked"
    })     
     </script>
<?php unset($_SESSION['id_block']); }  ?>
<?php
  if(isset($_SESSION['id_block']) and $_SESSION['id_block']=='no'){    
    ?>
    <script>
      swal({     
        icon: "success",
        title: "Select ID unblocked"
      })     
      </script>
<?php  unset($_SESSION['id_block']); } ?>


<!-- alert for member id block from group -->
<?php
  if(isset($_SESSION['block_member']) and $_SESSION['block_member']=='no'){    
?>
    <script>
    swal({     
      icon: "success",
      title: "Select group member unblocked"
    }) 
     </script>
<?php  unset($_SESSION['block_member']); } 
  else if(isset($_SESSION['block_member']) and $_SESSION['block_member'] == 'yes'){
?>
    <script>
    swal({     
      icon: "warning",
      title: "Select group member blocked"
    }) 
     </script>
<?php  unset($_SESSION['block_member']); } ?>

<!-- alert for password validation -->
<?php
  
  if(isset($_SESSION['password_update_status']) and $_SESSION['password_update_status']=='pass'){    
    // echo "<script>alert('".$_SESSION['password_update_status']." if')</script>";
?>
    <script>
    swal({     
      icon: "success",
      title: "success"
    }) 
     </script>
<?php  unset($_SESSION['password_update_status']); 
        unset($_SESSION['password_update_msg']);} 
  else if(isset($_SESSION['password_update_status']) and $_SESSION['password_update_status'] == 'fail'){
    // echo "<script>alert('".$_SESSION['password_update_status']." else')</script>";
    // <?php echo $_SESSION['password_update_msg']?>
?>
    <script>
    swal({     
      icon: "warning",
      title: "fail"
    }) 
     </script>
<?php  unset($_SESSION['password_update_status']); 
        unset($_SESSION['password_update_msg']); } ?>


