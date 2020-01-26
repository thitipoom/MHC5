<meta charset="UTF-8">
<?php
//1. เชื่อมต่อ database: 
include('include/connection1.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
 
//2. query ข้อมูลจากตาราง tb_member: 
$query = "SELECT * FROM ecdoc_categories ORDER by id DESC LIMIT 10" or die("Error:" . mysqli_error()); 

//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result . 
$result = mysqli_query($con, $query); 

//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล: 
 

//หัวข้อตาราง
          echo "<div class='row margin-bottom-40'>";
         
          echo "<div class='col-md-12 col-sm-12'>";
          echo "<div id='accordion2' class='panel-group'>";

while($row = mysqli_fetch_array($result)) { 
  echo "<div class='panel panel-info'>";
  echo "<div class='panel-heading'>";
  echo "<h4 class='panel-title'>";
  echo "<a class='accordion-toggle collapsed' data-toggle='collapse' data-parent='#accordion2' href='#accordion" .$row["id"] .  "_1'>" .$row["name"] .  "</a>";
  echo "</h4>";
  echo "</div>";
  echo "<div style='height: 0px;' id='accordion" .$row["id"] .  "_1' class='panel-collapse collapse'>";

  echo "<div class='panel-body'>";
  $query2 = "SELECT * FROM ecdoc_documents WHERE categorie_id = " .$row["id"] .  "" or die("Error:" . mysqli_error()); 
  $result2 = mysqli_query($con, $query2); 


  echo "<table class='table table-bordered table-striped dataTable' align='center' width='100%'>";
  echo "<tr align='center' bgcolor='#83C7E9'><td>ชื่อเอกสาร</td><td>วันที่</td><td>ดาวน์โหลด</td></tr>";
  while($row = mysqli_fetch_array($result2 )) { 
    echo "<tr>";
    echo "<td>" .$row["topic"] .  "</td> ";
    echo "<td align='center'>" .date("d/m/y", strtotime($row['register_date'])) .  "</td> ";
    echo "<td align='center'><a target =_blank' href='http://bo.mhc5.net/document/uploads/" .$row["filename"] .  "' class='btn btn-info'><i class='fa fa-save fa-1x'></i> ดาวน์โหลด</a></td> ";
  
    echo "</tr>";
  
 

  echo "</tr>";
  
  }
  echo "</table>";
  echo "</div>";
  echo "</div>";
  echo "</div>";
  //แก้ไขข้อมูล
  //echo "<td><a target =_blank' href='http://bo.mhc5.net/purchase/uploads/" .$row["filename"] .  "' class='btn btn-info'>ดาวน์โหลด</a></td> ";

}
  echo "</div>";
  echo "</div>";
  echo "</div>";
  
//5. close connection
mysqli_close($con);
?>

