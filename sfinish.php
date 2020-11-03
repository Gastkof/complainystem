<?php
include("loginserv.php"); // Include loginserv for checking username and password
?>
<!doctype html>
<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <title></title>
  </head>
  <body>
    <div class="container">
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->


            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin">
              <div class="imgcontainer">
                    <img id="Avatar" class="avatar" src="logo.png" />
              </div>
                <span id="reauth-email" class="reauth-email"></span>
                <input type="text" placeholder="מס' תלונה'" id="complainid" name="compl"  required dir="rtl"><br/><br/>
                <input type="text" placeholder="תעודת זהות" id="id" name="id" required dir="rtl" ><br/><br/>
                <button class="btn btn-lg btn-primary  btn-signin" type="submit">התחבר</button>


            </form><!-- /form -->

        </div><!-- /card-container -->
    </div><!-- /container -->
  </body>
</html>
