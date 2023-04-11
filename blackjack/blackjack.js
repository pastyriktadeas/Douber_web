 //prompt for name 
   
  /*var jmeno = prompt("Zadejte vaše jméno"); 
document.write( "<h2>" + jmeno +  "</h2>");
*/

//var

var nahoda, nahoda2, nahoda3, nahoda4, nahoda5, nahoda6;
var soucet = 0, soucet2 = 0, soucet3 = 0, soucet4 = 0, soucet5 = 0;

var vysledek;

var nahoda_bot, nahoda2_bot, nahoda3_bot;
var soucet_bot = 0;


//funkce start - 2x random číslo od 1 - 11 (nesmí se opakovat) pak se čísla vypíšou a sečtou


function start(){
    
    nahoda = Math.floor(Math.random() * 11 +1);
    do{
        nahoda2 = Math.floor(Math.random() * 11 +1);
    }while (nahoda == nahoda2);
    
    document.getElementById("heading").innerHTML = ("první číslo: ") + nahoda;  
    document.getElementById("heading2").innerHTML = ("druhé číslo: ") + nahoda2;
    soucet =  nahoda + nahoda2;
    document.getElementById("heading3").innerHTML = soucet;

    




    //dealer


    nahoda_bot = Math.floor(Math.random() * 11 +1);
    do{
        nahoda2_bot = Math.floor(Math.random() * 11 +1);
    }while (nahoda_bot == nahoda2_bot);
    
    document.getElementById("prvni_cislo_bot").innerHTML = ("první číslo: ") + nahoda_bot;  
    document.getElementById("druhe_cislo_bot").innerHTML = ("druhé číslo: ?") ;
    soucet_bot =  nahoda_bot + nahoda2_bot;
    document.getElementById("soucet_cislo_bot").innerHTML = ("?");

    
}

    // jedno random číslo od 1 - 11 se připočte k naší stávající hodnotě

function pridatkartu(){
    
    do{
        nahoda3 = Math.floor(Math.random() * 11 +1);
    } while(nahoda3 == nahoda2 || nahoda3 == nahoda)
    
    document.getElementById("heading4").innerHTML =("další číslo: " + nahoda3);
    soucet = nahoda3 + soucet;
    document.getElementById("heading3").innerHTML = soucet;
    document.getElementById("heading3").innerHTML = soucet;


}
    // jedno random číslo od 1 - 11 se připočte k naší stávající hodnotě

function pridatkartu2(){
    do{
        nahoda4 = Math.floor(Math.random() * 11 +1);
    } while(nahoda4 == nahoda3 || nahoda4 == nahoda2 || nahoda4 == nahoda)
    
    document.getElementById("heading5").innerHTML =("další číslo: " + nahoda4);
    
    soucet = nahoda4 + soucet;
    document.getElementById("heading3").innerHTML = soucet;
}
    // jedno random číslo od 1 - 11 se připočte k naší stávající hodnotě

function pridatkartu3(){
    do{
        nahoda5 = Math.floor(Math.random() * 11 +1);
    } while(nahoda5 == nahoda4 || nahoda5 == nahoda3 || nahoda5 == nahoda2 || nahoda5 == nahoda)
    
    document.getElementById("heading6").innerHTML =("další číslo: " + nahoda5);
    
    soucet = nahoda5 + soucet;
    document.getElementById("heading3").innerHTML = soucet;
}
    // jedno random číslo od 1 - 11 se připočte k naší stávající hodnotě

function pridatkartu4(){
    do{
        nahoda6 = Math.floor(Math.random() * 11 +1);
    } while(nahoda6 == nahoda5 || nahoda6 == nahoda4 || nahoda6 == nahoda3 || nahoda6 == nahoda2 || nahoda6 == nahoda)
    
    document.getElementById("heading7").innerHTML =("další číslo: " + nahoda6);
    
    soucet = nahoda6 + soucet;
    document.getElementById("heading3").innerHTML = soucet;
}
    //funkce stay zastaví hru a rozhodne jestli jsi vyhrál nebo ne
    

function stay(){
    
    
    //dealer (IQ bota)
    
    if (soucet_bot < 16){ 
        nahoda3_bot = Math.floor(Math.random() * 11 +1);
        do {
            soucet_bot = nahoda3_bot + soucet_bot;
        }while (soucet_bot > 20);
        
        document.getElementById("soucet_cislo_bot").innerHTML = soucet_bot;
        
    }else {
        document.getElementById("soucet_cislo_bot").innerHTML = soucet_bot;
    }

    //win/lose

    if(soucet_bot == soucet) {
        alert("remíza!")
    }else {
    
        if (soucet == 21) {
        alert("Vyhrál jsi!")
        }else{
            
            if (soucet > 21) {
            alert("Prohrál jsi!")
            }else {
                
                if(soucet - 21 > soucet_bot - 21) {
                    alert("Vyhrál jsi!")
                }else alert("Prohrál jsi!")
            }
        }
    }
}