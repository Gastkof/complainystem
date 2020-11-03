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
     <meta name="viewport" content="width=device-width, initial-scale=1">
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

                  <div class="form-inline ">
                    <div class="panel panel-default">
                      <div class="container">


<div class="panel-heading text-center ">

  <div id="full-logo-div" class=" "> <!-- Logo column -->

      <img id="full-logo-img" src="logo.png" class="mx-auto d-block" >

  </div>
  <hr class="m-y-2">

      <h5 class="dir-rtl" > פרטי תלונה חדשה </h5>

  <hr class="m-y-2">
</div>
    </div>
<div class="panel-body">

    <form role="form" action="page4.php" method="post" class=" form-signin form-inline   ">



<div class="form-group form-row mx-auto">
      <div class="col">
  <label for="number" class="mr-sm-2"  ><h5 >מס תלונה:</h5>
    </label>
       <input type="number" name="number"  value=""  id="number"
      class ="form-control"   >
  </div>


               <script>

  function getNumber() {
    var minNumber = 10000; // le minimum
    var maxNumber = 99999; // le maximum

  var rand = Math.floor(Math.random() * (maxNumber - minNumber + 1) + minNumber);
      document.getElementById("number").value=rand;
      return false;
  };
window.onload=getNumber;
</script>
<div class="col">
  <label for="date" class="mr-sm-2" ><h5 class="p3" >תאריך</h5></label>
            <input type="date" name="date" value="" id="date"  class ="form-control" autocomplete = "off">
  </div>
  <div class="col">
      <label for="time" class="mr-sm-2"><h5 class="p3">שעה</h5> </label>
              <input type="time" name="time" value="" id="time" class ="form-control" autocomplete = "off">
</div>
</div>

<div class="form-group form-row mx-auto">

<div class="col">

<label for="" class="mr-sm-2">

  <h5 class="p3">מקום קבלת התלונה</h5>  </label>
      <select class ="form-control"  >
        <option value="נפת יזרעאל">   <h5>נפת יזרעאל</h5> </option>
        <option value="נפת עכו"> <h5>נפת עכו</h5> </option>
        <option value="נפת צפת"> <h5>נפתח כנרת</h5> </option>
        <option value="נצרת"><h4>נצרת</h4></option>
                <option value="משרד ראשי"><h4>משרד ראשי</h4></option>
      </select>

      </div>
      <div class="col">





    <label for="name"  class="mr-sm-2" >    <h5 class="p3">שם נותן השירות</h5> </label><input type="text" name="name" value=""  id="name"  pattern="[A-Za-z]{2-3,3-15}+" "+{2,15}"
    class ="form-control " autocomplete = "off">

    </label>
    </div>
    <div class="col">

<label for="" class="mr-sm-2">
  <h5 class="p3">תפקיד</h5></label>
  <select class ="form-control"  >
    <option value="מהנדס מזון"> <h5>מהנדס מזון</h5>   </option>
    <option value="רכז תלונות" > <h5>רכז תלונות</h5> </option>

  </select>



</div>

<div class="container">
    <hr class="m-y-2">
</div>
</div>
<div class="form-row mx-auto ">


<div class=" col">

          <label for="name" class="mr-sm-2" ><h5 class="p3" >שם מתלונן</h5></label> <input type="text" name="name" value=""  id="name"  pattern="[A-Za-z]{2-3,3-15}+" "+{2,15}"
            class ="form-control" autocomplete = "off">

</div>
<div class="col">
            <label for="name" class="mr-sm-2" ><h5 class="p3">תעודת זהות</h5></label><input type="text" name="name" value=""  id="name"
            class ="form-control" autocomplete = "off">
</div>
<div class="col">
              <label for="asrass"  class="mr-sm-2" > <h5 class="p3" >כתובת</h5></label><input type="text" name="adrass" value=""  id="adrass"
                class ="form-control" autocomplete = "off">

</div>

</div>
<div class="form-row mx-auto">

<div class="col">
    <label for="tel"  class="mr-sm-2" ><h5 class="p3" >טלפון נוסף</h5></label><input type="tel" name="tel" value=""  id="tel"
    class ="form-control" autocomplete = "off">
</div>
<div class="col">
      <label for=""  class="mr-sm-2"><h5 class="p3">טלפון-נייד</h5></label><input type="tel" name="phone" value=""  id="phone"
      class ="form-control" autocomplete = "off">
</div>
<div class="col">
        <label for="email"   ><h5 class="p3" >מייל</h5></label> <input type="email  " name="email" value=""  id="name"  pattern="[A-Za-z]{2-3,3-15}+" "+{2,15}"
          class ="form-control" autocomplete = "off">
</div>

  </div><!-- /container -->

<div class="container">
    <hr class="m-y-2">
</div>
          <div class="container ">
            <input class="btn btn-primary btn-center btn-lg mx-auto d-block" type="submit" name="" id="button" value="המשך">

          </div>
            </form><!-- /form -->

        </div><!-- /container -->
      </div><!-- /container -->

          </div><!-- /container -->




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>





  </body>
</html>
