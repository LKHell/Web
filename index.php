<!DOCTYPE HTML>
<html>
<head>

<title>LK's VR.org</title>
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
$dbname = "lkhDB";

$con = mysqli_connect($servername, $severusername, $severpassword);

if(!mysqli_select_db($con,$dbname)){
	include("./php/1.create db table root.php");
// }else{
// 	$con = mysqli_connect($servername, $severusername, $severpassword,$dbname);
// 	if(){

// 	}
}
include("./php/6staylogin.php");
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
				 	<li class="active"><a href="#home" class="scroll">Home</a></li>
					
				 	<div class="dropdown">
					<button onclick="dropfunction()" class="dropbtn">About steam VR</button>
  					<div id="myDropdown" class="dropdown-content">
    				<a href="#about">about</a>
    				<a href="#video">video1</a>
   					<a href="#video2">video2</a>
    				<a href="#imagesss">images</a>
  					</div>
					</div>



<?php if (empty($_SESSION['userid'])) {?>
            	<li><a href="./index2.php#sign" class="scroll" id="tosign">Sign in</a></li>
                    <li><a href="#join" class="scroll" id="tojoin">Join us</a></li>

                <?php } else if ($_SESSION['userid']=="likunhao00") { ?>
                	<li><a href="#upload" class="scroll"  >Upload img</a></li>
                <li class="active">Hello：<?php echo $userInfo;?> </li>
                <li><a lass="scroll" href="./php/4logout.php"> | Sign out</a></li>
                <li><a lass="scroll" href=""> | Administration</a></li>

                <?php } else {?>
                	
                	<li><a href="./index2.php#upload" class="scroll" >Upload img</a></li>
                <li class="active">Hello：<?php echo $userInfo;?> </li> <li><a lass="scroll" href="./php/4logout.php"> | Sign out</a></li>
                <?php }?>

				</ul>
		    </div>
		    <div class="clear"></div>
	   </div>
	 </div>
     <div class="header-bottom" id="home">
		 <div class="wrap">
		   	  	<h1> <span>Information </span></h1>
		   	  	<h2><span>from wiki</span></h2>
		   	  	<img src="./images/playstation-vr-1.jpg" alt=""/><br><br>
                    <h3>Waht's VR</h3>
        			<p class="desc" id="vri"><span>Virtual reality or virtual realities (VR)</span>, also known as immersive multimedia or computer-simulated reality, is a computer technology that replicates an environment, real or imagined, and simulates a user's physical presence and environment to allow for user interaction. Virtual realities artificially create sensory experience, which can include sight, touch, hearing, and smell. </p>
		   	  
		   	  	<div class="button " onclick="back1()" style="display:none;" id="bbutton"><a>Back</a></div>
		   	  	<div class="button " onclick="more1()" id="mbutton" ><a>Get more</a></div>
		 </div>
	</div>
</div>

<div class="main">
    	<div class="about" id="about">

        	<div class="wrap">
  			 
  			 <img src="./images/steam.png" onmouseover="mOver()" onmouseout="mOut()" id="imgg" //>
  			</div>
		</div>

 	</div>
 	<br><br><br><br><br><br>

 	<div  class="sign" id="video">
 		
 	<div  style="padding:150px 20px" >	
 	<center><video width="800"  controls >
  <source src="./video/1.webm" type="video/mp4">
  <!-- <source src="mov_bbb.ogg" type="video/ogg"> -->
  Your browser does not support HTML5 video.
</video>

</div></div>


<div class="about" id="video2">
	<div  style="padding:150px 20px" ><center>
 	<video width="800" controls >
  <source src="./video/2.webm" type="video/mp4">
  <!-- <source src="mov_bbb.ogg" type="video/ogg"> -->
  Your browser does not support HTML5 video.
</video>


 </div> </div>
<div class="sign" id="imagesss"><div  style="padding:150px" >
<iframe name="Info1" id="Info1" src="./php/imagesz.php" onload="this.height=Info1.document.body.scrollHeight" width="100%" scrolling="no" frameborder="0"></iframe>  
 </div>
</div>

</div>

        <div class="about" id="join" >
  			<div class="wrap"><br><br><br>
  			 	<h3> <span>Create an account</span></h3>
			  		<section id="pricePlans">
						<ul id="plans">
					
							<li class="plan">
								<ul class="planContainer">
									<div class="text">
									<li class="title"><h2 class="bestPlanTitle"><label for="username">User name </label></h2></li>
										
									<li>
									<ul class="options"> 
									<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
									



									<li></li>

									<li><input type="text" class="inpuut" id="username" name="username" placeholder="ID" value="<?php echo $username;?>">
										*<br> <?php echo $nameErr;?></li>
									
									<li><label for="rpassword">Password</label></li>
	  								<li><input type="password" class="inpuut" id="rpassword" name="rpassword" placeholder="" value="<?php echo $rpassword;?>">
	  								*<br> <?php echo $rpasswordErr;?></li>
	 								
	 								<li><label for="repassword">Reenter password </label></li>
	  								<li><input type="password" class="inpuut" id="repassword" name="repassword" placeholder="" value="<?php echo $repassword;?>">
	  								*<br> <?php echo $repasswordErr;?></li>
									
									<li><label for="email">Email</label></li>
									<li><input type="text" class="inpuut" id="email"name="email" placeholder="xxx@aa.com" value="<?php echo $email;?>">
										*<br> <?php echo $emailErr;?></li>
									
									<li>Gender:
										<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?>  value="female">Female
	   									<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?>  value="male">Male
	   								</li>
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
				 </section><br><br><br><br><br><br>
			</div>
	 	</div>
	</div>

<!-- <div class="sign" id="join" style="display:none;">
 -->  			


  

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

    	
    	
            