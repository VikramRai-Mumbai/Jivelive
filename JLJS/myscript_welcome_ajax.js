		$(window).on('load', function(){
			//$("#friendModal").modal('show');
		$(".se-pre-con").fadeOut("slow");;
	});
	
  

	
$(document).ready(function(){

$(".postbody").richText();
setTimeout(function(){ajax8()},5000);
setTimeout(function(){ajax8()},60000);

///////////////// Friend   /////////////////////
  $("#optionfrndmodal").click(function(){
	  var display =  $("#frndrefresh").css("display");
			if(display!="none")
			{
				$("#frndrefresh").attr("style", "display:none");
			}
	   setTimeout(function(){fetchFriendAjax()},5000);
	   setTimeout(function(){fetchFriendAjax()},10000);
	   setTimeout(function(){fetchFriendAjax()},15000);
	   setTimeout(function(){fetchFriendAjax()},20000);
	   setTimeout(function(){fetchFriendAjax()},25000);
	   setTimeout(function(){frndrefreshview()},30000);
    $("#friendModal").modal({backdrop: false});
  });
  
  
  ///////////////// Following   /////////////////////
  $("#optionfollowingmodal").click(function(){
	  var display =  $("#followingrefresh").css("display");
			if(display!="none")
			{
				$("#followingrefresh").attr("style", "display:none");
			}
	   setTimeout(function(){fetchFollowingAjax()},5000);
	   setTimeout(function(){fetchFollowingAjax()},10000);
	   setTimeout(function(){fetchFollowingAjax()},15000);
	   setTimeout(function(){fetchFollowingAjax()},20000);
	   setTimeout(function(){fetchFollowingAjax()},25000);
	   setTimeout(function(){followingrefreshview()},30000);
    $("#followingModal").modal({backdrop: false});
  });
  
  ///////////////// Followers   /////////////////////
  $("#optionfollowersmodal").click(function(){
	  var display =  $("#followersrefresh").css("display");
			if(display!="none")
			{
				$("#followersrefresh").attr("style", "display:none");
			}
	   setTimeout(function(){fetchFollowersAjax()},5000);
	   setTimeout(function(){fetchFollowersAjax()},10000);
	   setTimeout(function(){fetchFollowersAjax()},15000);
	   setTimeout(function(){fetchFollowersAjax()},20000);
	   setTimeout(function(){fetchFollowersAjax()},25000);
	   setTimeout(function(){followersrefreshview()},30000);
    $("#followersModal").modal({backdrop: false});
  });
  
  
  
  
  
  
   $("#navfrndmodal").click(function(){
	   setTimeout(function(){fetchFriendAjax()},5000);
	   setTimeout(function(){fetchFriendAjax()},10000);
	   setTimeout(function(){fetchFriendAjax()},15000);
	   setTimeout(function(){fetchFriendAjax()},20000);
	   setTimeout(function(){fetchFriendAjax()},25000);
    $("#friendModal").modal({backdrop: false});
  });
  
     $("#onavfrndmodal").click(function(){
	   setTimeout(function(){ajax51()},5000);
	   setTimeout(function(){ajax51()},10000);
	   setTimeout(function(){ajax51()},15000);
	   setTimeout(function(){ajax51()},20000);
	   setTimeout(function(){ajax51()},25000);
    $("#onlinefriendModal").modal({backdrop: false});
  });
  
    $("#optionblockmodal").click(function(){
	   setTimeout(function(){ajax55()},5000);
	   setTimeout(function(){ajax55()},10000);
	
    $("#blockModal").modal({backdrop: false});
  });
  
   $("#navblockmodal").click(function(){
	   setTimeout(function(){ajax55()},5000);
	   setTimeout(function(){ajax55()},10000);
	
    $("#blockModal").modal({backdrop: false});
  });
  

  
  
  function frndrefreshview() {
	var  display =  $("#frndrefresh").css("display");
  if(display!="block")
			{
				$("#frndrefresh").attr("style", "display:block");
			}
}
  
  
  
     $("#frndprofilemodal").click(function(){
	   setTimeout(function(){ajax4()},5000);
	   setTimeout(function(){ajax4()},10000);
	   
    $("#chatfollowfModal").modal({backdrop: false});  
  });
  
  ////////  Friend          /////////////////
  
   $("#frndrefresh").click(function(){
	          $.notify(' Auto Refresh Enabled','success');
	   var display =  $("#frndrefresh").css("display");
			if(display!="none")
			{
				$("#frndrefresh").attr("style", "display:none");
			}
	   setTimeout(function(){fetchFriendAjax()},5000);
	   setTimeout(function(){fetchFriendAjax()},10000);
	   setTimeout(function(){fetchFriendAjax()},20000);
	   setTimeout(function(){fetchFriendAjax()},30000);
	   setTimeout(function(){fetchFriendAjax()},40000);
	   setTimeout(function(){frndrefreshview()},60000);
  });
  
   function frndrefreshview() {
	var  display =  $("#frndrefresh").css("display");
  if(display!="block")
			{
				$("#frndrefresh").attr("style", "display:block");
			}
}
  
  
    ////////  Following         /////////////////
  
   $("#followingrefresh").click(function(){
	          $.notify(' Auto Refresh Enabled','success');
	   var display =  $("#followingrefresh").css("display");
			if(display!="none")
			{
				$("#followingrefresh").attr("style", "display:none");
			}
	   setTimeout(function(){fetchFollowingAjax()},5000);
	   setTimeout(function(){fetchFollowingAjax()},10000);
	   setTimeout(function(){fetchFollowingAjax()},20000);
	   setTimeout(function(){fetchFollowingAjax()},30000);
	   setTimeout(function(){fetchFollowingAjax()},40000);
	   setTimeout(function(){followingrefreshview()},60000);
  });
  
   function followingrefreshview() {
	var  display =  $("#followingrefresh").css("display");
  if(display!="block")
			{
				$("#followingrefresh").attr("style", "display:block");
			}
}
  
    ////////  Followers         /////////////////
  
   $("#followersrefresh").click(function(){
	          $.notify(' Auto Refresh Enabled','success');
	   var display =  $("#followersrefresh").css("display");
			if(display!="none")
			{
				$("#followersrefresh").attr("style", "display:none");
			}
	   setTimeout(function(){fetchFollowersAjax()},5000);
	   setTimeout(function(){fetchFollowersAjax()},10000);
	   setTimeout(function(){fetchFollowersAjax()},20000);
	   setTimeout(function(){fetchFollowersAjax()},30000);
	   setTimeout(function(){fetchFollowersAjax()},40000);
	   setTimeout(function(){followersrefreshview()},60000);
  });
  
   function followersrefreshview() {
	var  display =  $("#followersrefresh").css("display");
  if(display!="block")
			{
				$("#followersrefresh").attr("style", "display:block");
			}
}
  
  
  
  
  
  
 
  
});


	

	

	function ajax(){
		var req = new XMLHttpRequest();
		
		req.onreadystatechange = function(){
			
			if(req.readyState == 4 && req.status == 200)
			{
				document.getElementById('chatting').innerHTML = req.responseText;
			}
		}
		req.open('POST','fetchchat.php',true);
		req.send();
		
	}
	 
	
	function ajax1(){
		var req1 = new XMLHttpRequest();
		
		req1.onreadystatechange = function(){
			
			if(req1.readyState == 4 && req1.status == 200)
			{
				document.getElementById('online').innerHTML = req1.responseText;
			}
		}
		req1.open('POST','fetchbutton.php',true);
		req1.send();
		
	}

	
	function ajax111(){
		var req111 = new XMLHttpRequest();
		
		req111.onreadystatechange = function(){
			
			if(req111.readyState == 4 && req111.status == 200)
			{
				document.getElementById('onlinefrd').innerHTML = req111.responseText;
			}
		}
		req111.open('POST','fetchbutton.php',true);
		req111.send();
		
	}

	
	
	
	function ajax2(){
		var req2 = new XMLHttpRequest();
		
		req2.onreadystatechange = function(){
			
			if(req2.readyState == 4 && req2.status == 200)
			{
				document.getElementById('online').innerHTML = req2.responseText;
			}
		}
		req2.open('POST','useronlineupdater.php',true);
		req2.send();
		
	}

	
	
	function ajax3(){
		var req3 = new XMLHttpRequest();
		
		req3.onreadystatechange = function(){
			
			if(req3.readyState == 4 && req3.status == 200)
			{
				document.getElementById('feedbackdiv').innerHTML = req3.responseText;
			}
		}
		req3.open('POST','fetchFB.php',true);
		req3.send();
		
	}
	 setTimeout(function(){ajax3()},2000);
	 setTimeout(function(){ajax3()},5000);
	 setTimeout(function(){ajax3()},600000);

	
	function ajax4(){
		var req4 = new XMLHttpRequest();
		
		req4.onreadystatechange = function(){
			
			if(req4.readyState == 4 && req4.status == 200)
			{
				document.getElementById('profilediv').innerHTML = req4.responseText;
			}
		}
		req4.open('GET','fetchprofile.php',true);
		req4.send();
		
	}

	/////////    Fetch Friend  //////////
			function fetchFriendAjax(){
		var req5 = new XMLHttpRequest();
		
		req5.onreadystatechange = function(){
			
			if(req5.readyState == 4 && req5.status == 200)
			{
				document.getElementById('frndtablist1').innerHTML = req5.responseText;
			}
		}
		req5.open('GET','fetchfriends.php',true); 
		req5.send();
		
	}
		/////////    Fetch Following  //////////
			function fetchFollowingAjax(){
		var following = new XMLHttpRequest();
		
		following.onreadystatechange = function(){
			
			if(following.readyState == 4 && following.status == 200)
			{
				document.getElementById('followingtablist1').innerHTML = following.responseText;
			}
		}
		following.open('GET','fetchfollowing.php',true); 
		following.send();
		
	}
		/////////    Fetch Followers  //////////
			function fetchFollowersAjax(){
		var follower = new XMLHttpRequest();
		
		follower.onreadystatechange = function(){
			
			if(follower.readyState == 4 && follower.status == 200)
			{
				document.getElementById('followerstablist1').innerHTML = follower.responseText;
			}
		}
		follower.open('GET','fetchfollowers.php',true); 
		follower.send();
		
	}
	
		function ajax51(){
		var req51 = new XMLHttpRequest();
		
		req51.onreadystatechange = function(){
			
			if(req51.readyState == 4 && req51.status == 200)
			{
				document.getElementById('onlinefrndtablist1').innerHTML = req51.responseText;
			}
		}
		req51.open('GET','onlinefetchfriends.php',true); 
		req51.send();
		
	}

	
		function ajax55(){
		var req55 = new XMLHttpRequest();
		
		req55.onreadystatechange = function(){
			
			if(req55.readyState == 4 && req55.status == 200)
			{
				document.getElementById('blocktablist1').innerHTML = req55.responseText;
			}
		}
		req55.open('POST','fetchblocked.php',true); 
		req55.send();
		
	}

	
		
		function ajax6(){
		var req6 = new XMLHttpRequest();
		
		req6.onreadystatechange = function(){
			
			if(req6.readyState == 4 && req6.status == 200)
			{
				document.getElementById('fetchpost').innerHTML = req6.responseText;
			}
		}
		req6.open('POST','Fetch_MyPost.php',true); 
		req6.send();
		
	}
	
	
			function ajax7(){
		var req7 = new XMLHttpRequest();
		
		req7.onreadystatechange = function(){
			
			if(req7.readyState == 4 && req7.status == 200)
			{
				document.getElementById('Timeline').innerHTML = req7.responseText;
			}
		}
		req7.open('POST','Fetch_Timeline.php',true); 
		req7.send();
		
	}

	
			function ajax8(){
		var req8 = new XMLHttpRequest();
		
		req8.onreadystatechange = function(){
			
			if(req8.readyState == 4 && req8.status == 200)
			{
				document.getElementById('WhatsNew').innerHTML = req8.responseText;
			}
		}
		req8.open('POST','Fetch_WhatsNew.php',true); 
		req8.send();
		
	}

	
	/*
			function ajax9(){
		var req9 = new XMLHttpRequest();
		
		req9.onreadystatechange = function(){
			
			if(req9.readyState == 4 && req9.status == 200)
			{
				document.getElementById('fetch_comments').innerHTML = req9.responseText;
			}
		}
		req9.open('POST','comments_view.php',true); 
		req9.send();
		
	}
	setInterval(function(){ajax9()},5000);
	*/

