function gradient(id, level)
{
	var box = document.getElementById(id);
	box.style.opacity = level;
	box.style.MozOpacity = level;
	box.style.KhtmlOpacity = level;
	box.style.filter = "alpha(opacity=" + level * 100 + ")";
	box.style.display="block";
	return;
}

function fadein(id) 
{
	var level = 0;
	while(level <= 1)
	{
		setTimeout( "gradient('" + id + "'," + level + ")", (level* 1000) + 10);
		level += 0.01;
	}
}

function openSettingsPageBox(boxDiv, titleDiv, formtitle, fadin) {
	var box = document.getElementById(boxDiv);
	document.getElementById('filter').style.display='block';

	var btitle = document.getElementById(titleDiv);
	btitle.innerHTML = formtitle;

	if(fadin)
	{
	 gradient(boxDiv, 0);
	 fadein(boxDiv);
	}
	else
	{ 	
	box.style.display='block';
	}
	document.body.style.overflow = "hidden";
}

// Open the lightbox
function opendocpagebox(boxDiv, titleDiv, formtitle, fadin, catId) {
  var box = document.getElementById(boxDiv);
  document.getElementById('filter').style.display='block';

  var btitle = document.getElementById(titleDiv);
  btitle.innerHTML = formtitle;
  
  if(fadin)
  {
	 gradient(boxDiv, 0);
	 fadein(boxDiv);
  }
  else
  { 	
    box.style.display='block';
  }
  document.body.style.overflow = "hidden";
  document.getElementById('category').value = catId;

}

function openbox(formtitle, fadin, reviewId)
{
  var box = document.getElementById('box'); 
  document.getElementById('filter').style.display='block';

  if(fadin)
  {
	 gradient("box", 0);
	 fadein("box");
  }
  else
  { 	
    box.style.display='block';
  }
  document.body.style.overflow = "hidden";
  popuateBox(reviewId);
}

function openBoxAndPopulate(formTitle, fadin, newsId) {
	openbox(formTitle, fadin);
	populateValues(newsId);
	
}

var xmlHttp;
function populateValues(newsId) {
	document.getElementById("info").innerHTML = "Please wait loading data...";
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
	var url="../bl/getInfo.php?id=" + newsId + "&type=news";
	xmlHttp.onreadystatechange = populate;
	xmlHttp.open("GET", url, true);
	xmlHttp.send(null);
}

function populate() {
	if (xmlHttp.readyState == 4 || xmlHttp.readyState==200) {
		var response = xmlHttp.responseText;
		document.getElementById("info").innerHTML = "";
		var data = response.split(",");
		document.getElementById("id").value = data[0];
		document.getElementById("type_" + data[1]).checked = true;
		if (data[1] == 2) {
			showRow();	
		}
		document.getElementById("url").value = data[2];
		document.getElementById("title").value = data[3];
		document.getElementById("desc").value = data[4];
		if (data[5] == yes) {
			document.getElementById("pyes").checked = true;
		} else {
			document.getElementById("pno").checked = true;
		}
	}
}

// Close the lightbox
function closebox() {
   	document.getElementById('box').style.display='none';
   	document.getElementById('filter').style.display='none';
   	document.forms[0].reset();
	document.getElementById("info").innerHTML = '';
   	for(i=0;i<document.forms[0].length-2;i++) {
		document.forms[0].elements[i].style.border = 'thin solid #ABADB4';		
   	}
	document.getElementById('frm').style.display = 'block';
	document.getElementById('status').style.display = 'none';
	document.body.style.overflow = "auto";
}

function closebox(boxDiv) {
	document.getElementById(boxDiv).style.display='none';
   	document.getElementById('filter').style.display='none';
	document.body.style.overflow = "auto";
}

function resetBox(divName, tagName) {
  rows = document.getElementsByName(tagName);
  for (i=0;i<rows.length;i) {
    rows[0].remove();
  }
  closebox(divName);
}

function openDocDetails(docId) {
  var box = document.getElementById('docDetailsBox');
  document.getElementById('filter').style.display='block';
  gradient('docDetailsBox', 0);
  fadein('docDetailsBox');
  document.body.style.overflow = "hidden";
}