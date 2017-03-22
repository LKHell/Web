<!DOCTYPE HTML>
<html>
<head>

<title>LK's VR.org</title>
<link href="./css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="./css/input.css" rel="stylesheet" type="text/css"  />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
<script src="./js/jquery.min.js"></script>
<script src="./js/whatis.js"></script>
<script src="./js/whatisjq.js"></script>
<script src="./js/loginp.js"></script>
<script src="./js/jssteamvr.js"></script>


</head>
<body>
<?php
$servername = "localhost";
$severusername = "root";
$severpassword = "";
$dbname = "lkhDB";
$wrong="";
$con = mysqli_connect($servername, $severusername, $severpassword);

if(!mysqli_select_db($con,$dbname)){
	include("./php/1.create db table root.php");
// }else{
// 	$con = mysqli_connect($servername, $severusername, $severpassword,$dbname);
// 	if(){

// 	}
}
include("./php/6staylogin.php");
include("./php/3login.php");
include("./php/5upload.php")
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
				<li class="active"><a href="./index.php#home" class="scroll">Home</a></li>
				<li><a href="./index.php#about" class="scroll">About steam VR</a></li>
				 	

				<?php if (empty($_SESSION['userid'])) {?>
            	<li><a href="#sign" class="scroll" id="tosign" >Sign in</a></li>
                <li><a href="./index.php #join" class="scroll" id="tojoin" >Join us</a></li>

                <?php } else if ($_SESSION['userid']=="likunhao00") { ?>
                	<li><a href="#upload" class="scroll"  >Upload img</a></li>
                <li class="active">Hello：<?php echo $userInfo;?> </li>
                <li><a lass="scroll" href="./php/4logout.php"> | Sign out</a></li>
                <li><a lass="scroll" href="#admin" id="toadmin"> | Administration</a></li>
                <?php }else{?>
                <li><a href="#upload" class="scroll"  >Upload img</a></li>
                <li class="active">Hello：<?php echo $userInfo;?> </li> <li><a lass="scroll" href="./php/4logout.php"> | Sign out</a></li>
                <?php }?>
				 	
				


                    
				</ul>
		    </div>
		    <div class="clear"></div>
	   </div>
	 </div>
     <div class="header-bottom" id="home">
		<!--  <div class="wrap">
		   	  	<h1> <span>Information </span></h1>
		   	  	<h2><span>from wiki</span></h2>
		   	  	<img src="./images/playstation-vr-1.jpg" alt=""/><br><br>
                    <h3>Waht's VR</h3>
        			<p class="desc" id="vri"><span>Virtual reality or virtual realities (VR)</span>, also known as immersive multimedia or computer-simulated reality, is a computer technology that replicates an environment, real or imagined, and simulates a user's physical presence and environment to allow for user interaction. Virtual realities artificially create sensory experience, which can include sight, touch, hearing, and smell. </p>
		   	  
		   	  	<div class="button " onclick="back1()" style="display:none;" id="bbutton"><a>Back</a></div>
		   	  	<div class="button " onclick="more1()" id="mbutton" ><a>Get more</a></div>
		 </div>
		  -->
		 <?php  if (!empty($_SESSION['userid'])) {
		 if($_SESSION['userid']=="likunhao00") {?>
            	

<div class="sign" id="admin" style="display:none;">
 	<iframe name="Info1" id="Info1" src="./php/7Select Data From a MySQL Database.php" style="padding:150px 20px"	onload="this.height=Info1.document.body.scrollHeight" width="100%" scrolling="no" frameborder="0"></iframe>  
</div>

  
                
          <?php }}?>
	
	</div>
</div>

<div class="main">
    	<div class="about" id="about">
        	<div class="wrap">
  			 
  			 
  			</div>
		</div>
 	
 	
        
	</div>

<!-- <div class="sign" id="join" style="display:none;">
 -->  
<?php if (!empty($_SESSION['userid'])) {?>
            	

<div class="sign" id="upload" >
 	<div class="wrap"><br><br><br>
  		<h3> <span>Upload image</span></h3>
			<section id="pricePlans">
				<ul id="plans">
					
					<li class="plan">
						<ul class="planContainer">
							<div class="text">

								<li><form  method="post" enctype="multipart/form-data" name="form1"> </li>
								<li><input type="file" name="fileToUpload" id="fileToUpload" style="display:none;" onChange="document.form1.path.value=this.value">  </li>
								<input name="path" readonly>	<br>
								<li><input type="button" id="imgbutton" value="   Select image" onclick="document.form1.fileToUpload.click()">  </li>
								<li><input type="submit" value="Upload Image" name="upload"> </li>
								<li><?php echo $wrong;?></li>

								</form>	
							</div>
						</ul>
					</li>
				</ul>
			</section>

	</div>
</div>

  
                
          <?php } else {?>
                <div class="sign" id="sign" >
 		<div class="wrap">
			<br><br><br>
  			 <h3> <span>Sign in</span></h3>
			  	<section id="pricePlans">
					<ul id="plans">
					
						<li class="plan">
							<ul class="planContainer">
								<div class="text">
								<li class="title"><h2 class="bestPlanTitle"><label for="laccount">Account</label></h2></li>
									
								<li>
								<ul class="options"> 
							
								<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
								<li> <input type="text" class="inpuut" id="laccount" name="laccount" placeholder="ID or Email address"  value="<?php echo $laccount;?>"onfocus="loginp(this)"></li>
								
								<li> <label for="lpassword">Password</label></span></li>
  								<li><input type="text" class="inpuut" id="lpassword" name="lpassword" value="<?php echo $lpassword;?>"></li>
 								

								
										
								</ul>
								</li>
								<li ><input type="submit" value="Login in" name="submit" >		</li>
								</form>
								</div>
							</ul>
						</li>
						
					</ul> 
			 </section>
			<br><br><br><br><br>
		</div>
 	</div>

                <?php }?>    

  





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
		    <p class="copy">© 2016.4 Designed by <span>LK_Hao_20145975</span> </p>
	    </div>
	    <div class="clear"></div>
     </div>
  </div>
</body>
</html>

    	
    	
            