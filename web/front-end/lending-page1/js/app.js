window.onload = function(){
	// Устанавливаем щтсдшсл события 
	document.getElementById("nav-open").onclick = function () {
		navShow();
	}
	document.getElementById("nav-close").onclick = function () {
		navHide();
	}
	var li = document.getElementsByTagName('li');
	for (var i=0; i<li.length; i++) {
		li[i].onclick = function(){
			navHide();
		}
	}
}

var navShow = function () {
	// Показать меню
	document.getElementById('nav').style.display = 'block';
	document.getElementById("nav-open").style.display = 'none';
}
var navHide = function () {
	// Спрятать меню
	document.getElementById('nav').style.display = 'none';
	document.getElementById("nav-open").style.display = 'inline';
}