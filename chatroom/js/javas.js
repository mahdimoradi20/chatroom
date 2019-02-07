//Script for Showing Warning
//***************************


var res = window.location.toString();
var i = res.indexOf('=')
res = res.substring(i+1);

var element = document.getElementById('err');


if(res == 'empty'){
	element.style.visibility = 'visible';
	element.innerHTML = 'User name cant be empty!!';
}


