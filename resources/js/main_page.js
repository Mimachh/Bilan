
 
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
console.log(diffDays);
var diffHours = Math.ceil(Math.abs(now - nextElection)/ (1000 * 60 * 60));
console.log(diffHours);
var diffMinutes = Math.ceil(Math.abs(now - nextElection)/ (1000 * 60));
console.log(diffMinutes);
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

 


// Countdown macron 
function timingCalc(endtime) {
    'use strict';
    var timeTotal = Date.parse(endtime) - Date.parse(new Date()),
        timeSeconds = Math.floor((timeTotal / 1000) % 60),
        timeMinutes = Math.floor((timeTotal / 1000 / 60) % 60),
        timeHours = Math.floor((timeTotal / (1000 * 60 * 60)) % 24),
        timeDays = Math.floor(timeTotal / (1000 * 60 * 60 * 24));
    
    return {
        'total': timeTotal,
        'seconds': timeSeconds,
        'minutes': timeMinutes,
        'hours': timeHours,
        'days': timeDays
    };
    
}

// var textTest = String.fromCharCode(65, 108, 97, 97, 65, 104, 109, 101, 100);
// document.getElementById('num').innerHTML = textTest;

function installCalc(id, endtime) {
    'use strict';
    
    var calc = document.getElementById(id),
        daySpan = calc.querySelector(".days"),
        hourSpan = calc.querySelector(".hours"),
        minSpan = calc.querySelector(".minutes"),
        secSpan = calc.querySelector(".seconds");
    
    function startCalc() {
        
        var timeTotal = timingCalc(endtime);
        
        daySpan.innerHTML = timeTotal.days;
        hourSpan.innerHTML = ("0" + timeTotal.hours).slice(-2);
        minSpan.innerHTML = ("0" + timeTotal.minutes).slice(-2);
        secSpan.innerHTML = ("0" + timeTotal.seconds).slice(-2);
        
        if (timeTotal.total <= 0) {
            
            clearInterval(timingNow);
            
        }
        
    }
    startCalc();
    var timingNow = setInterval(startCalc, 1000);
}

var DeadLine = new Date(1808604000000);
console.log(DeadLine);
installCalc("countDiv", DeadLine);