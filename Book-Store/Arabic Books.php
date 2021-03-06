<?php
session_start();
echo '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Arabic Books</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="templatemo_container">
	<div id="templatemo_menu">
    	<ul>
            <li><a href="index.php" class="current">Home</a></li>
            <li><a href="Company.php">Company</a></li> 
            <li><a href="Contact.php">Contact</a></li>';
			if ( !isset ($_SESSION['email']) )
			{
				echo '<li><a style="float:right" href="LoginPage.php">Login</a></li> ';
				echo '<li><a style="float:right" href="RegisterPage.php">Register</a></li>';
			}
			if (isset($_SESSION['email']))
			{
				echo '<p style="float:right">'.$_SESSION['email'].'</p>';
				echo '<li><a style="float:right" href="logout.php">Logout</a></li>';
			}
			if ( isset ($_SESSION['flag']) && $_SESSION['flag']==true  )
			{
				echo '<li><a style="float:right" href="book.php">Add Book</a></li>';
				echo '<li><a style="float:right" href="rebook.php">Remove Book</a></li>';
			}
	echo '
    	</ul>
    </div> 
    <div id="templatemo_header">
    	<div id="templatemo_special_offers">
        	<p>
                <span>25%</span> discounts for
        purchase over $80
        	</p>
			
        </div>
        
        
        <div id="templatemo_new_books">
        	<ul>';
			define('DB_HOST', 'localhost'); 
			define('DB_NAME', 'BookStore'); 
			define('DB_USER','root'); 
			define('DB_PASSWORD',''); 
			$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to MySQL: " . mysql_error()); 
			$query = "SELECT * FROM `books` WHERE 1";
			$dave= mysqli_query($con, $query);
			while($row = mysqli_fetch_assoc($dave))
				echo '<li>'.$row['Name'].'</li>';
			echo'
            </ul>
            
        </div>
    </div>
    
    <div id="templatemo_content">
    	
        <div id="templatemo_content_left">
        	<div class="templatemo_content_left_section">
            	<h1>Categories</h1>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="Arabic Books.php">Arabic Books</a></li>
                    <li><a href="English Books.php">English Books</a></li>
            	</ul>
            </div>
        </div>
        <div id="templatemo_content_right">
        	<div class="templatemo_product_box">
            	<h1>طه الغريب  <span>( By محمد صادق)</span></h1>
   	      <img src="Images/13151637.jpg" alt="image" height="150" width="100" />
                <div class="product_info">
                	<p>صوت المذيع يقول : ولأول مره على مسرح…. الفنان… طه الغريب …</p>
                  <br>
                  <br>
                    <div class="buy_now_button"><a href="http://ask4pdf.com/up/do.php?id=20" target="_blank">Download Now</a></div>
                    <div class="detail_button"><a href="Taha.php">Details</a></div>
                </div>
                <div class="cleaner">&nbsp;</div>
            </div>
            
            <div class="cleaner_with_width">&nbsp;</div>
            
            <div class="templatemo_product_box">
            	<h1>هيبتا <span>(by محمد صادق)</span></h1>
       	    <img src="Images/hebta.jpg" alt="image" height="150" width="100" />
                <div class="product_info">
                	<p>تأخذنا روايه  هيبتا  الى ذلك العالم الذى اهلكه الجميع بحثا .. </p>
                    <br>
                    <br>
                    <div class="buy_now_button"><a href="https://docs.google.com/uc?id=0B3AgPISTgw-bc3IzbVlVeXVmbkE&export=download" target="_blank">Download Now</a></div>
                    <div class="detail_button"><a href="Hebta.php">Details</a></div>
                </div>
                <div class="cleaner">&nbsp;</div>
            </div>
            
            <div class="cleaner_with_height">&nbsp;</div>
            
            <div class="templatemo_product_box">
            	<h1> الجزار<span>(by حسن الجندي)</span></h1>
   	      <img src="Images/gzar.jpg" alt="image" height="140" width="100"/>
                <div class="product_info">
                	<p>صديقى العزيز انت هنا داخل مباحث امن الدوله ...</p>
                    <br>
                    <br>
                    <div class="buy_now_button"><a href="https://docs.google.com/uc?id=0B8xfMF8hu0qbckRLOXE0ZGRCR1U&export=download" target="_blank">Download Now</a></div>
                    <div class="detail_button"><a href="Gzar.php">Details</a></div>
                </div>
                <div class="cleaner">&nbsp;</div>
            </div>
            
            <div class="cleaner_with_width">&nbsp;</div>
            
            <div class="templatemo_product_box">
            	<h1>الفيل الازرق <span>(by أحمد مراد)</span></h1>
            	<img src="Images/blue.jpg" alt="image"  height="140" width="100" />
                <div class="product_info">
                	<p>تحكى الروايه عن يحيى، الطبيب بمستشفى العباسيه للصحه النفسية...</p>
                    <br>
                    <br>
                    <div class="buy_now_button"><a href="http://www.mediafire.com/view/?59m9n1pbrpulen0" target="_blank">Download Now</a></div>
                    <div class="detail_button"><a href="Blue Elephant.php">Details</a></div>
                </div>
                <div class="cleaner">&nbsp;</div>
            </div>
            
            <div class="cleaner_with_height">&nbsp;</div>
           
        </div>
    
    	<div class="cleaner_with_height">&nbsp;</div>
    </div>
    
    <div id="templatemo_footer">
    
	       <a href="subpage.php">Home</a> | <a href="subpage.php">Search</a> | <a href="#">FAQs</a> | <a href="Contact.php">Contact Us</a><br />
        Copyright © 2015 <a href="#"><strong>Hos Store</strong></a> 
    </div> 
    
</div>
</body>
</html>
'
?>