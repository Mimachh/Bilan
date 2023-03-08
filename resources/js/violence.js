

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


// Violence Part
// Coups et blessures
var delinquanceByDay = 843.01;
var delinquanceTotalCounter = (numberDayFromJanuaryFirst * delinquanceByDay);
var delinquanceTotalCounterNode = document.getElementById('delinquanceTotalCounter');
delinquanceTotalCounterNode.innerHTML = Math.round(delinquanceTotalCounter);   
setInterval(function() {
    delinquanceTotalCounter += (delinquanceByDay / seconds);
    delinquanceTotalCounterNode.innerHTML = Math.round(delinquanceTotalCounter);
}, refreshEveryOneSecond); 

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
}, refreshEveryOneSecond);


// DEBUT DES NOUVEAUX CHIFFRES

//  DELITS
    // Cambriolages 
    var cambriolages2022 = 211800;
    var cambriolagesByDay = cambriolages2022 / dayYear2022;
    var cambriolageTotalCounter = (numberDayFromJanuaryFirst * cambriolagesByDay);
    var cambriolageTotalCounterNode = document.getElementById('cambriolageTotalCounter');
    cambriolageTotalCounterNode.innerHTML = Math.round(cambriolageTotalCounter);
    setInterval(function() {
        cambriolageTotalCounter += (cambriolagesByDay / seconds);
        cambriolageTotalCounterNode.innerHTML = Math.round(cambriolageTotalCounter);
    }, refreshEveryOneSecond);

    // Cout total par Français des cambriolages
    var coutTotalcambriolages2022 = 359000000;
    var coutParFrancaisCambriolage2022 = coutTotalcambriolages2022 / numberFrench2023;




    // Cout moyen d'un cambriolage 


    // Nombre de dépôts de plaintes 


    // Violences sexuelles
    var violencesSexuelles2022 = 84500;
    var violencesSexuellesByDay = violencesSexuelles2022 / dayYear2022;
    var violencesSexuellesTotalCounter = (numberDayFromJanuaryFirst * violencesSexuellesByDay);
    var violencesSexuellesTotalCounterNode = document.getElementById('violencesSexuellesTotalCounter');
    violencesSexuellesTotalCounterNode.innerHTML = Math.round(violencesSexuellesTotalCounter);
    setInterval(function() {
        violencesSexuellesTotalCounter += (violencesSexuellesByDay / seconds);
        violencesSexuellesTotalCounterNode.innerHTML = Math.round(violencesSexuellesTotalCounter);
    }, refreshEveryOneSecond);

    // Féminicides
    var feminicides2022 = 111;
    var feminicides2022ByDay = feminicides2022 / dayYear2022;
    var feminicides2022TotalCounter = (numberDayFromJanuaryFirst * feminicides2022ByDay);
    var feminicides2022TotalCounterNode = document.getElementById('feminicides2022TotalCounter');
    feminicides2022TotalCounterNode.innerHTML = Math.round(feminicides2022TotalCounter);
    setInterval(function() {
        feminicides2022TotalCounter += (feminicides2022ByDay / seconds);
        feminicides2022TotalCounterNode.innerHTML = Math.round(feminicides2022TotalCounter);
    }, refreshEveryOneSecond);

    // Coups et blessures volontaires (plus de 15 ans)
    var coupsEtBlessures2022 = 353600;
    var coupsEtBlessures2022ByDay = coupsEtBlessures2022 / dayYear2022;
    var coupsEtBlessures2022TotalCounter = (numberDayFromJanuaryFirst * coupsEtBlessures2022ByDay);
    var coupsEtBlessures2022TotalCounterNode = document.getElementById('coupsEtBlessures2022TotalCounter');
    coupsEtBlessures2022TotalCounterNode.innerHTML = Math.round(coupsEtBlessures2022TotalCounter);
    setInterval(function() {
        coupsEtBlessures2022TotalCounter += (coupsEtBlessures2022ByDay / seconds);
        coupsEtBlessures2022TotalCounterNode.innerHTML = Math.round(coupsEtBlessures2022TotalCounter);
    }, refreshEveryOneSecond);

    // Homicides
    var homicides2022 = 948;
    var homicides2022ByDay = homicides2022 / dayYear2022;
    var homicides2022TotalCounter = (numberDayFromJanuaryFirst * homicides2022ByDay);
    var homicides2022TotalCounterNode = document.getElementById('homicides2022TotalCounter');
    homicides2022TotalCounterNode.innerHTML = Math.round(homicides2022TotalCounter);
    setInterval(function() {
        homicides2022TotalCounter += (homicides2022ByDay / seconds);
        homicides2022TotalCounterNode.innerHTML = Math.round(homicides2022TotalCounter);
    }, refreshEveryOneSecond);

    // Vols avec armes (armes à feu, armes blanches ou par destination)
    var volsAvecArmes2022 = 8600;
    var volsAvecArmes2022ByDay = volsAvecArmes2022 / dayYear2022;
    var volsAvecArmes2022TotalCounter = (numberDayFromJanuaryFirst * volsAvecArmes2022ByDay);
    var volsAvecArmes2022TotalCounterNode = document.getElementById('volsAvecArmes2022TotalCounter');
    volsAvecArmes2022TotalCounterNode.innerHTML = Math.round(volsAvecArmes2022TotalCounter);
    setInterval(function() {
        volsAvecArmes2022TotalCounter += (volsAvecArmes2022ByDay / seconds);
        volsAvecArmes2022TotalCounterNode.innerHTML = Math.round(volsAvecArmes2022TotalCounter);
    }, refreshEveryOneSecond);

    // WITH FUNCTION


    // Vols violents sans arme
    var volsViolentsSansArme2022 = 59700;
    var volsViolentsSansArme2022TotalCounter = countTotal(volsViolentsSansArme2022);
    var volsViolentsSansArme2022TotalCounterNode = document.getElementById('volsViolentsSansArme2022TotalCounter');
    volsViolentsSansArme2022TotalCounterNode.innerHTML = Math.round(volsViolentsSansArme2022TotalCounter);
    setInterval(function() {
        volsViolentsSansArme2022TotalCounter += countIncreaseBySecond(volsViolentsSansArme2022);
        volsViolentsSansArme2022TotalCounterNode.innerHTML = Math.round(volsViolentsSansArme2022TotalCounter);
    }, refreshEveryOneSecond);

    // Vols sans violence contre des personnes
    var volsSansViolence2022 = 663700;
    var volsSansViolence2022TotalCounter = countTotal(volsSansViolence2022);
    var volsSansViolence2022TotalCounterNode = document.getElementById('volsSansViolence2022TotalCounter');
    volsSansViolence2022TotalCounterNode.innerHTML = Math.round(volsSansViolence2022TotalCounter);
    setInterval(function() {
        volsSansViolence2022TotalCounter += countIncreaseBySecond(volsSansViolence2022);
        volsSansViolence2022TotalCounterNode.innerHTML = Math.round(volsSansViolence2022TotalCounter);
    }, refreshEveryOneSecond);
  
    // var volsSansViolence2022 = 663700;
    // var volsSansViolence2022ByDay = volsSansViolence2022 / dayYear2022;
    // var volsSansViolence2022TotalCounter = (numberDayFromJanuaryFirst * volsSansViolence2022ByDay);
    // var volsSansViolence2022TotalCounterNode = document.getElementById('volsSansViolence2022TotalCounter');
    // volsSansViolence2022TotalCounterNode.innerHTML = Math.round(volsSansViolence2022TotalCounter);
    // setInterval(function() {
    //     volsSansViolence2022TotalCounter += (volsSansViolence2022ByDay / seconds);
    //     volsSansViolence2022TotalCounterNode.innerHTML = Math.round(volsSansViolence2022TotalCounter);
    // }, 1000);



    // Vols de véhicules (automobiles ou deux roues motorisés)
    var volsVehicules2022 = 133800;
    var volsVehicules2022TotalCounter = countTotal(volsVehicules2022);
    var volsVehicules2022TotalCounterNode = document.getElementById('volsVehicules2022TotalCounter');
    volsVehicules2022TotalCounterNode.innerHTML = Math.round(volsVehicules2022TotalCounter);
    setInterval(function() {
        volsVehicules2022TotalCounter += countIncreaseBySecond(volsVehicules2022);
        volsVehicules2022TotalCounterNode.innerHTML = Math.round(volsVehicules2022TotalCounter);
    }, refreshEveryOneSecond);


    // Vols dans les véhicules
    var volsDansVehicules2022 = 246400;
    var volsDansVehicules2022TotalCounter = countTotal(volsDansVehicules2022);
    var volsDansVehicules2022TotalCounterNode = document.getElementById('volsDansVehicules2022TotalCounter');
    volsDansVehicules2022TotalCounterNode.innerHTML = Math.round(volsDansVehicules2022TotalCounter);
    setInterval(function() {
        volsDansVehicules2022TotalCounter += countIncreaseBySecond(volsDansVehicules2022);
        volsDansVehicules2022TotalCounterNode.innerHTML = Math.round(volsDansVehicules2022TotalCounter);
    }, refreshEveryOneSecond);



    // Vols d'accessoires sur véhicules
    var volsAccessoiresSurVehicules2022 = 100700;
    var volsAccessoiresSurVehicules2022TotalCounter = countTotal(volsAccessoiresSurVehicules2022);
    var volsAccessoiresSurVehicules2022TotalCounterNode = document.getElementById('volsAccessoiresSurVehicules2022TotalCounter');
    volsAccessoiresSurVehicules2022TotalCounterNode.innerHTML = Math.round(volsAccessoiresSurVehicules2022TotalCounter);
    setInterval(function() {
        volsAccessoiresSurVehicules2022TotalCounter += countIncreaseBySecond(volsAccessoiresSurVehicules2022);
        volsAccessoiresSurVehicules2022TotalCounterNode.innerHTML = Math.round(volsAccessoiresSurVehicules2022TotalCounter);
    }, refreshEveryOneSecond);


    // Destructions et dégradations volontaires
    var destructionDegradationsVolontaires2022 = 550600;
    var destructionDegradationsVolontaires2022TotalCounter = countTotal(destructionDegradationsVolontaires2022);
    var destructionDegradationsVolontaires2022TotalCounterNode = document.getElementById('destructionDegradationsVolontaires2022TotalCounter');
    destructionDegradationsVolontaires2022TotalCounterNode.innerHTML = Math.round(destructionDegradationsVolontaires2022TotalCounter);
    setInterval(function() {
        destructionDegradationsVolontaires2022TotalCounter += countIncreaseBySecond(destructionDegradationsVolontaires2022);
        destructionDegradationsVolontaires2022TotalCounterNode.innerHTML = Math.round(destructionDegradationsVolontaires2022TotalCounter);
    }, refreshEveryOneSecond);


    // Usage de stupéfiants
    var usageStupefiants2022 = 249800;
    var usageStupefiants2022TotalCounter = countTotal(usageStupefiants2022);
    var usageStupefiants2022TotalCounterNode = document.getElementById('usageStupefiants2022TotalCounter');
    usageStupefiants2022TotalCounterNode.innerHTML = Math.round(usageStupefiants2022TotalCounter);
    setInterval(function() {
        usageStupefiants2022TotalCounter += countIncreaseBySecond(usageStupefiants2022);
        usageStupefiants2022TotalCounterNode.innerHTML = Math.round(usageStupefiants2022TotalCounter);
    }, refreshEveryOneSecond);



   

// Trafic de stupéfiants
// Escroqueries
// Actes terroristes islamistes déjoués
// Actes terroristes islamistes
// Pourcentage en france d'interpellations sur l'Europe en lien avec des affaires de terrorisme jihadiste 
// Pourcentage en france d'interpellations sur l'Europe en lien avec des affaires de terrorisme d'E-D 
// Actes terroristes extrême droite
// Actes antisémites
// Actes homophobes, LGBTphobes (agression physique)
// Actes homophobes, LGBTphobes (repertoriés)
// Nb de fichés S pour radicalisation djihadiste
// Nombre d'OQTF prononcées (les chiffres sont de 2021)
// Nb d'OQTF exécutées (les chiffres sont de 2021)
// Nombre d'OQTF prononcées (depuis 2011)
// Nb d'OQTF exécutées (depuis 2011))
