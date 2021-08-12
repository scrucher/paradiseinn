<?php
include_once'srcd/log.php';
?>
<!Doctype html>
<html>
<head>
     <meta charset="UTF-8">
     <title>Registration Form</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
     <link href="assets/css/main.css" rel="stylesheet">

</head>
<body>
 <div class="container">
 <!---heading---->
     <header class="heading"> Registration-Form</header><hr></hr>

    <form method="post"> 
	<!---Form starting----> 
	<div class="row ">
	 <!--- For Name---->
         <div class="col-sm-12">
		 <?php echo display_error(); ?>
             <div class="row">
			     <div class="col-xs-4">
          	         <label class="firstname">Username</label> </div>
		         <div class="col-xs-8">
		             <input type="text" name="username" id="fname" placeholder="Enter your Name" class="form-control ">
             </div>
		      </div>
		 </div>
		 
		 
         <div class="col-sm-12">
		     <div class="row">
			     <div class="col-xs-4">
                     <label class="lastname">Email</label></div>
				<div class ="col-xs-8">	 
		             <input type="email" name="email" id="email" placeholder="Enter your Email" class="form-control last">
                </div>
		     </div>
		 </div>
     <!-----For email---->
		 <div class="col-sm-12">
		     <div class="row">
			     <div class="col-xs-4">
		             <label class="mail" >Password </label></div>
			     <div class="col-xs-8"	>	 
			          <input type="password" name="password_1"  id="password"placeholder="Enter your Password" class="form-control" >
		         </div>
		     </div>
		 </div>
	 <!-----For Password and confirm password---->
          <div class="col-sm-12">
		         <div class="row">
				     <div class="col-xs-4">
		 	              <label class="pass">Retype Password</label></div>
				  <div class="col-xs-8">
			             <input type="password" name="password_2" id="password" placeholder="Retype your Password" class="form-control">
				 </div>
          </div>
		  </div>
		  
     <!-----------For Phone number-------->
         <div class="col-sm-12">
		    
		     <div class="col-sm-12">
				 <button type="submit" class="btn btn-info" name="signup" >Info</button>
		   </div>
		 </div>
	</div>
	</form>	 
		 		 
		 
</div>
 <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>		
</html>