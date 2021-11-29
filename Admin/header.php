<?php
  if(isset($_SESSION['password_update_status'])){
    // echo "<script>alert('".$_SESSION['password_update_status']."')</script>";
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
  </head>
<style type="text/css">
    .page-item.disabled .page-link {
    background-color: transparent;
  }
  #sidebar{
    box-shadow: 4px 0px 11px black;
  }
  .wrapper{
    height: 100vh;
  }
  #sidebar{
    /* background: #ff4a4a;
    background-image: linear-gradient( 105.3deg,  rgba(30,39,107,1) 21.8%, rgba(77,118,221,1) 100.2% ); */
    background: #0b0b57d9;

    background: url(img/nav3.png);
    /* background-repeat: no-repeat;
    background-size: cover; */
  }
  .log{
    border: 1px solid white;
    color: white;
    position: absolute;
    bottom: 24px;
    width: 116px;
    border-radius: 6px;
  }
  .lo{
        color: white;

    padding: 0px 11px;

  }
  p, label{
    color: black;
  }
  h1{
    color: #fff;
    text-shadow: 5px 6px black;
  }
  .container h1{
    color: black;
    text-shadow: 3px 4px #e19a9a;
    font-weight: 700;
  }
</style>

  <body>

		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar" style="height: 100vh;">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	                <i class="fa fa-bars" style="position: absolute;top: 13px;left: 15px;"></i>
	                <span class="sr-only">Toggle Menu</span>
	                </button>
                </div>
				<div class="p-4">
		  		    <h1><a href="home.php" class="logo">Admin</a></h1>
                    <ul class="list-unstyled components mb-5">
                        <li class="active">
                          <a href="home.php"><span class="fa fa-home mr-3"></span> Home</a>
                        </li>
                        <!-- <li>
                            <a href="table.php"><span class="fa fa-user mr-3"></span> Students</a>
                        </li> -->
                        <li>
                          <a href="list_user.php"><span class="fa fa-graduation-cap mr-3"></span> User List</a>
                        </li>
                        <li>
                          <a href="list_group.php"><span class="fa fa-list-alt mr-3"></span>Group List</a>
                        </li>
                        <li>
                          <a href="list_admin.php"><span class="fa fa-address-card mr-3"></span>Admin List</a>
                        </li>
                        <li>
                          <a href="add_student.php"><span class="fa fa-user-plus mr-3"></span> Add Users</a>
                        </li>
                        <li>
                          <a href="add_group.php"><span class="fa fa-user-plus mr-3"></span> Add Group</a>
                        </li>
                        <li>
                          <a href="add_admin.php"><span class="fa fa-user-secret mr-3"></span> Create Admin</a>
                        </li>
                        <li>
                          <a href="update_pass.php"><span class="fa fa-wrench mr-3"></span>Update password</a>
                        </li>
                        <li>
                            <a href="../client/team.php"><span class="fa fa-user mr-3"></span> About</a>
                        </li>
                        <li style="position: absolute;width: 82%;bottom: 20px;">
                            <a href="http://localhost/major/Admin/php/logout.php"><span class="fa fa-sign-out mr-3"></span>Logout</a>
                        </li>
                        <!-- <div class="mb-5 log">
                          <a href="http://localhost/major/Admin/php/logout.php" style="color: white;position: absolute;bottom: 10px;" class="lo"><span class="fa fa-sign-out mr-3"></span> Logout</a>
                        </div> -->
                    </ul>
                </div>
    	    </nav>
            <div class="time" style="position: absolute; right: 12px;    color: black;">
                <span id="time"></span>
            </div>
            <script>
                // let d = new Date();
                // console.log(d);
                setInterval(updatetime, 1000);

                function updatetime(){
                    //var days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
                    //var d = new Date(dateString);
                    //var dayName = days[d.getDay()];

                    let d = new Date();

                    let day = d.toString().split(' ')[0];
                    //console.log(typeof(day))
                    let date = d.getDate();
                    let month = d.toLocaleString('default', { month: 'short' });
                    let year = d.getFullYear();

                    //console.log(date, month, year);
                    let h = d.getHours();
                    let m = d.getMinutes();
                    let s = d.getSeconds();
                    if(h<10){
                        h = "0"+h;
                    }
                    if(m<10){
                        m = "0"+m;
                    }
                    if(s<10){
                        s = "0"+s;
                    }
                    time.innerHTML = day+" "+date+" "+month+" "+year+" "+h+":"+m+":"+s;
                    //time.innerHTML = d;
                }
            </script>


    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>

<?php include("php/alert.php"); ?>