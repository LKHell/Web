<!DOCTYPE HTML>
<html>
<head>

<title>LK's 房屋租赁</title>
<link href="./css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="./css/input.css" rel="stylesheet" type="text/css"  />
<link href="./css/drop.css" rel="stylesheet" type="text/css"  />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
<script src="./js/jquery.min.js"></script>
<script src="./js/whatis.js"></script>
<script src="./js/whatisjq.js"></script>
<script src="./js/loginp.js"></script>
<script src="./js/jssteamvr.js"></script>
<script src="./js/drop.js"></script>



</head>
<body>

<?php
$servername = "localhost";
$severusername = "root";
$severpassword = "";
$dbname = "LkhWzhDB";
$con = mysqli_connect($servername, $severusername, $severpassword);
if(!mysqli_select_db($con,$dbname)){
	include("./php/1creat.php");
}
include("./php/5staylogin.php");
include("./php/2register.php");

?>


<div class="header">
	<div class="header-top">
	  <div class="wrap">
				<div class="logo">
					<img src="./images/logo.png" alt=""/>
				</div>
				<div class="cssmenu">
					<ul>
						<li>LK's company</li>
						<li class="active"><a href="#home" id="to_home" class="scroll">Home</a></li>
					
			
      
						
				<!-- 未登录 -->
							<?php if (empty($_SESSION['userid'])) {?>
								<div class="dropdown">
									<button onclick="dropfunction()" class="dropbtn">About Apartment</button>
										<div id="myDropdown" class="dropdown-content">
											<a href="#room_n" id="torn">Room_n</a>

											
										</div>
								</div>
								<li><a href="./index2.php#sign" class="scroll" id="tosign">Sign in</a></li>
								<!-- <li><a href="#join" class="scroll" id="tojoin">Join us</a></li> -->

							<?php } else if ($_SESSION['userid']=="admin") { ?>
								<!-- 管理员 -->
							<div class="dropdown">
								<button onclick="dropfunction()" class="dropbtn">Detail</button>
								<div id="myDropdown" class="dropdown-content">
									<a href="#room_n" id="torn">Room_n</a>
									<a href="#room_y" id="tory">Room_y</a>
									<a href="#room_all" id="tora">Room_all</a>
									<a href="#select_tenant"  id="to_tenant">Show_Tenant</a>
									<a href="#select_lease_c"  id="toc_l">Lease_contract</a>
									<a href="#select_bill"  id="showbill">Show_bill</a>
								</div>
							</div>

							<li><a href="#cre_checkout_admin" class="scroll" id="tocout_admin">| Check</a></li>
							<li><a lass="scroll" href="#update_rent" id="to_rent"> | update_rent</a></li>
								<li class="active">Hello：<?php echo $userInfo;?> </li>
								<li><a lass="scroll" href="./php/4logout.php"> | Sign out</a></li>
							
							
							<?php } else {?>
									<!-- 房东 -->
							<div class="dropdown">
								<button onclick="dropfunction()" class="dropbtn">Check In</button>
								<div id="myDropdown" class="dropdown-content">
									<a href="#room_n" id="torn">Room_n</a>
									<a href="#room_y" id="tory">Room_y</a>
									<a href="#room_all" id="tora">Room_all</a>
									<a href="#cre_tenant"  id="tocret">tenant</a>
									<a href="#cre_lease"  id="tolease">lease</a>
									<a href="#cre_bill"  id="tobill">bill</a>
								</div>
							</div>
							<li><a href="#cre_checkout" class="scroll" id="tocout">| CheckOut</a></li>
							<li class="active">Hello：<?php echo $userInfo;?> </li> <li><a lass="scroll" href="./php/4logout.php"> | Sign out</a></li>
							
							<?php }?>

					</ul>
				</div>
				<div class="clear">
				</div>
	   </div>
	</div>
								
	<div class="header-bottom" id="home">
			<div class="wrap">
					<h1><span>房屋租赁 </span></h1>
					<h4><span>        ----LkhWzhDB</span></h4>
					<img src="./images/lw.jpg" alt=""/><br><br>
					<!-- <div class="button " onclick="back1()" style="display:none;" id="bbutton"><a>Back</a></div>
					<div class="button " onclick="more1()" id="mbutton" ><a>Get more</a></div> -->
			</div>
		</div>
</div>




<div class="main" >
		
</div>
	 

		<div class="about" id="room_n"style="display:none;">
			<div class="wrap">
				<iframe name="Info1" id="Info1" src="./php/7select_apart_n.php" style="padding:150px 20px "	onload="this.height=Info1.document.body.scrollHeight"  width="100%" scrolling="no" frameborder="0">
				</iframe>
			</div>
		</div>


		<div class="about" id="select_lease_c"style="display:none;">
			<div class="wrap">
				<iframe name="Info4" id="Info4" src="./php/7select_lease_c.php" style="padding:150px 20px "	onload="this.height=Info4.document.body.scrollHeight"  width="100%" scrolling="yes" frameborder="0">
				</iframe>
			</div>
		</div>

		
		<!-- ./php/7select_bill.php -->

		<div class="about" id="select_bill"style="display:none;">
			<div class="wrap">
				<iframe name="Info5" id="Info5" src="./php/7select_bill.php" style="padding:150px 20px "	onload="this.height=Info5.document.body.scrollHeight"  width="100%" scrolling="yes" frameborder="0">
				</iframe>
			</div>
		</div>

		<div class="about" id="select_tenant"style="display:none;">
			<div class="wrap">
				<iframe name="Info6" id="Info6" src="./php/7select_tenant.php" style="padding:150px 20px "	onload="this.height=Info6.document.body.scrollHeight+20"  width="100%" scrolling="yes" frameborder="0">
				</iframe>
			</div>
		</div>

	<div  class="sign" id="room_y"style="display:none;">

	
	<div class="wrap">
		 <iframe name="Info2" id="Info2" src="./php/7select_apart_y.php" style="padding:150px 20px "	onload="this.height=Info2.document.body.scrollHeight" width="100%" scrolling="no" frameborder="0"></iframe>
		 </div>
	</div>

<div class="about" id="room_all" style="display:none;">
	<div class="wrap">
		<iframe name="Info3" id="Info3" src="./php/7select_apart_all.php" style="padding:150px 20px"	onload="this.height=Info3.document.body.scrollHeight" width="100%" scrolling="no" frameborder="0">
		</iframe>
	</div>
</div>


<div class="sign" id="imagesss">
	<div  style="padding:150px" >
 </div>
</div>

<!-- style="display:none;" -->
<div  class="sign" id="cre_tenant" style="display:none;">

	<!-- $getname=$_POST["tname"]; 
$getid=$_POST["tid"];
$getphone=$_POST["tphone"];
$getsex=$_POST["tsex"]; -->
	<div class="wrap">
	<h3> <span>Create Tenant</span></h3>
			  	<section id="pricePlans">
					<ul id="plans">
					
						<li class="plan">
							<ul class="planContainer">
								<div class="text">
								<li class="title"><h2 class="bestPlanTitle">
								
								<label for="getname">Name</label></h2></li>
								<li>
									<ul class="options"> 
							
								<form method="post" action="./php/9_0insert_tenant.php">
									<li> <input type="text" class="inpuut" id="getname" name="tname" ></li>
									
									<li> <label for="getid">ID</label></span></li>
									<li><input type="text" class="inpuut" id="getid" name="tid" ></li>
									
									<li> <label for="getphone">getphone</label></span></li>
									<li><input type="text" class="inpuut" id="getphone" name="tphone" ></li>

									<li>Gender:
											<input type="radio" name="tsex"   value="F">Female
											<input type="radio" name="tsex"   value="M">Male
									</li>
										
								</ul>
								</li>
								<li ><input type="submit" value="OK" name="submit" >		</li>
								</form>
								</div>
							</ul>
						</li>
						
					</ul> 
			 </section>
		 </div>
	</div>


	<div  class="sign" id="cre_lease" style="display:none;">

	<!--  
		 $g_id=$_POST["tenant_idcard"];
 $g_add=$_POST["apart_add"];
 $g_name=$_POST["tenant_name"]; -->
	<div class="wrap">
	<h3> <span>Create lease</span></h3>
			  	<section id="pricePlans">
					<ul id="plans">
					
						<li class="plan">
							<ul class="planContainer">
								<div class="text">
								<li class="title"><h2 class="bestPlanTitle">
								
								<label for="for_1">Name</label></h2></li>
								<li>
									<ul class="options"> 
							
								<form method="post" action="./php/9_1insert_lease.php">
									<li> <input type="text" class="inpuut" id="for_1" name="tenant_name" ></li>
									
									<li> <label for="for_2">ID</label></span></li>
									<li><input type="text" class="inpuut" id="for_2" name="tenant_idcard" ></li>
									
									<li> <label for="for_3">Address</label></span></li>
									<li><input type="text" class="inpuut" id="for_3" name="apart_add" ></li>
										
								</ul>
								</li>
								<li ><input type="submit" value="OK" name="submit" >		</li>
								</form>
								</div>
							</ul>
						</li>
						
					</ul> 
			 </section>
		 </div>
	</div>
	<div  class="sign" id="update_rent" style="display:none;">

	<!--  
		 $g_id=$_POST["tenant_idcard"];
 $g_add=$_POST["apart_add"];
 $g_name=$_POST["tenant_name"]; -->
	<div class="wrap">
	<h3> <span>Update_rent</span></h3>
			  	<section id="pricePlans">
					<ul id="plans">
					
						<li class="plan">
							<ul class="planContainer">
								<div class="text">
								<li class="title"><h2 class="bestPlanTitle">
								
								<label for="for_1">Address</label></h2></li>
								<li>
									<ul class="options"> 
							
								<form method="post" action="./php/8update_rent.php">
									<li> <input type="text" class="inpuut" id="for_1" name="apart_add" ></li>
									
									<li> <label for="for_2">Rent</label></span></li>
									<li><input type="text" class="inpuut" id="for_2" name="apart_rent" ></li>
									
								
								</ul>
								</li>
								<li ><input type="submit" value="OK" name="submit" >		</li>
								</form>
								</div>
							</ul>
						</li>
						
					</ul> 
			 </section>
		 </div>
	</div>



	<div  class="sign" id="cre_bill" style="display:none;">

	<!--  
		 $g_id=$_POST["tenant_idcard"];
 $g_add=$_POST["apart_add"];
 $g_name=$_POST["tenant_name"]; -->
	<div class="wrap">
	<h3> <span>Create bill</span></h3>
			  	<section id="pricePlans">
					<ul id="plans">
					
						<li class="plan">
							<ul class="planContainer">
								<div class="text">
								<li class="title"><h2 class="bestPlanTitle">
								
								<label for="for_1">Address</label></h2></li>
								<li>
									<ul class="options"> 
							
								<form method="post" action="./php/9_2insert_bill.php">
									<li> <input type="text" class="inpuut" id="for_1" name="apart_add" ></li>
									
									<li> <label for="for_2">Other_cost</label></span></li>
									<li><input type="text" class="inpuut" id="for_2" name="o_rent" ></li>
										
								</ul>
								</li>
								<li ><input type="submit" value="OK" name="submit" >		</li>
								</form>
								</div>
							</ul>
						</li>
						
					</ul> 
			 </section>
		 </div>
	</div>


	<div  class="sign" id="cre_checkout" style="display:none;">

	<!--  
		 $g_id=$_POST["tenant_idcard"];
 $g_add=$_POST["apart_add"];
 $g_name=$_POST["tenant_name"]; -->
	<div class="wrap">
	<h3> <span>Check Out</span></h3>
			  	<section id="pricePlans">
					<ul id="plans">
					
						<li class="plan">
							<ul class="planContainer">
								<div class="text">
								<li class="title"><h2 class="bestPlanTitle">
								
								<label for="for_1">Address</label></h2></li>
								<li>
									<ul class="options"> 
							
								<form method="post" action="./php/8update_status_n.php">
									<li> <input type="text" class="inpuut" id="for_1" name="apart_add" ></li>
									
							
										
								</ul>
								</li>
								<li ><input type="submit" value="OK" name="submit" >		</li>
								</form>
								</div>
							</ul>
						</li>
						
					</ul> 
			 </section>
		 </div>
	</div>



	<div  class="sign" id="cre_checkout_admin" style="display:none;">

	<!--  
		 $g_id=$_POST["tenant_idcard"];
 $g_add=$_POST["apart_add"];
 $g_name=$_POST["tenant_name"]; -->
	<div class="wrap">
	<h3> <span>Check In/Out</span></h3>
			  	<section id="pricePlans">
					<ul id="plans">
					
						<li class="plan">
							<ul class="planContainer">
								<div class="text">
								<li class="title"><h2 class="bestPlanTitle">
								
								<label for="for_1">Address_admin</label></h2></li>
								<li>
									<ul class="options"> 
							
								<form method="post" action="./php/8update_status_admin.php">
									<li> <input type="text" class="inpuut" id="for_1" name="apart_add" ></li>
									
									<li>Status:
											<input type="radio" name="apart_status"   value="Y">Y
											<input type="radio" name="apart_status"   value="N">N
									</li>
										
										
								</ul>
								</li>
								<li ><input type="submit" value="OK" name="submit" >		</li>
								</form>
								</div>
							</ul>
						</li>
						
					</ul> 
			 </section>
		 </div>
	</div>




<div class="about" id="join"  style="display:none;" >
	<div class="wrap">
			<h3> <span>Insert_Tenant</span></h3>
			<section id="pricePlans">
			<ul id="plans">
				<li class="plan">
					<ul class="planContainer">
						<div class="text">
							<li class="title"><h2 class="bestPlanTitle"><label for="username">Name </label></h2></li>
							<li>
							<ul class="options">
								<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
								<li></li>
								<li><input type="text" class="inpuut" id="tname" name="tname" placeholder="ID" value="<?php echo $username;?>">
									*<br> <?php echo $nameErr;?></li>
								
								<li><label for="rpassword">Password</label></li>
								
								<li><input type="text" class="inpuut" id="rpassword" name="rpassword" placeholder="" value="<?php echo $rpassword;?>">
									*<br> <?php echo $rpasswordErr;?></li>
								
								<li><label for="repassword">Reenter password </label></li>
									<li><input type="password" class="inpuut" id="repassword" name="repassword" placeholder="" value="<?php echo $repassword;?>">
									*<br> <?php echo $repasswordErr;?></li>
							</ul>
							</li>
							<li ><input type="submit" value="Create account" >		</li>
							<li ><input type="reset" name="reset" value="Reset" >	</li >
							</form>
							<li></li>
						</div>
					</ul>
				</li>
			</ul>
		</section>
		
	</div>
</div>



	<div class="footer">
		<div class="wrap">
			<div class="footer-menu">
				<ul>
					<li><a href="#">About</a></li>
					<li><a href="#">Others</a></li>
					<li><a href="#"></a></li>
					<li><a href="#">How to get</a></li>
					<li><a href="#"></a></li>
				</ul>
			</div>
			<div class="copy">
			<p class="copy">© 2017.10 Designed by <span>LK_Hao_20145975</span> </p>
			</div>
			<div class="clear">
			</div>
		</div>
	</div>



</body>
</html>



