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

export var nombreOQTFExecutes2021;
// Violence Part
// Coups et blessures
var delinquanceByDay = 843.01;
var delinquanceTotalCounter = (numberDayFromJanuaryFirst * delinquanceByDay);
var delinquanceTotalCounterNode = document.getElementById('delinquanceTotalCounter');
delinquanceTotalCounterNode.innerHTML = Math.round(delinquanceTotalCounter).toLocaleString("fr-FR");   
setInterval(function() {
    delinquanceTotalCounter += (delinquanceByDay / seconds);
    delinquanceTotalCounterNode.innerHTML = Math.round(delinquanceTotalCounter).toLocaleString("fr-FR");
}, refreshEveryOneSecond); 

// Viols 
var rapeByDay = 205;
var rapeTotalCounter = (numberDayFromJanuaryFirst * rapeByDay);
var rapeTotalCounterNode = document.getElementById('rapeTotalCounter');
rapeTotalCounterNode.innerHTML = Math.round(rapeTotalCounter).toLocaleString("fr-FR");
//Violences Counters
//Counter
setInterval(function() {
    rapeTotalCounter += (rapeByDay / seconds);
    rapeTotalCounterNode.innerHTML = Math.round(rapeTotalCounter).toLocaleString("fr-FR");
}, refreshEveryOneSecond);


// DEBUT DES NOUVEAUX CHIFFRES

//  DELITS
    // Cambriolages 
    var cambriolages2022 = 211800;
    var cambriolagesByDay = cambriolages2022 / dayYear2022;
    var cambriolageTotalCounter = (numberDayFromJanuaryFirst * cambriolagesByDay);
    var cambriolageTotalCounterNode = document.getElementById('cambriolageTotalCounter');
    cambriolageTotalCounterNode.innerHTML = Math.round(cambriolageTotalCounter).toLocaleString("fr-FR");
    setInterval(function() {
        cambriolageTotalCounter += (cambriolagesByDay / seconds);
        cambriolageTotalCounterNode.innerHTML = Math.round(cambriolageTotalCounter).toLocaleString("fr-FR");
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
    violencesSexuellesTotalCounterNode.innerHTML = Math.round(violencesSexuellesTotalCounter).toLocaleString("fr-FR");
    setInterval(function() {
        violencesSexuellesTotalCounter += (violencesSexuellesByDay / seconds);
        violencesSexuellesTotalCounterNode.innerHTML = Math.round(violencesSexuellesTotalCounter).toLocaleString("fr-FR");
    }, refreshEveryOneSecond);

    // Féminicides
    var feminicides2022 = 111;
    var feminicides2022ByDay = feminicides2022 / dayYear2022;
    var feminicides2022TotalCounter = (numberDayFromJanuaryFirst * feminicides2022ByDay);
    var feminicides2022TotalCounterNode = document.getElementById('feminicides2022TotalCounter');
    feminicides2022TotalCounterNode.innerHTML = Math.round(feminicides2022TotalCounter).toLocaleString("fr-FR");
    setInterval(function() {
        feminicides2022TotalCounter += (feminicides2022ByDay / seconds);
        feminicides2022TotalCounterNode.innerHTML = Math.round(feminicides2022TotalCounter).toLocaleString("fr-FR");
    }, refreshEveryOneSecond);

    // Coups et blessures volontaires (plus de 15 ans)
    var coupsEtBlessures2022 = 353600;
    var coupsEtBlessures2022ByDay = coupsEtBlessures2022 / dayYear2022;
    var coupsEtBlessures2022TotalCounter = (numberDayFromJanuaryFirst * coupsEtBlessures2022ByDay);
    var coupsEtBlessures2022TotalCounterNode = document.getElementById('coupsEtBlessures2022TotalCounter');
    coupsEtBlessures2022TotalCounterNode.innerHTML = Math.round(coupsEtBlessures2022TotalCounter).toLocaleString("fr-FR");
    setInterval(function() {
        coupsEtBlessures2022TotalCounter += (coupsEtBlessures2022ByDay / seconds);
        coupsEtBlessures2022TotalCounterNode.innerHTML = Math.round(coupsEtBlessures2022TotalCounter).toLocaleString("fr-FR");
    }, refreshEveryOneSecond);

    // Homicides
    var homicides2022 = 948;
    var homicides2022ByDay = homicides2022 / dayYear2022;
    var homicides2022TotalCounter = (numberDayFromJanuaryFirst * homicides2022ByDay);
    var homicides2022TotalCounterNode = document.getElementById('homicides2022TotalCounter');
    homicides2022TotalCounterNode.innerHTML = Math.round(homicides2022TotalCounter).toLocaleString("fr-FR");
    setInterval(function() {
        homicides2022TotalCounter += (homicides2022ByDay / seconds);
        homicides2022TotalCounterNode.innerHTML = Math.round(homicides2022TotalCounter).toLocaleString("fr-FR");
    }, refreshEveryOneSecond);

    // Vols avec armes (armes à feu, armes blanches ou par destination)
    var volsAvecArmes2022 = 8600;
    var volsAvecArmes2022ByDay = volsAvecArmes2022 / dayYear2022;
    var volsAvecArmes2022TotalCounter = (numberDayFromJanuaryFirst * volsAvecArmes2022ByDay);
    var volsAvecArmes2022TotalCounterNode = document.getElementById('volsAvecArmes2022TotalCounter');
    volsAvecArmes2022TotalCounterNode.innerHTML = Math.round(volsAvecArmes2022TotalCounter).toLocaleString("fr-FR");
    setInterval(function() {
        volsAvecArmes2022TotalCounter += (volsAvecArmes2022ByDay / seconds);
        volsAvecArmes2022TotalCounterNode.innerHTML = Math.round(volsAvecArmes2022TotalCounter).toLocaleString("fr-FR");
    }, refreshEveryOneSecond);

    // WITH FUNCTION


    // Vols violents sans arme
    var volsViolentsSansArme2022 = 59700;
    var volsViolentsSansArme2022TotalCounter = countTotal(volsViolentsSansArme2022);
    var volsViolentsSansArme2022TotalCounterNode = document.getElementById('volsViolentsSansArme2022TotalCounter');
    volsViolentsSansArme2022TotalCounterNode.innerHTML = Math.round(volsViolentsSansArme2022TotalCounter).toLocaleString("fr-FR");
    setInterval(function() {
        volsViolentsSansArme2022TotalCounter += countIncreaseBySecond(volsViolentsSansArme2022);
        volsViolentsSansArme2022TotalCounterNode.innerHTML = Math.round(volsViolentsSansArme2022TotalCounter).toLocaleString("fr-FR");
    }, refreshEveryOneSecond);

    // Vols sans violence contre des personnes
    var volsSansViolence2022 = 663700;
    var volsSansViolence2022TotalCounter = countTotal(volsSansViolence2022);
    var volsSansViolence2022TotalCounterNode = document.getElementById('volsSansViolence2022TotalCounter');
    volsSansViolence2022TotalCounterNode.innerHTML = Math.round(volsSansViolence2022TotalCounter).toLocaleString("fr-FR");
    setInterval(function() {
        volsSansViolence2022TotalCounter += countIncreaseBySecond(volsSansViolence2022);
        volsSansViolence2022TotalCounterNode.innerHTML = Math.round(volsSansViolence2022TotalCounter).toLocaleString("fr-FR");
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
    volsVehicules2022TotalCounterNode.innerHTML = Math.round(volsVehicules2022TotalCounter).toLocaleString("fr-FR");
    setInterval(function() {
        volsVehicules2022TotalCounter += countIncreaseBySecond(volsVehicules2022);
        volsVehicules2022TotalCounterNode.innerHTML = Math.round(volsVehicules2022TotalCounter).toLocaleString("fr-FR");
    }, refreshEveryOneSecond);


    // Vols dans les véhicules
    var volsDansVehicules2022 = 246400;
    var volsDansVehicules2022TotalCounter = countTotal(volsDansVehicules2022);
    var volsDansVehicules2022TotalCounterNode = document.getElementById('volsDansVehicules2022TotalCounter');
    volsDansVehicules2022TotalCounterNode.innerHTML = Math.round(volsDansVehicules2022TotalCounter).toLocaleString("fr-FR");
    setInterval(function() {
        volsDansVehicules2022TotalCounter += countIncreaseBySecond(volsDansVehicules2022);
        volsDansVehicules2022TotalCounterNode.innerHTML = Math.round(volsDansVehicules2022TotalCounter).toLocaleString("fr-FR");
    }, refreshEveryOneSecond);



    // Vols d'accessoires sur véhicules
    var volsAccessoiresSurVehicules2022 = 100700;
    var volsAccessoiresSurVehicules2022TotalCounter = countTotal(volsAccessoiresSurVehicules2022);
    var volsAccessoiresSurVehicules2022TotalCounterNode = document.getElementById('volsAccessoiresSurVehicules2022TotalCounter');
    volsAccessoiresSurVehicules2022TotalCounterNode.innerHTML = Math.round(volsAccessoiresSurVehicules2022TotalCounter).toLocaleString("fr-FR");
    setInterval(function() {
        volsAccessoiresSurVehicules2022TotalCounter += countIncreaseBySecond(volsAccessoiresSurVehicules2022);
        volsAccessoiresSurVehicules2022TotalCounterNode.innerHTML = Math.round(volsAccessoiresSurVehicules2022TotalCounter).toLocaleString("fr-FR");
    }, refreshEveryOneSecond);


    // Destructions et dégradations volontaires
    var destructionDegradationsVolontaires2022 = 550600;
    var destructionDegradationsVolontaires2022TotalCounter = countTotal(destructionDegradationsVolontaires2022);
    var destructionDegradationsVolontaires2022TotalCounterNode = document.getElementById('destructionDegradationsVolontaires2022TotalCounter');
    destructionDegradationsVolontaires2022TotalCounterNode.innerHTML = Math.round(destructionDegradationsVolontaires2022TotalCounter).toLocaleString("fr-FR");
    setInterval(function() {
        destructionDegradationsVolontaires2022TotalCounter += countIncreaseBySecond(destructionDegradationsVolontaires2022);
        destructionDegradationsVolontaires2022TotalCounterNode.innerHTML = Math.round(destructionDegradationsVolontaires2022TotalCounter).toLocaleString("fr-FR");
    }, refreshEveryOneSecond);


    // Usage de stupéfiants
    var usageStupefiants2022 = 249800;
    var usageStupefiants2022TotalCounter = countTotal(usageStupefiants2022);
    var usageStupefiants2022TotalCounterNode = document.getElementById('usageStupefiants2022TotalCounter');
    usageStupefiants2022TotalCounterNode.innerHTML = Math.round(usageStupefiants2022TotalCounter).toLocaleString("fr-FR");
    setInterval(function() {
        usageStupefiants2022TotalCounter += countIncreaseBySecond(usageStupefiants2022);
        usageStupefiants2022TotalCounterNode.innerHTML = Math.round(usageStupefiants2022TotalCounter).toLocaleString("fr-FR");
    }, refreshEveryOneSecond);
   

    // Trafic de stupéfiants
    var traficStupefiants2022 = 48300;
    var traficStupefiants2022TotalCounter = countTotal(traficStupefiants2022);
    var traficStupefiants2022TotalCounterNode = document.getElementById('traficStupefiants2022TotalCounter');
    traficStupefiants2022TotalCounterNode.innerHTML = Math.round(traficStupefiants2022TotalCounter).toLocaleString("fr-FR");
    setInterval(function() {
        traficStupefiants2022TotalCounter += countIncreaseBySecond(traficStupefiants2022);
        traficStupefiants2022TotalCounterNode.innerHTML = Math.round(traficStupefiants2022TotalCounter).toLocaleString("fr-FR");
    }, refreshEveryOneSecond);



    // Escroqueries
    var escroqueries2022 = 465000;
    var escroqueries2022TotalCounter = countTotal(escroqueries2022);
    var escroqueries2022TotalCounterNode = document.getElementById('escroqueries2022TotalCounter');
    escroqueries2022TotalCounterNode.innerHTML = Math.round(escroqueries2022TotalCounter).toLocaleString("fr-FR");
    setInterval(function() {
        escroqueries2022TotalCounter += countIncreaseBySecond(escroqueries2022);
        escroqueries2022TotalCounterNode.innerHTML = Math.round(escroqueries2022TotalCounter).toLocaleString("fr-FR");
    }, refreshEveryOneSecond);


    // Actes terroristes islamistes déjoués
    var actesTerroristesIslamistesDejoues2022 = 8;
    var actesTerroristesIslamistesDejoues2022TotalCounter = countTotal(actesTerroristesIslamistesDejoues2022);
    var actesTerroristesIslamistesDejoues2022TotalCounterNode = document.getElementById('actesTerroristesIslamistesDejoues2022TotalCounter');
    actesTerroristesIslamistesDejoues2022TotalCounterNode.innerHTML = Math.round(actesTerroristesIslamistesDejoues2022TotalCounter).toLocaleString("fr-FR");
    setInterval(function() {
        actesTerroristesIslamistesDejoues2022TotalCounter += countIncreaseBySecond(actesTerroristesIslamistesDejoues2022);
        actesTerroristesIslamistesDejoues2022TotalCounterNode.innerHTML = Math.round(actesTerroristesIslamistesDejoues2022TotalCounter).toLocaleString("fr-FR");
    }, refreshEveryOneSecond);


    // Actes terroristes islamistes
    var actesTerroristesIslamistes2022 = 2;
    var actesTerroristesIslamistes2022TotalCounter = countTotal(actesTerroristesIslamistes2022);
    var actesTerroristesIslamistes2022TotalCounterNode = document.getElementById('actesTerroristesIslamistes2022TotalCounter');
    actesTerroristesIslamistes2022TotalCounterNode.innerHTML = Math.round(actesTerroristesIslamistes2022TotalCounter).toLocaleString("fr-FR");
    setInterval(function() {
        actesTerroristesIslamistes2022TotalCounter += countIncreaseBySecond(actesTerroristesIslamistes2022);
        actesTerroristesIslamistes2022TotalCounterNode.innerHTML = Math.round(actesTerroristesIslamistes2022TotalCounter).toLocaleString("fr-FR");
    }, refreshEveryOneSecond);


// Pourcentage en france d'interpellations sur l'Europe en lien avec des affaires de terrorisme jihadiste 
// Pourcentage en france d'interpellations sur l'Europe en lien avec des affaires de terrorisme d'E-D 


    // Actes terroristes extrême droite
    var actesTerroristesED2022 = 1;
    var actesTerroristesED2022TotalCounter = countTotal(actesTerroristesED2022);
    var actesTerroristesED2022TotalCounterNode = document.getElementById('actesTerroristesED2022TotalCounter');
    actesTerroristesED2022TotalCounterNode.innerHTML = Math.round(actesTerroristesED2022TotalCounter).toLocaleString("fr-FR");
    setInterval(function() {
        actesTerroristesED2022TotalCounter += countIncreaseBySecond(actesTerroristesED2022);
        actesTerroristesED2022TotalCounterNode.innerHTML = Math.round(actesTerroristesED2022TotalCounter).toLocaleString("fr-FR");
    }, refreshEveryOneSecond);

    // Actes antisémites
    var actesAntisemites2022 = 436;
    var actesAntisemites2022TotalCounter = countTotal(actesAntisemites2022);
    var actesAntisemites2022TotalCounterNode = document.getElementById('actesAntisemites2022TotalCounter');
    actesAntisemites2022TotalCounterNode.innerHTML = Math.round(actesAntisemites2022TotalCounter).toLocaleString("fr-FR");
    setInterval(function() {
        actesAntisemites2022TotalCounter += countIncreaseBySecond(actesAntisemites2022);
        actesAntisemites2022TotalCounterNode.innerHTML = Math.round(actesAntisemites2022TotalCounter).toLocaleString("fr-FR");
    }, refreshEveryOneSecond);

    // Actes homophobes, LGBTphobes (agression physique)
    var agressionsPhysiquesHomophobes2022 = 144;
    var agressionsPhysiquesHomophobes2022TotalCounter = countTotal(agressionsPhysiquesHomophobes2022);
    var agressionsPhysiquesHomophobes2022TotalCounterNode = document.getElementById('agressionsPhysiquesHomophobes2022TotalCounter');
    agressionsPhysiquesHomophobes2022TotalCounterNode.innerHTML = Math.round(agressionsPhysiquesHomophobes2022TotalCounter).toLocaleString("fr-FR");
    setInterval(function() {
        agressionsPhysiquesHomophobes2022TotalCounter += countIncreaseBySecond(agressionsPhysiquesHomophobes2022);
        agressionsPhysiquesHomophobes2022TotalCounterNode.innerHTML = Math.round(agressionsPhysiquesHomophobes2022TotalCounter).toLocaleString("fr-FR");
    }, refreshEveryOneSecond);


    // Actes homophobes, LGBTphobes (repertoriés)
    var actesRepertoriesHomophobes2022 = 7000;
    var actesRepertoriesHomophobes2022TotalCounter = countTotal(actesRepertoriesHomophobes2022);
    var actesRepertoriesHomophobes2022TotalCounterNode = document.getElementById('actesRepertoriesHomophobes2022TotalCounter');
    actesRepertoriesHomophobes2022TotalCounterNode.innerHTML = Math.round(actesRepertoriesHomophobes2022TotalCounter).toLocaleString("fr-FR");
    setInterval(function() {
        actesRepertoriesHomophobes2022TotalCounter += countIncreaseBySecond(actesRepertoriesHomophobes2022);
        actesRepertoriesHomophobes2022TotalCounterNode.innerHTML = Math.round(actesRepertoriesHomophobes2022TotalCounter).toLocaleString("fr-FR");
    }, refreshEveryOneSecond);


    // Nb de fichés S pour radicalisation djihadiste
    var nombreFichesSDjihadistes2021 = 10500;
    var nombreFichesSDjihadistes2021TotalCounter = countTotal(nombreFichesSDjihadistes2021);
    var nombreFichesSDjihadistes2021TotalCounterNode = document.getElementById('nombreFichesSDjihadistes2021TotalCounter');
    nombreFichesSDjihadistes2021TotalCounterNode.innerHTML = Math.round(nombreFichesSDjihadistes2021TotalCounter).toLocaleString("fr-FR");
    setInterval(function() {
        nombreFichesSDjihadistes2021TotalCounter += countIncreaseBySecond(nombreFichesSDjihadistes2021);
        nombreFichesSDjihadistes2021TotalCounterNode.innerHTML = Math.round(nombreFichesSDjihadistes2021TotalCounter).toLocaleString("fr-FR");
    }, refreshEveryOneSecond);


    // Nombre d'OQTF prononcées (les chiffres sont de 2021)
    var nombreOQTFPrononces2021 = 61781;
    var nombreOQTFPrononces2021TotalCounter = countTotal(nombreOQTFPrononces2021);
    var nombreOQTFPrononces2021TotalCounterNode = document.getElementById('nombreOQTFPrononces2021TotalCounter');
    nombreOQTFPrononces2021TotalCounterNode.innerHTML = Math.round(nombreOQTFPrononces2021TotalCounter).toLocaleString("fr-FR");
    setInterval(function() {
        nombreOQTFPrononces2021TotalCounter += countIncreaseBySecond(nombreOQTFPrononces2021);
        nombreOQTFPrononces2021TotalCounterNode.innerHTML = Math.round(nombreOQTFPrononces2021TotalCounter).toLocaleString("fr-FR");
    }, refreshEveryOneSecond);

// Nb d'OQTF exécutées (les chiffres sont de 2021)
var nombreOQTFExecutes2021 = 3501;
var nombreOQTFExecutes2021TotalCounter = countTotal(nombreOQTFExecutes2021);
var nombreOQTFExecutes2021TotalCounterNode = document.getElementById('nombreOQTFExecutes2021TotalCounter');
nombreOQTFExecutes2021TotalCounterNode.innerHTML = Math.round(nombreOQTFExecutes2021TotalCounter).toLocaleString("fr-FR");
setInterval(function() {
    nombreOQTFExecutes2021TotalCounter += countIncreaseBySecond(nombreOQTFExecutes2021);
    nombreOQTFExecutes2021TotalCounterNode.innerHTML = Math.round(nombreOQTFExecutes2021TotalCounter).toLocaleString("fr-FR");
}, refreshEveryOneSecond);


    // Nombre d'OQTF prononcées (depuis 2011)
    var nombreOQTFPrononceDepuis2011 = 962526;
    var nombreOQTFPrononceDepuis2011TotalCounter = countTotal(nombreOQTFPrononceDepuis2011);
    var nombreOQTFPrononceDepuis2011TotalCounterNode = document.getElementById('nombreOQTFPrononceDepuis2011TotalCounter');
    nombreOQTFPrononceDepuis2011TotalCounterNode.innerHTML = Math.round(nombreOQTFPrononceDepuis2011TotalCounter).toLocaleString("fr-FR");
    setInterval(function() {
        nombreOQTFPrononceDepuis2011TotalCounter += countIncreaseBySecond(nombreOQTFPrononceDepuis2011);
        nombreOQTFPrononceDepuis2011TotalCounterNode.innerHTML = Math.round(nombreOQTFPrononceDepuis2011TotalCounter).toLocaleString("fr-FR");
    }, refreshEveryOneSecond);


    // Nb d'OQTF exécutées (depuis 2011))
    var nombreOQTFExecuteesDepuis2011 = 134275;
    var nombreOQTFExecuteesDepuis2011TotalCounter = countTotal(nombreOQTFExecuteesDepuis2011);
    var nombreOQTFExecuteesDepuis2011TotalCounterNode = document.getElementById('nombreOQTFExecuteesDepuis2011TotalCounter');
    nombreOQTFExecuteesDepuis2011TotalCounterNode.innerHTML = Math.round(nombreOQTFExecuteesDepuis2011TotalCounter).toLocaleString("fr-FR");
    setInterval(function() {
        nombreOQTFExecuteesDepuis2011TotalCounter += countIncreaseBySecond(nombreOQTFExecuteesDepuis2011);
        nombreOQTFExecuteesDepuis2011TotalCounterNode.innerHTML = Math.round(nombreOQTFExecuteesDepuis2011TotalCounter).toLocaleString("fr-FR");
    }, refreshEveryOneSecond);



// var o = 0;
// setInterval(function() {
//     o += 1   
//     for(let i = 0; i <= 20; i+=6) {
//         if (o === i)
//         {
//             console.log('le chiffre est de ' + o);
//             document.getElementById('message').innerHTML = 'le chiffre est de ' + o;
//             document.getElementById('div_message').classList.remove('hidden');
//             setTimeout(function() {
//                 document.getElementById('div_message').classList.add('hidden');
//             }, 3000);
//         }
//     }
// }, refreshEveryOneSecond);


