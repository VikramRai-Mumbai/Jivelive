<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Start Chatting : Jive live </title>
  
    <?php include 'JLINCLUDE/header_link_main.php';?>
	<?php require 'JLINCLUDE/functions.php' ;?>   
	<?php  if(isset($_SESSION['username'])){header('Location: http://jivelive.jamamo.in/Welcome/?home=1');}else{}?> 	
	<?php require 'JLINCLUDE/setting.php' ;?>
	
	<!-- Bootstrap core CSS -->
 <!-- <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">-->

  <!-- Custom fonts for this template
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
 -->
  <!-- Custom styles for this template 
  <link href="css/one-page-wonder.min.css" rel="stylesheet">
	-->

<?php 

			$user_ip = getUserIP();
             //$ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $user_ip)); 
            $ipdat = @json_decode(file_get_contents("https://www.iplocate.io/api/lookup/" . $user_ip)); 
             $date= date('Y-m-d',time());
			 $time= date('H:i:s',time()); 
					
                     
					 $insertreact= "INSERT INTO `visitors` (`id`, `ip`, `continent`, `country`, `state`,`city`, `postal`,`latitude`,`longitude`, `isp`, `date`, `time`) VALUES (NULL,'".$user_ip."', '". $ipdat->continent ."','". $ipdat->country ."', '". $ipdat->subdivision ."', '". $ipdat->city ."', '". $ipdat->postal_code ."', '". $ipdat->latitude ."', '". $ipdat->longitude ."', '". $ipdat->org ."', '".$date."', '".$time."')";
			         $insertreactrun = $conn2->query($insertreact);

if(isset($_POST['msg']))
		{
			echo "
					<style>
			.chat-popup {
              display: block;
			  </style>
			  ";	  
		}
		
		If(isset($_SESSION['ccount']))
		{
			If(isset($_SESSION['pvcount']))
		{
		echo "
		 <script type='text/javascript'>
		//<![CDATA[
                function createCounter(elementId,start,end,totalTime,callback)
                {
                    var jTarget=jQuery('#'+elementId);
                    var interval=totalTime/(end-start);
                    var intervalId;
                    var current=start;
                    var f=function(){
                        jTarget.text(current);
                        if(current==end)
                        {
                            clearInterval(intervalId);
                            if(callback)
                            {
                                callback();
                            }
                        }
						";
						if($_SESSION['ccount'] > $_SESSION['pvcount'])
						{echo "++current;";}
					   else{echo "--current;";}
                        echo "
                    }
                    intervalId=setInterval(f,interval);
                    f();
                }
                jQuery(document).ready(function(){
                    createCounter('counterTarget',".$_SESSION['pvcount'].",".$_SESSION['ccount'].",500,function(){
              
                    })
                })
            //]]>
		  </script>
		";
		}}
	
			
		?>
	
		 <script type='text/javascript'>
			 
			 			function account(){
		var acc = new XMLHttpRequest();
		
		acc.onreadystatechange = function(){
			
			if(acc.readyState == 4 && acc.status == 200)
			{
				document.getElementById('counterTarget').innerHTML = acc.responseText;
			}
		}
		acc.open('GET','acc.php',true); 
		acc.send();
		
	}
	 setInterval(function(){account()},3000);
	 
	 
	 </script>
</head>

<body style="padding:0px; margin:0px; background-color:#fff;font-family:arial,helvetica,sans-serif,verdana,'Open Sans'">

<?php require 'JLINCLUDE/navbar_main.php'; ?>
<?php include 'JLINCLUDE/body_main.php';?>
<center><a href="http://jivelive.jamamo.in/contact/?pid=48" class="btn btn-primary btn-xl rounded-pill mt-5">Contact us</a><center><br><br>

<?php 

//include 'JLINCLUDE/main_footer.php';?>
<?php // include 'JLINCLUDE/m-footer.php';?>
<?php //include 'JLINCLUDE/footerinclude.php';?>



<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
</body>
</html>

