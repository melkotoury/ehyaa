<?php
$header = "From: Cafex <info@cafex-me.com >\r\n";

			mail('pino.ssg@gmail.com, a.soliman@ehyaa-eg.com','EME Newsletter',' 
			
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style>
.imgres{
	display: block;
  	max-width: 100%;
  	height: auto;
	align-items:center;
	align-content:center;
	text-align:center;
  }
 a:link{
	 border:0;
	 text-decoration:none;
	 }
</style>
</head>

<body>
<div align="center" style="max-width:768px;">
    	<img src="ehyaa-eg.com/newsletter/images/main.png" alt="body"/>
        <br/>
        <a href="http://www.cafex-me.com/register-cafex-event"><img src="ehyaa-eg.com/newsletter/images/reg_btn.png" alt="registerNow"/></a>
        <br/>
    <p align="center"> <a href="http://www.facebook.com/cafexegy"><img src="ehyaa-eg.com/newsletter/images/fb.png" width="115" height="35" alt="fb" /></a> &nbsp; <a href="mailto:Info@events-me.com"><img src="ehyaa-eg.com/newsletter/images/email.png" width="220" height="36"  alt="email"/></a> &nbsp;  <a href="http://www.cafex-me.com"><img src="ehyaa-eg.com/newsletter/images/web.png"  width="205" height="36" alt="cafexWebsite"/></a></p>
  </div>
</body>
</html>


			
			',$header.'Content-type: text/html');
?>