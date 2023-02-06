//Calculate for general counter 
var now = Date.now();
var januaryFirst = 1672527600000;
var dayYear2022 = 365;
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

// Fraude Carte Vitale
    var fraudeVitaleTotaleMoyenne = 4000000000 ;
    var fraudeVitaleTotal2023ByDay = fraudeVitaleTotaleMoyenne / dayYear2022;
    // console.log(fraudeVitaleTotal2023ByDay);
    var fraudeVitaleTotal2023Counter = (numberDayFromJanuaryFirst * fraudeVitaleTotal2023ByDay);
    // console.log(fraudeVitaleTotal2023Counter);
    var fraudeVitaleTotal2023CounterNode = document.getElementById('fraudeVitaleTotal2023Counter');
    fraudeVitaleTotal2023CounterNode.innerHTML = new Intl.NumberFormat('de-DE', { style: 'currency', currency: 'EUR' }).format(fraudeVitaleTotal2023Counter);
    setInterval(function() {
        fraudeVitaleTotal2023Counter += (fraudeVitaleTotal2023ByDay / (seconds * 20));
        fraudeVitaleTotal2023CounterNode.innerHTML = new Intl.NumberFormat('de-DE', { style: 'currency', currency: 'EUR' }).format(fraudeVitaleTotal2023Counter);
    }, 1000 / 20);
    // console.log(britishImmigrationByDay2022 / seconds);
