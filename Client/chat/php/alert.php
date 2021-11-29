<?php

if(isset($_SESSION["logout"]))
{
 ?>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 
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
        //window.location.href = "php/destroy_session.php";
        setTimeout(() => window.location=" login.php", 1000);     
      }else {
        swal("safe")
        <?php $_SESSION["logout"]=null;?>
      }
  })

    
  </script>
<?php }

?>

<?php
  // if(isset($_SESSION['chat_block']) and $_SESSION['chat_block']=='yes'){

  // }

?>