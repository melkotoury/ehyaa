<?php
ob_start();

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
 // $pallet_arr=[];
 // if (isset($_POST['checbox1'])) {
 //   $pallet1=$_POST['checbox1'];
 //   array_push($pallet_arr,$pallet1);
 // }elseif (isset($_POST['checbox2'])) {
 //   $pallet2=$_POST['checbox2'];
 //   array_push($pallet_arr,$pallet2);
 // }elseif ($_POST['checbox3']) {
 //   $pallet3=$_POST['checbox3'];
 //   array_push($pallet_arr,$pallet3);
 // }elseif (isset($_POST['checbox4'])) {
 //   $pallet4=$_POST['checbox4'];
 //   array_push($pallet_arr,$pallet4);
 // }elseif (isset($_POST['checbox5'])) {
 //   $pallet5=$_POST['checbox5'];
 //   array_push($pallet_arr,$pallet5);
 // }elseif (isset($_POST['checbox6'])) {
 //   $pallet6=$_POST['checbox6'];
 //   array_push($pallet_arr,$pallet6);
 // }elseif (isset($_POST['checbox7'])) {
 //   $pallet8=$_POST['checbox7'];
 //   array_push($pallet_arr,$pallet7);
 // }elseif (isset($_POST['checbox8'])) {
 //   $pallet8=$_POST['checbox8'];
 //   array_push($pallet_arr,$pallet8);
 // }elseif (isset($_POST['checbox9'])) {
 //   $pallet9=$_POST['checbox9'];
 //   array_push($pallet_arr,$pallet9);
 //
 // }elseif (isset($_POST['checbox10'])) {
 //   $pallet10=$_POST['checbox10'];
 //   array_push($pallet_arr,$pallet10);
 // }elseif (isset($_POST['checbox11'])) {
 //   $pallet11=$_POST['checbox11'];
 //   array_push($pallet_arr,$pallet11);
 // }
 //
 // $pallet_array=print_r($pallet_arr,true);
 //////////////
 $pallet_checkbox = $_POST['pallet_checkbox'];
 $color="";
 if(!empty($pallet_checkbox))
 {
	 $N = count($pallet_checkbox);

	 for($i=0; $i < $N; $i++)
	 {
		 $color.='<img src="http://vestudios.net/img/colors/'.$pallet_checkbox[$i] .'.png"/>'."\n ";
	 }
 }
 else
 {

 }



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



         $headers = "From:" . $from;
         $headers2 = "From:" . 'non-reply@vestudios.net';
		 $header3 = "From: Registration <non-reply@vestudios.net/>\r\n";

if(isset($_FILES['file_array'])){

	// email fields: to, from, subject, and so on


	// boundary
	$semi_rand = md5(time());
	$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";

	// headers for attachment
	$headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";
	$message3='
	<html><head></head><body>
	<table width="75%" border="1" align="center" cellpadding="10" cellspacing="0">
    	<tr>
        	<td><img src="http://vestudios.net/img/Vebooth.png" width="970" height="120" alt=""/></td>
        </tr>
        <tr>
        	<td>Name: '.$name.'<br>
        	  Phone: '.$phone.'<br>
        	  E-mail: '.$from.'</td>
        </tr>
        <tr>
        	<td><p>Organization: '.$target_audience_desc.' <br>
        	</p>
       	    <p>Comments: '.$comments.'</p>
       	    <p>&nbsp; </p></td>
        </tr>
        <tr>
        	<td><p>Booth Size: H:'.$bSizeHeight.' cm   - W: '.$bSizeWidth.'  cm  - D: '.$bSizeDepth.' cm </p>       	    <p>Booth Design: Left side: '.$isLeftSide.'   - Right Side: '.$isRightSide.' - ceiling : '.$isCeiling.' </p></td>
        </tr>
        <tr>
        	<td><p>Counter #'.$counter.'</p>
       	    <p>Counter 1 : H:'.$counter1_height.' cm - W: '.$counter1_width.' cm  - D: '.$counter1_depth.' cm <br>
       	      Counter 2:H:'.$counter2_height.' cm - W: '.$counter2_width.' cm  - D: '.$counter2_depth.' cm 
       	        <br>
            Counter 3:    H:'.$counter3_height.' cm - W: '.$counter3_width.' cm  - D: '.$counter3_depth.' cm   	    </p></td>
        </tr>
        <tr>
        	<td><p>Items Qty:</p>
       	    <p>Table #'.$table.'<br>
   	        High Table #'.$highTable.'<br>
   	        Chair #'.$chair.'<br>
   	        Bar Chair #'.$bar_chair.'<br>
   	        Display #'.$tv.'<br>
   	        Roll-Up #'.$rollup.'<br>
   	        Other: '.$other.'  
            </p></td>
        </tr>
        <tr>
        	<td>Coloring:<br> '.$color.'</td>
        </tr>
        <tr>
        	<td><img src="http://vestudios.net/img/VeFooter.png" width="970" height="165" alt=""/></td>
        </tr>
    </table>
	
	';

	// multipart boundary
	$message=  "A.Contact Info:\n Name:  ". $name . "\n" ."Telephone: ". $tel ."\n".$name. " wrote the following specs:" . "\n" .
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
	."and Pallets choosen were as follows ".$color;

	$message2= "Here is a copy of your message " ."A.Contact Info:\nName:  ". $name . "\n" ."Telephone: ". $tel ."\n".$name. " wrote the following specs:" . "\n" .
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
	."and Pallets choosen were as follows ".$color;
	$message.= "This is a multi-part message in MIME format.\n\n" . "--{$mime_boundary}\n" . "Content-Type: text/plain; charset=\"iso-8859-1\"\n" . "Content-Transfer-Encoding: 7bit\n\n" . $message . "\n\n";
	$message .= "--{$mime_boundary}\n";
	$message3.= "This is a multi-part message in MIME format.\n\n" . "--{$mime_boundary}\n" . "Content-Type: text/plain; charset=\"iso-8859-1\"\n" . "Content-Transfer-Encoding: 7bit\n\n" . $message . "\n\n";
	$message3 .= "--{$mime_boundary}\n";
    $file_name = $_FILES['file_array']['name'];
    $temp_name = $_FILES['file_array']['tmp_name'];
    $file_type = $_FILES['file_array']['type'];
    $size_array = $_FILES['file_array']['size'];
    $error_array = $_FILES['file_array']['error'];


    for($i = 0; $i < count($temp_name); $i++){
        if(move_uploaded_file($temp_name[$i], "test_uploads/".$file_name[$i])){
            echo $file_name[$i]." upload is complete<br>";
$file = fopen("test_uploads/".$file_name[$i],"rb");
		$data = fread($file,filesize("test_uploads/".$file_name[$i]));
		fclose($file);
		$data = chunk_split(base64_encode($data));
		$name = $file_name[$i];
		$message.= "Content-Type: {\"application/octet-stream\"};\n" . " name=\"$name\"\n" .
		"Content-Disposition: attachment;\n" . " filename=\"$name\"\n" .
		"Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
		$message .= "--{$mime_boundary}\n";
		
		$message3.= "Content-Type: {\"application/octet-stream\"};\n" . " name=\"$name\"\n" .
		"Content-Disposition: attachment;\n" . " filename=\"$name\"\n" .
		"Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
		$message3 .= "--{$mime_boundary}\n";
// send


	}

         else {
            echo "move_uploaded_file function failed for ".$file_name[$i]."<br>";
        }
    }
mail($from, $subject2, $message3, $header3.'Content-type: text/html');
$ok = mail($to, $subject, $message, $headers);
	if ($ok) {
		header('Refresh: 3;url=http://vestudios.net');
		echo '<div align="center" style="background:#000; color:#fff;">';
		echo  "<h1>Thank you for choosing Ve-Studios </h1>";
		echo  " <h2>You will be Redirected to Vestudios.net</h2> ";
		echo  '</div>';
		
		exit();
		
	} else {
		echo "<p>mail could not be sent!</p>";
	}

	}



}
?>
