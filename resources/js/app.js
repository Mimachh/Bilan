import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();





 

//Calculate for general counter 
    var now = Date.now();
    var januaryFirst = 1672527600000;
    var dayYear = 365;
    var seconds = 86400;
    var numberDayFromJanuaryFirst = (now - januaryFirst)/86400000;

    
// Migrant Part With General Counter
    var migrants = 0;
    var migrants_by_day = 1370;
    var migrantsByDay = 1370;
    var allMigrantsCounter = (numberDayFromJanuaryFirst * migrantsByDay);
    var allMigrantsCounterNode = document.getElementById('allMigrantsCounterCounter');
    allMigrantsCounterNode.innerHTML = Math.round(allMigrantsCounter);

    setInterval(function() {
        allMigrantsCounter += migrantsByDay / seconds;
        allMigrantsCounterNode.innerHTML = Math.round(allMigrantsCounter);
    }, 1000);
    //var generalMigrantsCounter = migrants + (numberDayFromJanuaryFirst * migrants_by_day);
    //var generalMigrantsCounterNode = document.getElementById('generalMigrantsCounter');
    //generalMigrantsCounterNode.innerHTML = Math.round(generalMigrantsCounter);
    // document.body.appendChild(counterNode);
    
// Illegal Migrants
    var illegalMigrantsByDay = 274;
    var illegalGeneralMigrantsCounter = (numberDayFromJanuaryFirst * illegalMigrantsByDay);
    var illegalGeneralMigrantsCounterNode = document.getElementById('illegalGeneralMigrantsCounter');
    illegalGeneralMigrantsCounterNode.innerHTML = Math.round(illegalGeneralMigrantsCounter);

// Legal Migrants
    var legalMigrantsByDay = 1095.89;
    var legalGeneralMigrantsCounter = (numberDayFromJanuaryFirst * legalMigrantsByDay);
    var legalGeneralMigrantsCounterNode = document.getElementById('legalGeneralMigrantsCounter');
    legalGeneralMigrantsCounterNode.innerHTML = Math.round(legalGeneralMigrantsCounter);
        
// New calcule about total migrant from year
    var generalMigrantsCounter = legalGeneralMigrantsCounter + illegalGeneralMigrantsCounter;
    var generalMigrantsCounterNode = document.getElementById('generalMigrantsCounter');

// Violence Part
    var numberStart = 0;
    // Coups et blessures
    var delinquanceByDay = 843.01;
    var delinquanceTotalCounter = (numberDayFromJanuaryFirst * delinquanceByDay);
    var delinquanceTotalCounterNode = document.getElementById('delinquanceTotalCounter');
    delinquanceTotalCounterNode.innerHTML = Math.round(delinquanceTotalCounter);     
    // Viols 
    var rapeByDay = 205;
    var rapeTotalCounter = (numberDayFromJanuaryFirst * rapeByDay);
    var rapeTotalCounterNode = document.getElementById('rapeTotalCounter');
    rapeTotalCounterNode.innerHTML = Math.round(rapeTotalCounter);
        
    
// ECONOMY PART        
    // Deficit Cumul
    var deficitByDay = 452054794.5;
    var deficitTotalCounter = (numberDayFromJanuaryFirst * deficitByDay);
    var deficitTotalCounterNode = document.getElementById('deficitTotalCounter');
    deficitTotalCounterNode.innerHTML = new Intl.NumberFormat('de-DE', { style: 'currency', currency: 'EUR' }).format(deficitTotalCounter)
        
    // Dette
    var detteStart = 2956800000000;
    var detteTotalCounter = detteStart + (numberDayFromJanuaryFirst * deficitByDay);
    var detteTotalCounterNode = document.getElementById('detteTotalCounter');
    detteTotalCounterNode.innerHTML = new Intl.NumberFormat('de-DE', { style: 'currency', currency: 'EUR' }).format(detteTotalCounter)


// 25 AVRIL 2027 Destitution 
    var oldElection = 1650758400000;
    var nextElection = 1808604000000;
    var numberDayFromOldElection = (now - oldElection)/86400000;
    var diffDays = Math.ceil(Math.abs(now - nextElection)/ (1000 * 60 * 60 * 24));
    //var diffHours = Math.ceil(Math.abs(now - nextElection)/ (1000 * 60 * 60));
    //var diffMinutes = Math.ceil(Math.abs(now - nextElection)/ (1000 * 60));
    var diffDaysNode = document.getElementById('destitution');
    diffDaysNode.innerHTML = diffDays;
    var percentNextElection = (numberDayFromOldElection / diffDays) * 100;
    // PROGRESS BAR
        const progressElection = document.querySelector('.progress-election-value');
  
        function changeWidthProgressElection() {
            progressElection.style.width = `${percentNextElection}%`;
            progressElection.innerText = `${Math.round((percentNextElection) * 100) / 100}%`;
        }

      
        setInterval(function() {

        }, 1000, changeWidthProgressElection());


// GROUP ALL TODAY COUNTERS DONT WORKED REALLY
// Today Total Migrants Counter
    //Transform today date into d-m-y
    //var dateObj = new Date();
    //var month = dateObj.getUTCMonth() + 1; //months from 1-12
    //var day = dateObj.getUTCDate();
    //var year = dateObj.getUTCFullYear();
    // Get the result
    //var todayDate = day + "-" + month + "-" + year;
    //Transform the date today at midnight into timestamp
    //var myDate = todayDate;
    //myDate = myDate.split("-");
    //var midnightTimestamp = new Date( myDate[2], myDate[1] - 1, myDate[0]).getTime();
    //
    //var timestampMidnightTodayFromJanuaryFirst = numberDayFromJanuaryFirst - (midnightTimestamp - januaryFirst)/86400000;
    //var migrantsCounterFromToday = migrants + (timestampMidnightTodayFromJanuaryFirst * migrants_by_day);
   
    // Counter for today only
    //var migrantsCounterFromTodayNode = document.getElementById('migrantsCounterFromToday');
    //migrantsCounterFromTodayNode.innerHTML = Math.round(migrantsCounterFromToday);

//Illegal Migrants Today Counter
        //var illegalMigrantsCounterFromToday = timestampMidnightTodayFromJanuaryFirst * illegalMigrantsByDay;
        //var illegalMigrantsCounterFromTodayNode = document.getElementById('illegalMigrantsCounterFromToday');
        //illegalMigrantsCounterFromTodayNode.innerHTML = Math.round(illegalMigrantsCounterFromToday);

//Today Legal Counter
        //var legalMigrantsCounterFromToday = migrants + (timestampMidnightTodayFromJanuaryFirst * legalMigrantsByDay);
        //var legalMigrantsCounterFromTodayNode = document.getElementById('legalMigrantsCounterFromToday');
        //legalMigrantsCounterFromTodayNode.innerHTML = Math.round(legalMigrantsCounterFromToday);
//Today Violence Counter
        //var delinquanceCounterFromToday = numberStart + (timestampMidnightTodayFromJanuaryFirst * delinquanceByDay);
        //var delinquanceCounterFromTodayNode = document.getElementById('delinquanceCounterFromToday');
        //delinquanceCounterFromTodayNode.innerHTML = Math.round(delinquanceCounterFromToday);
//Today Rape Counter
        //var rapeCounterFromToday = numberStart + (timestampMidnightTodayFromJanuaryFirst * rapeByDay);
        //var rapeCounterFromTodayNode = document.getElementById('rapeCounterFromToday');
        //rapeCounterFromTodayNode.innerHTML = Math.round(rapeCounterFromToday);
//Today Deficit Counter
        //var deficitCounterFromToday = numberStart + (timestampMidnightTodayFromJanuaryFirst * deficitByDay);
        //var deficitCounterFromTodayNode = document.getElementById('deficitCounterFromToday');
        //deficitCounterFromTodayNode.innerHTML = new Intl.NumberFormat('de-DE', { style: 'currency', currency: 'EUR' }).format(deficitCounterFromToday);


// GROUP ALL COUNTERS

    setInterval(function() {
        //IllegalGeneralMigrants
        illegalGeneralMigrantsCounter += (illegalGeneralMigrantsCounter / 3600);
        illegalGeneralMigrantsCounterNode.innerHTML = Math.round(illegalGeneralMigrantsCounter);
    }, 60000);
    setInterval(function() {
        //LegalGeneralMigrants
        legalGeneralMigrantsCounter += (legalMigrantsByDay / seconds);
        legalGeneralMigrantsCounterNode.innerHTML = Math.round(legalGeneralMigrantsCounter);
        //TodayMigrants
        //migrantsCounterFromToday += (migrantsCounterFromToday / seconds);
        //migrantsCounterFromTodayNode.innerHTML = Math.round(migrantsCounterFromToday);
        //IllegalTodayMigrants
        //illegalMigrantsCounterFromToday += (illegalMigrantsCounterFromToday / seconds);
        //illegalMigrantsCounterFromTodayNode.innerHTML = illegalMigrantsCounterFromToday;
        //LegalTodayMigrants
        //legalMigrantsCounterFromToday += (legalMigrantsCounterFromToday / seconds);
        //legalMigrantsCounterFromTodayNode.innerHTML = legalMigrantsCounterFromToday;
    }, 1000,
   // changeWidthTotalMigrantsToday()
   );


//Violences Counters
    //Counter
    setInterval(function() {
        //Coups et Blessures general
        delinquanceTotalCounter += (delinquanceByDay / seconds);
        delinquanceTotalCounterNode.innerHTML = Math.round(delinquanceTotalCounter);
        // Coups et blessures today
        //delinquanceCounterFromToday += (delinquanceCounterFromToday / seconds);
        //delinquanceCounterFromTodayNode.innerHTML = delinquanceCounterFromToday;
        //Rape general
        rapeTotalCounter += (rapeByDay / seconds);
        rapeTotalCounterNode.innerHTML = Math.round(rapeTotalCounter);
        //Rape today
        //rapeCounterFromToday += (rapeCounterFromToday / seconds);
        //rapeCounterFromTodayNode.innerHTML = rapeCounterFromToday;
    }, 1000);
    
// Economy counters
    //
    setInterval(function() {
        //Deficit general
        deficitTotalCounter += (deficitByDay / (seconds * 20));
        deficitTotalCounterNode.innerHTML = new Intl.NumberFormat('de-DE', { style: 'currency', currency: 'EUR' }).format(deficitTotalCounter);
        //Deficit today
        //deficitCounterFromToday += (deficitCounterFromToday / (seconds * 20));
        //deficitCounterFromTodayNode.innerHTML = new Intl.NumberFormat('de-DE', { style: 'currency', currency: 'EUR' }).format(deficitCounterFromToday);
        //Dette total
        detteTotalCounter += (deficitByDay / (seconds * 20));
        detteTotalCounterNode.innerHTML = new Intl.NumberFormat('de-DE', { style: 'currency', currency: 'EUR' }).format(detteTotalCounter);
    }, (1000 / 20));


    const fb = document.getElementById('fb');
    fb.addEventListener('click', () => {
        const navUrl = 'https://www.facebook.com/sharer/sharer.php?u=http://127.0.0.1:8000/';
        window.open(navUrl , '_blank');
    });

    const tweet = document.getElementById('twitter');
    tweet.addEventListener('click', () => {
        const navUrl =
        'https://twitter.com/intent/tweet?text=' +
        'Va visiter ce lien http://127.0.0.1:8000/, actuellement il y a '+Math.round(generalMigrantsCounter)+' migrants en France en 2023';
        window.open(navUrl, '_blank');
    });


    const telegram = document.getElementById('telegram');
    telegram.addEventListener('click', () => {
        const navUrl = 'https://t.me/share/url?url={http://127.0.0.1:8000/}&text={Nombre actuel de migrants en France en 2023 : '+Math.round(generalMigrantsCounter)+'}';
        window.open(navUrl, '_blank');
    });

    const whatsapp = document.getElementById('whatsapp');
    whatsapp.addEventListener('click', () => {
        const navUrl = 'whatsapp://send?text=Regarde l\'état de la France,'+Math.round(generalMigrantsCounter)+' migrants en France depuis le 1er janvier. D\'autre chiffres alarmants sur ce lien http://www.website.com';
        window.open(navUrl, '_blank');
    });

   

 
    
    // TEST PROGRESS BAR
    //const progresss = document.querySelector('.progress-value');
    //const inputs = document.querySelector('.input');
    //const maxInputs = document.querySelector('.maxInput');
    //let finalValues = generalMigrantsCounter;
    //let maxs = 500000;

    //function changeWidth() {
    //    progress.style.width = `${(finalValue / max) * 100}%`;
    //    progress.innerText = `${Math.round((finalValue / max) * 100)}%`;
    //}

    //input.addEventListener('keyup', function() {
    //    finalValue = parseInt(input.value, 10);
    //    changeWidth();
    //});

    //maxInput.addEventListener('keyup', function() {
      //  max = parseInt(maxInput.value, 10);
       // changeWidth();
    // });