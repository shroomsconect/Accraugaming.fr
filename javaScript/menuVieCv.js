//definition des variables
var menuVie = 0,
sousMenuVie1 = 1,
sousMenuVie2 = 1,
elementMenuVie1 = document.getElementById('menuVieProfessionelle'),
elementMenuVie2 = document.getElementById('menuViePersonnelle'),
elementMenuVie3 = document.getElementById('sousMenuVie1'),
elementMenuVie4 = document.getElementById('sousMenuVie2'),
elementMenuVie5 = document.getElementById('sousMenuVie3'),
elementMenuVie6 = document.getElementById('sousMenuVie4'),
elementMenuVie7 = document.getElementById('sousMenuVie5'),
elementMenuVie8 = document.getElementById('sousMenuVie6'),
elementSousMenuVie1 = document.getElementById('hiddenMenuVie1'),
elementSousMenuVie2 = document.getElementById('hiddenMenuVie2'),
elementSousMenuVieBlock1 = document.getElementById('sousMenuVieBlock1'),
elementSousMenuVieBlock2 = document.getElementById('sousMenuVieBlock2'),
elementSousMenuVieBlock3 = document.getElementById('sousMenuVieBlock3'),
elementSousMenuVieBlock4 = document.getElementById('sousMenuVieBlock4'),
elementSousMenuVieBlock5 = document.getElementById('sousMenuVieBlock5'),
elementSousMenuVieBlock6 = document.getElementById('sousMenuVieBlock6');



function menuVieChange1()
{
	if(menuVie === 1)
    {
		elementSousMenuVie1.style.display = "none";
		elementSousMenuVie2.style.display = "flex";
		elementMenuVie2.style.background = "red";
		elementMenuVie1.style.background = "pink";
		menuVie = 0;
		elementSousMenuVieBlock1.style.display = "none";
		elementSousMenuVieBlock2.style.display = "none";
		elementSousMenuVieBlock3.style.display = "none";
		elementSousMenuVieBlock4.style.display = "none";
		elementSousMenuVieBlock5.style.display = "none";
		elementSousMenuVieBlock6.style.display = "none";
		if (sousMenuVie1 === 1)
        {
			elementSousMenuVieBlock1.style.display = "flex";
		}
        else if (sousMenuVie1 === 2)
        {
			elementSousMenuVieBlock2.style.display = "flex";
		}
        else if (sousMenuVie1 === 3)
        {
			elementSousMenuVieBlock3.style.display = "flex";
		}
	}
}



function menuVieChange2()
{
	if(menuVie === 0)
    {
		elementSousMenuVie2.style.display = "none";
		elementSousMenuVie1.style.display = "flex";
		elementMenuVie1.style.background = "red";
		elementMenuVie2.style.background = "pink";
		menuVie = 1;
		elementSousMenuVieBlock1.style.display = "none";
		elementSousMenuVieBlock2.style.display = "none";
		elementSousMenuVieBlock3.style.display = "none";
		elementSousMenuVieBlock4.style.display = "none";
		elementSousMenuVieBlock5.style.display = "none";
		elementSousMenuVieBlock6.style.display = "none";
		if (sousMenuVie2 === 1)
        {
			elementSousMenuVieBlock4.style.display = "flex";
		}
        else if (sousMenuVie2 === 2)
        {
			elementSousMenuVieBlock5.style.display = "flex";
		}
        else if (sousMenuVie2 === 3)
        {
			elementSousMenuVieBlock6.style.display = "flex";
		}
	}
}



function menuVieChange3()
{
	if(sousMenuVie1 !== 1)
    {
		elementMenuVie4.style.background = "red";
		elementMenuVie5.style.background = "red";
		elementMenuVie3.style.background = "pink";
		sousMenuVie1 = 1;
		elementSousMenuVieBlock2.style.display = "none";
		elementSousMenuVieBlock3.style.display = "none";
		elementSousMenuVieBlock1.style.display = "flex";
	}
}



function menuVieChange4()
{
	if(sousMenuVie1 !== 2)
    {
		elementMenuVie3.style.background = "red";
		elementMenuVie5.style.background = "red";
		elementMenuVie4.style.background = "pink";
		sousMenuVie1 = 2;
		elementSousMenuVieBlock1.style.display = "none";
		elementSousMenuVieBlock3.style.display = "none";
		elementSousMenuVieBlock2.style.display = "flex";
	}
}



function menuVieChange5()
{
	if(sousMenuVie1 !== 3)
    {
		elementMenuVie4.style.background = "red";
		elementMenuVie3.style.background = "red";
		elementMenuVie5.style.background = "pink";
		sousMenuVie1 = 3;
		elementSousMenuVieBlock1.style.display = "none";
		elementSousMenuVieBlock2.style.display = "none";
		elementSousMenuVieBlock3.style.display = "flex";
	}
}



function menuVieChange6()
{
	if(sousMenuVie2 !== 1)
    {
		elementMenuVie7.style.background = "red";
		elementMenuVie8.style.background = "red";
		elementMenuVie6.style.background = "pink";
		sousMenuVie2 = 1;
		elementSousMenuVieBlock5.style.display = "none";
		elementSousMenuVieBlock6.style.display = "none";
		elementSousMenuVieBlock4.style.display = "flex";
	}
}



function menuVieChange7()
{
	if(sousMenuVie2 !== 2)
    {
		elementMenuVie6.style.background = "red";
		elementMenuVie8.style.background = "red";
		elementMenuVie7.style.background = "pink";
		sousMenuVie2 = 2;
		elementSousMenuVieBlock4.style.display = "none";
		elementSousMenuVieBlock6.style.display = "none";
		elementSousMenuVieBlock5.style.display = "flex";
	}
}



function menuVieChange8()
{
	if(sousMenuVie2 !== 3)
    {
		elementMenuVie7.style.background = "red";
		elementMenuVie6.style.background = "red";
		elementMenuVie8.style.background = "pink";
		sousMenuVie2 = 3;
		elementSousMenuVieBlock4.style.display = "none";
		elementSousMenuVieBlock5.style.display = "none";
		elementSousMenuVieBlock6.style.display = "flex";
	}
}


function changeColorRed(element,idElement)
{
	if (idElement === 1 && menuVie === 1 ||
        idElement === 2 && menuVie === 0 ||
        idElement === 3 && sousMenuVie1 !== 1 ||
        idElement === 4 && sousMenuVie1 !== 2 ||
        idElement === 5 && sousMenuVie1 !== 3 ||
        idElement === 6 && sousMenuVie2 !== 1 ||
        idElement === 7 && sousMenuVie2 !== 2 ||
        idElement === 8 && sousMenuVie2 !== 3)
    {
		element.style.background = "red";
	}
}


function changeColorPink(element)
{
	element.style.background = "pink";
}
