<?php 
	include(APPPATH.'/views/templates/header2.php');
?>


<script type="text/javascript" src=<?php echo base_url("assets/Scripts/jquery.fineuploader-3.4.1.min.js")?>></script>
<!--<script type="text/javascript" src=<?php echo base_url("assets/Scripts/ajaxfileupload.js")?>></script>
-->
<br>



<noscript>
<style type="text/css">
        .form_container {display:none;}
  </style>
<br><br>
<div class = "noscript"><p class = "text2">You Should Enable Javascript.  It is, after all, 2013!</p>
		
	<p class = "text">Don't know how?<br><br>
			Click here for <a href = "https://support.mozilla.org/en-US/home">Mozilla.</a><br>
			Click here for <a href= "https://support.microsoft.com/ph/807">Internet Explorer</a><br>
			Click here for <a href= "http://support.google.com/adsense/bin/answer.py?hl=en&answer=12654">Google Chrome</a>
	</p>
</div>
</noscript>	

<div class = "form_container">
<div id="loading">
  <img id="loading-image" src=<?php echo base_url('assets/Images/ajax-loader.gif');?> alt="Loading..." />
</div>

<form name="user_room_form" method="post" action="<?php echo base_url('index.php/Contests/site/room_submit');?>" enctype="multipart/form-data">

<div id = "room_pics" class = "resize" ><br><br>
	<p class = "title dark_gray_text">Let's Start You Up </p>
	<p class = "text1 dark_gray_text"> Pictures are worth 10,000 words.</p>
	<br><br>
<div id = "first_photo"> 
	<p class = "text1 dark_gray_text">Get us a <span>shot of the room.</span></p><br>
	<div>
		<div id="uploader1">.</div>
		
		
	<!--	<div id="file_1">
			<input type = "file" name = "roomphoto1" id = "roomphoto1">
			<a class = "button2 teal" onclick="$('#roomphoto1').click();">Browse</a>
			<div id = "image1"></div>
		</div>
		<input type="hidden" name="room_file1" id="room_file1" />
-->		
	</div>
</div>
<div id = "second_photo">
	<p class = "text1 dark_gray_text"><span>Want Another?</span> Go right ahead</p><br>
	<div>
		<div id="uploader2">.</div>
		<input type="hidden" name="room_file2" id="room_file2" />
		<div id="file_2">
			<input type = "file" name = "roomphoto2" id = "roomphoto2">
			<a class = "button2 teal" onclick="$('#roomphoto2').click();">Browse</a>
			<div id = "image2"></div>
		</div>
	</div>
</div><br><br><hr class = "style half"><br>
<div>
	<a class = "button2 login gray">Login, if this is old</a>
	<a class = "button2 continue pink">Keep Going &rarr;</a><br><br>
</div>
</div>
	<div id = "style_pics" class = "resize">
		<p class = "title dark_gray_text">Pick the Pictures You Like </p>
		<p class = "text1 dark_gray_text"> Just focus on the <span>style</span>.  We'll get to the other stuff later.</p>
		<br><br>
		<label for="room_type">Which Room Type?</label>
		<select name="room_type" id="room_type">
			<option value = "none"></option>
			<option value="BR" >Bedroom</option>
			<option value="LR">Living Room</option>
	</select><br><br>
		
	<div id = "BR">
	<div>
		<input type="checkbox" name="style[]" value = 1 class='cbox' />
		<img class = "inactive" src = <?php echo base_url('assets/Images/Bedroom/BR1.jpg');?> height=230em></div>
		<div><input type="checkbox" name="style[]" value = 2 class='cbox' />
		<img class = "inactive" src = <?php echo base_url('assets/Images/Bedroom/BR2.jpg');?> height=230em></div>
		<div><input type="checkbox" name="style[]" value = 3 class='cbox' />
		<img class = "inactive" src = <?php echo base_url('assets/Images/Bedroom/BR3.jpg');?> height=230em></div>
		<div><input type="checkbox" name="style[]" value = 4 class='cbox' />
		<img class = "inactive" src = <?php echo base_url('assets/Images/Bedroom/BR4.jpg');?> height=230em> 
		</div><div><input type="checkbox" name="style[]" value = 5 class='cbox' />
		<img class = "inactive" src = <?php echo base_url('assets/Images/Bedroom/BR5.jpg');?> height=230em>
		</div><div><input type="checkbox" name="style[]" value = 6 class='cbox' />
		<img class = "inactive" src = <?php echo base_url('assets/Images/Bedroom/BR6.jpg');?> height=230em>
		</div><div><input type="checkbox" name="style[]" value = 7 class='cbox' />
		<img class = "inactive" src = <?php echo base_url('assets/Images/Bedroom/BR7.jpg');?> height=230em>
		</div><div><input type="checkbox" name="style[]" value = 8 class='cbox' />
		<img class = "inactive" src = <?php echo base_url('assets/Images/Bedroom/BR8.jpg');?> height=230em>
		</div><div><input type="checkbox" name="style[]" value = 9 class='cbox' />
		<img class = "inactive" src = <?php echo base_url('assets/Images/Bedroom/BR9.jpg');?> height=230em>
		</div><div><input type="checkbox" name="style[]" value = 10 class='cbox' />
		<img class = "inactive" src = <?php echo base_url('assets/Images/Bedroom/BR10.jpg');?> height=230em></div>
		<img class = "notmystyle" src = <?php echo base_url('assets/Images/notmystyle.fw.png');?> height=230em>
		<br></div>
		
		<div id = "LR">
	<div>
		<input type="checkbox" name="style[]" value = 1 class='cbox' />
		<img class = "inactive" src = <?php echo base_url('assets/Images/LivingRoom/LR1.jpg');?> height=230em></div>
		<div><input type="checkbox" name="style[]" value = 2 class='cbox' />
		<img class = "inactive" src = <?php echo base_url('assets/Images/LivingRoom/LR2.jpg');?> height=230em></div>
		<div><input type="checkbox" name="style[]" value = 3 class='cbox' />
		<img class = "inactive" src = <?php echo base_url('assets/Images/LivingRoom/LR3.jpg');?> height=230em></div>
		<div><input type="checkbox" name="style[]" value = 4 class='cbox' />
		<img class = "inactive" src = <?php echo base_url('assets/Images/LivingRoom/LR4.jpg');?> height=230em> 
		</div><div><input type="checkbox" name="style[]" value = 5 class='cbox' />
		<img class = "inactive" src = <?php echo base_url('assets/Images/LivingRoom/LR5.jpg');?> height=230em>
		</div><div><input type="checkbox" name="style[]" value = 6 class='cbox' />
		<img class = "inactive" src = <?php echo base_url('assets/Images/LivingRoom/LR6.jpg');?> height=230em>
		</div><div><input type="checkbox" name="style[]" value = 7 class='cbox' />
		<img class = "inactive" src = <?php echo base_url('assets/Images/LivingRoom/LR7.jpg');?> height=230em>
		</div><div><input type="checkbox" name="style[]" value = 8 class='cbox' />
		<img class = "inactive" src = <?php echo base_url('assets/Images/LivingRoom/LR8.jpg');?> height=230em>
		</div>
		<img class = "notmystyle" src = <?php echo base_url('assets/Images/notmystyle.fw.png');?> height=230em>
		<br></div>
		
		<br>
<hr class = "style half"/><br><a class = "button2 continue pink">Keep Going &rarr;</a><br><br>
</div>
	<div id = "colors" class = "resize">
	<p class = "title dark_gray_text">And Some Colors </p>
		<p class = "text1 dark_gray_text"> Which appeal to you most for your room?</p><br><br>
		<div class = "inline"><div class = "color" style = "background-color: rgb(188,196,188);"></div>
		<input type="checkbox" name="color[]" value = 1 class='cbox' /></div>
		<div class = "inline"><div class = "color" style = "background-color: rgb(255,243,196);"></div>
		<input type="checkbox" name="color[]" value = 2 class='cbox' /></div>
		<div class = "inline"><div class = "color" style = "background-color: rgb(99, 121, 134);"></div>
		<input type="checkbox" name="color[]" value = 3 class='cbox' /></div>
		<div class = "inline"><div class = "color" style = "background-color: rgb(255, 186, 180);"></div>
		<input type="checkbox" name="color[]" value = 4 class='cbox' /></div>
		<div class = "inline"><div class = "color" style = "background-color: rgb(204, 199, 185);"></div>
		<input type="checkbox" name="color[]" value = 5 class='cbox' /></div>
		<div class = "inline"><div class = "color" style = "background-color: rgb(241, 242, 235);"></div>
		<input type="checkbox" name="color[]" value = 6 class='cbox' /></div>
		<div class = "inline"><div class = "color" style = "background-color: rgb(197, 222, 204);"></div>
		<input type="checkbox" name="color[]" value = 7 class='cbox' /></div>
		<div class = "inline"><div class = "color" style = "background-color: rgb(190, 210, 213);"></div>
		<input type="checkbox" name="color[]" value = 7 class='cbox' /></div><br>
				
		<div class = "inline"><div class = "color" style = "background-color: #FF0055;"></div>
		<input type="checkbox" name="color[]" value = 8 class='cbox' /></div>
		<div class = "inline"><div class = "color" style = "background-color: #006FFF;"></div>
		<input type="checkbox" name="color[]" value = 9 class='cbox' /></div>
		<div class = "inline"><div class = "color" style = "background-color: #00FFF7;"></div>
		<input type="checkbox" name="color[]" value = 10 class='cbox' /></div>
		<div class = "inline"><div class = "color" style = "background-color: #00FF5E;"></div>
		<input type="checkbox" name="color[]" value = 11 class='cbox' /></div>
		<div class = "inline"><div class = "color" style = "background-color: #FFD500;"></div>
		<input type="checkbox" name="color[]" value = 12 class='cbox' /></div><div class = "inline">
		<div class = "color" style = "background-color: #FF1100;"></div>
		<input type="checkbox" name="color[]" value = 13 class='cbox' /></div>	

	<br><br><hr class = "style half"/><br><a class = "button2 continue pink">Keep Going &rarr;</a><br><br></div>	

	

	<div id = "sizes" class = "resize" >
	<p class = "title dark_gray_text">Just a Teeny Bit About the Room </p>
		<br><p class = "text1 dark_gray_text"> So that we know what we're looking at.</p><br><br>
		<div class = "left center half">
		<p class = "midlarge quicksand center gray_text">Rough room dimensions:<p class = "small"> (in feet)</span></p><br>
		<input type="text" name="room_width" value="width" id = "room_width" maxlength="6" onfocus="if(this.value==this.defaultValue){this.value=''}; return false;" onblur="if(this.value ==''){this.value =this.defaultValue};"/> 
			<br>
		x  <br>
		<input type="text" name="room_height" value="height" id = "room_height" maxlength="6" onfocus="if(this.value==this.defaultValue){this.value=''}; return false;" onblur="if(this.value ==''){this.value =this.defaultValue};"/>
		</div>
		<div class = "right center half">
			<p class = "midlarge quicksand center gray_text ">Quick note to us:</p><br>
			<textarea rows="5" cols="20" name="about" id="about" onfocus="if(this.value==this.defaultValue){this.value=''}; return false;" onblur="if(this.value ==''){this.value =this.defaultValue};">I like the couch, but need your help with everything else, including a new coffee table</textarea>
	  </div><div class = "clear">
	  <br><br><hr class = "style half"/><br><br><a class = "button2 continue pink">Keep Going &rarr;</a><br><br></div>	</div>


	  <div id = "type" class = "resize">
	  <p class ="title dark_gray_text">How Much Help Do You Need?</p>
	  <p class = "text1 dark_gray_text">Are you a <span>total beginner</span>, or do you <span>just need help </span>putting it all together?</p><br>
	  
	  <div class = "third padding_small inline top">
		<img class = "inactive_one" src = <?php echo base_url('assets/Images/Notempty.jpg');?> height=200em><br>
		<input type="radio" name="type" value = "incomplete" class='cbox' />
		<br><p class = "midlarge quicksand gray_text">Just a Little Help</p>
		<p class = "text1 padding_small gray_text medium">We'll work around your 'big' pieces and suggest items to make your place the coolest one in school.</p>
		</div>	 
<div class = "third padding_small inline top">
	  <img class = "inactive_one" src = <?php echo base_url('assets/Images/Empty.jpg');?> height=200em><br>
	  <input type="radio" name="type" value = "complete" class='cbox' />
		<br><p class = "midlarge quicksand gray_text">Complete Makeover</p>
	  <p class = "text1 padding_small medium gray_text">Just moving in?  Hate all your furniture?  This option comes with all the pieces to make your room beautiful</p>
	  </div>		
		<br><br><hr class = "style half"/><br><a class = "button2 continue pink" alt="And going!">Keep Going &rarr;</a><br><br>
	</div>
	<div id = "information" class = "resize">
		<p class = "title dark_gray_text">Now Let Us Get to Know You</p>
		<p class = "text1 dark_gray_text">We'll be in <span>touch.</span></p><br><br>
		<div class = "labels">
			<label for="first_name">Your First Name:</label><br><br>
			<label for="last_name">Your Last Name:</label> <br><br>
			<label for="email">Your Email Address:</label><br><br>
			<label for="phone">Your Phone Number:</label><br><br>
			<label for="address">Your Address:</label><br><br>
			<label for="zipcode">Your Zipcode: </label><br><br>
			<label for="password">Pick a Password: </label><br>
			</div>
		<div class = "inputs">
		<input type="text" name="first_name" value="Holly" id="first_name" maxlength="30" onfocus="if(this.value==this.defaultValue){this.value=''}; return false;" onblur="if(this.value ==''){this.value =this.defaultValue};" /><br>
		<input type="text" name="last_name" value="Golightly" id="last_name" maxlength="30"  onfocus="if(this.value==this.defaultValue){this.value=''}; return false;" onblur="if(this.value ==''){this.value =this.defaultValue};" /><br>
		<input type="text" name="email" value="cat@gmail.com" id="email" maxlength="50"  onfocus="if(this.value==this.defaultValue){this.value=''}; return false;" onblur="if(this.value ==''){this.value =this.defaultValue};" /><br>
		<input type="text" name="phone" value="867-5309" id="phone" maxlength="100"  onfocus="if(this.value==this.defaultValue){this.value=''}; return false;" onblur="if(this.value ==''){this.value =this.defaultValue};" /><br>
		<input type="text" name="address" value="1 Fifth Avenue" id="address" maxlength="50"  onfocus="if(this.value==this.defaultValue){this.value=''}; return false;" onblur="if(this.value ==''){this.value =this.defaultValue};" /><br>
		<input type="text" name="zipcode" value="10024" id="zipcode" maxlength="10"  onfocus="if(this.value==this.defaultValue){this.value=''}; return false;" onblur="if(this.value ==''){this.value =this.defaultValue};" /><br>
		<input type="password" name="password" value="Password" id="password" maxlength="50"  onfocus="if(this.value==this.defaultValue){this.value=''}; return false;" onblur="if(this.value ==''){this.value =this.defaultValue};" />
		</div>
		<br><br><hr class = "style half"/><br><input type="submit"  id = "submit" class="button2 teal pink" value="Submit" /> 
	</div>
	</form>
	</div>
	
	<script>
	
	$(document).ready(function(){

	 $('#uploader1').fineUploader({
				request: {
				endpoint: '/031782/index.php/Users/site/upload_room_pic'
				},
				debug:true,
				multiple: false,
				validation: {
				allowedExtensions: ['JPG', 'jpeg', 'jpg', 'gif', 'png'],
				
				},
				text: {
				uploadButton: '<a class="button2 teal"> Browse</a>'
				}
				}).on('complete', function(event, id, fileName, responseJSON) {
				if (responseJSON.success) {
					var data = responseJSON.filename;
					var newimage= '<img src="https://s3.amazonaws.com/easableimages/'+data+'" height=250>';
					$(this).append(newimage);
					$("#second_photo").show();
					$("#room_pics .continue").show();
					$("#uploader1 .qq-uploader").hide();
				}
				});
			
	
		$('#uploader2').fineUploader({
				request: {
				endpoint: '/test/design3/index.php/Users/site/upload_room_pic'
				},
				debug:true,
				multiple: false,
				validation: {
				allowedExtensions: ['jpeg', 'jpg', 'gif', 'JPG', 'png'],
				
				},
				text: {
				uploadButton: '<a class="button2 teal"> Browse</a>'
				}
				}).on('complete', function(event, id, fileName, responseJSON) {
				if (responseJSON.success) {
					var data = responseJSON.filename;
					var newimage= '<img src="https://s3.amazonaws.com/easableimages/'+data+'" height=250>';
					$(this).append(newimage);
					$("#uploader2 .qq-uploader").hide();				 
				}
				});

				
$("#roomphoto1").change(function(){

		$("#loading").show();
		$.ajaxFileUpload({
			dataType : 'JSON',
			url :'/test/design3/index.php/Users/site/upload_room_pic_phone',
			secureuri :false,
			fileElementId :'roomphoto1',
			data: {'id':'roomphoto1'},
			success: function (data){
			var newimage = "<img src ='https://s3.amazonaws.com/easableimages/"+data+"' height=200em>";
			$("#image1").html(newimage);
			$("#loading").hide();
			$("#first_photo a").hide();
			$("#second_photo").show();
			$("#room_pics .continue").show();
			}
		});

});

$("#roomphoto2").change(function(){

		$("#loading").show();
		$.ajaxFileUpload({
			dataType : 'JSON',
			url :'/test/design3/index.php/Users/site/upload_room_pic_phone',
			secureuri :false,
			fileElementId :'roomphoto2',
			data: {'id':'roomphoto2'},
			success: function (data){
			var newimage = "<img src ='https://s3.amazonaws.com/easableimages/"+data+"' height=200em>";
			$("#image2").html(newimage);
			$("#loading").hide();
			$("#second_photo a").hide();
			}
		});

});




	
		$("#room_pics .continue").click(function(){
			var filename1 =$("#first_photo img").attr('src');
			$("#room_file1").val(filename1);
			var filename2 =$("#second_photo img").attr('src');
			$("#room_file2").val(filename2);
		});
 

	
	
	
		$(".inactive").click(function(){
		$(this).toggleClass('active');
		var checkbox = $(this).parent().find('.cbox');
		checkbox.prop('checked',!checkbox[0].checked);
			if ($("#style_pics :checkbox:checked").length > 0)
		{$("#style_pics .continue").fadeIn();}
		else {$("#style_pics .continue").fadeOut();}
		});
		
		$(".color").click(function(){
		$(this).toggleClass('active');
		var checkbox = $(this).parent().find('.cbox');
		checkbox.prop('checked',!checkbox[0].checked);		
		if ($("#colors :checkbox:checked").length > 0)
		{$("#colors .continue").fadeIn();}
		else {$("#colors .continue").fadeOut();}
		});
		
				
		$(".inactive_one").click(function(){ 
		 $(".inactive_one").removeClass('active');
		 $(this).toggleClass('active');
		 var checkbox = $(this).parent().find('.cbox');
			checkbox.prop('checked','checked');
		$(this).parent().parent().find(".continue").fadeIn();
		});
		
		
		$("#sizes input").keyup(function(){
		var numberRegex = /^[+-]?\d+(\.\d+)?([eE][+-]?\d+)?$/;
		var str = $("#room_width").val();
		if(numberRegex.test(str)){
			var str = $("#room_height").val();
				if(numberRegex.test(str)){
				$(this).parent().parent().find('.continue').fadeIn();
				
				}
				else {$(this).parent().parent().find('.continue').hide();}
			} else {$(this).parent().parent().find('.continue').hide();}
			});
		
		
		 $(" #BR, #LR, #second_photo, #loading, .continue, .login, .cbox, #submit").hide();
		$("#style_pics,#colors,#type,#sizes, #information").hide();
	
$("#room_type").change(function(){
if ($(this).val()=='BR'){
$("#BR").fadeIn();
$("#LR").hide();
}
else {
$("#LR").fadeIn();
$("#BR").hide();}
	});
		$(".continue").click(function(){
			$(this).closest(".resize").hide();
			$(this).closest(".resize").next().fadeIn();});
	
var isMobile = navigator.userAgent.match(/(iPhone|iPod|iPad|Android|BlackBerry)/);
if (isMobile)
{
	$(".resize").css("padding","3em");
	$("a").css("font-size","40px");
	$("a").removeClass(".right");
	$("div.half").css("width","90%");
	$("div.half").removeClass(".left");
	$("div.half").removeClass(".right");
	$("div.third").css("width","70%");
	$("#sizes div, #information div, #type div").css("padding-bottom","3em");
	$("img.inactive, img.inactive_one, #color .inline").css("height","400");
	
}



 $("#information input:text, #information input:password").keyup(function(){
if ($("#first_name").val()=="Holly"||$("#first_name").val()==''||$("#last_name").val()=="Golightly"||$("#last_name").val()==''||
$("#email").val()=="cat@gmail.com"||$("#email").val()==''||$("#phone").val()=="867-5309"||
$("#phone").val()==''||$("#password").val()=="Password"||$("#password").val()=='')
{
$("#submit").hide();
}
else {
$("#submit").fadeIn();
}

});

});
	

	
	</script>