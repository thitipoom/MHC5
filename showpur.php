<meta charset="UTF-8">
<?php
//1. เชื่อมต่อ database: 
include('include/connection.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
 
//2. query ข้อมูลจากตาราง tb_member: 
$query = "SELECT * FROM ecdoc_documents WHERE categorie_id = 10 ORDER by id DESC" or die("Error:" . mysqli_error()); 
//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result . 
$result = mysqli_query($con, $query); 
//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล: 
 
echo "<table class='table table-borderless' border='1' align='center' width='100%'>";
//หัวข้อตาราง
echo "<tr align='center' bgcolor='#CCCCCC'><td>รหัส</td><td>รายการ</td><td>วันที่</td><td>ดาวน์โหลด</td></tr>";
while($row = mysqli_fetch_array($result)) { 
  echo "<tr>";
  echo "<td>" .$row["id"] .  "</td> "; 
  echo "<td>" .$row["topic"] .  "</td> ";
  echo "<td>" .$row["register_date"] .  "</td> ";
  //แก้ไขข้อมูล
  echo "<td><a target =_blank' href='http://bo.mhc5.net/purchase/uploads/" .$row["filename"] .  "' class='btn btn-info'>ดาวน์โหลด</a></td> ";
  
  echo "</tr>";
}
echo "</table>";
//5. close connection
mysqli_close($con);
?>

categorie_id