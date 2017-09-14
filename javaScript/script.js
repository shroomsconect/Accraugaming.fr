var date = new Date();
var year = date.getFullYear();
var month = date.getMonth();
if(month < 6){year = year - 1};
var age = year - 1997;
var check;
var mailChecked = false;
var tailleHeightWindow = undefined;
var tailleWidthWindow = undefined;
var positionInfoBulleClicker = document.getElementById("positionInfoBulleClicker");
document.getElementById("age").innerHTML = age;

if (document.documentElement && document.documentElement.clientHeight)
{
	tailleHeightWindow = document.documentElement.clientHeight;
}
else if (document.body && document.body.clientHeight)
{
	tailleHeightWindow = document.body.clientHeight;
}
if (document.documentElement && document.documentElement.clientWidth)
{
	tailleWidthWindow = document.documentElement.clientWidth;
}
else if (document.body && document.body.clientWidth)
{
	tailleWidthWindow = document.body.clientWidth;
}

if (typeof(tailleHeightWindow) == "number" && typeof(positionInfoBulleClicker.offsetTop) == "number")
{
	positionInfoBulleClicker.style.top = ((tailleHeightWindow/3) - (positionInfoBulleClicker.offsetTop)) + "px";
}


function hiddenInfoBulleClicker()
{
	var elem = document.getElementById('infoBulleClicker');
	elem.style.display = "none";
	var elem = document.getElementById('infoBulleRemoveClicker');
	elem.style.display = "flex";
	window.scrollTo(0, 0);
}
function hiddenInfoBulleRemoveClicker()
{
	var elem = document.getElementById('infoBulleRemoveClicker');
	elem.style.display = "none";
}



function checkMessage()
{
	var id = setInterval(inCheckMessage, 20);
	function inCheckMessage()
	{
		if (check)
		{
			clearInterval(id);
			check = false;
		}
		else
		{
			var checkMessage = document.getElementById('message').value.length;
			document.getElementById('caractereInTextarea').innerHTML = checkMessage;
			check = true;
		}
	}
}



function changeOverMenu(menu)
{
	if(menu)
	{
		document.getElementById("hiddenMenuVie2").style.display = "none";
		document.getElementById("hiddenMenuVie1").style.display = "flex";
	}
	else
	{
		document.getElementById("hiddenMenuVie2").style.display = "flex";
		document.getElementById("hiddenMenuVie1").style.display = "none";
	}
}
