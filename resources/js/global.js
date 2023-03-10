
// Variables Globale

export var now = Date.now();
export var januaryFirst = 1672527600000;
export var dayYear2022 = 365;
export var seconds = 86400;
export var numberDayFromJanuaryFirst = (now - januaryFirst)/86400000;
export var numberFrench2023 = 68042591; 


//  Fonctions Globales 

export function countByDay(e) {
    return e / dayYear2022;
};

export function totalCounter2022(e) {
    return e * numberDayFromJanuaryFirst;
};

export function countIncreaseBySecond(e){
    let second = e / seconds;
    return countByDay(second);
};

export function countTotal(e){
    let byDay = e / dayYear2022;
    return totalCounter2022(byDay);
}


// Other
export var refreshEveryOneSecond = 1000;


// Here comes the counter for the flash message
var deficitByDay = 452054794.5;
var deficitTotalCounter = (numberDayFromJanuaryFirst * deficitByDay);
export function deficitTotalCounterImport() {
var deficitTotalCounterNode = document.getElementById('deficitTotalCounter');
deficitTotalCounterNode.innerHTML = new Intl.NumberFormat('de-DE', { style: 'currency', currency: 'EUR' }).format(deficitTotalCounter)
setInterval(function() {
    //Deficit general
    deficitTotalCounter += (deficitByDay / (seconds * 20));
    deficitTotalCounterNode.innerHTML = new Intl.NumberFormat('en-US').format(Math.round(deficitTotalCounter * 1) / 1 );
   
}, (1000 / 20));
}
if (deficitTotalCounter > 30979300000)
{
    document.getElementById('message').innerHTML = 'le chiffre est de ';
    document.getElementById('div_message').classList.remove('hidden');
    setTimeout(function() {
        document.getElementById('div_message').classList.add('hidden');
    }, 10000);
    
}

console.log(deficitTotalCounter)



    
