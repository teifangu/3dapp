$(document).ready(function(){
	Fancybox.bind("[data-fancybox]", {
		// Your custom options
	});

	setTheme();
});

function swapDrink(selected)
{
	window.history.replaceState(null, null, "?d=" + selected);
	
	document.getElementById("coke-card").style.display = 'none';
	document.getElementById("sprite-card").style.display = 'none';
	document.getElementById("drpepper-card").style.display = 'none';

	document.getElementById("coke-bio").style.display = 'none';
	document.getElementById("sprite-bio").style.display = 'none';
	document.getElementById("drpepper-bio").style.display = 'none';

	document.getElementById(selected + "-card").style.display = 'block';
	document.getElementById(selected + "-bio").style.display = 'block';
}

function getDrink()
{
	var urlParams = new URLSearchParams(window.location.search);
	var drink = urlParams.get('d');
	return drink;
}

function setTheme() {
	if (localStorage.getItem("theme") === null) {
		localStorage.theme = "red";
		document.getElementById("page-theme").setAttribute("href", "../css/red.css");
	} else {
		if (localStorage.theme == "red") {
			document.getElementById("page-theme").setAttribute("href", "../css/red.css");
		} else {
			document.getElementById("page-theme").setAttribute("href", "../css/green.css");
		}
	}
}

function changeTheme() {
	if (localStorage.theme == "red") {
		localStorage.theme = "green";
		document.getElementById("page-theme").setAttribute("href", "../css/green.css");
		
	} else {
		localStorage.theme = "red";
		document.getElementById("page-theme").setAttribute("href", "../css/red.css");
		
	}
}

function hoverRight() {
	document.getElementById("bottle-next-icon").style.display = 'none';
	document.getElementById("bottle-next-icon").style.display = 'none';
}