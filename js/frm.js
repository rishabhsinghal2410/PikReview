function getValue(field) {
	if (field.type == 'select-one' || field.type == 'text' || field.type == 'textarea') {
		if(field.value != '') {
			return field.value
		}
	}
	else if(field.type == 'checkbox') {
		if (field.checked == true) {
			return field.value;
		}
	}
	return null;
}

function generateReqParam() {
	var reqParam;
	var value;
	for(i=0; i < document.forms[0].length; i++) {
		value = getValue(document.forms[0].elements[i]);
		if(value != null) {
			if(reqParam != null) {
				reqParam += '&';
			}
			else {
				reqParam = '?';
			}
			reqParam += document.forms[0].elements[i].name + '=' + value + '';
		}
	}
	return reqParam;
}

function validate_email(field) {
	with (field) {
		apos=value.indexOf("@");
		dotpos=value.lastIndexOf(".");
		if (apos<1||dotpos-apos<2) {
			return false;
		}
		else {
			return true;
		}
	}
}

function validate_phoneNo(field) {
	var i;
	var val = field.value;
	if(val.length<10) {
		return false;
	}
	for (i = 0; i < val.length; i++)
	{   
		// Check that current character is number.
		var ch = val.charAt(i);
		if (((ch < "0") || (ch > "9"))) return false;
	}
	// All characters are numbers.
	return true;
}

function changeBorder(field) {
	field.style.border = 'thin solid #ABADB4';
}

function isValidPhoto(photo) {
	var filext = photo.substring(photo.lastIndexOf(".")+1).toLowerCase();
	if(filext == "jpg" || filext == "jpeg" || filext == "png" || filext == "bmp") {
		return true;
	}
	return false;
}

function validateLogin() {
  if (document.getElementById("landing_url").value == "") {
  
  }
  if (document.getElementById("user-name") {
  
  }
if (document.getElementById("pass") {
  
  }

if (document.getElementById("cpass") {
  
  }
if (document.getElementById("name") {
  
  }
if (document.getElementById("contact-no")
if (document.getElementById("email")
}

function validateRegister() {

}

function validateForm() {
    if(document.getElementById("landing_url").value == "") {
		error = true;
		info = "Please enter a valid URL.";
		document.getElementById("landing_url_err").style.color = 'red';
		document.getElementById("landing_url_err").innerHTML = info;
	}
	if(error == true) {
		return false;
	}
}
function validateForm1() {
	var error = false;
	var info = "You have the following errors:";
	if(document.getElementById("photo").value == "" || !isValidPhoto(document.getElementById("photo").value)) {
		error = true;
		info += "<li>Please select a valid photo</li>";
	}
	if(document.getElementById("title").value == "") {
		error = true;
		info += "<li>Please enter a title</li>";
	}
	if(document.getElementById("desc").value == "") {
		error = true;
		info += "<li>Please enter a description</li>";
	}
	if(error == true) {
		document.getElementById("info").style.color = 'red';
		document.getElementById("info").innerHTML = info;
		return false;
	}
	else{
		document.getElementById("info").innerHTML = '';
		return true;
	}
}
	var xmlHttp;
	var xmlHttp;
	function sendMail() {
		document.getElementById("info").innerHTML = "Please wait sending request...";
		document.getElementById("info").style.color = 'green';
		if (typeof XMLHttpRequest != "undefined") {
			xmlHttp= new XMLHttpRequest();
       	}
       	else if (window.ActiveXObject) {
   			xmlHttp= new ActiveXObject("Microsoft.XMLHTTP");
       	}
		if (xmlHttp==null){
		    alert ("Browser does not support XMLHTTP Request");
			return;
		}
		var url="bl/sendMail.php";
		url += generateReqParam();
		xmlHttp.onreadystatechange = stateChange;
		xmlHttp.open("GET", url, true);
		xmlHttp.send(null);
	}

	function stateChange() {
		if (xmlHttp.readyState == 4 || xmlHttp.readyState==200) {
	 		document.getElementById("info").innerHTML = xmlHttp.responseText;
			document.getElementById("frm").style.display = 'none';
			document.getElementById("status").style.display = 'block';
	 	}
	}

	function validateAndSend() {
		if(validateForm() != false) {
			sendMail();
		}
	}
	
	function validateAndSubmitNews() {
		document.forms["newsFrm"].submit;
	}