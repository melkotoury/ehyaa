

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="img/fav.png" type="image/png" sizes="32x32">
<title>Ehyaa Adv Agency-Booth Application</title>

<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/responsive.css" >

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div align="center" class="container-fluid">
  <div class="row">
    <img src="img/header_booth.png"  alt="" class="img-responsive"/> </div>
</div>
<div  class="container">
  <div class="row text-center"></div>


  <div class="row">

    <div class="container form">
            <form action="my_parser.php" method="POST" enctype="multipart/form-data">
                    <div class="row margin top">
                        <div class="col-md-5">
                        <p>&nbsp;</p>
                            <div class="form-group">
  <label for="name" id="name">Name<span class="required">*</span></label>
    <input type="text" class="form-control" name="name" id="name"  value="" required/>
                        </div>
                        </div>
                    </div>
  <div class="row margin top-small">
      <div class="col-md-5">
          <div class="form-group">
           <label for="email" id="email">Email<span class="required">*</span></label>
    <input type="text" class="form-control" name="email" id="email"  value="" required/>
      </div>
      </div>
  </div>
  <div class="row margin top-small">
      <div class="col-md-5">
          <div class="form-group">
           <label for="phone" id="phone">Phone<span class="required">*</span></label>
    <input type="text" class="form-control" name="phone" id="phone"  value="" />
      </div>
      </div>
  </div>
  <hr/>
                <div class="row margin top-small">
                    <div class="col-md-12 attach">
                        <p class="big">Kindly attach your company’s logo and branding picture <span class="small">(Optional)</span></p>
		                <p class="small">(E.g. Product picture, model, real satate units, etc)</p>
                    </div>
                </div>

                <div class="row margin right">
                    <div class="col-md-12 img-upload">
                     <div class="form-group">
    <input type="file" name="file_array[]" class="file multi with-preview"   multiple   maxlength="10" data-maxsize="7224">
    <div class="input-group col-xs-12">
      <span class="input-group-addon"><i  class="glyphicon glyphicon-picture"></i></span>
      <input type="text" required class="form-control input-lg" id="file-log" disabled placeholder="Upload Image (gif,png,jpg) smaller than 7MB" >
      <span class="input-group-btn">
        <button class="browse btn btn-primary input-lg "  id="WithEvents" type="button"><i class="glyphicon glyphicon-search"></i> Browse</button>
      </span>
    </div>
  </div>
                </div><!--end image upload col-->

                </div><!--end image upload row-->

                  <div class="row margin ">
                    <div class="col-md-12 attach">
                        <p class="big">Describe  organization / product does and its target audience</p>
		                <p class="small">(E.g. Real Estate Properties / Class A)</p>
                    </div>
                </div>
                <div class="row margin right">
                    <div class="col-md-12 img-upload">
                     <div class="form-group">
    <div class="input-group col-xs-12">
      <textarea name="target_audience_desc" cols="50" rows="5" required id=""> </textarea>
    </div>
  </div>
                </div><!--end target audience col-->

                </div><!--end target audience row-->

                 <div class="row margin ">
                    <div class="col-md-12 attach">
                        <p class="big">Comments</p>
                    </div>
                </div>
                <div class="row margin right">
                    <div class="col-md-12 ">
                     <div class="form-group">
    <div class="input-group col-xs-12">
      <textarea name="comments" id="" cols="50" rows="5" required></textarea>
    </div>
  </div>
                </div><!--end comments col-->

                </div><!--end comments row-->
<!--start booth size-->
                <div class="row margin">
                    <div class="col-md-3 row-title">a.Booth Size:</div>
                    <div class="col-md-3">H: <input name="bSizeHeight" type="text" required class="margin-sm" size="15">
                  cm</div>
                    <div class="col-md-3">W: <input name="bSizeWidth" type="text" required class="margin-sm" size="15">
                    cm</div>
                    <div class="col-md-3">D: <input name="bSizeDepth" type="text" required class="margin-sm" size="15">
                  cm</div>
                    <p>&nbsp;</p>
                </div><!--end booth size-->

               <!--start booth design-->
                <div class="row margin top-small">
                    <div class="col-md-12 row-title">b.Booth Design:<br>
                    </div>
                </div>
                <div class="row margin top-small">
                    <div class="col-md-1"></div>
                    <div class="col-md-2">Left Side: </div>
                    <div class="col-md-2"><img src="img/left.png" alt=""></div>
                    <div class="radio-inline col-md-2">
 	                <label><input type="radio" value="yes" name="leftradio">Yes</label>
                    </div>
                    <div class="radio-inline col-md-2">
                    <label><input type="radio"value="no" name="leftradio" checked>No</label>
                    </div>

                    </div>
                    <div class="row margin top-small">
                    <div class="col-md-1"></div>
                    <div class="col-md-2">Right Side: </div>
                    <div class="col-md-2"><img src="img/right.png" alt=""></div>
                     <div class="radio-inline col-md-2">
 	                <label><input type="radio" value="yes" name="rightradio">Yes</label>
                    </div>
                    <div class="radio-inline col-md-2">
                    <label><input type="radio" value="no" name="rightradio" checked>No</label>
                    </div>
                    </div>
                    <div class="row margin top-small">
                     <div class="col-md-1"></div>
                    <div class="col-md-2">Ceiling: </div>
                    <div class="col-md-2"><img src="img/top.png" alt=""></div>
                     <div class="radio-inline col-md-2">
 	                <label><input type="radio" value="yes" name="topradio">Yes</label>
                    </div>
                    <div class="radio-inline col-md-2">
                    <label><input type="radio" value="no" name="topradio" checked>No</label>
                    </div>
                </div><!--end booth design-->
   <!--start Item Quantity-->

<div class="row margin top-small">
                    <div class="col-md-12 row-title">c. Items Qty:</div>
                </div>
                 <div class="row margin top-small">
                    <div class="col-md-1"></div>
                    <div class="col-md-2">Counter: </div>
                     <div class="col-md-2"><input class="form-control input-sm" name="counter" type="number">
                     </div>
                    <div class="col-md-1">Size:</div>

                        <div class="col-md-2">H: <input class="form-control input-sm" name="counter1_height" type="number">
                        cm</div>
                    <div class="col-md-2">W: <input class="form-control input-sm" name="counter1_width"  type="number">
                   cm</div>
                    <div class="col-md-2">D: <input class="form-control input-sm" name="counter1_depth"  type="number">
                   cm</div>


                    <div class=" top">
                        <div class="col-md-6"></div>
                        <div class="col-md-2">H: <input class="form-control input-sm" name="counter2_height"  type="number" >
                      cm</div>
                    <div class="col-md-2">W: <input class="form-control input-sm" name="counter2_width"  type="number" >
                    cm</div>
                    <div class="col-md-2">D: <input class="form-control input-sm" name="counter2_depth"  type="number" >
                    cm</div>

                    </div>
                    <div class=" ">
                      <div class="col-md-6"></div>
                        <div class="col-md-2">H: <input class="form-control input-sm" name="counter3_height"  type="number" >
                      cm</div>
                    <div class="col-md-2">W: <input class="form-control input-sm" name="counter3_width" type="number" >
                    cm</div>
                    <div class="col-md-2">D: <input class="form-control input-sm" name="counter3_depth" type="number" >
                    cm</div>

                    </div>
                    <div class="container">
                     <div class="row top-small margin">
                        <div class="col-md-2">Table:</div>
                        <div class="col-md-1 "><input class="form-control input-sm" name="table" type="number"></div>
                    </div>
                    <div class="row top-small margin">
                        <div class="col-md-2">High Table:</div>
                        <div class="col-md-1 "><input class="form-control input-sm" name="highTable" type="number"></div>
                    </div>
                      <div class="row top-small margin">
                        <div class="col-md-2">Chair:</div>
                        <div class="col-md-1 "><input class="form-control input-sm" name="chair" type="number"></div>
                    </div>
                     <div class="row top-small margin">
                        <div class="col-md-2">Bar Chair:</div>
                        <div class="col-md-1 "><input class="form-control input-sm" name="barChair" type="number"></div>
                    </div>
                      <div class="row top-small margin">
                        <div class="col-md-2">Display:</div>
                        <div class="col-md-1 "><input class="form-control input-sm" name="tv" type="number"></div>
                    </div>
                      <div class="row top-small margin">
                        <div class="col-md-2">Roll-Up:</div>
                        <div class="col-md-1 "><input class="form-control input-sm" name="rollup" type="number"></div>
                    </div>
                     <div class="row top-small margin">
                        <div class="col-md-2">Other:</div>
                        <div class="col-md-6 "><textarea class="form-control " name="other" id="" cols="125" rows="5" ></textarea></div>
                    </div>
                    </div>
                </div><!--end Item Quantity-->

             <!--start coloring-->
<div class="row margin top-small">
                    <div class="col-md-12 row-title">d. Coloring:</div>
                </div>
                 <div class="row margin top-small">
                     <div style="padding:1%;" class="col-md-3">01.<input type="checkbox" name="pallet_checkbox[]" id="checkbox1" value="c1"><img src="img/colors/c1.png" alt=""></div>
                     <div style="padding:1%;" class="col-md-3">02.<input type="checkbox" name="pallet_checkbox[]" id="checkbox2" value="c2"><img src="img/colors/c2.png" alt=""></div>
                     <div style="padding:1%;" class="col-md-3">03.<input type="checkbox" name="pallet_checkbox[]" id="checkbox3" value="c3"><img src="img/colors/c3.png" alt=""></div>
                     <div  style="padding:1%;" class="col-md-3">04.<input type="checkbox" name="pallet_checkbox[]" id="checkbox4" value="c4"><img src="img/colors/c4.png" alt=""></div>
                 </div>
                 <div class="row margin top-small">
                      <div style="padding:1%;" class="col-md-3">05.<input type="checkbox" name="pallet_checkbox[]" id="checkbox5" value="c5"><img src="img/colors/c5.png" alt=""></div>
                     <div style="padding:1%;" class="col-md-3">06.<input type="checkbox" name="pallet_checkbox[]" id="checkbox6" value="c6"><img src="img/colors/c6.png" alt=""></div>
                     <div style="padding:1%;" class="col-md-3">07.<input type="checkbox" name="pallet_checkbox[]" id="checkbox7" value="c7"><img src="img/colors/c7.png" alt=""></div>
                     <div style="padding:1%;" class="col-md-3">08.<input type="checkbox" name="pallet_checkbox[]" id="checkbox8" value="c8"><img src="img/colors/c8.png" alt=""></div>
                 </div>
                 <div class="row margin top-small">
                    <div style="padding:1%;" class="col-md-3">09.<input type="checkbox" name="pallet_checkbox[]" id="checkbox9" value="c9"><img src="img/colors/c9.png" alt=""></div>
                     <div style="padding:1%;" class="col-md-3">10.<input type="checkbox" name="pallet_checkbox[]" id="checkbox10" value="c10"><img src="img/colors/c10.png" alt=""></div>
                     <div style="padding:1%;" class="col-md-3">11.<input type="checkbox" name="pallet_checkbox[]" id="checkbox11" value="c11"><img src="img/colors/c11.png" alt=""></div>
                 </div><!--end coloring-->

                  <div class="row margin top-small">
      <div class="col-md-5">
          <div class="form-group">
            <label for="Captcha" id="captcha">1+1=</label><input name="captcha" type="text" required class="form-control 2" placeholder="human verification" value=""/>
      </div>
      </div>
  </div>
                <input type="submit" name="submit" class="btn btn-primary centered-sm pull-right ">


            </form>

            <div id="success">
  <span>
    <p>Your message was sent succssfully! I will be in touch as soon as I can.</p>
  </span>
</div>

<div id="error">
  <span>
    <p>Something went wrong, try refreshing and submitting the form again.</p>
  </span>
</div>
        </div>


  </div>

  <div align="center" class="row">
  <img src="img/footer.png" width="970" height="165" class="img-responsive" alt=""/> </div>

</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/jquery.MultiFile.js"></script>

</script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.js"></script>
<script src="js/script.js"></script>
        <script src="js/validator.js"></script>
</body>
</html>
