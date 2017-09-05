var date = new Date();
var year = date.getFullYear();
var month = date.getMonth();
if(month < 6){year = year - 1};
var age = year - 1997;
var check;
var mailChecked = false;
document.getElementById("age").innerHTML = age;



function checkMessage()
{
	var id = setInterval(inCheckMessage, 20);
	function inCheckMessage(){
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



function changeFontMail(id){
	id.style.fontSize = "1.1em";
	id.style.textDecorationLine = "underline";
}
