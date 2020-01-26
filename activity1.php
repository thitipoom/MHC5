<meta charset="UTF-8">
<?php
//1. เชื่อมต่อ database: 
include('include/connection.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
 
//2. query ข้อมูลจากตาราง tb_member: 
$query = "SELECT * FROM ecdoc_documents WHERE categorie_id = 10 ORDER by id DESC" or die("Error:" . mysqli_error());
//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result . 
$result = mysqli_query($con, $query); 


while($row = mysqli_fetch_array($result)) { 

  echo "<div class='row'>";
  echo "<div class='col-md-4 col-sm-4'>";
  echo "<img class='img-responsive' alt='' src='http://bo.mhc5.net/backend/uploads/inventory/" .$row["filename"] .  "'>";
  echo "</div>";
  echo "<div class='col-md-8 col-sm-8'>";
  echo "<h2><a href='blog-item.html'>" .$row["topic"] .  "</a></h2>";
  echo "<ul class='blog-info'>";
  echo "<li><i class='fa fa-calendar'></i>" .$row["created_at"] .  "</li>";
  echo "<li><i class="fa fa-tags"></i>" .$row["created_by"] .  "</li>";
  echo "</ul>";
  echo "<p>" .$row["description"] .  "</p>";
  echo "</div>";        
  echo "</div>";     
  echo "<hr class='blog-post-sep'>";      
  
}

 
//5. close connection
mysqli_close($con);
?>