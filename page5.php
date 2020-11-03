<?php
include("loginserv.php"); // Include loginserv for checking username and password
?>
<!doctype html>
<html lang="en" dir="rtl">
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh5HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
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

<div class="panel-heading">

  <div id="full-logo-div" class=" "> <!-- Logo column -->

      <img id="full-logo-img" src="logo.png" class=" mx-auto d-block" >

  </div>
</div>
<div class="container">
    <hr class="m-y-2">
</div>
</div><!-- /container -->

<div class="panel-body">
    <form role="form" action="#" method="post" class=" form-signin form-inline ">

        <div class=" container form-group form-row mx-auto">
          <div class="col">


      <label for="place" ><h5 class="f3">מקום רכישה</h5></label><input type="text" name="place" value=""  id="place"  pattern="[A-Za-z]{2-3,3-15}+" "+{2,15}"
        class="form-control " autocomplete = "on">

  </div>

<div class=" col" >

      <label for="check_1"><h5 class="f3">מצב המוצר</h5></label>  <input type="checkbox" name=""
      id="check_1" value="כן " placeholder="פתוח"  checked>   סגור <input type="checkbox" name="" value="לא " placeholder="סגור" checked> </h5>
     פתוח
   </div>
   <div class="col">


      <label for="name"><h5 class="f3">שם המוצר:</h5></label><input type="text" name="name" value="" id="name"  placeholder="" autocomplete = "on">

      </div>
      <div class=" col " >

        <label for="name">  <h5 class="f3">מונח מוסתר:</h5> </label><input type="text" name="name" value="" id="name" placeholder="" autocomplete = "off">


     </div>
     </div>
       <hr class="m-y-2">
     <div class=" container form-group form-row mx-auto">

     <div class=" col " >

<label for="check_1" > <h5> : אריזה מקורית</h5> </label>כן <input type="checkbox" name="" value=""> לא <input type="checkbox" name="" value="">



</div>
<div class=" col " >

<label for="date"><h5>תאריך ייצור</h5></label> <input type="date" name="" value="">

</div>
<div class=" col " >
<label for="date"> <h5>תאריך תפוגה:</h5></label> <input type="date" name="" value="">

  </div>
</div>


<div class=" container form-group form-row mx-auto">

 <div class="container text-center ">
  <hr class="m-y-2">
   <h5> אופן אחסון המוצר </h5>
     <hr class="m-y-2">
 </div>

<div class="col">





    <label for="name"><h5 class="f3">אכסון מהרכישה עד גילוי הפגם:</h5></label><input type="text" name="name" value="" id="name" placeholder="" autocomplete = "off">



</div>
<div class=" col " >

  <label for="name"><h5 class="f3">אכסון מגילוי הפגם ועד הגשת התלונה:</h5> </label><input type="text" name="name" value="" id="name" placeholder="" autocomplete = "off">




</div>


<div class=" col " >
<label for="file"> <h5>צרף דוח רפואי:</h5> </label> <input type="file" name="file" value="" accept="application/msword">


</div>
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


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>




  </body>
</html>
