$(document).ready(function(){
	var i = 0;
	var colors = new Array("green", "orange", 'blue', 'yellow');
	var front = document.getElementByClassName("front");

	function change(){
		document.getElementsByClassName("front")[0].style.backgroundColor = colors[i];
		i++;

		if(i>colors.length){
			i = 0;
		}

		window.setTimeout("change()", 1000);
	}
});

