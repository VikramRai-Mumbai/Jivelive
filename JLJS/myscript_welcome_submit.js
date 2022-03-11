
	 $(function() {
    $(".submitmsg").click(function() {
      
	 var msg = $("input#msg").val(); 
	  
	var dataString = 'msg='+ msg; 
	$.ajax({
    type: "POST",
    url: "sendchat.php",
    data: dataString,
    success: function() {
           setTimeout(function(){ajax()},1000);
		   setTimeout(function(){ajax()},10000);
		    setTimeout(function(){ajax()},20000);

		   
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
		  $.notify(' Details submitted','success');
    
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
    success: function(response) {
		   $.notify('e-KYC submitted.','success');
           $(".ekycsubmitstatus").html(response);
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
	 alert(postbody);
	 //var postbody = $("textarea#postbody").richText("getText");
	 
	  var postrf = $("input#postrf").val();
	   var postembed = $("input#postembed").val();
	  
	var dataString = 'head='+ head + '&subhead=' + subhead + '&postembed=' + postembed + '&postrf=' + postrf + '&postbody=' + postbody;
	$.ajax({
    type: "GET",
    url: "postsubmit.php",
    data: dataString,
    success: function(data) {
		
		
		        $.notify(' Post published','success');

					  // Display Modal
					  $('#postformhide').hide();
					  $('#add_post_image').show();
					  $('#postsuccess').html(data);
					  setTimeout(function(){ajax6()},3000);
					  setTimeout(function(){ajax7()},5000);
      
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
	async: true,
    type: "POST",
    url: "sendfeedback.php",
    data: dataString,
    success: function(response) {
		      $.notify(' Feedback Captured','success');
		      setTimeout(function(){ajax3()},2000);
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
					 $.notify(' Liked','success');
					var cur_count=jQuery('#like_loop_'+lid).html();
					cur_count++;
					jQuery('#like_loop_'+lid).html(cur_count);
					setTimeout(function(){ajax6()},6000);	
                        setTimeout(function(){ajax7()},3000);
			
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
					     $.notify(' Disliked','error');
			            setTimeout(function(){ajax6()},6000);	
                        setTimeout(function(){ajax7()},3000);
				}
			});
		}	
		
			function delete_post(id){
			jQuery.ajax({
				url:'postdelete.php',
				type:'post',
				data:'type=delete&postidfordelete='+id,
				success:function(result){
					 $.notify('Post Deleted','error');
					setTimeout(function(){ajax6()},3000);
					
				}
			});
		}	
 
  		function comments_view(id){
			
			jQuery.ajax({
				url:'comments_view.php',
				type:'post',
				data:'type=comments&postidforcomments='+id,
				success:function(response){
					
					   $('.fetch_comments').html(response);

					  // Display Modal
					  $('#commentsModal').modal('show'); 
						setTimeout(function(){ajax6()},5000);	
                        setTimeout(function(){ajax7()},3000);							
				}
			});
		}	
		
		  		function comments_view2(id){
			
			jQuery.ajax({
				url:'comments_view.php',
				type:'post',
				data:'type=comments&postidforcomments='+id,
				success:function(response){
					
					   $('.fetch_comments').html(response);

					  // Display Modal
					  $('#commentsModal').modal('show'); 
                        setTimeout(function(){ajax7()},3000);							
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
					   
					  // $('.fetch_comments_entry').html(response);

					  // Display Modal
					  //$('#comments_entryModal').modal('show'); 
					    $.notify('Commented','success');
						setTimeout(function(){ajax6()},6000);	
                        setTimeout(function(){ajax7()},3000);			
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

    	 $(function() {
    $("#removepp").click(function() { 
      
	 var head = "1";
	
	var dataString = 'head='+ head;
	$.ajax({
    type: "GET",
    url: "removeprofilepic.php",
    data: dataString,
    success: function(data) {
		
		
		        $.notify('Profile Pic Removed','success');
				$("#targetLayer").html(data);

      
    }
  });
  return false;
	  
    });
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
setTimeout(function(){ajax6()},3000);
setTimeout(function(){ajax7()},5000);
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
setTimeout(function(){ajax6()},3000);
setTimeout(function(){ajax7()},5000);
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



	