<!DOCTYPE html>

<html lang="en" class="no-js">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Contact us: Jive live </title>
  

	<?php require '../JLINCLUDE/setting.php' ;?>
		<?php require '../JLINCLUDE/header_link_main.php' ;?>
<style>


body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
	max-width:600px;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left;
}
</style>
<script>
        $(window).on('load', function(){
		$(".se-pre-con").fadeOut("slow");;
	});
</script>	

</head> 

<body  >
<!-- Paste this code after body tag -->
	<div class="se-pre-con"></div>
	<!-- Ends -->
 <?php  require '../JLINCLUDE/navbar_main.php';?> 
 


<br><br><br>
<div class="container">

<?php

if(isset($_POST['fname']))
{
	$cur_date= date('Y-m-d',time());
	$cur_time= date('H:i:s',time());
		
$contactus= "INSERT INTO `contact_us` (`id`, `vname`, `email`, `state`, `district`, `subject`, `date`, `time`, `comments`) VALUES (NULL, '".$_POST['fname']."', '".$_POST['email']."', '".$_POST['state']."', '".$_POST['district']."', '".$_POST['subject']."', '".$cur_date."', '".$cur_time."', 'pending');";
$contactusrun = $conn2->query($contactus);

			   
			   echo "
			   
			   <div class='jumbotron'>
  <h3>Thank you for contacting us.</h3>
  <p>Contact Form has been submitted successfully.</p>
</div>
			   <a style='width:max-width:200px;width: 100px;' href='http://jivelive.jamamo.in/' class='btn btn-primary btn-sm rounded-pill mx-auto d-block'>Go Home</a><br><br>
			   ";
			   
			    /////////////////////////// Registration mail ///////////////////////////////

								  $to = "vikramraimumbai@gmail.com";

								  $subject = "Contact Form : ".$_POST['fname']." ";

								  $message = " 
								  <br><br>
						

                                   <html>
                                  <head>
								  </head>
								  <body>
								  Dear <b>Admin</b>, <br><br><br>We have received contact us form. Thank you for registering with Jive Live. </b>.     
								  
								                       <br><br>
								  						<div style=\"max-width:300px;\" class=\"container table-responsive mx-auto d-block\">          
										  <table style='border:1px solid #ddd!important;caption-side:bottom;border-collapse:collapse!important' class=\"table table-hover table-bordered table-striped table-sm center\">

												<tr class=\"success\">
											   <th style='padding:5px;border:1px solid #ddd!important;background-color:#fff!important' colspan=\"2\" > <center>Contact Details</center></th>
											  </tr>
	
											  <tr>
												<th style='padding:5px;border:1px solid #ddd!important;background-color:#fff!important'>Full Name</th>
												<td style='padding:5px;border:1px solid #ddd!important;background-color:#fff!important'>".$_POST['fname']."</td>
											  </tr>
											  <tr>
												<th style='padding:5px;border:1px solid #ddd!important;background-color:#fff!important'>Email</th>
												<td style='padding:5px;border:1px solid #ddd!important;background-color:#fff!important'>".$_POST['email']."</td>
											  </tr>
											  <tr>
												<th style='padding:5px;border:1px solid #ddd!important;background-color:#fff!important'>Location</th>
												<td style='padding:5px;border:1px solid #ddd!important;background-color:#fff!important'>".$_POST['district'].", ".$_POST['state']."</td>
											  </tr>
											  <tr>
												<th style='padding:5px;border:1px solid #ddd!important;background-color:#fff!important'>Subject </th>
												  <td style='padding:5px;border:1px solid #ddd!important;background-color:#fff!important'>  ".$_POST['subject']." </td>
											  </tr>
											  <caption>Thanyou for choosing Jive Live </caption>
										  </table>
										  </div>
										  
										  <br><br>Thanks,<br><b>Jive Live Admin</b>
									</body>
                                    </html>												
								 

								  
								  ";

								  // Always set content-type when sending HTML email

								  $headers = "MIME-Version: 1.0" . "\r\n";$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

								  $headers .= 'From: Jive Live Notify<support@jamamo.in>' . "\r\n";

								  $headers .= 'Bcc: ' . "\r\n";

								  mail($to,$subject,$message,$headers);



							  ////////////////////////////////////////////////////////////////////////////////
			   
			   
			   
			   echo "<style>#formhide{display:none;}</style>";
	
	
}



?>


  <form id='formhide' method='POST'>
    <label for="fname">Name</label>
    <input type="text" id="fname" name="fname" placeholder="Your full name.." required>

	
	<label for="lname">Email Address</label>
    <input type="text" id="lname" name="email" placeholder="Your email address.." required>


    <label for="country">State</label>
    <select id='listBox' onchange='selct_district(this.value)' name="state" required></select>

   <label for="country">District</label>
    <select id='secondlist'   name="district" required><option value="">Select District</option></select>


    <label for="subject">Your Query</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:100px" required></textarea>

    <center><input type="submit" value="Submit"></center>
  </form>
</div>


<?php 









echo "<script src='http://jivelive.jamamo.in/JLJS/notify.min.js' type='text/javascript'></script><script src='http://jivelive.jamamo.in/JLJS/state.js' type='text/javascript'></script>";



 ?>
</body>
</html>

