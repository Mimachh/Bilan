
 
// Counters 



 

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


// 25 AVRIL 2027 Destitution 
var oldElection = 1650758400000;
var nextElection = 1808604000000;
var numberDayFromOldElection = (now - oldElection)/86400000;
var diffDays = Math.ceil(Math.abs(now - nextElection)/ (1000 * 60 * 60 * 24));
var diffHours = Math.ceil(Math.abs(now - nextElection)/ (1000 * 60 * 60));
var diffMinutes = Math.ceil(Math.abs(now - nextElection)/ (1000 * 60));
var diffDaysNode = document.getElementById('destitution');
diffDaysNode.innerHTML = diffDays;
var percentNextElection = (numberDayFromOldElection / diffDays) * 100;
// PROGRESS BAR
    // const progressElection = document.querySelector('.progress-election-value');

    // function changeWidthProgressElection() {
    //     progressElection.style.width = `${percentNextElection}%`;
    //     progressElection.innerText = `${Math.round((percentNextElection) * 100) / 100}%`;
    // }

    // setInterval(function() {

    // }, 1000, changeWidthProgressElection());


// GROUP ALL COUNTERS


// Economy counters
//
setInterval(function() {
    //Deficit general
    deficitTotalCounter += (deficitByDay / (seconds * 20));
    deficitTotalCounterNode.innerHTML = new Intl.NumberFormat('en-US').format(Math.round(deficitTotalCounter * 1) / 1 );
      
}, (1000 / 20));

 