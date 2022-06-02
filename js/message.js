// Send messages

async function sendingMessage() {
  objDiv = document.getElementById("main_chat");
let formDatafile = new FormData();
formDatafile.append("fileany", inputUploadfiles.files[0]);
formDatafile.append("message", document.getElementById("message_text").value);
formDatafile.append("sender_id", document.getElementById("sender_id").value);
formDatafile.append("receiver_id", document.getElementById("receiver_id").value);
await fetch('message_ajax.php', {
  method: "POST",
  body: formDatafile
}).then(function(response) {
    return response.text().then(function(text) {
      // alert(text);
      document.getElementById("message_text").value = "";
      setTimeout(function () {
        if ( window.history.replaceState ) {
           objDiv.scrollTop = objDiv.scrollHeight;
            window.history.replaceState( null, null,
            window.location.href );
            }
      }, 500)
    });
  });
};

// load messages

function GetXmlHttpObject(){
	if (window.XMLHttpRequest)
		return new XMLHttpRequest();
	if (window.ActiveXObject)
		return new ActiveXObject("Microsoft.XMLHTTP");
	return null;
};
message_array_lenght = [];
message_array_lenght[0] = 0;
function load_messages(messages_limit = 50){
  if (document.getElementById('sender_id').value.trim() != "" &&
    document.getElementById('receiver_id').value.trim() != "") {
			let sender_id = document.getElementById("sender_id").value.trim();
			let receiver_id = document.getElementById("receiver_id").value.trim();
      // document.getElementById('main_chat').innerHTML ='';
      url="message_ajax.php";
      let xmlhttp = GetXmlHttpObject();
      xmlhttp.onreadystatechange=function()
      {
      	if (xmlhttp.readyState==4 && xmlhttp.status==200){
          message_array = xmlhttp.responseText.trim();
          if (message_array == document.getElementById('main_chat').innerHTML) {
            return false;
          }
          message_array = message_array.split("e?n?d?s?e?n?d?i?n?g?M?e?s?s?a?g?e?").reverse();
          message_array.forEach((item, i) => {
            if (item.slice(0, 6) == 'sender') {
              message = item.slice(8);
              if (message_array_lenght[0] !== message) {
                message_array_lenght[0] = message;
              }else {
                // console.log(message);
                return false;
              }
              message_id = message.slice(message.indexOf("m?e?s?s?a?g?e?_?i?d?") + 20,message.indexOf("m?e?s?s?a?g?e?_?r?e?c?e?i?v?e?d?"));
              message_received = message.slice(message.indexOf("m?e?s?s?a?g?e?_?r?e?c?e?i?v?e?d?") + 32,message.indexOf("m?e?s?s?a?g?e?_?s?e?e?n?"));
              message_seen = message.slice(message.indexOf("m?e?s?s?a?g?e?_?s?e?e?n?") + 24,message.indexOf("m?e?s?s?a?g?e?_?t?i?m?e?"));
              message_time = message.slice(message.indexOf("m?e?s?s?a?g?e?_?t?i?m?e?") + 24,message.indexOf("m?e?s?s?a?g?e?_?t?e??x??t?"));
              message_text = message.slice(message.indexOf("m?e?s?s?a?g?e?_?t?e??x??t?") + 26,message.indexOf("e?n?d?s?e?n?d?i?n?g?M?e?s?s?a?g?e?"));
              document.getElementById('main_chat').innerHTML += '<div class="box_me"><pre class="my_chat">'+message_text+'</pre><span class="time">'+message_time+'</span></div>';
            }else if (item.slice(0, 8) == 'receiver') {
              message = item.slice(9);
              if (message_array_lenght[1] !== message) {
                message_array_lenght[1] = message;
              }else {
                // console.log(message);
                return false;
              }
              message_id = message.slice(message.indexOf("m?e?s?s?a?g?e?_?i?d?") + 20,message.indexOf("m?e?s?s?a?g?e?_?r?e?c?e?i?v?e?d?"));
              message_received = message.slice(message.indexOf("m?e?s?s?a?g?e?_?r?e?c?e?i?v?e?d?") + 32,message.indexOf("m?e?s?s?a?g?e?_?s?e?e?n?"));
              message_seen = message.slice(message.indexOf("m?e?s?s?a?g?e?_?s?e?e?n?") + 24,message.indexOf("m?e?s?s?a?g?e?_?t?i?m?e?"));
              message_time = message.slice(message.indexOf("m?e?s?s?a?g?e?_?t?i?m?e?") + 24,message.indexOf("m?e?s?s?a?g?e?_?t?e??x??t?"));
              message_text = message.slice(message.indexOf("m?e?s?s?a?g?e?_?t?e??x??t?") + 26,message.indexOf("e?n?d?s?e?n?d?i?n?g?M?e?s?s?a?g?e?"));
              document.getElementById('main_chat').innerHTML += '<div class="box_client"><pre class="client_chat">'+message_text+'</pre><span class="time">'+message_time+'</span></div>';
            }
          });
        }
      }
      xmlhttp.open("POST",url,true);
      xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xmlhttp.send("sender_id="+sender_id+"&receiver_id="+receiver_id+"&messages_limit="+messages_limit);
  };
};

// to mark seen message
function markSeenMessage() {
  let sender_id = document.getElementById("sender_id").value.trim();
  let receiver_id = document.getElementById("receiver_id").value.trim();
  url="message_ajax.php";
  let xmlhttp = GetXmlHttpObject();
  xmlhttp.onreadystatechange=function()
  {
    if (xmlhttp.readyState==4 && xmlhttp.status==200){
      // alert(xmlhttp.responseText.trim());
    }
  }
  xmlhttp.open("POST",url,true);
  xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xmlhttp.send("sender_id="+sender_id+"&receiver_id="+receiver_id+"&message_seen=message_seen");
}

// to search for chat with

function search_for_chat() {
  let search_peole_Word = document.getElementById("searchWord").value.trim();
  url="general_ajax.php?search_peole_Word="+search_peole_Word;
  let xmlhttp = GetXmlHttpObject();
  xmlhttp.onreadystatechange=function()
  {
    if (xmlhttp.readyState==4 && xmlhttp.status==200){
      document.getElementById('con_message').innerHTML = "";
      result_array = xmlhttp.responseText.trim();
      result_array = result_array.split("e?n?d?s?e?a?r?c?h?r?e?s?u?l?t?").reverse();
      result_array.forEach((item, i) => {
        result_user_id = item.slice(0,item.indexOf("u?s?e?r?f?o?r?m?e?s?s?a?g?e?i?d?"));
        result_user_name = item.slice(item.indexOf("u?s?e?r?f?o?r?m?e?s?s?a?g?e?i?d?") + 32,item.indexOf("p?i?c?p?r?o?f?i?l?e?p?h?o?t?o?"));
        result_user_pic = item.slice(item.indexOf("p?i?c?p?r?o?f?i?l?e?p?h?o?t?o?") + 30,item.indexOf("e?n?d?s?e?a?r?c?h?r?e?s?u?l?t?"));
        if (result_user_id != "") {
          document.getElementById('con_message').innerHTML += '<div class="box" tabindex="1"><div class="img"><img src="profile___pic/'+result_user_pic+'" alt="" width="45px" height="45px" style="border-radius: 50%;"></div><div class="name"><a href="message.php?receiver_id='+result_user_id+'">'+result_user_name+'</a></div></div>';
        }
      });
      }
    }
  xmlhttp.open("GET",url,true);
  xmlhttp.send();
}

// live chating
window.addEventListener('load', (event) => {
  load_messages();
  setTimeout(function () {
    objDiv = document.getElementById("main_chat");
    if ( window.history.replaceState ) {
       objDiv.scrollTop = objDiv.scrollHeight;
        window.history.replaceState( null, null,
        window.location.href );
        }
  }, 100)
  setInterval(function () {
      load_messages(1);
  }, 1000);
});
