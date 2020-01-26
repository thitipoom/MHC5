    <!-- BEGIN FOOTER -->
    <div class="pre-footer">
      <div class="container">
        <div class="row">
          <!-- BEGIN COPYRIGHT -->
          <div class="col-md-4 col-sm-4">

         
          </div>
          
          <!-- END COPYRIGHT -->
          <!-- BEGIN PAYMENTS -->
          <div class="col-md-4 col-sm-4 text-center">
          <p>Visitor : <?php
// Easy Counter by DwThai.Com

if(file_exists("counter.txt")){ 
// file_exists() คือ Function ที่ใช้ในการตรวจสอบไฟล์ หากไฟล์นั้นมีอยู่จริงจะคืนค่า true 

   $f=fopen("counter.txt","r"); //เปิดไฟล์เพื่ออ่านค่า
/* fopen() เป็นการเปิดไฟล์ตามที่ และเราจำเป็นต้องกำหนด Option ให้แก่การเปิดไฟล์ด้วย Option ต่าง ๆ ดังนี้ 
r สำหรับการอ่านไฟล์ 
w สำหรับการเขียนไฟล์ และข้อมูลจะถูกเขียนทับใหม่ทั้งหมด
a สำหรับการเขียนไฟล์ แต่ข้อมูลจะถูกเขียนต่อข้อมูลเดิมที่มีอยู่ในไฟล์นั้น
*/ 

   $data=fread($f,6); 
// fread() เป็นการอ่านไฟล์ เลข 5 คือจำนวน byte ของข้อมูลที่ต้องการอ่านค่า
   fclose($f);
   $data++;

}else{

   $data=0;

}

//เขียนข้อมูลลงไฟล์
$f=fopen("counter.txt","w");
fputs($f,$data); 
fclose($f);

$data=sprintf("%d",$data);
/* 
%05d คือ Option ที่ใช้ในการกำหนดรูปแบบของตัวเลข
ส่วนของเลข 5 สามารถกำหนดได้ตามต้องการ จะเป็นการกำหนดจำนวนหลักของตัวเลขที่แสดงผล โดยถ้าจำนวนหลักน้อยกว่าตัวเลขที่กำหนด จะนำเลข 0 นำหน้าตัวเลขนั้นให้ครบ 5 หลัก เป็นต้น
*/ 

echo $data; // แสดงผล
?> / Online </p>
          </div>
          <!-- END PAYMENTS -->
          
            <!-- BEGIN POWERED -->
          <div class="col-md-4 col-sm-4">
            
            
            
          </div>
          
          <!-- END POWERED -->
        </div>
      </div>
    </div>
    