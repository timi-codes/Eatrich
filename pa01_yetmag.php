<?php
include_once 'includes/passwordreset_process.php';
include_once 'includes/functions.php';
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
  <header id="topNav" style="height: 75px;">
      <?php include 'header.php';?>
  </header>

        <!-- Registration form to be output if the POST variables are not
        set or if the registration script caused an error. -->
        

    <form class="form-auth" method="post" action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>" name="forgotpassword">

      <h2 style="margin-top: 50px;  color: green; font-weight: 20px" >Forgot Password </h2><br/>

       <?php
        if (!empty($error_msg)) {
            echo $error_msg;
        }
        ?>
     
      <input type="email" name="email" placeholder="Email" class="form-control" required><br/>
      <input type="password" name="newpass" placeholder="New Password" class="form-control" required><br/>

      <input type="submit" value="Reset Password" class="btn btn-success" style="width:320px; float: right; margin-bottom: 80px;" />      
 <p style="margin-top: 10dp;">Proceed to the <a href="login.php">login page</a>.</p><br/>
    </form>

         
<?php include 'footer.php';?>
<!--myeatrichid-->
</body>
</html>
