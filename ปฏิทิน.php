
<?php include('hder.php');?>
<?php include('menu.php');?>

<style type="text/css">
#Iframe-Family-History-Conference {
  max-width: 600px;
  max-height: 100%; 
  overflow: hidden;
}
#Iframe-Google-Calendar {
  max-height: 600px;
  max-width: 800px;
  overflow: hidden;
}

/* inner wrapper: make responsive */
.responsive-wrapper {
  position: relative;
  height: 0;    /* gets height from padding-bottom */
  
  /* put following styles (necessary for overflow and scrolling handling on mobile devices) inline in .responsive-wrapper around iframe because not stable in CSS:
    -webkit-overflow-scrolling: touch; overflow: auto; */
  
}
 
.responsive-wrapper iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  
  margin: 0;
  padding: 0;
  border: none;
}

/* padding-bottom = h/w as % -- sets aspect ratio */
/* YouTube video aspect ratio */
.responsive-wrapper-wxh-650x315 {
  padding-bottom: 56.25%;
}
.responsive-wrapper-wxh-600x480 {
  padding-bottom: 80%;
}
.responsive-wrapper-padding-bottom-75pct {
  padding-bottom: 75%;
}

/* general styles */
/* ============== */
.set-border {
  border: 5px inset #4f4f4f;
}
.set-box-shadow {
  box-shadow: 4px 4px 14px #4f4f4f;
}
.set-padding {
  padding: 40px;
}
.set-margin {
  margin: 30px;
}
.center-block-horiz {
  margin-left: auto !important;
  margin-right: auto !important;
}
  </style>

<div class="main">
      <div class="container">
        <div class="row margin-bottom-40">
          <!-- BEGIN CONTENT -->
          <div class="col-md-12">
            <h1>ปฏิทินการดำเนินงาน ศูนย์สุขภาพจิตที่ 5</h1>
            <br>
            <div class="content-page">
              <div class="row">
                <div class="col-md-12">
                <center><div id="Iframe-Google-Calendar" class="set-margin set-padding set-border set-box-shadow center-block-horiz">
  <div class="responsive-wrapper 
     responsive-wrapper-padding-bottom-75pct"
     style="-webkit-overflow-scrolling: touch; overflow: auto;">


      <iframe src="https://calendar.google.com/calendar/embed?src=mhc5.dmh%40gmail.com&ctz=Asia%2FBangkok" style="border: 0" width="700" height="400" frameborder="0" scrolling="no"></iframe>

</div>
</div</center>
                </div>
              </div>
            </div>
          </div>
          <!-- END CONTENT -->
        </div>
      </div>
    </div>

    <?php include('footer.php');?>