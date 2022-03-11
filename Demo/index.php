<!DOCTYPE html>
<html lang="en" class="no-js">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Welcome : Jive live </title>
  
     
    <?php require '../JLINCLUDE/header_link_welcome.php';?>
	<?php require '../JLINCLUDE/functions.php' ;?>   
	<?php require '../JLINCLUDE/setting.php' ;?>
<style>
.animation {
  
  border: none;
  color: #FFFFFF;
  text-align: center;
  transition: all 0.5s;
  cursor: pointer;
  margin: 2px;
}

.animation span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.animation span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -10px;
  transition: 0.5s;
}

.animation:hover span {
  padding-right: 15px;
}

.animation:hover span:after {
  opacity: 1;
  right: 0;
}
.quotation{
  font-size: 14px;
  //margin: 0 auto;
  quotes: "\201C""\201D""\2018""\2019";
  padding: 6px 12px;
  line-height: 1.4;
}

.quotation:before {
  content: open-quote;
  display: inline;
  height: 0;
  line-height: 0;
  left: -8px;
  position: relative;
  top: 5px;
  color: #ccc;
  font-size: 2em;
}
.quotation::after {
  content: close-quote;
  display: inline;
  height: 0;
  line-height: 0;
  left: 8px;
  position: relative;
  top: 20px;
  color: #ccc;
  font-size: 2em;
}
 .user-image{
    position: absolute;
	margin-left:0px;
	margin-right:50%;
    margin-top:-110px;
  }
  .user-left-part{
    margin: 0px;
  }
  #homecard2{margin-top:0px;}
  #homecard{margin-top:2px;}
  
.no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
	background: url(http://jivelive.jamamo.in/JLIMG/loader/loader128/Preloader_2.gif) center no-repeat #fff;
}
</style>
<style>


.heading {
  font-size: 20px;
  margin-right: 25px;
}

.fa {
  font-size: 20px;
}

.checked {
  color: orange;
}

/* Three column layout */
.side {
  float: left;
  width: 15%;
  margin-top:10px;
}

.middle {
  margin-top:10px;
  float: left;
  width: 70%;
}

/* Place text to the right */
.right {
  text-align: right;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* The bar container */
.bar-container {
  width: 100%;
  background-color: #f1f1f1;
  text-align: center;
  color: white;
}

/* Individual bars */
.bar-5 {width: 60%; height: 18px; background-color: #4CAF50;}
.bar-4 {width: 30%; height: 18px; background-color: #2196F3;}
.bar-3 {width: 10%; height: 18px; background-color: #00bcd4;}
.bar-2 {width: 4%; height: 18px; background-color: #ff9800;}
.bar-1 {width: 15%; height: 18px; background-color: #f44336;}

/* Responsive layout - make the columns stack on top of each other instead of next to each other */
@media (max-width: 400px) {
  .side, .middle {
    width: 100%;
  }
  .right {
    display: none;
  }
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
<script>
	//paste this code under head tag or in a seperate js file.
	// Wait for window load
	$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");;
	});
</script>	
<script>
	
	function ajax(){
		var req = new XMLHttpRequest();
		
		req.onreadystatechange = function(){
			
			if(req.readyState == 4 && req.status == 200)
			{
				document.getElementById('chatting').innerHTML = req.responseText;
			}
		}
		req.open('GET','fetchchat.php',true);
		req.send();
		
	}
	setTimeout(function(){ajax()},2000);
	setTimeout(function(){ajax()},4000);
	setTimeout(function(){ajax()},8000);
	setTimeout(function(){ajax()},16000);
    setTimeout(function(){ajax()},60000);	
	
	
	</script>

</head> 

<body  >
<!-- Paste this code after body tag -->
	<div class="se-pre-con"></div>
	<!-- Ends -->
 <?php  require '../JLINCLUDE/navbar_main.php';?> 
 
 <div class="container">
 
 <?php
 
              $demo_date= date('Y-m-d',time());
               $demo_time=date('H:i:s',time());
			  $dt="INSERT INTO `demo_tracker` (`id`, `comments`, `date`, `time`) VALUES (NULL, 'demo page', '".$demo_date."', '".$demo_time."')";
			  if ($conn2->query($dt) === TRUE) {}
 
 
          
       if(isset($_GET['cc']))
	  {
             $cur_date= date('Y-m-d',time());
			 $cur_time=date('H:i:s',time());
			  $cc="UPDATE `demo1` SET closeby='".$_SESSION['username']."' , cdate='".$cur_date."' , ctime='".$cur_time."' , status='Inactive' WHERE cid='".$_GET['cc']."' AND status='Active' ";
			  if ($conn2->query($cc) === TRUE) {
				  
						$_SESSION['cchatid']="";
						$_SESSION['cchatrec']="";
						$_SESSION['cchatrecname']="";
			   }
			
      }		
      
  
 		if(isset($_GET['rid']))
	  {
		     $cur_date= date('Y-m-d',time());
			 $cur_time=date('H:i:s',time());
			 $cur_time1=date('H:i',time());
		  $_SESSION['username']="You";
		  
         
		  
           ////////////////    Chat Window Open
               echo "<style> 
			   #homecard{display:none;}
			   #homecard3{display:none;
			   
			         }
			   #cardchat {
				        margin-top:5px;
						width:500px;
						max-width:500px;
						max-height:600px;
					
			         }
			   @media only screen and (max-width: 600px) {
	                             #cardchat {
									 max-width:100%;
									  margin-top:10px;
							    }
	 
							  }	
			   
			   </style>";
		  echo 
		  "
		    <br><br>
				<div id='cardchat' class='card mx-auto d-block'>
				  <div id='online' class='card-header'>
					                         <button type='button' data-toggle='modal' data-target='#chatcloseModal' href='http://jivelive.jamamo.in/register/?r' class='btn btn-outline-danger btn-sm'>Sign up</button>
							
											 <button style ='' class='btn btn-outline-success btn-sm float-right' type='button' disabled><span class='spinner-grow spinner-grow-sm' role='status' aria-hidden='true'></span> updating : Demo Chat </button>        
				  </div>
				 
				  <div class='card-body'>
					<h5 class='card-title'></h5> 
					
					     <div id='scrolldown' style='height:500px;overflow			: auto;' >
        			     <ul  id='chatting' class='chat-list'>
						 
						           
								
									<button style ='margin-top:50%' class='btn btn-primary' type='button' disabled><span class='spinner-grow spinner-grow-sm' role='status' aria-hidden='true' disabled></span>searching online contacts </button>
	   
	   
						 
        			     </ul>
						 </div> 
					
				  </div>
				  <div  style='display:none' class='card-footer text-center'>
					 
					 <br><br>
					 <div id='formid' >
					     <form name='msgform' action='' autocomplete='off'>
						 
					              <div class='input-group mb-3'>
								  <input type='text' id='msg' name='msg' class='form-control' placeholder='Type message here' ";?> onfocus="this.value=''" <?php echo" required autofocus disabled/>
								  <div class='input-group-append'>
									<button class='btn btn-success submitmsg' type='submit' disabled>Send</button>
								  </div>
								</div>
						 
						
						 </form>
					 
					  
				  </div>
				  
				</div>
						  
		  ";
		  
		  ///////////////   Chat window End 
            			
		  
          	
		  
	  }  ///  end of if uchat
 
 
 
 ?>
 


 

			 
			 
			 
			 
<!----------------------------------------  All Modals   ------------------------------------>		 
			 
			 <!-- Button Chat Close modal -->
<div class="modal fade" id="chatcloseModal" tabindex="-1" role="dialog" aria-labelledby="chatcloseModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="chatcloseModalLabel">  Jive Live : Informtion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
		
      </div>
      <div class="modal-body">
              <p class=''> Thank you for choosing Jive Live Chat Portal.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <a href="http://jivelive.jamamo.in/register/?r=1&signup_db=10" ><button type="button" class="btn btn-primary">Sign up</button></a>
      </div>
    </div>
  </div>
</div>

			
<!----------------------------------------- All Modal close ---------------------------------->
</div> <!------main container---->


</body>
</html>
