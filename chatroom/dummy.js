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





$.post("getmsg.php",function(data,textStatus){
					if(textStatus=='success')
					{
						$("#chats").html(data);
						var scrollheight=$("#chats").prop('scrollHeight');
			  			var	height=550; // this 500 came from the chats id css styling height..note important
			  			var scrolltop=scrollheight-height;
			  			//alert('scrolltop='+scrolltop+'  scrollheight='+scrollheight+'   height='+height);
			  			$("#chats").animate({scrollTop: scrolltop},'slow');
			  			//$("#chats").scrollTop(scrolltop);
					}			
				})