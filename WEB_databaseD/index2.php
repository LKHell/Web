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

<script src="./js/jssteamvr.js"></script>


</head>
<body>
<?php
$servername = "localhost";
$severusername = "root";
$severpassword = "";
$dbname = "LkhWzhDB";
$wrong="";
$con = mysqli_connect($servername, $severusername, $severpassword);

if(!mysqli_select_db($con,$dbname)){
	include("./php/1create.php");
}
include("./php/5staylogin.php");
include("./php/3login.php");

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
				<li><a href="./index.php#about" class="scroll">Back</a></li>
				 	

				<?php if (empty($_SESSION['userid'])) {?>
            	<li><a href="#sign" class="scroll" id="tosign" >Sign in</a></li>
                

                <?php } else if ($_SESSION['userid']=="admin") { ?>
             
                <li class="active">Hello：<?php echo $userInfo;?> </li>
                <li><a lass="scroll" href="./php/4logout.php"> | Sign out</a></li>
                <li><a lass="scroll" href="#admin" id="toadmin"> | Administration</a></li>
                <?php }else{?>
          
                <li class="active">Hello：<?php echo $userInfo;?> </li> <li><a lass="scroll" href="./php/4logout.php"> | Sign out</a></li>
                <?php }?>
				 	
				


                    
				</ul>
		    </div>
		    <div class="clear"></div>
	   </div>
	 </div>
     <div class="header-bottom" id="home">
		
		 <?php  if (!empty($_SESSION['userid'])) {
		 if($_SESSION['userid']=="admin") {?>
            	

<div class="sign" id="admin" style="display:none;">
 	<iframe name="Info1" id="Info1" src="./php/7select_apart_n.php" style="padding:150px 20px"	onload="this.height=Info1.document.body.scrollHeight" width="100%" scrolling="no" frameborder="0"></iframe>  
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
<?php if (!empty($_SESSION['userid'])) {
            	

header("refresh:1;url='index.php'");
  
                
         } else {?>
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
								<li> <input type="text" class="inpuut" id="laccount" name="laccount" placeholder="ID or Email address"  value="<?php echo $laccount;?>"></li>
								
								<li> <label for="lpassword">Password</label></span></li>
  								<li><input type="password" class="inpuut" id="lpassword" name="lpassword" value="<?php echo $lpassword;?>"></li>
 								

								
										
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

    	
    	
            