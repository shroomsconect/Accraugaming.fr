//Definition des variables
var elem = document.getElementById("sousMenuVie1");//element a deplacer
var vitesse = 5;//vitesse de deplacement
//Definition de la valeur HORIZONTALE
var posx = window.getComputedStyle(elem, "NULL").getPropertyValue("left");
var x = posx.length;
posx = parseInt(posx.substring(0,x-2));
var posxfixe = posx;
//Definition de la valeur VERTICALE
var posy = window.getComputedStyle(elem, "NULL").getPropertyValue("top");
var y = posy.length;
posy = parseInt(posy.substring(0,y-2));
var posyfixe = posy;


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
