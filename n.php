<?php
session_start();

  include("loginserve.php"); // Include loginserv for checking username and password

?>
<!doctype html>
<html lang="he">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style11.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<script src="https://s3.amazonaws.com/stitch-sdks/js/bundles/4.0.8/stitch.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <title></title>
  </head>
  <body >


    <div class="jumbotron" id="jumbotron">
<div class="container">

    <div class="container  " id="f1">
                <div class="row centered-form">
                  <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                    <div class="panel panel-default">
<div class="panel-heading">

  <div id="full-logo-div" class=" "> <!-- Logo column -->

      <img id="full-logo-img" src="logo.png" >

  </div>
</div>




                  <div class="panel-body">


            <form role="form" action="page2.php" method="post" class=" form-signin form-inline ">



              <div class=" form-group  input-container dir-rtl " >
                <label for="" >


                      <input type="text" placeholder="" id="user" name="user"  required><br/><br/>
<h3>:משתמש</h3>
            </label>

  <label for="">

    <input type="password" placeholder="" id="pass" name="pass" required><br/><br/>
<h3>:סיסמא</h3>
      </label>
            </div>

          <button class="btn-primary  btn-signin btn-block" type="submit">Sign in</button>



            </form><!-- /form -->
          </div><!-- /container -->
        </div><!-- /container -->
      </div><!-- /container -->

          </div><!-- /container -->

    </div><!-- /container -->
  </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>


  </div><!-- /container -->


  </body>
</html>
