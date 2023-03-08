
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
