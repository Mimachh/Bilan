//Calculate for general counter 
var now = Date.now();
var januaryFirst = 1672527600000;
var dayYear = 365;
var seconds = 86400;
var numberDayFromJanuaryFirst = (now - januaryFirst)/86400000;

// ECONOMY PART        
// Deficit Cumul
var deficitByDay = 452054794.5;
var deficitTotalCounter = (numberDayFromJanuaryFirst * deficitByDay);
var deficitTotalCounterNode = document.getElementById('deficitTotalCounter');
deficitTotalCounterNode.innerHTML = new Intl.NumberFormat('de-DE', { style: 'currency', currency: 'EUR' }).format(deficitTotalCounter)
setInterval(function() {
    deficitTotalCounter += (deficitByDay / (seconds * 20));
    deficitTotalCounterNode.innerHTML = new Intl.NumberFormat('de-DE', { style: 'currency', currency: 'EUR' }).format(deficitTotalCounter);
}, (1000 / 20));

// Dette
var detteStart = 2956800000000;
var detteTotalCounter = detteStart + (numberDayFromJanuaryFirst * deficitByDay);
var detteTotalCounterNode = document.getElementById('detteTotalCounter');
detteTotalCounterNode.innerHTML = new Intl.NumberFormat('de-DE', { style: 'currency', currency: 'EUR' }).format(detteTotalCounter)
setInterval(function() {
    detteTotalCounter += (deficitByDay / (seconds * 20));
    detteTotalCounterNode.innerHTML = new Intl.NumberFormat('de-DE', { style: 'currency', currency: 'EUR' }).format(detteTotalCounter);
}, (1000 / 20));