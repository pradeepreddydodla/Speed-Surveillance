<?php include 'header.php';?>

<?php require "input.php"; ?>


<!-- banner -->
<div class="banner">    	   
    <img src="images/photos/banner.jpg"  class="img-responsive" alt="slide">
    <div class="welcome-message">
        <div class="wrap-info">
            <div class="information">
                <h1  class="animated fadeInDown">Welcome Officer</h1>
                <p class="animated fadeInUp">This website provides the best and intelligent service to our police department.</p>                
            </div>
            <a href="#information" class="arrow-nav scroll wowload fadeInDownBig"><i class="fa fa-angle-down"></i></a>
        </div>
    </div>
</div>
<!-- banner-->


<!-- reservation-information -->
<div id="information" class="spacer reserve-info ">
<div class="container">
<div class="row">
<div class="col-sm-7 col-md-8">
   
   
   
   <h3>Vehicle Information</h3>
    <form role="form" class="wowload fadeInRight" name="form" action="display.php" method="post" enctype="multipart/form-data">
	
	<div class="form-group">
            <p align="justify"> All the details of a vehicle are known just by one click. The penalities on the vehicle
			can also be known from here. The other details of where the penality is generated for a vehicle is also known just
			by selecting the dates and by entering the licence plate number of the vehicle.
			</p>
			
        </div>
	
       
        
        <div class="form-group">
            <div class="row">
            <div class="col-xs-6">
            
			<h4>From:</h4>
            <input type="date" name="from" required />
			
			
			
			
            </div>        
            <div class="col-xs-6">
           
		   
		   <h4>To:</h4>
		   <input type="date" name="to"  required />
		    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		     <input type="submit" class="btn btn-default" value="Submit" name="submit" />
            </div></div>
        </div>
       
        
		
		<br>
		
		 <div class="form-group">
            <input type="text" class="form-control"  placeholder="Plate Number" name="number">
        </div>
        
    </form>    
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
</div>
<div class="col-sm-5 col-md-4">

</div>
</div>  
</div>
</div>
<!-- reservation-information -->

<div class="text-center copyright">Designed by <a href="http://izero.ml">Pradeep Reddy (iZero)</a></div>

