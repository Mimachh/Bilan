//Calculate for general counter 
var now = Date.now();
var januaryFirst = 1672527600000;
var dayYear2022 = 365;
var seconds = 86400;
var numberDayFromJanuaryFirst = (now - januaryFirst)/86400000;


//Suicides Agriculteur
    var agriculteurSuicideTotal2022 = 182.5;
    var agriculteurSuicide2023ByDay = agriculteurSuicideTotal2022 / dayYear2022;
    //console.log(agriculteurSuicide2023ByDay);
    var agriculteurSuicide2023Counter = (numberDayFromJanuaryFirst * agriculteurSuicide2023ByDay);
    //console.log(agriculteurSuicide2023Counter);
    var agriculteurSuicide2023CounterNode = document.getElementById('agriculteurSuicide2023Counter');
    agriculteurSuicide2023CounterNode.innerHTML = Math.round(agriculteurSuicide2023Counter);
    setInterval(function() {
        agriculteurSuicide2023Counter += (agriculteurSuicide2023ByDay / seconds);
        agriculteurSuicide2023CounterNode.innerHTML = Math.round(agriculteurSuicide2023Counter);
    }, 1000);
    //console.log(agriculteurSuicide2023ByDay / seconds);
