<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
sec_session_start();
$q=' SELECT firstname, lastname, email FROM members WHERE myid="'.$_SESSION['inviteid'].'"';
$result = $mysqli->query($q);
$rs = $result->fetch_array(MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html ng-app="myApp">
<head>
    <title>Eatrich</title>

    <script src="js/jquery.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="stylesheets/styleall.css">

    <style>
		.table-responsive td  {
		  border: 1px solid grey;
		  border-collapse: collapse;
		  padding: 5px;
		}
		.table-responsive  tr:nth-child(odd) {
		  background-color: #f2dede;
		}
		.table-responsive  tr:nth-child(even) {
		  background-color: #ffffff;
        }
        #listdirect{
        	color: green;
        }
    </style>

    <script type="text/javascript">

		$(document).ready(function(){
			$.ajax({
				type:"POST",
				url:"referrals_sql.php",
				data:{num:"numofdirect"},
				success:function(data){
					$("#numdirect").html(data);
				}
			});
			$.ajax({
				type:"POST",
				url:"referrals_sql.php",
				data:{num:"listofdirect"},
				success:function(data){
				$("#listdirect").html(data);
		    	}
		    });
		    $.ajax({
				type:"POST",
				url:"unactivated_sql.php",
				data:{num:"unactivatedlist"},
				success:function(data){
				$("#unactivated").html(data);
		    	}
		    });
		    $.ajax({
				type:"POST",
				url:"indirect_downline.php",
				data:{num:"indirect"},
				success:function(data){
				$("#numindirect").html(data);
		    	}
		    });
		});
   </script>
</head>

<body ng-app="myApp">
	<header id="topNav" style="height: 77px;">
		<?php include 'header_dash.php';?>
	</header>
	<div class="clsDash_Middle">
		<div class="container">
			<div class="clsDash_pad_lg">
				<div class="modal fade" id="myModal2" role="dialog">
				    <div class="modal-dialog">
				    
				      <!-- Modal content-->
				      <div class="modal-content">
					        <div class="modal-header">
					          <button type="button" class="close" data-dismiss="modal">×</button>
					          <h4 class="modal-title">eatrich.com.ng</h4>
					        </div>
					        <div class="modal-body">
					          <p> </p>
					        </div>
					        <div class="modal-footer">
					          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					        </div>
				      </div>
				    </div>
			    </div>

				<!---07064432365-Dominic-->
			    <div id="myModal" class="modal fade" role="dialog" aria-hidden="true" style="display: none;">
					<div class="modal-dialog">

					    <!-- Modal content-->
					    <div class="modal-content">
					        <button type="button" class="close" data-dismiss="modal">×</button>
						    <div class="modal-body">
							</div>
							<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>

				<!--Top-->
				<div class="row">
					<div class="col-md-12">
						<div class="clsDash_cont_bx">
							<div class="row">
								<div class="col-md-6 col-xs-12 col-lg-3">
									<div class="clsDash_cont_bx_sm clsCol_bg1">
										<h3 style="color: white;">
											<span><img src="http://www.ultimatecycler.com/cdn/images/Direct_Referral_ico.png"></span>
											<span id="numdirect"></span>
										</h3>
										<div class="clsLine_wh"></div>
										<div class="row">
											<div class="col-xs-12">
												<h4 style="text-align:center; color: white;">Direct Referrals</h4>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-xs-12 col-lg-3">
									<div class="clsDash_cont_bx_sm clsCol_bg2">
										<h3 style="color: white;">
											<span><img src="http://www.ultimatecycler.com//cdn/images/Active_Referral_ico.png"></span>
											<span id="numindirect"></span>
										</h3>
										<div class="clsLine_wh"></div>
										<div class="row">
											<div class="col-xs-12">
												<h4 style="text-align:center;color: white;">Indirect Referrals</h4>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-xs-12 col-lg-3">
									<div class="clsDash_cont_bx_sm clsCol_bg3">
										<h3 style="color: white;">
											<span><img src="http://www.ultimatecycler.com//cdn/images/My_Balance_ico.png"></span> &#x20a6; 
											<span></span>
										</h3>
										<div class="clsLine_wh"></div>
										<div class="row">
											<div class="col-xs-12">
												<h4 style="text-align:center;color: white;">Foodstuff Credit</h4>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-xs-12 col-lg-3">
									<div class="clsDash_cont_bx_sm clsCol_bg4">
										<h3 style="color: white;"><span><img src="http://www.ultimatecycler.com//cdn/images/Total_Earnings_ico.png"></span> &#x20a6; 
										<span></span>
										</h3>
										<div class="clsLine_wh"></div>
										<div class="row">
												<div class="col-xs-12">
												<h4 style="text-align:center;color: white;">Take Home Cash </h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>	<!--clsDash_cont_bx-->
					</div>
				</div>
				<!--User info-->
				<div class="row">
					<div class="col-md-6">
						<div class="clsDash_cont_bx" style="height:380px;">
							<div class="clsDash_txt">
					            <h4><b>Welcome <?php print_r($_SESSION['username']); ?> !!!</b>
					            </h4>
					            <div class="clsLine_bl"></div>
					        </div><br>
							<h4><b >Your Eatrich ID : </b></h4><br/><br/>
							<p target="_blank" style="font-size: 70px; color: #5fba66; font-weight: 90px;"><?php print_r($_SESSION['myid']); ?>
							    <?php 
									if($_SESSION['ambLevel']=="LB")
									echo "<img src='image/lba.png' style='margin-left: 10px; margin-bottom: 10px;'>	";					elseif($_SESSION['ambLevel']=="SB")
									echo "<img src='image/sba.png' style='margin-left: 10px; margin-bottom: 10px;'>	";
												    elseif($_SESSION['ambLevel']=="RB")
									echo "<img src='image/rba.png' style='margin-left: 10px; margin-bottom: 10px;'>	";				    elseif($_SESSION['ambLevel']=="NB")
									echo "<img src='image/nba.png' style='margin-left: 10px; margin-bottom: 10px;'>	";	
									else
							    ?>
							</p><br>
							<a class="btn btn-info" ><?php echo $_SESSION['status'] == 'waiting' ? 'Awaiting Payment': 'Confirmed'; ?></a>
						</div>	<!--clsDash_cont_bx-->
					</div>
					<div class="col-md-6">
                        <div class="clsDash_cont_bx">
                            <div class="clsDash_txt">
                                <h4><b>Quick Introduction Video</b></h4>
                                <div class="clsLine_bl"></div>
                            </div>
                            <div class="clsCol_bg_vid">
                               <div class="clsVid_Bg embed-responsive embed-responsive-16by9 embed-responsive-item">
                               
                               <iframe src="https://player.vimeo.com/videog/196764784?title=0&amp;byline=0&amp;portrait=0" width="640" height="373" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>                                       
                               </div>
                            </div>
                        </div>	<!--clsDash_cont_bx-->
                    </div>
				</div>
				<!--User info-->
				<div class="row">
					<div class="col-md-6">
						<div class="clsDash_txt2" style="background:#033785;">
							<h4 style="color: white;"><b>Account Information</b></h4>
						</div>
						<div class="clsDash_cont_bx">
							<div class="row">
								<table width="100%">
								  <tbody>
									    <tr>
									      <td width="50%">Username</td>
									      <td><?php print_r($_SESSION['username']); ?></td>
									    </tr>										  
									    <tr>
									      <td width="50%">Name</td>
									      <td> <?php print_r($_SESSION['firstname']." ".$_SESSION['lastname']); ?></td>
									    </tr>
									    <tr>
									      <td width="50%">Email</td>
									      <td><?php print_r($_SESSION['email']); ?></td>
									    </tr>
									    <tr style="font-weight: 60px; font-size: 15px;">
									      <td width="50%" >Level</td>
									      <td style="color: red;">
									      <?php 
									         if($_SESSION['ambLevel']=="LB")
									         	echo "Local Brand Ambassador";
									         elseif($_SESSION['ambLevel']=="SB")
									         	echo "State Brand Ambassador";
									         elseif($_SESSION['ambLevel']=="RB")
									         	echo "Regional Brand Ambassador";
									         elseif($_SESSION['ambLevel']=="NB")
									         	echo "National Brand Ambassador";
									         else
									         	echo "Pay to activate";
									       ?>
									       </td>
									    </tr>
									    <tr>
									      <td colspan="2">&nbsp;</td>
									    </tr>
								    </tbody>
								</table>
							</div>
						</div>	<!--clsDash_cont_bx-->
					</div>
					<div class="col-md-6">
						<div class="clsDash_txt2" style="background:#033785;">
							<h4 style="color: white;"><b>Sponser Information</b></h4>
						</div>
						<div class="clsDash_cont_bx">
							<div class="row">
							    <table width="100%">
								  <tbody>
								  	<tr>
								      <td width="50%">Invite ID</td>
								      <td><?php echo $_SESSION['inviteid'];?></td>
								    </tr>
								    <tr>
								      <td width="50%">Invitee Name</td>
								      <td><?php echo $rs["firstname"] ." ". $rs["lastname"];?></td>
								    </tr>
								    <tr>
								      <td width="50%">Invitee Email </td>
								      <td><?php echo $rs["email"];?></td>
								    </tr>
								    <tr>
								      <td colspan="2">&nbsp;</td>
								    </tr>
								  </tbody>
								</table>
							</div>
						</div>	<!--clsDash_cont_bx-->
					</div>
				</div>

				<div class="modal fade" id="pay_opt_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
					        <h4 class="modal-title" id="myModalLabel">Payment Options</h4>
					      </div>
					      <div class="modal-body" id="pay_opt_now">
					      </div>
						</div>
					 </div>
				</div>
															
				<div class="row">
					<div class="col-md-6">
						<div class="clsDash_cont_bx">	
							<div class="clsDash_txt">
								<h4><b> Local Brand Ambassador</b></h4>
								<div class="clsLine_bl"></div>
							</div>	
							<div class="panel panel-default" style="height:450px; width:100%;">
								<div id="mat_25" style="height:300px;">
									<div style="padding:20px;">
										<center>
											<a class="btn <?php echo $_SESSION['ambLevel'] == "LB" ? 'btn-success': 'btn-danger'; ?> "> <?php echo $_SESSION['ambLevel'] == "LB" ? 'Currently Activated': 'Click here to activate N5,000 Only'; ?></a>
										</center>
									</div>
									<?php if($_SESSION['ambLevel'] != "LB" ){ ?>
									<div id="promp1" class="alert alert-danger">
										<b> Please Note</b> <br>
										Upgrading is a serious choice. Payment MUST be made in 48 hours or your account will be deleted.<br/><br/>
										ACCOUNT NAME : MIWI<br/>
										ACCOUNT NO : 0054890748<br/>
										BANK : DIAMOND BANK
									</div>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>												
					<div class="col-md-6">
						<div class="clsDash_cont_bx">	
							<div class="clsDash_txt">
								<h4><b> State Brand Ambassador</b></h4>
								<div class="clsLine_bl"></div>
							</div>	
							<div class="panel panel-default" style="height:450px; width:100%;">
								<div id="mat_50" style="height:300px;">
									<div style="padding:20px;">
										<center>
											<a class="btn <?php echo $_SESSION['ambLevel'] == "SB" ? 'btn-success': 'btn-danger'; ?> "> <?php echo $_SESSION['ambLevel'] == "SB" ? 'Currently Activated': 'Click here to activate N20,000 Only'; ?></a>
										</center>
									</div>
									<?php if($_SESSION['ambLevel'] != "SB" ){ ?>
									<div id="promp1" class="alert alert-danger">
										<b> Please Note</b> <br>
										Upgrading is a serious choice. Payment MUST be made in 48 hours or your account will be deleted.<br/><br/>
										ACCOUNT NAME : MIWI<br/>
										ACCOUNT NO : 0054890748<br/>
										BANK : DIAMOND BANK
									</div>
									<?php } ?>
								</div>										
								<hr>
							</div>
						</div>
					</div>												
				</div>
																
			    <div class="row">
					<div class="col-md-6">
						<div class="clsDash_cont_bx">	
						    <div class="clsDash_txt">
								<h4><b> Regional Brand Ambassador</b></h4>
								<div class="clsLine_bl"></div>
							</div>	
							<div class="panel panel-default" style="height:450px; width:100%;">
								<div id="mat_100" style="height:300px;">
									<div style="padding:20px;">
										<center>
											<a class="btn <?php echo $_SESSION['ambLevel'] == "RB" ? 'btn-success': 'btn-danger'; ?> "> <?php echo $_SESSION['ambLevel'] == "RB" ? 'Currently Activated': 'Click here to activate N50,000 Only'; ?></a>
										</center>
									</div>
									<?php if($_SESSION['ambLevel'] != "RB" ){ ?>
									<div id="promp1" class="alert alert-danger">
										<b> Please Note</b> <br>
										Upgrading is a serious choice. Payment MUST be made in 48 hours or your account will be deleted.<br/><br/>
										ACCOUNT NAME : MIWI<br/>
										ACCOUNT NO : 0054890748<br/>
										BANK : DIAMOND BANK
									</div>
									<?php } ?>
								</div>
							</div>
						</div>
				    </div>													
					<div class="row">
						<div class="col-md-6">
							<div class="clsDash_cont_bx">	
								<div class="clsDash_txt">
									<h4><b> National Brand Ambassador</b></h4>
									<div class="clsLine_bl"></div>
								</div>	
								<div class="panel panel-default" style="height:450px; width:100%;">
									<div id="mat_25" style="height:300px;">
									<div style="padding:20px;">
										<center>
											<a class="btn <?php echo $_SESSION['ambLevel'] == "NB" ? 'btn-success': 'btn-danger'; ?> "> <?php echo $_SESSION['ambLevel'] == "NB" ? 'Currently Activated': 'Click here to activate N200,000 Only'; ?></a>
										</center>
									</div>
									<?php if($_SESSION['ambLevel'] != "NB" ){ ?>
									<div id="promp1" class="alert alert-danger">
										<b> Please Note</b> <br>
										Upgrading is a serious choice. Payment MUST be made in 48 hours or your account will be deleted.<br/><br/>
										ACCOUNT NAME : MIWI<br/>
										ACCOUNT NO : 0054890748<br/>
										BANK : DIAMOND BANK
									</div>
									<?php } ?>
								</div>	
							    </div>
							</div>
					    </div>		

						<div class="col-md-6">
							<div class="clsDash_cont_bx">	
								<div class="clsDash_txt">
									<h4><b> International Brand Ambassador</b></h4>
									<div class="clsLine_bl"></div>
								</div>	
								<div class="panel panel-default" style="height:450px; width:100%;">	
									<div style="padding:20px;">
										<center>
										<a href="" class="btn btn-danger"> Coming Soon.</a>
										</center>
									</div>
									<div id="promp6" class="alert alert-danger">
										<b> Please Note</b> <br>
										Upgrading is a serious choice. Payment MUST be made in 48 hours or your account will be deleted.<br/><br/>
										ACCOUNT NAME : MIWI<br/>
										ACCOUNT NO : 0054890748<br/>
										BANK : DIAMOND BANK
									</div>
							    </div>
							</div>
						</div>
					</div>														
				</div>
				
				<div class="row">				  	
					<div class="col-md-6">
						<div class="clsDash_cont_bx">	
							<div class="clsDash_txt">
								<h4><b> Coming Soon</b></h4>
								<div class="clsLine_bl"></div>
							</div>	
							<div class="panel panel-default" style="height:450px; width:100%;">
								<div id="mat_1600" style="height:450px;">
									<table align="center" width="100%">
										<tbody>
											<tr>
												<td align="center">
													<img src="http://www.ultimatecycler.com/cdn/images/ajax.gif" alt="Loading...">
												</td>
											</tr>
										</tbody>
									</table>
								</div>	
						    </div>
						</div>
				    </div>	

					<div class="col-md-6">
						<div class="clsDash_cont_bx">	
							<div class="clsDash_txt">
								<h4><b> Eatrich.ng Update 08-02-17 </b></h4>
								<div class="clsLine_bl"></div>
							</div>	
							<div class="panel panel-default" style="height:300px; width:100%; overflow:scroll;">
								Congratulations!<br><br>
								You have taken a bold step on your Brand Ambassadorship Journey.<br><br>
								Thanks for joining the exceptional entrepreneurs who are ready to drive out hunger in Africa Completely<br><br>
								Please Go Ahead and Activate your account by making your payment <br><br>
								ACCOUNT NAME : MIWI<br/>
								ACCOUNT NO : 0054890748<br/>
								BANK : DIAMOND BANK<br/><br/>
								IMPORTANT:<br/>
								After payment is made kindly contact the admin via Call/Whatsapp: 08097231264/08174847684 with evidence of payment. Your Account will be confirmed within 24 hours.<br><br>
								Feel free to get across to us on all our social media platforms. 
								<br><br>support@eatrich.com.ng<br/>
								ADMIN.												
							</div>
						</div>
				    </div>																
				</div>

				<div class="row">
					<div class="col-md-12">
				    	<div class="clsDash_cont_bx">		
           					<div class="clsDash_txt">
								<h4><b>Active Direct Referrals</b></h4>
								<div class="clsLine_bl"></div>
							</div>							
							<div class="row">
								<div class="col-xs-12">		
									
										<div id="listdirect"></div>	
									
									<div class="alert alert-danger">Note: Only downlines who paid their  ambassadorship level fee are placed above. Kindly follow up on unactivated downlines below.</div>
									<div class="table-responsive">
										<div id="unactivated"></div> 
									</div>
								</div>
							</div>
					    </div>
					</div>
				</div>
				
				<div class="alert alert-warning">
					Note: These stats are updated approximately twice every day.
				</div>
			</div>	<!--clsDash_pad_lg-->
		</div>	<!--container-->
	</div>
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
