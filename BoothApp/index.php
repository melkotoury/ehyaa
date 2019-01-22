<?php



   if(isset($_POST['submit'])){
       $name =$_POST['name'];
$email=$_POST['email'] ;
$phone= $_POST['phone'];

$target_audience_desc=$_POST['target_audience_desc'] ;
$comments=$_POST['comments'];
$bSizeHeight=$_POST['bSizeHeight'];
$bSizeWidth=$_POST['bSizeWidth'];
$bSizeDepth=$_POST['bSizeDepth'];
$isLeftSide=$_POST['leftradio'];
$isRightSide=$_POST['rightradio'];
$isCeiling= $_POST['topradio'];
$counter=$_POST['counter'];
$counter1_height=$_POST['counter1_height'];
$counter1_width=$_POST['counter1_width'];
$counter1_depth=$_POST['counter1_depth'];
$counter2_height=$_POST['counter2_height'];
$counter2_width=$_POST['counter2_width'];
$counter2_depth=$_POST['counter2_depth'];
$counter3_height=$_POST['counter3_height'];
$counter3_width=$_POST['counter3_width'];
$counter3_depth=$_POST['counter3_depth'];
$pallet_arr=[];
if (isset($_POST['checbox1'])) {
  $pallet1=$_POST['checbox1'];
  array_push($pallet_arr,$pallet1);
}elseif (isset($_POST['checbox2'])) {
  $pallet2=$_POST['checbox2'];
  array_push($pallet_arr,$pallet2);
}elseif ($_POST['checbox3']) {
  $pallet3=$_POST['checbox3'];
  array_push($pallet_arr,$pallet3);
}elseif (isset($_POST['checbox4'])) {
  $pallet4=$_POST['checbox4'];
  array_push($pallet_arr,$pallet4);
}elseif (isset($_POST['checbox5'])) {
  $pallet5=$_POST['checbox5'];
  array_push($pallet_arr,$pallet5);
}elseif (isset($_POST['checbox6'])) {
  $pallet6=$_POST['checbox6'];
  array_push($pallet_arr,$pallet6);
}elseif (isset($_POST['checbox7'])) {
  $pallet8=$_POST['checbox7'];
  array_push($pallet_arr,$pallet7);
}elseif (isset($_POST['checbox8'])) {
  $pallet8=$_POST['checbox8'];
  array_push($pallet_arr,$pallet8);
}elseif (isset($_POST['checbox9'])) {
  $pallet9=$_POST['checbox9'];
  array_push($pallet_arr,$pallet9);

}elseif (isset($_POST['checbox10'])) {
  $pallet10=$_POST['checbox10'];
  array_push($pallet_arr,$pallet10);
}elseif (isset($_POST['checbox11'])) {
  $pallet11=$_POST['checbox11'];
  array_push($pallet_arr,$pallet11);
}

$pallet_array=print_r($pallet_arr,true);




$table=$_POST['table'];
$highTable=$_POST['highTable'];
$chair=$_POST['chair'];
$bar_chair=$_POST['barChair'];
$tv=$_POST['tv'];
$rollup=$_POST['rollup'];
$other=$_POST['other'];
        $to = "pino.ssg@gmail.com"; // this is your Email address
        $from = $email ; // this is the sender's Email address
        $name = $_POST['name'];
        $tel = $_POST['phone'];
        $subject = "Booth Design Application";
        $subject2 = "Copy of your Booth Design Application";
        $message =  "A.Contact Info:\nName:  ". $name . "\n" ."Telephone: ". $tel ."\n".$name. " wrote the following specs:" . "\n" .
        "B.Target Audience:\nOur Target audience is ".$target_audience_desc."\nC.Comments:\nOur comments is as follows ".
        $comments." \n D.Booth Dimensions: \n "."Booth Height: ".$bSizeHeight."\nBooth Width: "
        .$bSizeWidth."\nBooth Depth: ".$bSizeDepth." \n E.Booth Design: \n Left Side: ".$isLeftSide."\nRight Side: ".$isRightSide
        ."\nCeiling: ".$isCeiling."\nF.Items Quantities: \n"."Counters: ".$counter ." \n "
        ."Counter 1 Height: " .$counter1_height."\n"
        ."Counter 1 Width: " .$counter1_width."\n"
        ."Counter 1 Depth: " .$counter1_depth."\n"
        ."Counter 2 Height: " .$counter2_height."\n"
        ."Counter 2 Width: " .$counter2_width."\n"
        ."Counter 2 Depth: " .$counter2_depth."\n"
        ."Counter 3 Height: " .$counter3_height."\n"
        ."Counter 3 Width: " .$counter3_width."\n"
        ."Counter 3 Depth: " .$counter3_depth."\n"
        ."and the number of Tables needed : ".$table."\n"
        ."and the number of High Tables needed : ".$highTable."\n"
        ."and the number of Chairs needed : ".$chair."\n"
        ."and the number of Bar Chairs needed : ".$bar_chair."\n"
        ."and the number of TV needed : ".$tv."\n"
        ."and the number of Rollups needed : ".$rollup." \n \n"
        ."and Pallets choosen were as follows ".$pallet_arr;
        $message2 = "Here is a copy of your message " ."A.Contact Info:\nName:  ". $name . "\n" ."Telephone: ". $tel ."\n".$name. " wrote the following specs:" . "\n" .
        "B.Target Audience:\nOur Target audience is ".$target_audience_desc."\nC.Comments:\nOur comments is as follows ".
        $comments." \n D.Booth Dimensions: \n "."Booth Height: ".$bSizeHeight."\nBooth Width: "
        .$bSizeWidth."\nBooth Depth: ".$bSizeDepth." \n E.Booth Design: \n Left Side: ".$isLeftSide."\nRight Side: ".$isRightSide
        ."\nCeiling: ".$isCeiling."\nF.Items Quantities: \n"."Counters: ".$counter ." \n "
        ."Counter 1 Height: " .$counter1_height."\n"
        ."Counter 1 Width: " .$counter1_width."\n"
        ."Counter 1 Depth: " .$counter1_depth."\n"
        ."Counter 2 Height: " .$counter2_height."\n"
        ."Counter 2 Width: " .$counter2_width."\n"
        ."Counter 2 Depth: " .$counter2_depth."\n"
        ."Counter 3 Height: " .$counter3_height."\n"
        ."Counter 3 Width: " .$counter3_width."\n"
        ."Counter 3 Depth: " .$counter3_depth."\n"
        ."and the number of Tables needed : ".$table."\n"
        ."and the number of High Tables needed : ".$highTable."\n"
        ."and the number of Chairs needed : ".$chair."\n"
        ."and the number of Bar Chairs needed : ".$bar_chair."\n"
        ."and the number of TV needed : ".$tv."\n"
        ."and the number of Rollups needed : ".$rollup." \n \n"
        ."and Pallets choosen were as follows ".$pallet_arr;

        $headers = "From:" . $from;
        $headers2 = "From:" . $to;



        mail($to,$subject,$message,$headers);
        mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
        echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
        // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Booth Application</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!--header photo-->
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <img src="img/header_booth.png" alt="">
                    </div><!--end header col -->
                </div><!--end header row -->
            </div> <!--end header container -->
        </div><!--end header photo-->

        <div class="container form">
            <form action="" method="POST" enctype="multipart/form-data">
                    <div class="row margin top">
                        <div class="col-md-5">
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
                <div class="row margin top-small">
                    <div class="col-md-12 attach">
                        <p class="big">Kindly attach your company’s logo and branding picture <span class="small">(Optional)</span></p>
		                <p class="small">(E.g. Product picture, model, real satate units, etc)</p>
                    </div>
                </div>
                <div class="row margin right">
                    <div class="col-md-12 img-upload">
                     <div class="form-group">
    <input type="file" name="attachment" class="file">
    <div class="input-group col-xs-12">
      <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
      <input type="text" required class="form-control input-lg" disabled placeholder="Upload Image">
      <span class="input-group-btn">
        <button class="browse btn btn-primary input-lg" type="button"><i class="glyphicon glyphicon-search"></i> Browse</button>
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
    <input type="file" name="img[]" class="file">
    <div class="input-group col-xs-12">
      <textarea name="target_audience_desc" id="" cols="125" rows="5" required> </textarea>
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
      <textarea name="comments" id="" cols="125" rows="5" required></textarea>
    </div>
  </div>
                </div><!--end comments col-->

                </div><!--end comments row-->
<!--start booth size-->
                <div class="row margin">
                    <div class="col-md-2 row-title">a.Booth Size:</div>
                    <div class="col-md-3">H: <input name="bSizeHeight" type="text" required></div>
                    <div class="col-md-3">W: <input name="bSizeWidth" type="text" required></div>
                    <div class="col-md-3">D: <input name="bSizeDepth" type="text" required></div>
                </div><!--end booth size-->

               <!--start booth design-->
                <div class="row margin top-small">
                    <div class="col-md-12 row-title">b.Booth Design:</div>
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
                    <div class="col-md-2">Celing: </div>
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
                     <div class="col-md-2"><input class="form-control input-sm" name="counter" type="number" required></div>
                    <div class="col-md-1">Size:</div>

                        <div class="col-md-2">H: <input class="form-control input-sm" name="counter1_height" type="number" required></div>
                    <div class="col-md-2">W: <input class="form-control input-sm" name="counter1_width"  type="number" required></div>
                    <div class="col-md-2">D: <input class="form-control input-sm" name="counter1_depth"  type="number" required></div>


                    <div class=" top">
                        <div class="col-md-6"></div>
                        <div class="col-md-2">H: <input class="form-control input-sm" name="counter2_height"  type="number" required></div>
                    <div class="col-md-2">W: <input class="form-control input-sm" name="counter2_width"  type="number" required></div>
                    <div class="col-md-2">D: <input class="form-control input-sm" name="counter2_depth"  type="number" required></div>

                    </div>
                    <div class=" ">
                      <div class="col-md-6"></div>
                        <div class="col-md-2">H: <input class="form-control input-sm" name="counter3_height"  type="number" required></div>
                    <div class="col-md-2">W: <input class="form-control input-sm" name="counter3_width" type="number" required></div>
                    <div class="col-md-2">D: <input class="form-control input-sm" name="counter3_depth" type="number" required></div>

                    </div>
                    <div class="container">
                     <div class="row top-small margin">
                        <div class="col-md-2">Table:</div>
                        <div class="col-md-1 "><input class="form-control input-sm" name="table" type="number" required></div>
                    </div>
                    <div class="row top-small margin">
                        <div class="col-md-2">High Table:</div>
                        <div class="col-md-1 "><input class="form-control input-sm" name="highTable" type="number" required></div>
                    </div>
                      <div class="row top-small margin">
                        <div class="col-md-2">Chair:</div>
                        <div class="col-md-1 "><input class="form-control input-sm" name="chair" type="number" required></div>
                    </div>
                     <div class="row top-small margin">
                        <div class="col-md-2">Bar Chair:</div>
                        <div class="col-md-1 "><input class="form-control input-sm" name="barChair" type="number" required></div>
                    </div>
                      <div class="row top-small margin">
                        <div class="col-md-2">T.V:</div>
                        <div class="col-md-1 "><input class="form-control input-sm" name="tv" type="number" required></div>
                    </div>
                      <div class="row top-small margin">
                        <div class="col-md-2">Roll-Up:</div>
                        <div class="col-md-1 "><input class="form-control input-sm" name="rollup" type="text" required></div>
                    </div>
                     <div class="row top-small margin">
                        <div class="col-md-2">Other:</div>
                        <div class="col-md-6 "><textarea class="form-control " name="other" id="" cols="125" rows="5" required required></textarea></div>
                    </div>
                    </div>
                </div><!--end Item Quantity-->

             <!--start coloring-->
<div class="row margin top-small">
                    <div class="col-md-12 row-title">d. Coloring:</div>
                </div>
                 <div class="row margin top-small">
                     <div class="col-md-3">01.<input type="checkbox" name="checkbox1" value="pallet1"><img src="img/colors/c1.png" alt=""></div>
                     <div class="col-md-3">02.<input type="checkbox" name="checkbox2" value="pallet2"><img src="img/colors/c2.png" alt=""></div>
                     <div class="col-md-3">03.<input type="checkbox" name="checkbox3" value="pallet3"><img src="img/colors/c3.png" alt=""></div>
                     <div class="col-md-3">04.<input type="checkbox" name="checkbox4" value="pallet4"><img src="img/colors/c4.png" alt=""></div>
                 </div>
                 <div class="row margin top-small">
                      <div class="col-md-3">05.<input type="checkbox" name="checkbox5" value="pallet5"><img src="img/colors/c5.png" alt=""></div>
                     <div class="col-md-3">06.<input type="checkbox" name="checkbox6" value="pallet6"><img src="img/colors/c6.png" alt=""></div>
                     <div class="col-md-3">07.<input type="checkbox" name="checkbox7" value="pallet7"><img src="img/colors/c7.png" alt=""></div>
                     <div class="col-md-3">08.<input type="checkbox" name="checkbox8" value="pallet8"><img src="img/colors/c8.png" alt=""></div>
                 </div>
                 <div class="row margin top-small">
                    <div class="col-md-3">09.<input type="checkbox" name="checkbox9" value="pallet9"><img src="img/colors/c9.png" alt=""></div>
                     <div class="col-md-3">10.<input type="checkbox" name="checkbox10" value="pallet10"><img src="img/colors/c10.png" alt=""></div>
                     <div class="col-md-3">11.<input type="checkbox" name="checkbox11" value="pallet11"><img src="img/colors/c11.png" alt=""></div>
                 </div><!--end coloring-->

                  <div class="row margin top-small">
      <div class="col-md-5">
          <div class="form-group">
            <label for="Captcha" id="captcha">Name the small house pet that says "<i>meow</i>"<span class="required">*</span></label>
    <input type="text" class="form-control" name="captcha" value="" required/>
      </div>
      </div>
  </div>
                <input type="submit" name="submit" class="btn btn-primary pull-right">


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



         <!--footer photo-->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <img src="img/footer.png" alt="">
                    </div><!--end footer col -->
                </div><!--end footer row -->
            </div> <!--end footer container -->
        </div><!--end footer photo-->


        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
        <script src="js/validator.js"></script>
    </body>
</html>
