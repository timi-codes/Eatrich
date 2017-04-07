<?php
include_once 'includes/register.inc.php';
include_once 'includes/functions.php';

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
    <?php include 'header.php';?>
  </header>

  <section class="container">
  <div class="white-row">
  <div class="row">
  <div class="col-md-6">
  <h2 style="margin-top: 70px">Create <strong>Account</strong></h2>
  <form method="post" action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>" name="registration_form" >
      <div class="row">
    <div class="col-md-4">
      <div class="">
        <img src="http://www.ultimatecycler.com/cdn/assets/images/prof_img.jpg" class="img-responsive">
      </div>
      </div>
      <div class="col-md-8">
      <h4>YOUR BRAND AMBASSADORSHIP WILL NOT BE CONFIRMED AND YOUR ID GENERATED UNTIL PAYMENT IS MADE !!</h4>

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
      <input class="form-control" id="" name="firstname" placeholder="First Name" type="text" reuired="">
      </div>
      </div>
      <div class="col-md-6" style="margin-top: 20px">
      <div class="form-group">
      <label for="">Last Name:</label>
      <input class="form-control" id="" name="lastname" placeholder="Last Name" type="text" required="">
      </div>
      </div>
      </div>
      <div class="row">
      <div class="col-md-6">
      <div class="form-group">
      <label for="">Email Address:</label>
      <input class="form-control" id="email" name="email" placeholder="Email Address" type="email" required="">
      </div>
      </div>
      <div class="col-md-6">
      <div class="form-group">
      <label for="">Contact Phone:</label>
      <input class="form-control" id="" name="contactno" placeholder="Contact Phone" type="text" required>
      </div>
      </div>
      </div>
      <div class="row">
      <div class="col-md-6">
      <div class="form-group">
      <label for="">House Address:</label>
      <input class="form-control" id="" name="address" placeholder="Address" type="text" required>
      </div>
      </div>
      <div class="col-md-6">
      <div class="form-group">
      <label for="">Invite Id:</label>
      <input class="form-control" id="" name="inviteid" placeholder="Invite Id" type="text" required>
      </div>
      </div>
      </div>
      <div class="row">
      <div class="col-md-6">
      <div class="form-group">
      <label for="">Username:</label>
      <input class="form-control" id="username" name="username" placeholder="Username" type="text" required>
      </div>
      </div>
      <div class="col-md-6">
      <div class="form-group">
      <label for="">Password:</label>
      <input class="form-control" id="password" name="p" placeholder="Password" type="password" required>
      </div>
      </div>
      <div class="col-md-6">
      <div class="form-group">
      <label for="">Confirm Password:</label>
      <input class="form-control" name="confirmpwd" id="confirmpwd" placeholder="Password" type="password" required>
      </div>
      </div>
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
      <div class="checkbox"> <label> <input name="rules" type="checkbox" required=""> <b>BY JOINING YOU AGREE TO THE FOLLOWING TERMS AND CONDITIONS AND DISCLAIMERS:</b></label> </div>
      </div>
      </div>
          <input type="submit" value="Create My Account" class="btn btn-success" style="width:330px; height: 50px; float: center; margin-bottom: 30px;" onclick="return regformhash(this.form,
                                   this.form.username,
                                   this.form.email,
                                   this.form.password,
                                   this.form.confirmpwd,
                                   this.form.inviteid);"/>

      </form></div>
  <!-- <div class="col-md-6">
  <div class="fluid-width-video-wrapper" style="padding-top: 18.25%;">
  <iframe src="https://player.vimeo.com/videeo/197226944?autoplay=1" width="540" height="380" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
  </div>
  </div>
 --> <!--  <div class="col-md-12" style="height:300px; overflow:scroll; overflow-x:hidden; border:3px solid #FEFEFE; margin-bottom: 50px"> -->
<!--   <hr class="half-margins">
 --> <!--  <h2>Why to register?</h2>
  <h4>The following is a joining Agreement : Eatrich.com.ng</h4>
  <p>1. You understand that by joining you are purchasing the products included on this site. You will also have the right to sell these items separately, and will be compensated for your sales as shown on our site.</p>
  <p>2. Proof of purchase is required for membership. Any unauthorized accounts will be terminated.</p>
  <p>3. You agree not to make any claims regarding sales, unless you have proof of such claims.</p>
  <p>4. You must have a valid email address, and you agree to notify us if your email address changes.</p>
  <p>5. This service is provided on an as is, as available service. We make no warranties of any kind, either expressed or implied.</p>
  <p>6. Under no circumstances, including negligence, shall we, or anyone else involved in creating, producing or distributing this service, be liable for any direct, indirect, incidental, special or consequential damages that result from the use of, or inability to use this service, and all the files and software contained within it, including, but not limited to, reliance on any information obtained through this service; or that result from mistakes, omissions, interruptions, deletion of files or e-mail, errors, defects, viruses, delays in operation, or transmission, or any failure of performance, whether or not limited to acts of God, communications failure, theft, destruction or unauthorized access to our records, programs or services.</p>
  <p>7. <b>USE OF YOUR SERVICE.</b></p>
  <p>The following actions may result in the immediate termination of your membership without recourse and should NOT be done:</p>
  <p><b>(a)</b> sending unsolicited email messages (spam). If you participate in spam on behalf of ANY product or service, you are not eligible!</p>
  <p><b>(b)</b> posting messages that contain your affiliate link in Newsgroups that are unrelated to that product or service. (sig file notwithstanding)</p>
  <p><b>c)</b> forging your "From" Address in an email message, or newsgroup posting.</p>
  <p>8. We reserve the right to add or delete material within this site, and otherwise make changes to the service and this agreement without notice.</p>
  <p>9. We may terminate without notice, at our sole discretion, any membership deemed to be in breach of this agreement or otherwise found to be abusing or misusing the service, or harassing the other members or administrator in any way.</p>
  <p>10. In the unlikely event that this program should ever terminate it's operations, it's creator, operators, employees, assigns and successors shall not be held liable for any loss whatsoever to our members or affiliates. The material contained within our members area, and made available to all new members upon joining, shall be deemed full and just consideration for their payment.</p>
  <p>11. Sites and individuals involved with the following activities are NOT ELIGIBLE: selling, providing or linking to unlicensed content, pornography, warez, pirated software, hacking or spamming software, email address lists or harvesting software, or any materials endorsing violence, hatred, revenge, racism, victimization, or criminal activity.</p>
  <p>12. We make no claims on how much money you can make with our program. Your ability to earn depends on a number of factors, including where and how (and how often) you advertise the program, and the motivation and ability of those in your powerlines, to make sales. Individual results will vary.</p>
  <p>13. Members caught spamming or otherwise causing harm to our program will have their accounts terminated, and may be prosecuted for their actions. We will investigate all allegations before taking action.</p>
  <p>14. All sales are final. No refunds.</p>
  <p>15. You understand that all payments will be made to you from our payment processors, not us, and that any problems you have concerning such matters should be taken up with your respective merchant account provider.</p>
  <p>16. You understand your role as an affiliate marketer does not constitute a partnership, or employer / employee relationship, and affiliates are considered independent contractors, and as such, you are responsible for your own bookkeeping, taxes, and reporting, where applicable.</p>
  <p>17. You agree to accept email updates regarding our program. We will never inundate you with emails or spam. We try to limit mailings to 2-3 a week. It is often less.</p>
  <p>18. You understand that you are responsible for collecting your own payments for any product orders and the company is collecting the admin/lease fee for using the system.</p>
  <p>19. <b>STACKING</b> of members for the purpose of circumventing the compensation plan is prohibited. Any members doing so will be terminated. </p>
  <hr class="half-margins">
  </div>
  </div>
  </div> -->
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