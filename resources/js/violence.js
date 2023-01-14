//Calculate for general counter 
var now = Date.now();
var januaryFirst = 1672527600000;
var dayYear = 365;
var seconds = 86400;
var numberDayFromJanuaryFirst = (now - januaryFirst)/86400000;

// Violence Part
// Coups et blessures
var delinquanceByDay = 843.01;
var delinquanceTotalCounter = (numberDayFromJanuaryFirst * delinquanceByDay);
var delinquanceTotalCounterNode = document.getElementById('delinquanceTotalCounter');
delinquanceTotalCounterNode.innerHTML = Math.round(delinquanceTotalCounter);   
setInterval(function() {
    delinquanceTotalCounter += (delinquanceByDay / seconds);
    delinquanceTotalCounterNode.innerHTML = Math.round(delinquanceTotalCounter);
}, 1000); 

// Viols 
var rapeByDay = 205;
var rapeTotalCounter = (numberDayFromJanuaryFirst * rapeByDay);
var rapeTotalCounterNode = document.getElementById('rapeTotalCounter');
rapeTotalCounterNode.innerHTML = Math.round(rapeTotalCounter);
//Violences Counters
//Counter
setInterval(function() {
    rapeTotalCounter += (rapeByDay / seconds);
    rapeTotalCounterNode.innerHTML = Math.round(rapeTotalCounter);
}, 1000);
 