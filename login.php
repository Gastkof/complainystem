<?php
session_start();
if(isset($_POST["sum"])){

$connection = new mysqli('localhost','root','','myfirstDB') or die('could not connect to DB');

if (mysqli_connect_errno($connection))
  {
    echo "Failed to connect:" . mysqli_connect_error();
    exit();
  }





    $p1 =$_POST['user_name'];
    $p4 =$_POST['password'];



    $query = " SELECT  FROM"  ;
  if( mysqli_query($connection,$query)){

    header("location: welcome.php");
  }


}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  </head>



    <body data-spy="scroll" data-target="#navbar" data-offset="150">
<header id="site-header">
  <div id="header-top" class="hidden-xs">
    <div class="col-xs-12 header-width-limiter"> <!-- Header width limiter -->
      <div class="col-xs-12 header-width-limiter">
            <div id="full-logo-div" class="col-xs-12 col-sm-2 col-md-3"> <!-- Logo column -->

                <img id="full-logo-img" src="AAR.jpg" alt="AAR logo">

            </div>
          </div>
            </div>
              </div>
</header>
      <nav class="navbar navbar-light bg-faded navbar-fixed-top" id="navbar">


        <ul class="nav navbar-nav" id="head">
          <li class="nav-item">
            <a class="nav-link" href="#jumbotron">בית <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">אודות</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#footer">המלצות ורשת חברתית</a>
          </li>
        </ul>

      </nav>

<hr>
        <p>תרצו לשמוע עוד על המוצר ולהיות הראשונים לקבל הזמנה להשקת המוצר הרשמו עכשיו </p>
        <div class="container">
</div>


        <div class="container">



        <div id="error"><? echo $error.$successMessage; ?></div>

        <div class="container" id="f1">
                <div class="row centered-form">
                <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                	<div class="panel panel-default">
                		<div class="panel-heading">
        			 			</div>
        			 			<div class="panel-body">
        			    		<form role="form" action="index.php" method="post" >
        			    			<div class="row">
        			    				<div class="col-xs-6 col-sm-6 col-md-6">
        			    					<div class="form-group input-container ">
                              <i class="fa fa-user icon"></i>
        			                <input type="text" name="user_name" id="user_name" class="form-control input-sm" pattern=".{2,}"
                                placeholder="First Name" value=<?php if(isset( $_SESSION['user_name'])) echo  $_SESSION['first_name']; ?>>
        			    					</div>
        			    				</div>
        			    			</div>
        			    					<div class="form-group input-container">
                                 <i class="fa fa-key icon"></i>
        			    						<input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password"
                              pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" value=<?php if(isset( $_SESSION['password'])) echo  $_SESSION['password']; ?> >
        			    					</div>



        			    			<input type="submit" value="Register" class="btn btn-info btn-block" name="sum"   >


        			    		</form>
        			    	</div>
        	    		</div>
            		</div>
            	</div>
              </div>



    </div>




  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>





        </div>
        <div class="container">
            <?php include("slide.php") ?>
        </div>
        <div  id="footerBase">
        <?php include ('footer.php');?>
        </div>


    <script type="text/javascript">

          $("form").submit(function(e) {

              var error = "";

              if ($("#email").val() == "") {

                  error += "The email field is required.<br>"

              }

              if ($("#first_name").val() == "") {

                  error += "The first_name field is required.<br>"

              }

              if ($("#last_name").val() == "") {

                  error += "The last_name field is required.<br>"

              }
              if ($("#password").val() == "") {

                  error += "The password field is required.<br>"

              }
              if (error != "") {

                 $("#error").html('<div class="alert alert-danger" role="alert"><p><strong>There were error(s) in your form:</strong></p>' + error + '</div>');

                  return false;

              } else {

                  return true;

              }
          })

    </script>

  </body>
</html>
