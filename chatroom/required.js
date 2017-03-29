
// function used for getting the messages // 
function getmsg(){
	$.post("getmsg.php",function(data,textStatus){
		if(textStatus=='success')
		{
			$("#chats").html(data);
			var scrollheight=$("#chats").prop('scrollHeight');
			var	height=550;// this 500 came from the chats id css styling height..note important
			var scrolltop=scrollheight-height;
			//alert('scrolltop='+scrolltop+'  scrollheight='+scrollheight+'   height='+height);
	  		$("#chats").animate({scrollTop: scrolltop},'slow');
		}			
	})
}


$(document).ready(function(){
	$("body").attr({onload : "getmsg()"});
	$("#refresh").click(function(){
			$.post("getmsg.php",function(data,textStatus){
			if(textStatus=='success')
			{
				$("#chats").html(data);
				var scrollheight=$("#chats").prop('scrollHeight');
				var	height=550;// this 500 came from the chats id css styling height..note important
				var scrolltop=scrollheight-height;
		  		$("#chats").animate({scrollTop: scrolltop},'slow');
			}			
		})
		
	})
	$("#sub_msg_btn").click(function(){
		var string=$("#inp_msg").val();
		$.post("sendmsg.php",{'msg': string},function(data,textStatus){
			if(textStatus=='success')
			{
				getmsg();
			}
			else
			{
				alert("Cant send empty text!");
			}
		})
	})
})