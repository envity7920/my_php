<?php 
	include 'inc/header.php';
	// include 'inc/slider.php';
 ?>	
  <style><?php include 'css/style.css'; ?></style>

 <?php 

	$login_check = Session::get('customer_login');
	if ($login_check==false) {
		header('Location:login.php'); 
	}

 ?>
<div class="main">
    <div class="content">
    	<div class="cartoption">		
			<div class="cartpage">
				<div class="order_page">
					<a href="http://localhost/project_sad/index.php"><h3>Buy product now!</h3></a>
				</div>
					
			</div>
					
    	</div>  	
       <div class="clear"></div>
    </div>
 </div>
 <?php 
	include 'inc/footer.php';
 ?>