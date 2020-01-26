<meta charset="UTF-8">
<link href="assets/pages/css/components.css" rel="stylesheet">
  <link href="assets/corporate/css/style.css" rel="stylesheet">
  <link href="assets/pages/css/gallery.css" rel="stylesheet">
  <link href="assets/corporate/css/style-responsive.css" rel="stylesheet">
  <link href="assets/corporate/css/themes/blue.css" rel="stylesheet" id="style-color">
  <link href="assets/corporate/css/custom.css" rel="stylesheet">
<?php
//1. เชื่อมต่อ database: 
include('include/connection.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
 
//2. query ข้อมูลจากตาราง tb_member: 
$query = "SELECT * FROM ecdoc_documents WHERE categorie_id = 15 ORDER by id DESC LIMIT 3" or die("Error:" . mysqli_error()); 
//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result . 
$result = mysqli_query($con, $query); 
//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล: 


while($row = mysqli_fetch_array($result)) { 
  echo "<div class='row'>";
  echo "<div class='col-md-3 col-sm-3 gallery-item'>";
  echo "<a data-rel='fancybox-button' title='ภาพขยาย' href='http://www.bo.mhc5.net/purchase/uploads/" .$row["filename"] .  "' class='fancybox-button'>";
  echo "<center><img class='img-responsive' alt='' width='220' src='http://www.bo.mhc5.net/purchase/uploads/" .$row["filename"] .  "'></center>";
  echo "<div class='zoomix'><i class='fa fa-search'></i></div>";
  echo "</a>";
  echo "</div>";
  



  echo "<div class='col-md-9 col-sm9'>";
  echo "<h3>" .$row["topic"] .  "</h3>";
  echo "<ul class='blog-info'>";
  echo "<li><i class='fa fa-calendar'></i> วันที่ : " .date("d/m/y", strtotime($row['register_date'])) .  "</li>";
  echo "<li><i class='fa fa-tags'></i> ผู้โพสต์ : Admin MHC5</li>";
  echo "</ul>";
  echo "<p>&emsp;&emsp;&emsp;&emsp;&emsp;" .$row["description"] .  "</p>";
  echo "</div>";   
  echo "</div>";       
  echo "<hr class='blog-post-sep'>";   



}



//5. close connection
mysqli_close($con);
?>

