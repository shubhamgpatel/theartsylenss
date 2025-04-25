<!DOCTYPE html>
<html lang="en">
<?php
  include("header.php")
?>

<body>
  <div class="page-loading">
    <div class="status">
      <div class="spinner"></div>
    </div>
  </div>
  <?php include("navblack.php");?>
 
<!-- Contact Form -->
<div class="wrapper inner light-wrapper">
      <div class="container inner pt-70">
     
        <div class="row customContact">
          <div class="col-lg-8 offset-lg-2">
            <div class="space40"></div>
            <h2 class="section-title text-center">Get in Touch</h2>
            <p class="lead larger text-center">We don’t just take a photograph, we help you relive it later on. Let your words be few, and expose many. Looking for a fun, open-minded person?<br/>
You found us!<br/>
Let us know when you want to drop-in for a demo or just to have a cup of coffee!</p>
              <div class="space40"></div>

            <div class="row text-center">
              <div class="col-md-6"> <span class="icon icon-color color-default fs-48 mb-10"><i class="si-phone_phone-ringing"></i></span>
               <a href="https://wa.me/919821648275">  <p>+91 98216 48275</p></a>
              </div>
              <!--/column -->
              <div class="col-md-6"> <span class="icon icon-color color-default fs-48 mb-10"><i class="si-mail_mail-2"></i></span>
                <p><a class="nocolor" href="mailto:#">info@theartsylenss.com</a><br>
                  <!-- <a class="nocolor" href="mailto:#">asistant@email.com</a></p> -->
              </div>
              <!--/column -->
            </div>
            <h2 class="section-title text-center">Tell Your Story</h2>
            <!--/.row -->
            <div class="space30"></div>
            <div class="form-container">
              <form action="contact/vanilla-form.php" method="post" class="vanilla vanilla-form" novalidate>
                    <div class="form-group custom-select-wrapper">
                      <select class="custom-select">
                        <option selected>I am the</option>
                        <option value="1">Bride</option>
                        <option value="2">Groom</option>
                        <option value="3">Family Member</option>
                        <option value="4">Friend</option>
                      </select>
                    </div>
                <div class="row text-center">
                  <div class="col-md-6 pr-10">
                    <div class="form-group">
                      <input type="text" class="form-control" name="name" placeholder="What should we call you?" required="required">
                    </div>
                    <!--/.form-group -->
                  </div>
                  <!--/column -->
                  <div class="col-md-6 pl-10">
                    <div class="form-group">
                      <input type="email" class="form-control" name="email" placeholder="me@email.com, We will e-mail you first" required="required">
                    </div>
                    <!--/.form-group -->
                  </div>
                  <!--/column -->
                  <div class="col-md-6 pr-10">
                    <div class="form-group">
                      <input type="tel" class="form-control" name="tel" required="required" placeholder="Phone">
                    </div>
                    <!--/.form-group -->
                  </div>
                  <!--/column -->
                  <div class="col-md-6 pl-10">
                    <div class="form-group">
                      <input type="date" class="form-control" name="date" required="required" id="txtDate" placeholder="Choose Event Dates:">
                    </div>
                    <!--/.form-group -->
                  </div>
                  <!--/column -->
                   <!--/column -->
                   <div class="col-md-6 pl-10">
                    <div class="form-group">
                      <input type="text" class="form-control" name="city" placeholder="Wedding City">
                    </div>
                    <!--/.form-group -->
                  </div>
                  <!--/column -->
                   <!--/column -->
                   <div class="col-md-6 pl-10">
                    <div class="form-group">
                      <input type="text" class="form-control" name="subject" placeholder="Functions">
                    </div>
                    <!--/.form-group -->
                  </div>
                  <div class="col-md-12 pl-10">
                  <div class="form-group">
                      <input type="text" class="form-control" placeholder="Event Details (List of Events, Guest Count, Venues)">
                  </div>
                  </div>
                  <div class="col-12">
                    <h1>What services are you interested in?</h1>
                  </div>
                  <div class="space30"></div>
                 
                  <div class="col-md-6 col-xs8 col-sm-6 pl-10">
                    <div class="form-group">
                      <input type="text" readonly class="form-control" placeholder="Candid Photography">
                    </div>
                  </div>
                  <div class="col-md-6 col-xs4 col-sm-6">
                  <div class="custom-control custom-checkbox custom-control-inline mt-12"  style="float:left;">
                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1"></label>
                  </div>

                  </div>
                  <!--  -->
                  <div class="col-md-6 col-xs8 col-sm-6 pl-10">
                    <div class="form-group">
                      <input type="text" readonly class="form-control" placeholder="Cinematography">
                    </div>
                  </div>
                  <div class="col-sm-6 col-xs4">
                  <div class="custom-control custom-checkbox custom-control-inline mt-12"  style="float:left;">
                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                    <label class="custom-control-label" for="customCheck2"></label>
                  </div>

                  </div>
                  <!--  -->
                  <div class="col-md-6 col-xs8 col-sm-6 pl-10">
                    <div class="form-group">
                      <input type="text" readonly class="form-control" placeholder="Traditional Photography">
                    </div>
                  </div>
                  <div class="col-sm-6 col-xs4">
                  <div class="custom-control custom-checkbox custom-control-inline mt-12"  style="float:left;">
                    <input type="checkbox" class="custom-control-input" id="customCheck3">
                    <label class="custom-control-label" for="customCheck3"></label>
                  </div>
                  </div>
                  <!--  -->
                  <div class="col-md-6 col-xs8 pl-10">
                    <div class="form-group">
                      <input type="text" readonly class="form-control" placeholder="Traditional Videography">
                    </div>
                  </div>
                  <div class="col-sm-6 col-xs4">
                  <div class="custom-control custom-checkbox custom-control-inline mt-12"  style="float:left;">
                    <input type="checkbox" class="custom-control-input" id="customCheck4">
                    <label class="custom-control-label" for="customCheck4"></label>
                  </div>
                  </div>
                   <!--  -->
                   <div class="col-md-6 col-xs8 pl-10">
                    <div class="form-group">
                      <input type="text" readonly class="form-control" placeholder="Drone">
                    </div>
                  </div>
                  <div class="col-sm-6 col-xs4">
                  <div class="custom-control custom-checkbox custom-control-inline mt-12"  style="float:left;">
                    <input type="checkbox" class="custom-control-input" id="customCheck5">
                    <label class="custom-control-label" for="customCheck5"></label>
                  </div>
                  </div>
                  <!--  -->
                  <div class="col-md-6 col-xs8 pl-10">
                    <div class="form-group">
                      <input type="text" readonly class="form-control" placeholder="Premium Album">
                    </div>
                  </div>
                  <div class="col-sm-6 col-xs4">
                  <div class="custom-control custom-checkbox custom-control-inline mt-12"  style="float:left;">
                    <input type="checkbox" class="custom-control-input" id="customCheck6">
                    <label class="custom-control-label" for="customCheck6"></label>
                  </div>
                  </div>
                  <!--  -->
                  <div class="col-md-6 col-xs8 pl-10">
                    <div class="form-group">
                      <input type="text" readonly class="form-control" placeholder="Pre Wedding Shoot">
      
                  </div>
                  </div>
                  <div class="col-sm-6 col-xs4">
                  <div class="custom-control custom-checkbox custom-control-inline mt-12"  style="float:left;">
                    <input type="checkbox" class="custom-control-input" id="customCheck7">
                    <label class="custom-control-label" for="customCheck7"></label>
                  </div>
                  </div>
                  <!--  -->

                  <div class="col-12 ">
                    <textarea name="message" class="form-control" rows="3" style="resize:none;" placeholder="Tell us about your dream wedding or any other details we should know about!" required></textarea>
                    <div class="space20"></div>

                    <div class="form-group custom-select-wrapper">
                      <select class="custom-select">
                        <option selected>How did you hear about us?</option>
                        <option value="1">Instagram</option>
                        <option value="2">Facebook</option>
                        <option value="3">Google</option>
                        <option value="4">Friends/Family/Word of mouth</option>
                        <option value="5">Others</option>
                      </select>
                    </div>
                  <div class="form-group">
                      <input type="text" class="form-control" placeholder="If someone specific recommended me, please tell me who so I can thank them!">
                  </div>
                    <div class="space20"></div>
                    <button type="submit" class="btn" data-error="Fix errors" data-processing="Sending..." data-success="Thank you!">Submit</button>
                    <footer class="notification-box"></footer>
                  </div>
                  
                  <!--/column -->
                </div>

                <!--/.row -->
              </form>
              <!--/.vanilla-form -->
            </div>
           
  
          </div>
            <!--/.form-container -->
          </div>
          <!-- /column -->
        </div>
        
        <!-- /.row -->
      </div>
      
      <!-- /.container -->
    </div>
<!-- Contact Form -->

    <?php include("footer.php"); ?>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
  function increment(field) {
    console.log(field);
    document.getElementById(field).stepUp();
}
function decrement(field) {
    document.getElementById(field).stepDown();
}
  var maxDate = year + '-' + month + '-' + day;
    // alert(maxDate);
    $('#txtDate').attr('min', maxDate);
    
    $(function(){
        var dtToday = new Date();
        
        var month = dtToday.getMonth() + 1;
        var day = dtToday.getDate();
        var year = dtToday.getFullYear();
        if(month < 10)
            month = '0' + month.toString();
        if(day < 10)
            day = '0' + day.toString();
        
        var maxDate = year + '-' + month + '-' + day;
        alert(maxDate);
        $('#txtDate').attr('min', maxDate);
    });
</script>
<?php  include("scripts.php"); ?>
</html>