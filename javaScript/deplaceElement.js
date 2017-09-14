//Definition des variables
var element = undefined;//element a deplacer
var posx = undefined;//position horizontale
var posxfixe = undefined;//position horizontale fixe
var tailleWidthElement = undefined;//position horizontale fixe
var posy = undefined;//position verticale
var posyfixe = undefined;//position verticale fixe
var tailleHeightElement = undefined;//position verticale fixe
var selectionButton = undefined;//nombre de la touche à modifier 1,2,3 ou 4
var vitesse = 30;//vitesse de deplacement
var toucheLeft = 37;//fléche directionnelle gauche
var toucheUp = 38;//fléche directionnelle haut
var toucheRight = 39;//fléche directionnelle droite
var toucheBottom = 40;//fléche directionnelle bas
var choiceButton = false;//défini la possibilité de modifier les touche directionnelle
var infoBulleClicker = document.getElementById('infoBulleClicker');
infoBulleClicker.style.display = "flex";
document.onkeydown = deplaceElement;// deplaceElement est une fonction que j'ai faite
/*window.onload = getDataDocument;
document.onclick = getDataDocument;
function getDataDocument(elem){
    console.log(elem);
}*/
function choiceButtonMove(){
    selectionButton = 1;
    choiceButton = true;
    var elem = document.getElementById('divInfoBulleTouche');
    $(elem).remove();
    elem = document.getElementById('getTouche');
    $(elem).show();
}


function getElement(elementInterne){
    if(elementInterne.id)
        var idOfElement = elementInterne.id;
        element = document.getElementById(idOfElement);
        element.style.position = "relative";
        //Definition de la valeur HORIZONTALE
        posxfixe = element.offsetLeft-(element.offsetLeft*2);
        tailleWidthElement = element.offsetWidth;
        posx = 0;
        //Definition de la valeur VERTICALE
        posyfixe = element.offsetTop-(element.offsetTop*2);
        tailleHeightElement = element.offsetHeight;
        posy = 0;
            /*posy = window.getComputedStyle(element, "NULL").getPropertyValue("top");
            var y = posy.length;
            posy = parseInt(posy.substring(0,y-2));*/
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



function deplaceElement(event)
{
        //var touche = window.event ? event.keyCode : event.which;
    var touche = event.which;
    // la variable touche récupère le code de la touche du clavier
    if (choiceButton)
    {
        if (selectionButton == 1)
        {
            toucheLeft = touche;
            selectionButton = 2;
            var elem = document.getElementById('getToucheDirection');
            elem.innerHTML = "HAUT";

        }
        else if (selectionButton == 2)
        {
            toucheUp = touche;
            selectionButton = 3;
            var elem = document.getElementById('getToucheDirection');
            elem.innerHTML = "DROITE";
        }
        else if (selectionButton == 3)
        {
            toucheRight = touche;
            selectionButton = 4;
            var elem = document.getElementById('getToucheDirection');
            elem.innerHTML = "BAS";
        }
        else if (selectionButton == 4)
        {
            toucheBottom = touche;
            selectionButton = undefined;
            choiceButton = false;
            hiddenInfoBulleClicker();
        }
    }
    else
    {
        if(touche == toucheLeft)
        {
            if (posx-vitesse > posxfixe)
            {
                posx -= vitesse;
                element.style.left = posx + 'px';
            }
            else
            {
                posx = posxfixe;
                element.style.left = posx + 'px';
            }
        }
        else if(touche == toucheUp)
        {
            if (posy-vitesse > posyfixe)
            {
                posy -= vitesse;
                element.style.top = posy + 'px';
            }
            else
            {
                posy = posyfixe;
                element.style.top = posy + 'px';
            }
        }
        else if(touche == toucheRight)
        {
            if (posx + vitesse < tailleWidthWindow + posxfixe - tailleWidthElement)
            {
                posx += vitesse;
                element.style.left = posx + 'px';
            }
            else
            {
                posx = tailleWidthWindow + posxfixe - tailleWidthElement;
                element.style.left = posx + 'px';
            }
        }
        else if(touche == toucheBottom)
        {
            if (posy + vitesse < tailleHeightWindow + posyfixe - tailleHeightElement)
            {
                posy += vitesse;
                element.style.top = posy + 'px';
            }
            else
            {
                posy = tailleHeightWindow + posyfixe - tailleHeightElement;
                element.style.top = posy + 'px';
            }
        }
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
            element.style.left = posx + 'px';
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
            element.style.top = posy + 'px';
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
            element.style.left = posx + 'px';
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
            element.style.top = posy + 'px';
        }
    }
}
