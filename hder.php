<!DOCTYPE html>
<html lang="en">


<!-- Head BEGIN -->
<head>
  <meta charset="utf-8">
  <title>MHC 5</title>

  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <meta content="Metronic Shop UI description" name="description">
  <meta content="Metronic Shop UI keywords" name="keywords">
  <meta content="keenthemes" name="author">

  <meta property="og:site_name" content="-CUSTOMER VALUE-">
  <meta property="og:title" content="-CUSTOMER VALUE-">
  <meta property="og:description" content="-CUSTOMER VALUE-">
  <meta property="og:type" content="website">
  <meta property="og:image" content="-CUSTOMER VALUE-"><!-- link to image for socio -->
  <meta property="og:url" content="-CUSTOMER VALUE-">

  <link rel="shortcut icon" href="favicon.png">

  <!-- Fonts START -->
  <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet"> 
  <!-- Fonts END -->

  <!-- Global styles START -->          
  <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Global styles END --> 
   
  <!-- Page level plugin styles START -->
  <link href="assets/pages/css/animate.css" rel="stylesheet">
  <link href="assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
  <link href="assets/plugins/owl.carousel/assets/owl.carousel.css" rel="stylesheet">
  <!-- Page level plugin styles END -->

  <!-- Theme styles START -->
  <link href="assets/pages/css/components.css" rel="stylesheet">
  <link href="assets/pages/css/slider.css" rel="stylesheet">
  <link href="assets/corporate/css/style.css" rel="stylesheet">
  <link href="assets/corporate/css/style-responsive.css" rel="stylesheet">
  <link href="assets/corporate/css/themes/blue.css" rel="stylesheet" id="style-color">
  <link href="assets/corporate/css/custom.css" rel="stylesheet">
  <!-- Theme styles END -->

  <script language="javascript" src="js/jquery-1.2.6.min.js"></script>
<script type="text/javascript">
$(function(){
    var minFont=8; // กำหนดขนาดตัวอักษรต่ำสุด
    var maxFont=18; //  กำหนดขนาดตัวอักษรสูงสุด
    var nowFont=12; // กำหนดขนาดตัวอักษรเริมต้น
    var objSet="p"; // แท็กที่ต้องการกำหนดขนาดตัวอักษร อาจใช้เป็น * หรือ a หรือ a.menu เป็นต้น
    $(objSet).css("font-size",nowFont);
    $(".mFont button").click(function(){
            var inCase=$(this).text();
            if(inCase=="A +"){
                if(nowFont<maxFont){
                    nowFont++;
                }else{
                    nowFont=maxFont;
                }
                $(objSet).css("font-size",nowFont);
            }
            if(inCase=="A -"){
                if(nowFont>minFont){
                    nowFont--;
                }else{
                    nowFont=minFont;
                }
                $(objSet).css("font-size",nowFont);
            }
    });
});
</script>


</head>
<!-- Head END -->