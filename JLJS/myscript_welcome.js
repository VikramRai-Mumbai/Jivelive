
	

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
				document.getElementById('useronline').innerHTML = req2.responseText;
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

	
	function ajax4(){
		var req4 = new XMLHttpRequest();
		
		req4.onreadystatechange = function(){
			
			if(req4.readyState == 4 && req4.status == 200)
			{
				document.getElementById('profilediv').innerHTML = req4.responseText;
			}
		}
		req4.open('POST','fetchprofile.php',true);
		req4.send();
		
	}

	
			function ajax5(){
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
	
	
	 $(function() {
    $(".submitmsg").click(function() {
      
	 var msg = $("input#msg").val(); 
	  
	var dataString = 'msg='+ msg; 
	$.ajax({
    type: "POST",
    url: "sendchat.php",
    data: dataString,
    success: function() {
		
    
    }
  });
  return false;
	  
    });
  });
  
  
  	 $(function() {
    $(".submittxn").click(function() {
      
	 var txnorder = $("input#txnorder").val();
	  
	var dataString = 'txnorder='+ txnorder; 
	$.ajax({
    type: "POST",
    url: "txnorder.php",
    data: dataString,
    success: function() {
		
    
    }
  });
  return false;
	  
    });
  });
  
  	 $(function() {
    $(".submitkyc").click(function() {
      
	 var idforkyc = $("input#idforkyc").val();
	  
	var dataString = 'idforkyc='+ idforkyc; 
	$.ajax({
    type: "POST",
    url: "txnorder.php",
    data: dataString,
    success: function(data) {
		
      
    }
  });
  return false;
	  
    });
  });
  
  
    	 $(function() {
    $(".postsubmit").click(function() {
      
	 var head = $("input#head").val();
	 var subhead = $("input#subhead").val();
	 var postbody = $("textarea#postbody").val();
	  
	var dataString = 'head='+ head + '&subhead=' + subhead + '&postbody=' + postbody;
	$.ajax({
    type: "POST",
    url: "txnorder.php",
    data: dataString,
    success: function(data) {
		
		
		       

					  // Display Modal
					  $('#postformhide').hide();
					  $('#add_post_image').show();
					  $('#postsuccess').html(data);
      
    }
  });
  return false;
	  
    });
  });
  
  

  
  
      	 $(function() {
    $("select.ufbs").change(function() {
      
	 var ufbs = $("#ufbs").val();
	  var suggestion = $("textarea#suggestion").val();
	  
	var dataString = 'ufbs='+ ufbs + '&suggestion=' + suggestion;
	$.ajax({
    type: "POST",
    url: "sendfeedback.php",
    data: dataString,
    success: function() {
		
              $('#postsuccess').html(data);
    }
  });
  return false;
	  
    });
  });
  

  
  		function like_update(lid){
			jQuery.ajax({
				url:'postlike.php',
				type:'post',
				data:'type=Liked&postidforlike='+lid,
				success:function(result){
					var cur_count=jQuery('#like_loop_'+lid).html();
					cur_count++;
					jQuery('#like_loop_'+lid).html(cur_count);
			
				}
			});
		}	
		
		function dislike_update(did){
			jQuery.ajax({
				url:'postlike.php',
				type:'post',
				data:'type=Disliked&postidforlike='+did,
				success:function(result){
					var cur_count=jQuery('#dislike_loop_'+did).html();
					cur_count++;
					jQuery('#dislike_loop_'+did).html(cur_count);
			
				}
			});
		}	
		
			function delete_post(id){
			jQuery.ajax({
				url:'postdelete.php',
				type:'post',
				data:'type=delete&postidfordelete='+id,
				success:function(result){
					
				}
			});
		}	
 
  		function comments_view(id){
			
			<?php $_SESSION['postidforcomments']="id"; ?>
			
			jQuery.ajax({
				url:'comments_view.php',
				type:'post',
				data:'type=comments&postidforcomments='+id,
				success:function(response){
					
					   $('.fetch_comments').html(response);

					  // Display Modal
					  $('#commentsModal').modal('show'); 
									
				}
			});
		}	
    
	
	 		function comments_submit(id){
			
            var commentinput = $("input#commentsin_"+id).val();
			var dataString = 'postidforcmt='+ id + '&commentinput=' + commentinput;
			
			jQuery.ajax({
				url:'submit_comment.php',
				type:'post',
				data:dataString,
				success:function(response){
					
					   $('.fetch_comments_entry').html(response);

					  // Display Modal
					  $('#comments_entryModal').modal('show'); 
									
				}
			});
		}	
    

$(document).ready(function (e) {
 $("#form").on('submit',(function(e) {
  e.preventDefault();
  $.ajax({
         url: "postsubmit.php",
   type: "POST",
   data:  new FormData(this),
   contentType: false,
         cache: false,
   processData:false,
   beforeSend : function()
   {
    //$("#preview").fadeOut();
    $("#err").fadeOut();
   },
   success: function(data)
      {
    if(data=='invalid')
    {
     // invalid file format.
     $("#err").html("Invalid File !").fadeIn();
    }
    else
    {
     // view uploaded file.
     $("#preview").html(data).fadeIn();
     $("#form")[0].reset(); 
    }
      },
     error: function(e) 
      {
    $("#err").html(e).fadeIn();
      }          
    });
 }));
});

$(document).ready(function (e){
$("#uploadFormProfile").on('submit',(function(e){
e.preventDefault();
$.ajax({
url: "upload.php",
type: "POST",
data:  new FormData(this),
contentType: false,
cache: false,
processData:false,
success: function(data){
$("#targetLayer").html(data);
},
error: function(){} 	        
});
}));
});



$(document).ready(function (e){
$("#uploadFormP1").on('submit',(function(e){
e.preventDefault();
$.ajax({
url: "uploadpostpic1.php",
type: "POST",
data:  new FormData(this),
contentType: false, 
cache: false,
processData:false,
success: function(data){
$("#targetPostImg1").html(data);
},
error: function(){} 	        
});
}));
});

$(document).ready(function (e){
$("#uploadFormP2").on('submit',(function(e){
e.preventDefault();
$.ajax({
url: "uploadpostpic2.php",
type: "POST",
data:  new FormData(this),
contentType: false, 
cache: false,
processData:false,
success: function(data){
$("#targetPostImg2").html(data);
},
error: function(){} 	        
});
}));
});


$(document).ready(function (e){
$("#uploadFormdname").on('submit',(function(e){
e.preventDefault();
$.ajax({
url: "update_profile_data.php",
type: "POST",
data:  new FormData(this),
contentType: false,
cache: false,
processData:false,
success: function(data){
$("#targetLayer_dname").html(data);
},
error: function(){} 	        
});
}));
});



$(document).ready(function (e){
$("#uploadFormdesign").on('submit',(function(e){
e.preventDefault();
$.ajax({
url: "update_profile_data.php",
type: "POST",
data:  new FormData(this),
contentType: false,
cache: false,
processData:false,
success: function(data){
$("#targetLayer_Design").html(data);
},
error: function(){} 	        
});
}));
});


$(document).ready(function (e){
$("#uploadFormcomp").on('submit',(function(e){
e.preventDefault();
$.ajax({
url: "update_profile_data.php",
type: "POST",
data:  new FormData(this),
contentType: false,
cache: false,
processData:false,
success: function(data){
$("#targetLayer_Comp").html(data);
},
error: function(){} 	        
});
}));
});




function viewPostImage() {
  var img1 = document.getElementById("img1");
   var img2 = document.getElementById("img2");
   var img = document.getElementById("img");
  var post_img1 = document.getElementById("post_img1");
  var post_img2 = document.getElementById("post_img2");
  if (img1.checked == true){
    post_img1.style.display = "block"
	post_img2.style.display = "none";
  } 
   else if (img2.checked == true){
     post_img1.style.display = "block";
	 post_img2.style.display = "block";
  } 
  else if (img.checked == true){
     post_img1.style.display = "none";
	 post_img2.style.display = "none";
  } 
  else {
      post_img1.style.display = "none";
	  post_img2.style.display = "none";
  }
}



	