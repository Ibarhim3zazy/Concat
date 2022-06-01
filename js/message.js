// Send messages

async function sendingMessage() {
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
      document.getElementById("message_text").value = "";
      // alert(text);
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
          test = xmlhttp.responseText.trim();
          if (test == document.getElementById('main_chat').innerHTML) {
            return false;
          }
          test2 = test.split("e?n?d?s?e?n?d?i?n?g?M?e?s?s?a?g?e?").reverse();
          test2.forEach((item, i) => {
            if (item.slice(0, 6) == 'sender') {
              message = item.slice(8);
              document.getElementById('main_chat').innerHTML += '<div class="box_me"><pre class="my_chat">'+message+'</pre><span class="time">11:57 Am</span></div>';
            }else if (item.slice(0, 7) == 'recever') {
              message = item.slice(9);
              document.getElementById('main_chat').innerHTML += '<div class="box_client"><pre class="client_chat">'+message+'</pre><span class="time">11:57 Am</span></div>';
            }
          });
        }
      }
      xmlhttp.open("POST",url,true);
      xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xmlhttp.send("sender_id="+sender_id+"&receiver_id="+receiver_id+"&messages_limit="+messages_limit);
  };
};

window.addEventListener('load', (event) => {
  load_messages();
  // alert(load_messages(1))
  setInterval(function () {
    if (test !== document.getElementById('main_chat').innerHTML) {
      // load_messages(1)
    }
  }, 1000);
  // load_all_messages()
});
