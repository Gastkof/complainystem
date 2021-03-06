<?php
include("loginserv.php"); // Include loginserv for checking username and password
?>
<!doctype html>
<html lang="he" dir="rtl">
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
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <title></title>
  </head>
  <body >
    <div class="container">
      <div class="form-inline ">
      <div class="panel panel-default">
        <div class="container">


  <div class="panel-heading text-right ">

    <div id="full-logo-div" class=" "> <!-- Logo column -->

        <img id="full-logo-img" src="logo.png" class="mx-auto d-block" >

    </div>
    <hr class="m-y-2">

          <h5 class=""  >תלונה מספר</h5>


    <hr class="m-y-2">
  </div>

      </div>
  <div class="panel-body">

            <form role="form" action="#" method="post" class=" form-signin form-inline ">


              <div class=" container btn-group btn-group-justified">
                <input  class="btn btn-primary bt-md mx-auto d-block"  type="submit"  value="בדיקת מעבדה">
                <input class="btn btn-primary bt-md mx-auto d-block " type="submit" value="חקירה" >
                <input class="btn btn-primary bt-md mx-auto d-block"  type="submit"value="בקרה">
                <input  class="btn btn-primary bt-md mx-auto d-block"  type="submit" value="עדכון ממצאי הבדיקה" >
              </div>

              <div class="container">
                  <hr class="m-y-2">
              </div>

                            <h5>חקירה</h5>
                            <div class="container">
                                <hr class="m-y-2">
                            </div>

                            <div class=" container form-group form-row mx-auto">
                              <div class="col">

                            <label for="place">  <h5 class="f3">תאריך</h5></label><input type="date" name="place" value=""  id="date"
                              placeholder="" autocomplete = "off">
                            </div>

                              <div class="col">

                            <label for="name"><h5 class="f3">שעה</h5></label><input type="time" name="name" value="" id="time"  placeholder="" autocomplete = "off">
                      </div>
                              <div class="col">

                              <label for="name">  <h5 class="f3">שם העסק</h5> </label><input type="text" name="name" value="" id="name" placeholder="" autocomplete = "off">
</div>



  <div class="col">



                      <label for="name"> <h5 class="f3">:נחקר</h5></label> <input type="text" name="name" value="" id="name" placeholder="" autocomplete = "off">


</div>

  <div class="col">

                        <label for="name"><h5 class="f3">תפקיד</h5></label><input type="text" name="name" value="" id="name" placeholder="" autocomplete = "off">
</div>

<div class=" container form-group form-row mx-auto">
  <div class="col">

                <label for="name"><h5 >:חוקר</h5></label><input type="text" name="name" value="" id="name" placeholder="" autocomplete = "off">
</div>
  <div class="col">

                    <label for="name"><h5>מקום החקירה</h5></label><input type="text" name="name" value="" id="name" placeholder="" autocomplete = "off">
</div>
  <div class="col">

                <label for="check_1" ><h5>בוצעה בקרה</h5></label> כן <input type="checkbox" name="" value="">לא <input type="checkbox" name="" value="">
</div>

<br>
<div class="container">
    <hr class="m-y-2">
</div>
<div class=" container btn-group  ">
      <input  class="btn btn-primary mx-auto d-block"  id="button" type="submit" name="" value="חזור">
      <input class="btn btn-primary mx-auto d-block"  id="button"  type="submit"  value="המשך" >
      </div>
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
