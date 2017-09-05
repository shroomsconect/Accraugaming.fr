//Definition des variables
var elem = undefined;//element a deplacer
var posx = undefined;//position horizontale
var posxfixe = undefined;//position horizontale fixe
var posy = undefined;//position verticale
var posyfixe = undefined;//position verticale fixe
var vitesse = 30;//vitesse de deplacement
document.onkeydown = deplaceElement;
/*window.onload = getDataDocument;
document.onclick = getDataDocument;
function getDataDocument(elem){
    console.log(elem);
}*/

function getElement(element){
    if(element.id)
        var idOfElement = element.id;
        elem = document.getElementById(idOfElement);
        elem.style.position = "absolute";
        //Definition de la valeur HORIZONTALE
        posx = window.getComputedStyle(elem, "NULL").getPropertyValue("left");
        var x = posx.length;
        posx = parseInt(posx.substring(0,x-2));
        //Definition de la valeur VERTICALE
        posy = window.getComputedStyle(elem, "NULL").getPropertyValue("top");
        var y = posy.length;
        posy = parseInt(posy.substring(0,y-2));
    return false;
}



function disableScroll(e)
{
if(e.keyCode)
{
	/^(37|38|39|40)$/.test(e.keyCode) && e.preventDefault();
}
else
{
	e.preventDefault();
}

}
addEventListener("keydown", disableScroll, false);



function deplaceElement(event){
    //var touche = window.event ? event.keyCode : event.which;
    var touche = event.which;
    // la variable touche récupère le code de la touche du clavier
    if(touche == 37 & posx-vitesse >= 0)
    {
            posx -= vitesse;
            elem.style.left = posx + 'px';
    }
    else if(touche == 38 & posy-vitesse >= 0)
    {
            posy -= vitesse;
            elem.style.top = posy + 'px';
    }
    else if(touche == 39 & posx < 1300)
    {
            posx += vitesse;
            elem.style.left = posx + 'px';
    }
    else if(touche == 40 & posy < 800)
    {
            posy += vitesse;
            elem.style.top = posy + 'px';
    }
    else if (touche == 41)
    {

    }
}



//fait deplacer l'elememt vers la DROITE
function moveRight()
{
    var id = setInterval(frameRight, vitesse);
    function frameRight()
    {
        if (posx == 350)
        {
            clearInterval(id);
            moveDown();
        }
        else
        {
            posx++;
            elem.style.left = posx + 'px';
        }
    }
}



//fait deplacer l'elememt vers le BAS
function moveDown()
{
    var id = setInterval(frameDown, vitesse);
    function frameDown()
    {
        if (posy == 350)
        {
            clearInterval(id);
            moveLeft();
        }
        else
        {
            posy++;
            elem.style.top = posy + 'px';
        }
    }
}



//fait deplacer l'elememt vers la GAUCHE
function moveLeft()
{
    var id = setInterval(frameLeft, vitesse);
    function frameLeft()
    {
        if (posx == posxfixe)
        {
            clearInterval(id);
            moveUp();
        }
        else
        {
            posx--;
            elem.style.left = posx + 'px';
        }
    }
}



//fait deplacer l'elememt vers le HAUT
function moveUp()
{
    var id = setInterval(frameUp, vitesse);
    function frameUp()
    {
        if (posy == posyfixe)
        {
            clearInterval(id);
            moveRight();
        }
        else
        {
            posy--;
            elem.style.top = posy + 'px';
        }
    }
}
