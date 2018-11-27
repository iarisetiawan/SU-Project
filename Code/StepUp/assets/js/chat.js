$(function() {
$('.message').keypress(function(event){
    var keycode = (event.keyCode ? event.keyCode : event.which);
    if(keycode == '13'){
       sendTxtMessage($(this).val());
    }
});
$('.btnSend').click(function(){
       sendTxtMessage($('.message').val());
});
$('.selectVendor').click(function(){
		ChatSection(1);
		var profilepic = $(this).data('profile');
		var name = $(this).data('name');
		$("#contact-profile-img").attr("src",profilepic);
		document.getElementById('contact-profile-name').innerHTML = name;
		var receiver_id = $(this).attr('id');
		// $( "#"+receiver_id).addClass( "active" );
	  	$('#ReciverId_txt').val(receiver_id);
	  	$('#ReciverName_txt').html($(this).attr('title'));
	  
	  GetChatHistory(receiver_id);
 				
});

});
function ChatSection(status){
	if(status==0){
		$('#chatSection :input').attr('disabled', true);
    } else {
        $('#chatSection :input').removeAttr('disabled');
    }   
}
ChatSection(0);


function ScrollDown(){
	var elmnt = document.getElementById("content");
    var h = elmnt.scrollHeight;
   $('#content').animate({scrollTop: h}, 1000);
}
window.onload = ScrollDown();

function DisplayMessage(message){
	var Sender_Name = $('#Sender_Name').val();
	var Sender_ProfilePic = $('#Sender_ProfilePic').val();
		var str= '<li class="replies">';
           	str+='<img src="'+Sender_ProfilePic+'" alt="" />';
            str+='<p>'+message+'</p>';
            str+='</li>';
		$('#dumppy ul').append(str);
}

function sendTxtMessage(message){
	var messageTxt = message.trim();
	if(messageTxt!=''){

var cekurl = $('#cekurl').val();
                $.ajax({
                    type: "POST",
                    url: cekurl,
                    data: {
                        content:messageTxt
                    },
                    dataType: 'json',
                    success: function(data){
                        if(data=="bahaya"){
                            alert("Terdapat kata yang dilarang dalam inputan anda, silahkan bersuara dengan baik dan benar.");
                            $('.message').val('');
                        }else{
				DisplayMessage(messageTxt);
				var receiver_id = $('#ReciverId_txt').val();
				var url_send = $('#base_url').val();
				$.ajax({
						  dataType : "json",
						  type : "POST",
						  data : {messageTxt : messageTxt, receiver_id : receiver_id },
						  url: url_send,
						  success:function(data)
						  {
  							GetChatHistory(receiver_id)		 
						  },
						  error: function (jqXHR, status, err) {
						  }
 					});
					
                        }
                    }

                });	 
		
		ScrollDown();
		$('.message').val('');
		$('.message').focus();
	}else{
		$('.message').focus();
	}
}
function ScrollDown(){
	var elmnt = document.getElementById("dumppy");
    var h = elmnt.scrollHeight;
   $('#dumppy').animate({scrollTop: h}, 1000);
}
window.onload = ScrollDown();

function GetChatHistory(receiver_id){

				var url_send = $('#history_url').val();
				$.ajax({
  						  url: url_send+'?receiver_id='+receiver_id,
						  success:function(data)
						  {
						  	$('#dumppy ul').html(data);
							ScrollDown();
						  },
						  error: function (jqXHR, status, err) {
						  }
 					});
}

setInterval(function(){ 
	// $("#userslist").load(location.href + " #userslist>*", "");
	var receiver_id = $('#ReciverId_txt').val();
	if(receiver_id!=''){GetChatHistory(receiver_id);}
}, 3000);
