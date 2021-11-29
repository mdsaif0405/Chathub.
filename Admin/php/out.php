<?php
$x=isset($_SESSION["logout"]);
if($x)
{
 ?>
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 <script>
 swal("Successfully Logout!", {
 icon: "success",
 button:false,
 timer: 1500,
});
</script>
<?php  } unset($_SESSION["logout"]);?>