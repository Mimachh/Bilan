import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


// COUNTERS PART


 

//Calculate for general counter 
    var now = Date.now();
    var januaryFirst = 1672527600000;
    var numberDayFromJanuaryFirst = (now - januaryFirst)/86400000;

    
// Migrant Part With General Counter
    var migrants = 0;
    var migrants_by_day = 1369.86;
    var generalMigrantsCounter = migrants + (numberDayFromJanuaryFirst * migrants_by_day);
    var generalMigrantsCounterNode = document.getElementById('generalMigrantsCounter');
    generalMigrantsCounterNode.innerHTML = generalMigrantsCounter;
    // document.body.appendChild(counterNode);
        // PROGRESS BAR
        const progressMigrantsTotal = document.querySelector('.progress-migrants-total-value');
        let finalValue = generalMigrantsCounter;
        let max = 500000;

        function changeWidthTotalMigrants() {
            progressMigrantsTotal.style.width = `${(finalValue / max) * 100}%`;
            progressMigrantsTotal.innerText = `${Math.round((finalValue / max) * 100)}%`;
        }

    setInterval(function() {
        generalMigrantsCounter += 0.01585;
        generalMigrantsCounterNode.innerHTML = generalMigrantsCounter;
    }, 1000,
    changeWidthTotalMigrants());


// Today Counter
    //Transform today date into d-m-y
    var dateObj = new Date();
    var month = dateObj.getUTCMonth() + 1; //months from 1-12
    var day = dateObj.getUTCDate();
    var year = dateObj.getUTCFullYear();
    // Get the result
    var todayDate = day + "-" + month + "-" + year;
    //Transform the date today at midnight into timestamp
    var myDate = todayDate;
    myDate = myDate.split("-");
    var midnightTimestamp = new Date( myDate[2], myDate[1] - 1, myDate[0]).getTime();
    //
    var timestampMidnightTodayFromJanuaryFirst = numberDayFromJanuaryFirst - (midnightTimestamp - januaryFirst)/86400000;
    var migrantsCounterFromToday = Math.round(migrants + (timestampMidnightTodayFromJanuaryFirst * migrants_by_day));
   
    // Counter for today only
    var migrantsCounterFromTodayNode = document.getElementById('migrantsCounterFromToday');
    migrantsCounterFromTodayNode.innerHTML = migrantsCounterFromToday;
    // document.body.appendChild(counterNode);

        // PROGRESS BAR
        const progressMigrantsToday = document.querySelector('.progress-migrants-today-value');
  
        function changeWidthTotalMigrantsToday() {
            progressMigrantsToday.style.width = `${(migrantsCounterFromToday / migrants_by_day) * 100}%`;
            progressMigrantsToday.innerText = `${Math.round((migrantsCounterFromToday / migrants_by_day) * 100)}%`;
        }
    
    setInterval(function() {
        migrantsCounterFromToday += 0.013;
        migrantsCounterFromTodayNode.innerHTML = Math.round(migrantsCounterFromToday);
    }, 1000,
    changeWidthTotalMigrantsToday());

    // 25 AVRIL 2027 Destitution 
    
    var nextElection = 1808604000000;
    var diffDays = Math.ceil(Math.abs(now - nextElection)/ (1000 * 60 * 60 * 24));
    var diffHours = Math.ceil(Math.abs(now - nextElection)/ (1000 * 60 * 60));
    var diffMinutes = Math.ceil(Math.abs(now - nextElection)/ (1000 * 60));
    var diffDaysNode = document.getElementById('destitution');
    diffDaysNode.innerHTML = diffDays;
   


    

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

    maxInput.addEventListener('keyup', function() {
        max = parseInt(maxInput.value, 10);
        changeWidth();
    });