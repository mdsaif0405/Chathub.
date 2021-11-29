<?php
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Client</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
  </head>
  <style>
      /* custom scroll bar */
      ::-webkit-scrollbar {
          width: 10px;
      }
      ::-webkit-scrollbar-track {
          background: #f1f1f1;
      }
      ::-webkit-scrollbar-thumb {
          /*background: #888;*/
          background: #394dd4;
      }

      ::-webkit-scrollbar-thumb:hover {
          /*background: #555;*/
          background: #3955ff;
      }
      /* :root {
			  color-scheme: light dark !important; 
			} */
  </style>
  <style>
  #sidebar h1 {
    margin-bottom: 20px;
    font-weight: 700;
    font-size: 40px;
    text-shadow: 3px 3px 5px black;
  }
  nav, #sidebar{
    background: url(img/nav.jpeg);
    background-repeat: no-repeat;
    background-size: cover;
    box-shadow: 4px 0px 5px black;
  }
    .container {
        transition:1s ease;
        box-shadow: 0 0 15px rgba(1, 1, 1, 1);
    }
    .form:hover{
        /* transform: scale(1.2); */
        transition:1s ease;
        box-shadow: 0 0 5px rgba(81, 23, 238, 1);
        padding: 13px 13px 13px 13px;
        /* padding-left: 12px; */
        margin: 5px 1px 3px 0px;
        border: 1px solid rgba(81, 203, 238, 1);
    }
    input[type=text] {
        outline: none;
        padding: 3px 0px 3px 3px;
        margin: 5px 1px 3px 0px;
        border: 1px solid #DDDDDD;
        transition: all 0.30s ease-in-out;
    }
 
    input[type=text]:focus {
        box-shadow: 0 0 5px rgba(81, 203, 238, 1);
        padding: 3px 0px 3px 3px;
        padding-left: 12px;
        margin: 5px 1px 3px 0px;
        border: 1px solid rgba(81, 203, 238, 1);
    }
    #submit:hover{
        background: #207974;
        border: 1px solid #207974;
        box-shadow: 14px 20px 15px rgb(0 0 0 / 36%);
    }
    #submit{
        width: 100%;
        margin-top: 14px;
        background: lightseagreen;
        color: white;
    }
    #logout{
        position: relative;
        bottom: -130px !important;
    }
  </style>
  <body>

		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	          <i class="fa fa-bars"></i>
	          <span class="sr-only">Toggle Menu</span>
	        </button>
        </div>
				<div class="p-4">
		  		<h1><a href="home.php" class="logo">ChatHub <span>for whom like to chat</span></a></h1>
	        <ul class="list-unstyled components mb-5">
	          <li class="home active">
	            <a href="home.php"><span class="fa fa-home mr-3"></span> Home</a>
	          </li>

	          <li class="chat">
              <a href="chat/users.php"><span class="fa fa-comments mr-3"></span> Chat</a>
	          </li>
	          <li class="Gchat">
              <a href="gchat/groups.php"><span class="fa fa-comments mr-3"></span>Group Chat</a>
	          </li>
	          <li class="Friends">
              <a href="friend_list.php"><span class="fa fa-address-book mr-3"></span> Friends</a>
	          </li>
	          <li class="Blist">
              <a href="block_list.php"><span class="fa fa-suitcase mr-3"></span> Block List</a>
	          </li>
	          <li class="myProfile">
              <a href="profile.php"><span class="fa fa-cogs mr-3"></span>My Profile</a>
	          </li>
            <li class="Uppassword">
              <a href="pass_update.php"><span class="fa fa-wrench mr-3"></span>Update Password</a>
	          </li>
            <li class="About">
                <a href="team.php"><span class="fa fa-user mr-3"></span> About us </a>
            </li>
	          <li class="contact">
              <a href="contact.php"><span class="fa fa-paper-plane mr-3"></span> Contacts</a>
	          </li>
	        <!-- <li>
			        filter: invert(0.8); background: black;
              <a href=""><span class="fa fa-paper-plane mr-3"></span> Night mode</a>
	        </li> -->
            <li id="logout" style="position: relative;bottom: -200px;">
                <a href="php/logout.php"><span class="fa fa-sign-out  mr-3" aria-hidden="true"></span>logout</a>
            </li>
            <li>
	        </ul>

	      </div>
    	</nav>

      <?php include("php/alert.php"); ?>