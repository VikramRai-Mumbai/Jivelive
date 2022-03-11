  
    <?php require '../JLINCLUDE/header_link_welcome.php';?>
	<?php require '../JLINCLUDE/functions.php' ;?>   
	<?php require '../JLINCLUDE/setting.php' ;?>



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

							
								.right {
								  text-align: right;
								}

				
								.row:after {
								  content: "";
								  display: table;
								  clear: both;
								}

						
								.bar-container {
								  width: 100%;
								  background-color: #f1f1f1;
								  text-align: center;
								  color: white;
								}

					
								.bar-5 {width: 60%; height: 18px; background-color: #4CAF50;}
								.bar-4 {width: 30%; height: 18px; background-color: #2196F3;}
								.bar-3 {width: 10%; height: 18px; background-color: #00bcd4;}
								.bar-2 {width: 4%; height: 18px; background-color: #ff9800;}
								.bar-1 {width: 15%; height: 18px; background-color: #f44336;}

						
								@media (max-width: 400px) {
								  .side, .middle {
									width: 100%;
								  }
								  .right {
									display: none;
								  }
								}
								</style>	
<?php 



if(isset($_SESSION['username']))
	      {
			 $fb="SELECT * FROM feedback";		  
		     $fbrun = $conn2->query($fb);
             if ($fbrun->num_rows > 0) {
				 
				        $one=0;
						$two=0;
						$three=0;
						$four=0;
						$five=0;
						$total=0;
				 
				     while($rowfb = $fbrun->fetch_array())
                               {
								   $total=$total+1;
								   if($rowfb['feedback'] == "1"){$one=$one+1;}
								   elseif($rowfb['feedback'] == "2"){$two=$two+1;}
								   elseif($rowfb['feedback'] == "3"){$three=$three+1;}
								   elseif($rowfb['feedback'] == "4"){$four=$four+1;}
								   elseif($rowfb['feedback'] == "5"){$five=$five+1;}
								   else{$five=$five+1;}
								 

								 
							   }
							 
							 $w1=$one*1;
							 $w2=$two*2;
							 $w3=$three*3;
							 $w4=$four*4;
							 $w5=$five*5;
							 $avgrating=round((($w1+$w2+$w3+$w4+$w5)/($total)),1);
							 
							 $wp1=round(($one/$total)*100);
							 $wp2=round(($two/$total)*100);
							 $wp3=round(($three/$total)*100);
							 $wp4=round(($four/$total)*100);
							 $wp5=round(($five/$total)*100);
					
								 
									/////   FB box start
                                    echo "
									  
									  <style>
									    .bar-5 {width: ".$wp5."%; height: 18px; background-color: #4CAF50;}
										.bar-4 {width: ".$wp4."%; height: 18px; background-color: #2196F3;}
										.bar-3 {width: ".$wp3."%; height: 18px; background-color: #00bcd4;}
										.bar-2 {width: ".$wp2."%; height: 18px; background-color: #ff9800;}
										.bar-1 {width: ".$wp1."%; height: 18px; background-color: #f44336;}
									  </style>
					                    ";
					echo "
					          <h5 class='card-title'>Review Your Feedback </h5>
					          <span class='heading card-title'><h3>User Rating</h3></span>
							  
							<span class='fa fa-star checked'></span>";
							if($avgrating >=1.7 ){echo "<span class='fa fa-star checked'></span>";}else{echo "<span class='fa fa-star '></span>";}
							if($avgrating >=1.7 ){echo "<span class='fa fa-star checked'></span>";}else{echo "<span class='fa fa-star '></span>";}
							if($avgrating >=3.7 ){echo "<span class='fa fa-star checked'></span>";}else{echo "<span class='fa fa-star '></span>";}
							if($avgrating >=4.7 ){echo "<span class='fa fa-star checked'></span>";}else{echo "<span class='fa fa-star '></span>";}
							echo "
							<p><b>$avgrating </b> average rating based on <b>$total </b>reviews.</p>
							<hr style='border:3px solid #f1f1f1'>

							<div class='row'>
							  <div class='side'>
								<div>5 star</div>
							  </div>
							  <div class='middle'>
								<div class='bar-container'>
								  <div class='bar-5'></div>
								</div>
							  </div>
							  <div class='side right'>
								<div> $five </div>
							  </div>
							  <div class='side'>
								<div>4 star</div>
							  </div>
							  <div class='middle'>
								<div class='bar-container'>
								  <div class='bar-4'></div>
								</div>
							  </div>
							  <div class='side right'>
								<div>".$four."</div>
							  </div>
							  <div class='side'>
								<div>3 star</div>
							  </div>
							  <div class='middle'>
								<div class='bar-container'>
								  <div class='bar-3'></div>
								</div>
							  </div>
							  <div class='side right'>
								<div>".$three."</div>
							  </div>
							  <div class='side'>
								<div>2 star</div>
							  </div>
							  <div class='middle'>
								<div class='bar-container'>
								  <div class='bar-2'></div>
								</div>
							  </div>
							  <div class='side right'>
								<div>".$two."</div>
							  </div>
							  <div class='side'>
								<div>1 star</div>
							  </div>
							  <div class='middle'>
								<div class='bar-container'>
								  <div class='bar-1'></div>
								</div>
							  </div>
							  <div class='side right'>
								<div>".$one."</div>
							  </div>
							</div>
					
					
						  ";
  

                                    ////// FB box End									

							  
							   }
							   
							   else
			  {		  

                 
				    echo "
								  
					
					          <span class='heading card-title'><b>User Rating</b></span>
							<span class='fa fa-star checked'></span>
							<span class='fa fa-star checked'></span>
							<span class='fa fa-star checked'></span>
							<span class='fa fa-star checked'></span>
							<span class='fa fa-star'></span>
							<p>4.1 average based on 254 reviews.</p>
							<hr style='border:3px solid #f1f1f1'>

							<div class='row'>
							  <div class='side'>
								<div>5 star</div>
							  </div>
							  <div class='middle'>
								<div class='bar-container'>
								  <div class='bar-5'></div>
								</div>
							  </div>
							  <div class='side right'>
								<div>150</div>
							  </div>
							  <div class='side'>
								<div>4 star</div>
							  </div>
							  <div class='middle'>
								<div class='bar-container'>
								  <div class='bar-4'></div>
								</div>
							  </div>
							  <div class='side right'>
								<div>63</div>
							  </div>
							  <div class='side'>
								<div>3 star</div>
							  </div>
							  <div class='middle'>
								<div class='bar-container'>
								  <div class='bar-3'></div>
								</div>
							  </div>
							  <div class='side right'>
								<div>15</div>
							  </div>
							  <div class='side'>
								<div>2 star</div>
							  </div>
							  <div class='middle'>
								<div class='bar-container'>
								  <div class='bar-2'></div>
								</div>
							  </div>
							  <div class='side right'>
								<div>6</div>
							  </div>
							  <div class='side'>
								<div>1 star</div>
							  </div>
							  <div class='middle'>
								<div class='bar-container'>
								  <div class='bar-1'></div>
								</div>
							  </div>
							  <div class='side right'>
								<div>20</div>
							  </div>
							</div>
					
					
						  ";
  
			  }
							   
							   
							   
 }
			  
  

  ?>
  
                   
						
