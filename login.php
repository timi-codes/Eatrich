<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
 
if (login_check($mysqli) == true) {
    $logged = 'in';
} else {
    $logged = 'out';
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Eatrich</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="stylesheets/styleall.css"/>
      <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script> 
  </head>
  <body>
  <header id="topNav" style="height: 75px;">
<?php include 'header.php';?>
</header>

 


	<form class="form-auth" method="post" action="includes/process_login.php" name="login_form">
	  <h2 style="margin-top: 50px; margin-bottom: 10px; color: green; font-weight: 20px" >
      <?php echo login_check($mysqli) == true ? "Account Successfully Created" : "You're Welcome"?></h2><br/>
      <!-- echo isset($_SESSION['user_id']) ? "Account Successfully Created. Login": "You're Welcome"; -->
    <?php
        if (isset($_GET['error'])) {
            echo '<h6><p class="text-warning" style="margin-bottom: 10px; color:red; font-size:14px">Wrong log in credentials!</p></h6>';
        }else if (isset($_GET['errors'])){
            echo '<h6><p class="text-warning" style="margin-bottom: 10px; color:red; font-size:14px">Enter Code Correctly!</p></h6>';
        }
        ?>
	  <input type="email" name="email" placeholder="Email" class="form-control" required><br>
	  <input type="password" name="p" placeholder="Password" class="form-control" required><br>
    <!-- <img id="captcha" src="securimage/securimage_show.php" alt="CAPTCHA Image" />
    <a href="#" style="margin-left:15px;"  onclick="document.getElementById('captcha').src = 'securimage/securimage_show.php?' + Math.random(); return false">[Refresh]</a>
    <input type="captcha" name="captcha_code" placeholder="Code" class="form-control" style="width:170px; margin-top:10px;" required><br>-->
      <p style="margin-top: 10dp;">If you don't have a login, please <a href='signup.php'>register</a></p><br/>
	  <input type="submit" value="Log in" class="btn btn-success" style="width:320px; float: right; margin-bottom: 80px;" />      

	</form>

    <!-- <?php
        if (login_check($mysqli) == true) {
                        echo '<p>Currently logged ' . $logged . ' as ' . htmlentities($_SESSION['username']) . '.</p>';
 
            echo '<p>Do you want to change user? <a href="includes/logout.php">Log out</a>.</p>';
        } else {
                        echo '<p>Currently logged ' . $logged . '.</p>';
                        echo "<p>If you don't have a login, please <a href='register.php'>register</a></p>";
                }
?>  -->
    <
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
