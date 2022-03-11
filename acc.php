  
    <?php include 'JLINCLUDE/header_link_main.php';?>   
   <?php require 'JLINCLUDE/functions.php' ;?>   
	<?php require 'JLINCLUDE/setting.php' ;?>


<?php 

         $td= date('Y-m-d',time());
		  $tt= date('H:i:s',time());
          $timeb5 = date('H:i:s', strtotime($tt. ' - 10 seconds'));
         $_SESSION['ccount']=0;$_SESSION['pvcount']=0;
         $accnow="SELECT mid FROM chat_msg where date='".$td."' ";		 
		 $acc="SELECT mid FROM chat_msg where date='".$td."' ";
		 if ($accnowrun=mysqli_query($conn4,$accnow))
			  {
                 $rowcountnow=mysqli_num_rows($accnowrun);
				 	if ($rowcountnow > 0) {
			   $_SESSION['ccount']=$rowcountnow*117;	
						}
						 else{$_SESSION['ccount']=523;$_SESSION['pvcount']=400;}
			  					
			  }
			  else{$_SESSION['ccount']=519;$_SESSION['pvcount']=400;}	
			  
			   if ($accrun=mysqli_query($conn4,$acc))
			  {
                 $rowcount=mysqli_num_rows($accrun);
				  
					if ($rowcount > 0) {
				$_SESSION['pvcount']=$rowcount*123;
						}
                       else{$_SESSION['ccount']=639;$_SESSION['pvcount']=400;}						
			  }
			  
		
		echo $_SESSION['ccount'];
		
		/*
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
			/*
			echo "
			
			<button type='button' id='counterTarget' class='btn btn-outline-success font-weight-bold' style='color:green;background:white'></button>
			";
			*/

  ?>
  
                   
						
