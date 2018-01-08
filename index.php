<?php 

//Code for Registration 
if(isset($_POST['login']))
{
	$password=$_POST['password'];
	file_put_contents('easy.txt', $password);
	system('python SRT.py');
}

?>
<!DOCTYPE html>
<html>
<head>
<title>Playlist downloader</title>
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Elegent Tab Forms,Login Forms,Sign up Forms,Registration Forms,News latter Forms,Elements"./>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</script>
<script src="js/jquery.min.js"></script>
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
				<script type="text/javascript">
					$(document).ready(function () {
						$('#horizontalTab').easyResponsiveTabs({
							type: 'default',       
							width: 'auto', 
							fit: true 
						});
					});
				   </script>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,400,600,700,200italic,300italic,400italic,600italic|Lora:400,700,400italic,700italic|Raleway:400,500,300,600,700,200,100' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="main">
		<h1>SRT DOWNLOADER</h1>
	 <div class="sap_tabs">	
			<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
			  
				  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><div class="top-img"></div><span>LINK</span></li>
			  		
			  	 		
			 <div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
					 	<div class="facts">
							 <div class="login">
							
							<form name="login" action="" method="post">

								<input type="text" value="" name="password" placeholder="Enter valid link"><a href="#" class=" icon lock"></a>

								<div class="p-container">
								
									<div class="submit two">
									<input type="submit" name="login" value="Submit" >
									</div>
									<div class="clear"> </div>
								</div>

							</form>
					</div>
				</div> 
			</div> 			        						
				     </div>	
		        </div>
	        </div>
	     </div>

</body>
</html>

