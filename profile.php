<?php
include_once 'includes/updateprof.php';
include_once 'includes/functions.php';


$result = $mysqli->query(' SELECT firstname, lastname, username, email, address, phone, bank, accountname, accountnumber FROM members WHERE id="'.$_SESSION['userid'].'"');
var_dump($_SESSION['userid']);

$outp = "";
$rs = $result->fetch_array(MYSQLI_ASSOC)

?>
<!DOCTYPE html>
<html>
<head>
    <title>Eatrich</title>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="stylesheets/styleall.css">
    <script type="text/JavaScript" src="js/sha512.js"></script> 
    <script type="text/JavaScript" src="js/forms.js"></script>
  </head>
  <body>
  <header>
    <?php include 'header_dash.php';?>
  </header>

  <section class="container">
  <div class="white-row">
  <div class="row">
  <div class="col-md-6">
  <h2 style="margin-top: 70px"></strong></h2>
  <form method="post" action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>" name="registration_form" >
      <div class="row">
    <div class="col-md-4">
      <div class="">
        <img src="http://www.ultimatecycler.com/cdn/assets/images/prof_img.jpg" class="img-responsive">
      </div>
      </div>
      <div class="col-md-8">
      <h4>UPDATE YOUR PROFILE INFORMATION BELOW AND CLICK THE UPDATE BUTTON WHEN YOU ARE DONE.</h4>

      <?php
        if (!empty($error_msg)) {
            echo $error_msg;
        }
        ?>
      <hr class="half-margins"/>
      </div>
      </div>
  
     <div class="row">
      <input value="1" class="form-control" id="" name="refID" type="hidden">
      <div class="col-md-6" style="margin-top: 20px">
      <div class="form-group">
      <label for="">First Name:</label>
      <input class="form-control" id="" name="firstname" placeholder="First Name" type="text" reuired="" value="<?php echo  $rs["firstname"] ;?>">
      </div>
      </div>
      <div class="col-md-6" style="margin-top: 20px">
      <div class="form-group">
      <label for="">Last Name:</label>
      <input class="form-control" id="" name="lastname" placeholder="Last Name" type="text" required="" value="<?php echo  $rs["lastname"] ;?>">
      </div>
      </div>
      </div>
      <div class="row">
      <div class="col-md-6">
      <div class="form-group">
      <label for="">Email Address:</label>
      <input class="form-control" id="email" name="email" placeholder="Email Address" type="email" required="" value="<?php echo  $rs["email"] ;?>">
      </div>
      </div>
      <div class="col-md-6">
      <div class="form-group">
      <label for="">Contact Phone:</label>
      <input class="form-control" id="" name="contactno" placeholder="Contact Phone" type="text" required value="<?php echo  $rs["phone"] ;?>">
      </div>
      </div>
      </div>
      <div class="row">
      <div class="col-md-6">
      <div class="form-group">
      <label for="">Address:</label>
      <input class="form-control" id="" name="address" placeholder="Address" type="text" required value="<?php echo  $rs["address"] ;?>">
      </div>
      </div>
      <div class="col-md-6">
      <div class="form-group">
      <label for="">Account Number:</label>
      <input class="form-control" id="" name="accno" placeholder="Account Number" type="text" required value="<?php echo  $rs["accountnumber"] ;?>">
      </div>
      </div>

      <div class="col-md-6">
      <div class="form-group">
      <label for="">Account Name:</label>
      <input class="form-control" id="" name="accname" placeholder="Account Name" type="text" required value="<?php echo  $rs["accountname"] ;?>">
      </div>
      </div>

      <div class="col-md-6">
      <div class="form-group">
      <label for="">Bank:</label>
      <input class="form-control" id="" name="bank" placeholder="Bank" type="text" required value="<?php echo  $rs["bank"] ;?>">
      </div>
      </div>

      </div>
      <div class="row">
      <div class="col-md-6">
      <div class="form-group">
      <label for="">Username:</label>
      <input class="form-control" id="username" name="username" placeholder="Username" type="text" required value="<?php echo  $rs["username"] ;?>">
      </div>
      </div>
      <!-- <div class="col-md-6">
      <div class="form-group">
      <label for="">Password</label>
      <input class="form-control" id="password" name="p" placeholder="Password" type="password" required>
      </div>
      </div> -->
      </div>
      <!-- <div class="row">
      <div class="col-md-12">
        <img id="captcha" src="securimage/securimage_show.php" alt="CAPTCHA Image" />
        <a href="#" style="margin-left:15px;"  onclick="document.getElementById('captcha').src = 'securimage/securimage_show.php?' + Math.random(); return false">[Refresh]</a>
        <input type="captcha" name="captcha_code" placeholder="Code" class="form-control" style="width:170px; margin-top:10px;"><br>
      </div> 
      </div>-->
      <div class="row">
      <div class="col-md-12">
      <div class="checkbox"> <label> <input name="rules" type="checkbox" required=""> <b>ARE YOU SURE YOU WANT TO SAVE CHANGES.</b></label> </div>
      </div>
      </div>
          <input type="submit" value="Update my profile" class="btn btn-success" style="width:330px; height: 50px; float: center; margin-bottom: 30px;" onclick="return regformhash(this.form,
                                   this.form.username,
                                   this.form.email,
                                   this.form.password,
                                   this.form.confirmpwd,
                                   this.form.inviteid);"/>

      </form></div>
  </section>
        <?php include 'footer.php';?>
        <!--Start of Tawk.to Script-->
<script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/58cc649e41acfb239f8ff83f/default';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
</script>
<!--End of Tawk.to Script-->
  </body>
  </html>