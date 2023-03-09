import { now } from "./global";
import { januaryFirst } from "./global";
import { dayYear2022 } from "./global";
import { seconds } from "./global";
import { numberDayFromJanuaryFirst } from "./global";
import { numberFrench2023 } from "./global";
import { countByDay } from "./global";
import { totalCounter2022 } from "./global";
import { countIncreaseBySecond } from "./global";
import { countTotal } from "./global";
import { refreshEveryOneSecond } from "./global";


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
